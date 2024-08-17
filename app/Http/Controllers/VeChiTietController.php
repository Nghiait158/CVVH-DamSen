<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class VeChiTietController extends Controller
{
    public function index($ticketID)
    {
        $vechitiet = Ticket::with('images')->find($ticketID);
        // $areaName = $locationDetail ? $locationDetail->category->area->areaName : 'N/A';
        // dd($vechitiet);
        $data = [
            'vechitiet' => $vechitiet,
            'images' => $vechitiet ? $vechitiet->images : [],
        ];
        return view('vechitiet', $data);
    }
}
