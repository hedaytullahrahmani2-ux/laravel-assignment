<?php

namespace App\Http\Controllers;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store()
    {
        // فعلاً خالی است؛ ذخیره اطلاعات در درس بعدی
    }

    public function show(string $report)
    {
        return view('reports.show');
    }

    public function edit(string $report)
    {
        return view('reports.edit');
    }

    public function update(string $report)
    {
        // فعلاً خالی است؛ به‌روزرسانی در درس بعدی
    }

    public function destroy(string $report)
    {
        // فعلاً خالی است؛ حذف اطلاعات در درس بعدی
    }
}