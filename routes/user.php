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


    Route::get('/', function () {
        return view('windows.home.index');
        return view('welcome');
    });

    Route::get('/contact', function () {
        return view('windows.contact.index', ['name' => 'Contact']);
    });

    Route::get('/about', function () {
        return view('windows.about.index', ['name' => 'About Us']);
    });

    Route::get('/teachers', function () {
        return view('windows.teachers.index', ['name' => 'Teachers']);
    });

    Route::get('/teachers/{id}', function () {
        return view('windows.teachers.single', ['name' => 'Teachers']);
    });

    Route::get('/courses', function () {
        return view('windows.courses.index', ['name' => 'Courses']);
    });

    Route::get('/courses/{id}', function () {
        return view('windows.courses.single', ['name' => 'Courses']);
    });

    Route::get('/events', function () {
        return view('windows.events.index', ['name' => 'Events']);
    });

    Route::get('/events/{id}', function () {
        return view('windows.events.single', ['name' => 'Events']);
    });

    Route::get('/gallery', function () {
        return view('windows.gallery.index', ['name' => 'Gallery']);
    });

    Route::get('/policy', function () {
        return view('windows.policy.index', ['name' => 'Privacy Policy']);
    });

    Route::get('/faq', function () {
        return view('windows.faq.index', ['name' => 'FAQ']);
    });
    // Route::get('/login', function () {
    //     return view('windows.login.index', ['name' => 'Login']);
    // });

    // Route::get('/register', function () {
    //     return view('windows.register.index', ['name' => 'Register']);
    // });

