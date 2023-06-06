<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.windows.dashboard.index');
    })->name('dashboard');

    Route::get('admin/courses', function () {
        return view('admin.windows.courses.index');
    })->name('dashboard');
    Route::get('admin/add-course', function () {
        return view('admin.windows.courses.add-course');
    });
});
