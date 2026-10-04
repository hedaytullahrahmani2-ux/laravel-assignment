<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/system', function () {
    return view('system');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/auth/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/admin/users', function () {
    return view('admin-users');
});

Route::get('/internships', function () {
    return view('internships');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});