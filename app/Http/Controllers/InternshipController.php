<?php

namespace App\Http\Controllers;

class InternshipController extends Controller
{
    public function index()
    {
        return view('internships.index');
    }

    public function create()
    {
        return view('internships.create');
    }

    public function store()
    {
        // فعلاً خالی است؛ ذخیره اطلاعات در درس بعدی
    }

    public function show(string $internship)
    {
        return view('internships.show');
    }

    public function edit(string $internship)
    {
        return view('internships.edit');
    }

    public function update(string $internship)
    {
        // فعلاً خالی است؛ به‌روزرسانی در درس بعدی
    }

    public function destroy(string $internship)
    {
        // فعلاً خالی است؛ حذف اطلاعات در درس بعدی
    }
}