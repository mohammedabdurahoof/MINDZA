<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('admin.windows.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.windows.courses.add-course');
    }

    public function store(Request $request)
    {
        $request->validate([
            'courseName' => 'required',
            'category' => 'required',
            'duration' => 'required',
            'courseSummery' => 'required',
            'requirements' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd($request->post());
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/course'), $imageName);
        Courses::create($request->post() + ['image' => $imageName]);
        return redirect()->route('courses.index')->with('success', 'Course has been added successfully.');
    }
    public function show(Courses $course)
    {
        return view('products.show', compact('course'));
    }

    public function edit(Courses $course)
    {
        return view('admin.windows.courses.edit-course', compact('course'));
    }
    public function update(Request $request, Courses $course)
    {
        $request->validate([
            'courseName' => 'required',
            'category' => 'required',
            'duration' => 'required',
            'courseSummery' => 'required',
            'requirements' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd(request()->image);
        $imageName = $course->image;
        if (request()->image) {
            # code...
            request()->image->move(public_path('images/course'), $imageName);
        }
        $course->update($request->all() + ['image' => $imageName]);
        return redirect()->route('courses.index')
            ->with('success', 'Course updated successfully');
    }
    public function destroy(Courses $Course)
    {
        $Course->delete();
        return redirect()->route('courses.index')
            ->with('success', 'Course deleted successfully');
    }

}
