<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use App\Models\Area;
use App\Models\Category;
use Illuminate\Http\Request;

class VeChiTietController extends Controller
{
    public function index($ticketID)
    {
        $vechitiet = Ticket::with('images')->find($ticketID);
        // $areaName = $locationDetail ? $locationDetail->category->area->areaName : 'N/A';
        // dd($vechitiet);
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
            'vechitiet' => $vechitiet,
            'images' => $vechitiet ? $vechitiet->images : [],
            'all_area' => $all_area,
            'categorizedLocations' => $categorizedLocations,
        ];
        return view('vechitiet', $data);
    }
}
