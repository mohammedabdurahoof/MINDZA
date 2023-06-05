<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('windows.home.index');
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
