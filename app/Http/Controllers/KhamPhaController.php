<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class KhamPhaController extends Controller
{
    public function index()
    {
        $data = $this->data();
        return view('khampha', $data);
    }
    function data() {
        $locations = [];
        for ($i = 1; $i <= 61; $i++) {
            $location = Location::find($i);
            $areaName = $location ? $location->category->area->areaName : 'N/A';
    
            $locations[] = [
                'loID' => $location ? $location->loID : null,
                'loName' => $location ? $location->loName : 'null',
                'areaName' => $areaName
            ];
        }
        // dd($location1);
        return [
            'locations' => $locations,
        ];
    }

    public function khamphachitiet($loID){
        // $locationDetail = Location::find($loID);
        $locationDetail = Location::with('images')->find($loID);
        $areaName = $locationDetail ? $locationDetail->category->area->areaName : 'N/A';
        
        $data = [
            'areaName'=>$areaName,
            'locationDetail' => $locationDetail,
            'images' => $locationDetail ? $locationDetail->images : [],
        ];
        // dd($images);
        return view('khamphaChiTiet', $data);

    }
    

}
