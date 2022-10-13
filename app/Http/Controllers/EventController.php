<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        
        $events = Event::all();
        
        return view('welcome',['events' => $events]);

    }

    public function create() {
        return view('events.create');
    }

    public function events() {
        return view('events');
    }

    public function signin() {
        return view('signin');
    }

    public function signup() {
        return view('signup');
    }

}
