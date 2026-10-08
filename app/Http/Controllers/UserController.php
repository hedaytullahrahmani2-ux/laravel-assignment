<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        // فعلاً خالی است؛ ذخیره اطلاعات در درس بعدی
    }

    public function show(string $user)
    {
        return view('users.show');
    }

    public function edit(string $user)
    {
        return view('users.edit');
    }

    public function update(string $user)
    {
        // فعلاً خالی است؛ به‌روزرسانی در درس بعدی
    }

    public function destroy(string $user)
    {
        // فعلاً خالی است؛ حذف اطلاعات در درس بعدی
    }
}