<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LichSuHinhThanhController extends Controller
{
    public function index()
    {
        // $data = $this->data();
        return view('lichsuhinhthanh');
        // return view('khampha', $data);
    }
    // function data() {
        // $locations = [];
        // dd($location1);
        // return [
            // 'locations' => $locations,
        // ];
    // }
}
