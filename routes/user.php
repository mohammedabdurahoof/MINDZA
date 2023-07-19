<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Models\Courses;
use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        $course = Courses::all();
        return view('windows.home.index',['course' =>$course]);
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

    Route::get('/shop', function () {
        return view('windows.shop.index', ['name' => 'Shop']);
    });

    Route::get('/shop/{id}', function () {
        return view('windows.shop.single', ['name' => 'Shop']);
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
  

