<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shop = Shop::all();
        return view('admin.windows.shop.index', compact('shop'));
    }

    public function create()
    {
        return view('admin.windows.shop.add');
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
        Shop::create($request->post() + ['image' => $imageName]);
        return redirect()->route('teachers.index')->with('success', 'Teacher has been added successfully.');
    }
    public function show(Shop $teacher)
    {
        return view('products.show', compact('teacher'));
    }

    public function edit(Shop $teacher)
    {
        return view('admin.windows.teachers.edit', compact('teacher'));
    }
    public function update(Request $request, Shop $teacher)
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
        $imageName = $teacher->image;
        if (request()->image) {
            # code...
            request()->image->move(public_path('images/teachers'), $imageName);
        }
        $data = $request->all();
        $data['image'] = $imageName;
        $teacher->update($data);
        return redirect()->route('teachers.index')
            ->with('success', 'Teacher updated successfully');
    }
    public function destroy(Shop $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')
            ->with('success', 'Teacher deleted successfully');
    }
}
