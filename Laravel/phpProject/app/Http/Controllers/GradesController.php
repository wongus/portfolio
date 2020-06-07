<?php

namespace App\Http\Controllers;

use DB;
use App\Grade;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    /**
     * GradesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $grades = Grade::get();
        return view('dashboard.index', ['grades' => $grades]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.show', ['grade' => $grade]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'course' => 'required|unique:grades',
            'EC' => 'numeric|required',
        ]);

        $grade = new Grade;
        $this->saveGradeToDB($grade);

        return redirect('/dashboard');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.edit', ['grade' => $grade]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        $grade->delete();
        return redirect('/dashboard');
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $validateData = $request->validate([
            'course' => 'required|unique:grades',
            'EC' => 'numeric|required',
        ]);

        $grade = Grade::where('id', $id)->firstOrFail();
        $this->saveGradeToDB($grade);
        return redirect('/dashboard/' . $grade->id);
    }

    /**
     * @param $grade
     */
    public function saveGradeToDB($grade)
    {
        $grade->course = request('course');
        $grade->EC = request('EC');
        $grade->save();
    }
}
