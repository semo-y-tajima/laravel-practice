<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('adminlte');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
