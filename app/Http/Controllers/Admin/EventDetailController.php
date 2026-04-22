<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventDetails;

class EventDetailController extends Controller
{
    public function index($id)
    {
        $event = Event::with('details')->findOrFail($id);
        return view('backend.events.detail.index', compact('event'));
    }

    public function create($id)
    {
        $event = Event::findOrFail($id);
        return view('backend.events.detail.create', compact('event'));
    }

    public function storeDetail(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $nextOrder = EventDetails::where('event_id', $id)->count();

        if ($request->has('details')) {
            $request->validate([
                'details'         => 'required|array|min:1',
                'details.*.name'  => 'required|string|max:255',
                'details.*.image' => 'nullable|image|max:2048',
            ]);

            foreach ($request->details as $index => $item) {
                $imagePath = null;

                if ($request->hasFile("details.{$index}.image")) {
                    $image     = $request->file("details.{$index}.image");
                    $filename  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads/events'), $filename);
                    $imagePath = 'uploads/events/' . $filename;
                }

                EventDetails::create([
                    'event_id'    => $event->id,
                    'name'        => $item['name'],
                    'description' => $item['description'] ?? null,
                    'image'       => $imagePath,
                    'sort_order'  => $item['sort_order'] ?? ($index + 1),
                ]);
            }

        } else {
            $request->validate(['name' => 'required|string|max:255']);

            EventDetails::create([
                'event_id'   => $event->id,
                'name'       => $request->name,
                'sort_order' => $nextOrder + 1,
            ]);
        }

        return back()->with('success', 'Detail(s) added successfully!');
    }

    public function destroy($detailId)
    {
        $detail = EventDetails::findOrFail($detailId);

        // Delete image from public folder
        if ($detail->image && file_exists(public_path($detail->image))) {
            unlink(public_path($detail->image));
        }

        $detail->delete();
        return back()->with('success', 'Detail deleted successfully!');
    }

    public function sort(Request $request)
    {
        foreach ($request->positions as $index => $id) {
            EventDetails::where('id', $id)->update(['sort_order' => $index + 1]);
        }
        return response()->json(['success' => true]);
    }

    public function edit($id)
    {
        $detail = EventDetails::findOrFail($id);
        $event  = Event::findOrFail($detail->event_id);
        return view('backend.events.detail.edit', compact('detail', 'event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
        ]);

        $detail    = EventDetails::findOrFail($id);
        $imagePath = $detail->image;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($detail->image && file_exists(public_path($detail->image))) {
                unlink(public_path($detail->image));
            }

            $image     = $request->file('image');
            $filename  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/events'), $filename);
            $imagePath = 'uploads/events/' . $filename;
        }

        $detail->update([
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $imagePath,
        ]);

        return redirect()->route('admin.events.details.index', $detail->event_id)
            ->with('success', 'Detail updated successfully!');
    }
}