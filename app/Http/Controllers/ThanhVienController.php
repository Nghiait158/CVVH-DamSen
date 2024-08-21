<?php

namespace App\Http\Controllers;
use App\Models\Area;
use App\Models\Category;
use App\Models\Location;

use Illuminate\Http\Request;

class ThanhVienController extends Controller
{


        public function index(){
            $data = $this->data();
            return view('thanhvien', $data);
        }
            function data() {

                
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
                    'previousLocation' => $previousLocation,
                    'nextLocation' => $nextLocation,
                    'randomLocations' => $randomLocations,
    
                    // header
                    'all_area' => $all_area,
                    'categorizedLocations' => $categorizedLocations,
    
                ];
            }
}
