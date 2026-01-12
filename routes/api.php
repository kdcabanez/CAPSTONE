<?php

use App\Http\Controllers\ApplicationController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ApplicationController::class)->group(function () {
    Route::post('/create-application', 'createApplication');
    Route::get('/application-list/pending', 'displayApplicationWithStatusPending');
    Route::get('/application-list/approved', 'displayApplicationWithStatusApproved');
});
