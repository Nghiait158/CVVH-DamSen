<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Location;
use App\Models\Area;
use App\Models\Category;
use App\Models\Ticket;

use Illuminate\Http\Request;

class SuKienController extends Controller
{

    public function index(){
        $data = $this->data();
        return view('sukien', $data);
    }
        function data() {
            $events = Event::with('images')->get();
            $first8Event=Event::with('images')
                        ->orderBy('created_at', 'desc')
                        ->take(8) 
                        ->get();
            
            $locationDetail = Location::with('images')->find(3);
            $previousLocation = Location::where('loID', '<', $locationDetail->loID)->orderBy('loID', 'desc')->first();
            $nextLocation = Location::where('loID', '>', $locationDetail->loID)->orderBy('loID', 'asc')->first();
            $randomLocations = Location::with(['images' => function($query) {
                $query->limit(1);
            }, 'category.area'])
            ->inRandomOrder()
            ->get()
            ->groupBy('categoryID')
            ->take(4)
            ->flatMap(function ($group) {
                return $group->take(1);
            });


             // ------header---------
            $all_area = Area::all();
            $categories = Category::with('locations')->get();

            // Sắp xếp các location theo categoryID và lấy luôn tên category
            $categorizedLocations = [];
            foreach ($categories as $category) {
                $categorizedLocations[$category->categoryID] = [
                    'categoryName' => $category->categoryName,
                    'locations' => $category->locations
                ];
            }
            return [
                'locationDetail' => $locationDetail,
                'events' => $events,
                'first8Event'=> $first8Event,
                'previousLocation' => $previousLocation,
                'nextLocation' => $nextLocation,
                'randomLocations' => $randomLocations,

                // header
                'all_area' => $all_area,
                'categorizedLocations' => $categorizedLocations,

            ];
        }
    public function sukienchitiet($eID){
        $sukienchitiet = Event::with('images')->find($eID);

        $locationDetail = Location::with('images')->find(3);
        $previousLocation = Location::where('loID', '<', $locationDetail->loID)->orderBy('loID', 'desc')->first();
        $nextLocation = Location::where('loID', '>', $locationDetail->loID)->orderBy('loID', 'asc')->first();
        $randomLocations = Location::with(['images' => function($query) {
            $query->limit(1);
        }, 'category.area'])
        ->inRandomOrder()
        ->get()
        ->groupBy('categoryID')
        ->take(4)
        ->flatMap(function ($group) {
            return $group->take(1);
        });
        // ------header---------
        $all_area = Area::all();
        $categories = Category::with('locations')->get();

        // Sắp xếp các location theo categoryID và lấy luôn tên category
        $categorizedLocations = [];
        foreach ($categories as $category) {
            $categorizedLocations[$category->categoryID] = [
                'categoryName' => $category->categoryName,
                'locations' => $category->locations
            ];
        }
        $data = [
            'sukienchitiet' => $sukienchitiet,
            'images' => $sukienchitiet ? $sukienchitiet->images : [],
            'locationDetail' => $locationDetail,
            'previousLocation' => $previousLocation,
            'nextLocation' => $nextLocation,
            'randomLocations' => $randomLocations,
            //---------------- header----------
            'all_area' => $all_area,
            'categorizedLocations' => $categorizedLocations,
        ];
        return view('sukienchitiet', $data);
    }
    
}
