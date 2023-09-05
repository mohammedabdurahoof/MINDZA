<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('admin.windows.courses.index', compact('courses'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('admin.windows.courses.add-course',compact('teachers'));
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
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/course'), $imageName);
        Courses::create($request->post() + ['image' => $imageName]);
        return redirect()->route('courses.index')->with('success', 'Course has been added successfully.');
    }

    public function show(Courses $course)
    {
        $students = student::whereJsonContains('courses',  ['id' => strval($course->id)])->get();
        return view('admin.windows.courses.single', compact('course','students'));
    }

    public function confrimCouse(Request $request)
    {
        $request->validate([
            'studentId' => 'required',
            'courseId' => 'required',
        ]);
        $student = Student::where("id",$request->studentId)->first();
        $courses = array_map(function ($value) use($request){
            return $value['id'] == $request->courseId ? ['id'=>$request->courseId, 'status'=>'confirmed'] : $value;
        }, $student->courses);
        $student->update(['courses' => $courses]);
        return back()
            ->with('success', 'confirmed');
    }

    public function edit(Courses $course)
    {
        $teachers = Teacher::all();
        return view('admin.windows.courses.edit-course', compact('course','teachers'));
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
        $data = $request->all();
        if (request()->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/course/' . $course->image));
            request()->image->move(public_path('images/course'), $imageName);
            $data['image'] = $imageName;
        }
        $course->update($data);
        return redirect()->route('courses.index')
            ->with('success', 'Course updated successfully');
    }
    public function destroy(Courses $course)
    {
        File::delete(public_path('images/course/' . $course->image));
        $course->delete();
        return redirect()->route('courses.index')
            ->with('success', 'Course deleted successfully');
    }

    
}
