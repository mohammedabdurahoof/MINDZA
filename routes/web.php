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

Route::get('/dashboard', function() {
    // dd(auth()->user()->type);
    if (auth()->user()->type == 'super-admin') {
        return redirect('/admin/dashboard');
    } elseif (auth()->user()->type == 'teacher') {
        return redirect('/teacher/dashboard');
    } else {
        return redirect('/students/dashboard');
    }
})->middleware('auth');

require __DIR__ . '/auth.php';
require __DIR__ . '/user.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/teacher.php';
require __DIR__ . '/student.php';
require __DIR__ . '/lecture.php';

