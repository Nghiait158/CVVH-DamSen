<?php

namespace App\Http\Controllers;
use App\Models\Area;
use App\Models\Category;
use Illuminate\Http\Request;

class GioiThieuController extends Controller
{
    public function index(){
        $data = $this->data();
        return view('gioithieu', $data);
    }
        function data() {
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
                'all_area' => $all_area,
                'categorizedLocations' => $categorizedLocations,
            ];
        }
}
