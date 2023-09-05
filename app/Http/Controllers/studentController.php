<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return redirect('/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = $request->all();
        return redirect('/register')->with('value', $value);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd(request()->image);
        $data = $request->all();
        if (request()->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/student/' . $student->image));
            request()->image->move(public_path('images/student'), $imageName);
            $data['image'] = $imageName;
        }
        $student->update($data);
        return redirect()->route('students.dashboard')
            ->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }


    function dashboard()
    {
        $email = Auth::user()->email;
        $student = Student::where('email', $email)->first();
        $courses = Courses::join('teachers','courses.teacherId','teachers.id')->select('courses.image as courseImage', 'teachers.image as teacherImage', 'courses.id', 'courseName', 'price', 'name')->get();
        $selectedCourses = collect($student->courses)->map(function ($item, $key) use($courses) {
            $details =  $courses->where('id', $item['id'])->first();
            $items = collect($item)->merge($details);
            return $items;
          });
        // dd($selectedCourses);
        return view('students.windows.dashboard.index', ['name' => 'Student', 'student' => $student, 'courses' => $courses,'selectedCourses'=>$selectedCourses]);
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

    function addNewCourse(Request $request)
    {
        $request->validate([
            'courseId' => ['required'],
        ]);
        $email = Auth::user()->email;
        $student = Student::where('email', $email)->first();
        $courses =$student->courses;
        array_push($courses,['id'=>$request->courseId,'status'=>'pending']);
        // dd($courses);
        $student->update(['courses' => $courses]);
        return back()->with('success', ' Successfully Password Changed');
    }
}
