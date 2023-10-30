<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Route::resource('teacher', TeacherController::class);
});

Route::middleware('auth')->prefix('teacher')->group(function () {
    Route::resource('teacher', TeacherController::class);
    Route::get('/dashboard', [TeacherController::class,'dashboard'])->name('teacher.dashboard');
    Route::put('/changePassword', [TeacherController::class,'changePassword'])->name('teacher.changePassword');
    Route::post('/addLecture', [TeacherController::class,'addLecture'])->name('teacher.addLecture');
    Route::get('/lecture/{id}', [TeacherController::class,'getLecture'])->name('teacher.lecture');
    
});
