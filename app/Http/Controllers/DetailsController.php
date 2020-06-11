<?php

namespace App\Http\Controllers;

use DB;
use App\Detail;
use App\Grade;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:create-edit-content', '2fa'], ['only' => ['create', 'edit']]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.show', ['details' => $grade->details, 'grade' => $grade]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.detail.create', ['grade' => $grade]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store($id, Request $request)
    {
        $validateData = $request->validate([
            'test' => 'required',
            'weighting' => 'numeric|required',
            'score' => 'numeric|required',
        ]);

        $detail = new Detail;
        $detail->course_id = $id;
        $this->saveDetailToDB($detail);
        return redirect('/dashboard/course/'.$id);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $detail = Detail::where('id', $id)->firstOrFail();
        return view('dashboard.detail.edit', ['detail' => $detail]);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $detail = Detail::where('id', $id)->firstOrFail();
        $detail->delete();
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $validateData = $request->validate([
            'test' => 'required',
            'weighting' => 'numeric|required',
            'score' => 'numeric|required',
        ]);

        $detail = Detail::where('id', $id)->firstOrFail();
        $grade = $detail->grade;
        $this->saveDetailToDB($detail);
        return redirect('/dashboard/course/' . $grade->id);
    }

    /**
     * @param $detail
     */
    public function passCheck($detail)
    {
        if ($detail->score >= 5.5) {
            $detail->passed = 1;
        }
    }

    /**
     * @param $detail
     */
    public function saveDetailToDB($detail)
    {
        $detail->test = request('test');

        $detail->weighting = request('weighting');
        $detail->score = request('score');

        $this->passCheck($detail);

        $detail->save();
    }
}
