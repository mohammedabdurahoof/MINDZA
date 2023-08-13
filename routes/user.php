<?php

use App\Models\Courses;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Shop;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $course = Courses::join('teachers', 'courses.teacherId', 'teachers.id')->select('courses.image as courseImage', 'teachers.image as teacherImage', 'courses.id', 'teacherId', 'courseName', 'price', 'name')->get();
    $teachers = Teacher::all();
    $products = Shop::latest()->limit(4)->get();
    $events = Event::latest()->limit(3)->get();
    return view('windows.home.index', ['course' => $course, 'teachers' => $teachers, 'products' => $products, 'events' => $events]);
    // return view('welcome');
});

Route::get('/contact', function () {
    return view('windows.contact.index', ['name' => 'Contact']);
});

Route::get('/about', function () {
    $teachers = Teacher::all();
    return view('windows.about.index', ['name' => 'About Us', 'teachers' => $teachers]);
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
    $courses = Courses::join('teachers', 'courses.teacherId', 'teachers.id')->select('courses.image as courseImage', 'teachers.image as teacherImage', 'courses.id', 'courseName', 'price', 'name')->get();
    return view('windows.courses.index', ['name' => 'Courses', 'courses' => $courses]);
});

Route::get('/courses/{id}', function ($id) {
    $course = Courses::where('courses.id', $id)->join('teachers', 'courses.teacherId', 'teachers.id')->select('courses.image as courseImage', 'teachers.image as teacherImage', 'courses.id', 'teacherId', 'courseName', 'price', 'position', 'description', 'name', 'category', 'duration', 'courseSummery', 'requirements')->first();
    $newCourses = Courses::limit(4)->where('id', '!=', $id)->get();
    $oldCourses = Courses::latest('courses.created_at')->where('courses.id', '!=', $id)->limit(3)->join('teachers', 'courses.teacherId', 'teachers.id')->select('courses.image as courseImage', 'teachers.image as teacherImage', 'courses.id', 'teacherId', 'courseName', 'price', 'name')->get();
    return view('windows.courses.single', ['name' => 'Courses', 'course' => $course, 'newCourses' => $newCourses, 'oldCourses' => $oldCourses]);
});

Route::get('/events', function () {
    $events = Event::all();
    return view('windows.events.index', ['name' => 'Events', 'events' => $events]);
});

Route::get('/events/{id}', function ($id) {
    $event = Event::where('id', $id)->first();
    return view('windows.events.single', ['name' => 'Events', 'event' => $event]);
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