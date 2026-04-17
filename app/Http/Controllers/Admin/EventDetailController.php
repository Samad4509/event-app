<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event; 

class EventDetailController extends Controller
{
    public function create($id)
    {
       $event = Event::findOrFail($id);

        return view('backend.events.detail.index', compact('event'));
    }
}
