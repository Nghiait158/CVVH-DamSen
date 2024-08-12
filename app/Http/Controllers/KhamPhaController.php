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
        // $location = Location::all();
        // $location1 = Location::with('category.area')->find(1);
        // $areaName1 = $location1 && $location1->category ? $location1->category->area->areaName : null;

        // $location2 = Location::with('category.area')->find(2);
        // $areaName2 = $location2 && $location2->category ? $location2->category->area->areaName : null;

        // $location3 = Location::with('category.area')->find(3);
        // $areaName3 = $location3 && $location3->category ? $location3->category->area->areaName : null;

        // $location4 = Location::with('category.area')->find(4);
        // $areaName4 = $location4 && $location4->category ? $location4->category->area->areaName : null;

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
            // 'location1' => $location1,
            // 'areaName1' => $areaName1,

            // 'location2' => $location2,
            // 'areaName2' => $areaName2,

            // 'location3' => $location3,
            // 'areaName3' => $areaName3,

            // 'location4' => $location4,
            // 'areaName4' => $areaName4,

            'locations' => $locations,
        ];
    }

    public function khamphachitiet($loID){
        $locationDetail = Location::find($loID);
        $data = [
            'locationDetail' => $locationDetail,
        ];
        return view('khamphaChiTiet', $data);
        // return view('admin.editLocation', $data);
    }
    

}
