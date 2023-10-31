<?php

use App\Http\Controllers\LectureController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
});

Route::middleware('auth')->group(function () {
    Route::resource('lecture', LectureController::class);
});
