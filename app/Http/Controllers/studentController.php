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
        $courses = Courses::all();
        // $selectedCourse = Student::where('email', $email)->join('courses', 'students.courses[0]->id', 'courses.id')->get();
        // $re = DB::table('students')
        //     ->where('email', $email)
        //     ->Join(
        //         'courses',
        //         'courses.id',
        //         DB::Raw("students.courses->'$[*].id',CAST(courses.id as JSON)")
        //     )->get();
        // dd($re);
        return view('students.windows.dashboard.index', ['name' => 'Student', 'student' => $student, 'courses' => $courses]);
    }

    function changePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $data = $request->all();
        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();
        $user->update(['password' => Hash::make($request->password)]);
        return back()->with('success', ' Successfully Password Changed');
    }
}
