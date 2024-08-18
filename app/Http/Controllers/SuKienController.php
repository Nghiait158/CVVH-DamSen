<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class SuKienController extends Controller
{

    public function index(){
        $data = $this->data();
        return view('sukien', $data);
    }
        function data() {
            $events = Event::with('images')->get();

            return [
                'events' => $events,
            ];
        }
}
