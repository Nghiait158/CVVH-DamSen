<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GioiThieuController extends Controller
{
    public function index()
    {
        // $data = $this->data();
        return view('gioithieu');
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
