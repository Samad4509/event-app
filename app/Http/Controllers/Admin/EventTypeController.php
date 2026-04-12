<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventType;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    public function create()
    {
        return view('backend.eventtype.create');
    }

    public function store(Request $request)
    {
        // 1️⃣ Validation
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // 2️⃣ Auto position (last + 1)
        $lastPosition = EventType::max('position');

        // 3️⃣ Data insert
        EventType::create([
            'name' => $request->name,
            'position' => $lastPosition + 1,
        ]);

        // 4️⃣ Redirect back to index
        return redirect()->route('admin.eventtype.index')->with('success', 'Event Type created successfully');
    }

    public function index()
    {
        $eventTypes = EventType::orderBy('position', 'asc')->get();

        return view('backend.eventtype.index', compact('eventTypes'));
    }

        public function edit($id)
    {
        $eventType = EventType::findOrFail($id);

        return view('backend.eventtype.edit', compact('eventType'));
    }

        public function update(Request $request, $id)
    {

   
        // 1️⃣ Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|integer',
        ]);

        // 2️⃣ Find data
        $eventType = EventType::findOrFail($id);

        // 3️⃣ Update data
        $eventType->update([
            'name' => $request->name,
            'position' => $request->position,
        ]);

        // 4️⃣ Redirect
        return redirect()->route('admin.eventtype.index')
            ->with('success', 'Event Type updated successfully');
    }

    public function destroy($id)
    {
        $eventType = EventType::findOrFail($id);
    
        $eventType->delete();

        // 3️⃣ Redirect back
        return redirect()->route('admin.eventtype.index')->with('success', 'Event Type deleted successfully');
    }

        public function sort(Request $request)
    {
        $positions = $request->positions;

        foreach ($positions as $index => $id) {
            EventType::where('id', $id)->update([
                'position' => $index + 1
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Position updated successfully'
        ]);
    }
}
