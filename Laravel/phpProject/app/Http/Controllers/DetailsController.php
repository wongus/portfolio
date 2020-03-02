<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Grade;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function show($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.show', ['details' => $grade->details, 'grade' => $grade]);
    }

    public function create($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.detail.create', ['grade' => $grade]);
    }

    public function saveDetailToDB($detail)
    {
        $detail->test = request('test');

        $detail->weighting = request('weighting');
        $detail->score = request('score');

        $this->passCheck($detail);

        $detail->save();
    }

    public function store($id)
    {
        $detail = new Detail;
        $detail->course_id = $id;
        $this->saveDetailToDB($detail);
        return redirect('/dashboard/course/'.$id);
    }

    public function edit($id)
    {
        $detail = Detail::where('id', $id)->firstOrFail();
        return view('dashboard.detail.edit', ['detail' => $detail]);
    }

    public function delete($id)
    {
        $detail = Detail::where('id', $id)->firstOrFail();
        $detail->delete();
    }

    public function update($id)
    {
        $detail = Detail::where('id', $id)->firstOrFail();
        $grade = $detail->grade;
        $this->saveDetailToDB($detail);
        return redirect('/dashboard/course/' . $grade->id);
    }

    public function passCheck($detail)
    {
        if ($detail->score >= 5.5) {
            $detail->passed = 1;
        }
    }
}
