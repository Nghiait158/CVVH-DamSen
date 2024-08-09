<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location_manage(){  //hiển thị danh sách các job 
        $allLocation=Location::all();
        $manage_location= view('admin.location_manage')->with('allLocation', $allLocation);
        return view('admin.admin_layout')->with('admin.location_manage',$manage_location);
    }
    // public function add_area(){
    //     return view('admin.add_area');
    // }
    // public function saveArea(Request $request){

    //     $data = $request->all();
    //     $area = new Area();
    //     $area->areaName = $data['areaName'];

       
    //     $area->save();
    //     Session::put('message', 'Tải khu vực lên thành công');
    //     return Redirect::to('add_area');
    // }
}
