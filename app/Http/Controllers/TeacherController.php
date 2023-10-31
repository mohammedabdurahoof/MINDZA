<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lecture;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.windows.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.windows.teachers.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'position' => 'required',
            'description' => 'required',
            'about' => 'required',
            'achievements' => 'required',
            'objective' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        // dd($request->post());
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/teacher'), $imageName);
        Teacher::create($request->post() + ['image' => $imageName]);
        User::create([
            'name' => $request->name,
            'type' => $request->type,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('teachers.index')->with('success', 'Teacher has been added successfully.');
    }
    public function show(Teacher $teacher)
    {
        return view('products.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        // dd($teacher);
        return view('admin.windows.teachers.edit', compact('teacher'));
    }
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'about' => 'required',
            'achievements' => 'required',
            'objective' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd(request()->image);
        $data = $request->all();
        if (request()->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/teacher/' . $teacher->image));
            request()->image->move(public_path('images/teacher'), $imageName);
            $data['image'] = $imageName;
        }
        $teacher->update($data);
        return redirect()->back()
            ->with('success', 'Teacher updated successfully');
    }
    public function destroy(Teacher $teacher)
    {
        File::delete(public_path('images/teacher/' . $teacher->image));
        $teacher->delete();
        return redirect()->route('teachers.index')
            ->with('success', 'Teacher deleted successfully');
    }

    function dashboard()
    {
        $email = Auth::user()->email;
        $teacher = Teacher::where('email', $email)->first();

        // $courses = Courses::join('teachers','courses.teacherId','teachers.id')->select('courses.image as courseImage', 'teachers.image as teacherImage', 'courses.id', 'courseName', 'price', 'name')->get();
        $selectedCourses = Courses::where('teacherId', $teacher->id)->join('teachers', 'courses.teacherId', 'teachers.id')->select('courses.image as courseImage', 'teachers.image as teacherImage', 'courses.id', 'courseName', 'price', 'name')->get();
        // dd($selectedCourses);
        return view('Teacher.windows.dashboard.index', ['name' => 'Teacher', 'teacher' => $teacher, 'selectedCourses' => $selectedCourses]);
    }

    function changePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();
        $user->update(['password' => Hash::make($request->password)]);
        return back()->with('success', ' Successfully Password Changed');
    }

    public function addLecture(Request $request)
    {
        // dd($request);
        
    }

    public function getLecture(Request $request)
    {   
        $course = Courses::where('id',$request->id)->first();
        $email = Auth::user()->email;
        $teacher = Teacher::where('email', $email)->first();
        $lectures= Lecture::where('courseId',$course->id)->get();
        // dd($course);
        return view('Teacher.windows.lecutre.index',['name'=>'Lectures', 'lectures' => $lectures, 'teacher' => $teacher, 'course'=>$course]);
    }
}
