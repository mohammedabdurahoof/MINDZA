<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.windows.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.windows.events.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'startTime' => 'required',
            'finishTime' => 'required',
            'place' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd($request->post());
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/events'), $imageName);
        Event::create($request->post() + ['image' => $imageName]);
        return redirect()->route('events.index')->with('success', 'Event has been added successfully.');
    }
    public function show(Event $event)
    {
        return view('products.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('admin.windows.events.edit', compact('event'));
    }
    public function update(Request $request, Event $event)
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
        $data = $request->all();
        if (request()->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/events/' . $event->image));
            request()->image->move(public_path('images/events'), $imageName);
            $data['image'] = $imageName;
        }
        $event->update($data);
        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully');
    }
    public function destroy(Event $event)
    {
        File::delete(public_path('images/events/' . $event->image));
        $event->delete();
        return redirect()->route('events.index')
            ->with('success', 'Event deleted successfully');
    }
}
