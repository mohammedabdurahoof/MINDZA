<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lecture;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $course = Courses::where('id', $request->id)->first();
        $email = Auth::user()->email;
        $teacher = Teacher::where('email', $email)->first();
        $lectures = Lecture::where('courseId', $course->id)->get();
        // dd($course);
        return view('Teacher.windows.lecutre.index', ['name' => 'Lectures', 'lectures' => $lectures, 'teacher' => $teacher, 'course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $course = Courses::where('id', $request->id)->first();
        $email = Auth::user()->email;
        $teacher = Teacher::where('email', $email)->first();
        return view('Teacher.windows.lecutre.add-lecutre', ['name' => 'Lectures', 'teacher' => $teacher, 'course' => $course]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'courseId' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'mimes:mp4,mov,ogg,qt'
        ]);
        $data = $request->post();
        if (request()->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/lecture'), $imageName);
            $data['image'] = $imageName;
        }

        if ($request->video) {
            $videoName = time() . '.' . request()->video->getClientOriginalExtension();
            request()->video->move(public_path('video/lecture'), $videoName);
            $data['video'] = $videoName;
        }
        Lecture::create($data);
        return redirect()->back()->with('success', 'Lecture has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        $email = Auth::user()->email;
        $teacher = Teacher::where('email', $email)->first();
        return view('Teacher.windows.lecutre.add-lecutre', ['name' => 'Lectures', 'teacher' => $teacher, 'lecture' => $lecture]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'courseId' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'mimes:mp4,mov,ogg,qt'
        ]);
        $data = $request->post();
        if (request()->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/lecture'), $imageName);
            $data['image'] = $imageName;
        }

        if ($request->video) {
            $videoName = time() . '.' . request()->video->getClientOriginalExtension();
            request()->video->move(public_path('video/lecture'), $videoName);
            $data['video'] = $videoName;
        }
        $lecture->update($data);
        return redirect()->back()->with('success', 'Lecture updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        File::delete(public_path('images/lecture/' . $lecture->image));
        $lecture->delete();
        return redirect()->back()
            ->with('success', 'Lecture deleted successfully');
    }
}
