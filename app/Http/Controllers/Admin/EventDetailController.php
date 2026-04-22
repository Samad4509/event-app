<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventDetails;
use Illuminate\Support\Str;

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

        $request->validate([
            'details'        => 'required|array|min:1',
            'details.*.type' => 'required|in:banner_simple,banner_overlay,overview,text_image,stats',
        ]);

        foreach ($request->details as $index => $data) {
            $type = $data['type'];

            // ── Image upload ──────────────────────────────
            $imagePath = null;
            if ($request->hasFile("details.$index.image")) {
                $image    = $request->file("details.$index.image");
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/events'), $filename);
                $imagePath = 'uploads/events/' . $filename;
            }

            // ── Stats JSON ────────────────────────────────
            $stats = null;
            if (!empty($data['stats']) && is_array($data['stats'])) {
                $stats = array_values(
                    array_filter($data['stats'], fn($s) => !empty($s['value']))
                );
            }

            $name = $data['name'] ?? null;

            EventDetails::create([
                'event_id'    => $event->id,
                'type'        => $type,
                'name'        => $name,
                'slug'        => $name ? Str::slug($name) : null,
                'description' => $data['description'] ?? null,
                'image'       => $imagePath,
                'checklist'   => $data['checklist'] ?? null,
                'stats'       => $stats ? json_encode($stats) : null,
                'sort_order'  => $data['sort_order'] ?? ($index + 1),
            ]);
        }

        return redirect()
            ->route('admin.events.details.index', $event->id)
            ->with('success', 'Sections saved successfully.');
    }

    public function edit($id)
    {
        $detail = EventDetails::findOrFail($id);
        $event  = Event::findOrFail($detail->event_id);
        return view('backend.events.detail.edit', compact('detail', 'event'));
    }

    public function update(Request $request, $id)
    {
        $detail = EventDetails::findOrFail($id);

        // ── Image upload ──────────────────────────────────
        $imagePath = $detail->image;
        if ($request->hasFile('image')) {
            if ($detail->image && file_exists(public_path($detail->image))) {
                unlink(public_path($detail->image));
            }
            $image    = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/events'), $filename);
            $imagePath = 'uploads/events/' . $filename;
        }

        // ── Stats rebuild ─────────────────────────────────
        $stats = $detail->stats;
        if ($request->has('stats') && is_array($request->stats)) {
            $stats = array_values(
                array_filter($request->stats, fn($s) => !empty($s['value']))
            );
            $stats = json_encode($stats);
        }

        $detail->update([
            'name'        => $request->name ?? $detail->name,
            'description' => $request->description ?? $detail->description,
            'image'       => $imagePath,
            'checklist'   => $request->input('checklist', $detail->checklist),
            'stats'       => $stats,
        ]);

        return redirect()
            ->route('admin.events.details.index', $detail->event_id)
            ->with('success', 'Detail updated successfully.');
    }

    public function destroy($id)
    {
        $detail  = EventDetails::findOrFail($id);
        $eventId = $detail->event_id;

        if ($detail->image && file_exists(public_path($detail->image))) {
            unlink(public_path($detail->image));
        }

        $detail->delete();

        return redirect()
            ->route('admin.events.details.index', $eventId)
            ->with('success', 'Detail deleted successfully.');
    }

    public function sort(Request $request)
    {
        foreach ($request->positions as $index => $id) {
            EventDetails::where('id', $id)->update(['sort_order' => $index + 1]);
        }
        return response()->json(['success' => true]);
    }
}