<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function AddCourse(Request $request)
    {
        $request->validate([
            'courseName' => 'required',
            'category' => 'required',
            'duaration' => 'required',
            'courseSummery' => 'required',
            'requrements' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/course'), $imageName);
        // dd($request->post());
        Courses::create($request->post() + ['image' => $imageName]);

        return redirect()->route('course')->with('success', 'Course has been added successfully.');
    }
}
