<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('dashboard.student.index', [
            'title' => 'Student Page',
        ]);
    }

    public function show($id) {
        return view('dashboard.student.detail', [
            'title' => 'Detail Student Page',
        ]);
    }

    public function create() {
        return view('dashboard.student.create', [
            'title' => 'Create Student Page',
        ]);
    }

    public function edit($id) {
        return view('dashboard.student.edit', [
            'title' => 'Edit Student Page',
        ]);
    }
}
