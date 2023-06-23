<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.windows.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('admin.windows.gallery.add');
    }

    public function store(Request $request)
    {
        // dd($request->post());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd($request->post());
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/gallery'), $imageName);
        Gallery::create(['name' => $imageName]);
        return redirect()->route('gallery.index')->with('success', 'Image has been added successfully.');
    }
    public function show(Gallery $event)
    {
        return view('products.show', compact('event'));
    }

    public function edit(Gallery $event)
    {
        return view('admin.windows.events.edit', compact('event'));
    }
    public function update(Request $request, Gallery $event)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'startTime' => 'required',
            'finishTime' => 'required',
            'place' => 'required',
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd(request()->image);
        $imageName = $event->image;
        if (request()->image) {
            # code...
            request()->image->move(public_path('images/events'), $imageName);
        }
        $event->update($request->all() + ['image' => $imageName]);
        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully');
    }
    public function destroy(Gallery $gallery)
    {
        File::delete(public_path('images/gallery/' . $gallery->name));
        $gallery->delete();
        return redirect()->route('gallery.index')
            ->with('success', 'Image deleted successfully');
    }
}
