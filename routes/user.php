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
use App\Models\Gallery;
use App\Models\Shop;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $course = Courses::all();
    return view('windows.home.index', ['course' => $course]);
    return view('welcome');
});

Route::get('/contact', function () {
    return view('windows.contact.index', ['name' => 'Contact']);
});

Route::get('/about', function () {
    return view('windows.about.index', ['name' => 'About Us']);
});

Route::get('/teachers', function () {
    $teachers = Teacher::all();
    return view('windows.teachers.index', ['name' => 'Teachers', 'teachers' => $teachers]);
});

Route::get('/teachers/{id}', function ($id) {
    $teacher = Teacher::where('id', $id)->first();
    $courses = Courses::where('teacherId', $id)->get();
    return view('windows.teachers.single', ['name' => 'Teachers', 'teacher' => $teacher, 'courses' => $courses]);
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
    $products = Shop::all();
    return view('windows.shop.index', ['name' => 'Shop', 'products' => $products]);
});

Route::get('/shop/{id}', function ($id) {
    $product = Shop::where('id', $id)->first();
    $products = Shop::limit(4)->get();
    return view('windows.shop.single', ['name' => 'Shop', 'product' => $product, 'products' => $products]);
});

Route::get('/gallery', function () {
    $gallery = Gallery::all()->reverse();
    return view('windows.gallery.index', ['name' => 'Gallery', 'gallery' => $gallery]);
});

Route::get('/policy', function () {
    return view('windows.policy.index', ['name' => 'Privacy Policy']);
});

Route::get('/faq', function () {
    return view('windows.faq.index', ['name' => 'FAQ']);
});
