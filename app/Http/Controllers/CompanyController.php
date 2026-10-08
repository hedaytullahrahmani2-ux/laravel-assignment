<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies.index');
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store()
    {
        // فعلاً خالی است؛ ذخیره اطلاعات در درس بعدی
    }

    public function show(string $company)
    {
        return view('companies.show');
    }

    public function edit(string $company)
    {
        return view('companies.edit');
    }

    public function update(string $company)
    {
        // فعلاً خالی است؛ به‌روزرسانی در درس بعدی
    }

    public function destroy(string $company)
    {
        // فعلاً خالی است؛ حذف اطلاعات در درس بعدی
    }
}