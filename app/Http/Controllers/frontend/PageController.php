<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\EventType;
use Illuminate\Http\Request;
use App\Models\Event; 

class PageController extends Controller
{
    public function home()
{
    $eventTypes = EventType::orderBy('position', 'asc')->get();

    $events = Event::with('eventType')->where('status', 'active')->orderBy('position', 'asc') ->get()->groupBy('event_type_id');

    return view('frontend.pages.home', compact('eventTypes', 'events'));
}
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function event()
    {
        return view('frontend.pages.event');
    }
    public function eventdetail($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        return view('frontend.pages.eventdetail', compact('event'));
    }
    public function contact()
    {
        // return "OK";
        return view('frontend.pages.contact');
    }
    public function news()
    {
        // return "OK";
        return view('frontend.pages.news');
    }
}
