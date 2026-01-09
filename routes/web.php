<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});


Route::get('/profile', function () {
    return view('pages.profile');
});
