<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\Category;
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
    public function index(){
        $data = $this->data();
        return view('admin.add_location', $data);
    }
        function data() {
        $all_Cate = Category::all();
        return [
            'all_Cate' => $all_Cate,
        ];
    }
    public function saveLocation(Request $request){

        $data = $request->all();
        $location = new Location();
        $location->loName = $data['loName'];
        $location->loDescription = $data['loDescription'];
        $location->loContent = $data['loContent'];
        $location->loDate = $data['loDate'];
        $location->categoryID = $data['categoryID'];

       
        $location->save();
        Session::put('message', 'Tải địa điểm lên thành công');
        return Redirect::to('add_location');
    }
    public function editLocation($loID){
        $editLocation = Location::find($loID);
        $all_cate = Category::all();
        $data = [
            'editLocation' => $editLocation,
            'all_cate' => $all_cate,
        ];
        return view('admin.editLocation', $data);
    }
    public function updateLocation(Request $request, $loID){
        $data= $request->all();
        $location= Location::find($loID);
        $location->loName = $data['loName'];
        $location->loDescription = $data['loDescription'];
        $location->loContent = $data['loContent'];
        $location->loDate = $data['loDate'];
        $location->categoryID = $data['categoryID'];
        $location->save();
        Session::put('message','Chỉnh sửa địa điểm thành công');
        return Redirect::to('location_manage');

    }
    public function deleteLocation($loID){
        $location = Location::find($loID);
        if ($location) {
            // Xóa mục
            $location->delete();
            Session::flash('message', 'Đã xóa địa điểm thành công.');
        } else {
            Session::flash('message', 'Địa điểm không tồn tại.');
        }
        return Redirect::to('location_manage');
    }
}
