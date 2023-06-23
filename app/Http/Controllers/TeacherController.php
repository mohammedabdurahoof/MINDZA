<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'name' => 'required',
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
        return redirect()->route('teachers.index')->with('success', 'Teacher has been added successfully.');
    }
    public function show(Teacher $teacher)
    {
        return view('products.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
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
        return redirect()->route('teachers.index')
            ->with('success', 'Teacher updated successfully');
    }
    public function destroy(Teacher $teacher)
    {
        File::delete(public_path('images/teacher/' . $teacher->image));
        $teacher->delete();
        return redirect()->route('teachers.index')
            ->with('success', 'Teacher deleted successfully');
    }
}
