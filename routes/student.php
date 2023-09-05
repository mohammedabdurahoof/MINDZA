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

Route::middleware('guest')->group(function () {
    Route::resource('student', studentController::class);
});

Route::middleware('auth')->prefix('students')->group(function () {
    Route::resource('students', studentController::class);
    Route::get('/dashboard', [studentController::class,'dashboard'])->name('students.dashboard');
    Route::put('/changePassword', [studentController::class,'changePassword'])->name('students.changePassword');
    Route::put('/addNewCourse', [studentController::class,'addNewCourse'])->name('students.addNewCourse');
    
});
