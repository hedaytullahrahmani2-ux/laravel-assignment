<?php

namespace App\Http\Controllers;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('applications.index');
    }

    public function create()
    {
        return view('applications.create');
    }

    public function store()
    {
        // فعلاً خالی است؛ ذخیره اطلاعات در درس بعدی
    }

    public function show(string $application)
    {
        return view('applications.show');
    }

    public function edit(string $application)
    {
        return view('applications.edit');
    }

    public function update(string $application)
    {
        // فعلاً خالی است؛ به‌روزرسانی در درس بعدی
    }

    public function destroy(string $application)
    {
        // فعلاً خالی است؛ حذف اطلاعات در درس بعدی
    }
}