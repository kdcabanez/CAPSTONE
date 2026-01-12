<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});


Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/registration', function () {
    return view('pages.registation');
});

Route::get('applications', function () {
    return view('pages.applications');
});

// Route::controller(ApplicationController::class)->group(function () {
//     Route::post('/create-application', 'createApplication');
// });
