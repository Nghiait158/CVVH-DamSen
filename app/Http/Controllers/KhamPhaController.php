<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhamPhaController extends Controller
{
    public function index()
    {
        return view('khampha');
    }
}
