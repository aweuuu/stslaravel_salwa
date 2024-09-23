<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projek', function () {
    return view('projek');
});

Route::get('/kontak', function () {
    return view('kontak');
});
