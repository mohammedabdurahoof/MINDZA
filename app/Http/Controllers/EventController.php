<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegister;
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
            'startDate' => 'required',
            'startTime' => 'required',
            'finishTime' => 'required',
            'place' => 'required',
            'registration' => 'boolean',
            'countdown' => 'boolean',
            'available_time' => 'boolean',
            'photo' => 'boolean',
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
        $students = EventRegister::where('id', $event->id)->get();
        return view('admin.windows.events.single', compact('event','students'));
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
            'startDate' => 'required',
            'startTime' => 'required',
            'finishTime' => 'required',
            'place' => 'required',
            'registration' => 'boolean',
            'countdown' => 'boolean',
            'available_time' => 'boolean',
            'photo' => 'boolean',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd(request()->image);
        $data = $request->all();
        $data['registration'] = $data['registration'] ?? false;
        $data['countdown'] = $data['countdown'] ?? false;
        $data['available_time'] = $data['available_time'] ?? false;
        $data['photo'] = $data['photo'] ?? false;
        // dd($data);
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
