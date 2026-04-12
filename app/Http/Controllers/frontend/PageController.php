<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\EventType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {  
        $eventTypes = EventType::orderBy('position', 'asc')->get();
        return view('frontend.pages.home', compact('eventTypes'));
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function event()
    {
        return view('frontend.pages.event');
    }
    public function eventdetail()
    {
        return view('frontend.pages.eventdetail');
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
