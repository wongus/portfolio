<?php

namespace App\Http\Controllers;

use DB;
use App\Grade;
use Illuminate\Support\Str as str;

use Illuminate\Http\Request;

class GradesController extends Controller
{

    public function index()
    {
        $grades = Grade::get();

        return view('dashboard.index', ['grades' => $grades]);
    }

    public function show($id)
    {
        $grade = Grade::where('slug', $id)->get();
        return view('dashboard.show', ['grade' => $grade]);
    }

    public function create() {
        return view('dashboard.create');
    }

    public function saveGradeToDB($grade){
        $grade->course = request('course');
        $grade->EC = request('ec');
        $grade->save();
    }

    public function store() {
        $grade = new Grade;
        $this->saveGradeToDB($grade);

        return redirect('/dashboard');

    }

    public function edit($id) {
        $grade = Grade::where('id', $id)->firstOrFail();
        return view('dashboard.edit', ['grade' => $grade]);
    }

    public function delete($id) {
        $grade = Grade::where('id', $id)->firstOrFail();
        $grade->delete();
        return redirect('/dashboard');
    }

    public function update($id) {
        $grade = Grade::where('id', $id)->firstOrFail();
        $this->saveGradeToDB($grade);

        return redirect('/dashboard' . $grade->id);
    }
}
