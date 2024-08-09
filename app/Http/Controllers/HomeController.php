<?php

namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){
        $data = $this->data();
        return view('homePage', $data);
    }
        function data() {
        $all_area = Area::all();
        // dd($allRec);      
        // dd($all_area);
        return [
            'all_area' => $all_area,
        ];
    }
}
