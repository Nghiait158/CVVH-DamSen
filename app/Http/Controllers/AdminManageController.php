<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminManageController extends Controller
{
    public function index()
    {
        return view('admin.admin_layout');
    }
}
