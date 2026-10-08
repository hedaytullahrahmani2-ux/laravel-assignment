<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store()
    {
        // فعلاً خالی است
    }

    public function show(string $student)
    {
        return view('students.show');
    }

    public function edit(string $student)
    {
        return view('students.edit');
    }

    public function update(string $student)
    {
        // فعلاً خالی است
    }

    public function destroy(string $student)
    {
        // فعلاً خالی است
    }
}