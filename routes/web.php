<?php

use Illuminate\Support\Facades\Route;

// Route mặc định của Laravel
Route::get('/', function () {
    return view('welcome');
});

// Route mới để hiển thị "Hello World"
Route::get('/greeting', function () {
    return 'Hello World';
});
