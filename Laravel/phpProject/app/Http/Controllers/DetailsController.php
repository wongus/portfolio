<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Grade;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function show($id)
    {
        $detail = Detail::where('id', $id)->get();
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.show', ['details' => $detail, 'grade' => $grade]);
    }

    public function create() {
        return view('dashboard.create');
    }

    public function saveDetailToDB($detail){
        $detail->course = request('course');
        $detail->EC = request('ec');
        $detail->save();
    }

    public function store() {
        $detail = new Detail;
        $this->saveDetailToDB($detail);

        return redirect('/dashboard');
    }

    public function edit($id) {
        $detail = Detail::where('id', $id)->firstOrFail();
        return view('dashboard.edit', ['detail' => $detail]);
        $this->passCheck();
    }

    public function delete($id) {
        $grade = Detail::where('id', $id)->firstOrFail();
        $grade->delete();
        return redirect('/dashboard');
    }

    public function update($id) {
        $detail = Detail::where('id', $id)->firstOrFail();
        $this->saveDetailToDB($detail);

        return redirect('/dashboard' . $detail->id);
    }

    public function passCheck() {
        if($this->score >= 5.5) {
            $this->passed = true;
            $this->save();
        }
    }

    public function grade() {
        return $this->belongsTo('app\Grade');
    }
}
