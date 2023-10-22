<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/home', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
