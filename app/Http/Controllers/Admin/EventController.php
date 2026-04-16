<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('position', 'asc')->latest()->get();

        return view('backend.events.index', compact('events'));
    }
        
    public function create()
    {
        $eventTypes = EventType::orderBy('position', 'asc')->get();

        return view('backend.events.create', compact('eventTypes'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'event_date' => 'required',
            'event_type_id' => 'required|exists:event_types,id',
        ]);

       
        $data = $request->except(['image', 'og_image']);

       
        $data['slug'] = Str::slug($request->title);

        
        $data['status'] = $request->has('status') ? 'active' : 'inactive';

        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'_event.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/events'), $name);
            $data['image'] = 'uploads/events/'.$name;
        }

        
        if ($request->hasFile('og_image')) {
            $image = $request->file('og_image');
            $name = time().'_og.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/events'), $name);
            $data['og_image'] = 'uploads/events/'.$name;
        }

       
        Event::create($data);

        return redirect()->route('admin.events.index')
            ->with('success', 'Event created successfully!');
    }

   public function edit($id)
    {
        // event find
        $event = Event::findOrFail($id);

        // event types (dropdown)
        $eventTypes = EventType::orderBy('position', 'asc')->get();

        // view return
        return view('backend.events.edit', compact('event', 'eventTypes'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'event_date' => 'required',
            'event_type_id' => 'required|exists:event_types,id',
        ]);

        $data = $request->except(['image', 'og_image']);

        // slug update
        $data['slug'] = \Str::slug($request->title);

        // status
        $data['status'] = $request->has('status') ? 'active' : 'inactive';

        // IMAGE UPDATE
        if ($request->hasFile('image')) {

            if ($event->image && file_exists(public_path($event->image))) {
                unlink(public_path($event->image));
            }

            $image = $request->file('image');
            $name = time().'_event.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/events'), $name);

            $data['image'] = 'uploads/events/'.$name;
        }

        // OG IMAGE UPDATE
        if ($request->hasFile('og_image')) {

            if ($event->og_image && file_exists(public_path($event->og_image))) {
                unlink(public_path($event->og_image));
            }

            $image = $request->file('og_image');
            $name = time().'_og.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/events'), $name);

            $data['og_image'] = 'uploads/events/'.$name;
        }

        $event->update($data);

        return redirect()->route('admin.events.index')
            ->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->image && File::exists(public_path($event->image))) {
            File::delete(public_path($event->image));
        }

        if ($event->og_image && File::exists(public_path($event->og_image))) {
            File::delete(public_path($event->og_image));
        }

        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully!');
    }

    public function toggleStatus($id)
    {
        $event = Event::findOrFail($id);

        $event->status = $event->status === 'active' ? 'inactive' : 'active';
        $event->save();

        return back();
    }

    public function sort(Request $request)
    {
        foreach ($request->positions as $index => $id) {
            Event::where('id', $id)->update([
                'position' => $index
            ]);
        }

        return response()->json(['status' => 'success']);
    }

}
