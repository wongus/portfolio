<?php

namespace App\Http\Controllers;

use DB;
use App\Grade;
use Illuminate\Http\Request;

class GradesController
{

    public function index()
    {
        $grades = Grade::get();
        return view('dashboard.index', ['grades' => $grades]);
    }

    public function show($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.show', ['grade' => $grade]);
    }

    public function create()
    {
        return view('dashboard.create');
    }

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

    public function edit($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.edit', ['grade' => $grade]);
    }

    public function delete($id)
    {
        $grade = Grade::where('id', $id)->firstOrFail();
        $grade->delete();
        return redirect('/dashboard');
    }

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

    public function saveGradeToDB($grade)
    {
        $grade->course = request('course');
        $grade->EC = request('EC');
        $grade->save();
    }
}
