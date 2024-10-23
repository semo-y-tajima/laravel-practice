<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('adminlte');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
