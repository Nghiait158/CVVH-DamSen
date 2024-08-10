<?php

namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class AreaController extends Controller
{
    public function area_manage(){  //hiển thị danh sách các job 
        $allArea=Area::all();
        $manage_area= view('admin.area_manage')->with('allArea', $allArea);
        return view('admin.admin_layout')->with('admin.area_manage',$manage_area);
    }
    public function add_area(){
        return view('admin.add_area');
    }
    public function saveArea(Request $request){

        $data = $request->all();
        $area = new Area();
        $area->areaName = $data['areaName'];

       
        $area->save();
        Session::put('message', 'Tải khu vực lên thành công');
        return Redirect::to('add_area');
    }
    public function editArea($areaID){
        // $editPosts= DB::table('posts')->where('postID',$postID)->get();
        $editArea=Area::find($areaID);
        $allArea= view('admin.editArea')->with('editArea', $editArea);
        return view('admin.admin_layout')->with('admin.editArea',$allArea);
    }
    public function updateArea(Request $request, $areaID){
        $data= $request->all();
        $area= Area::find($areaID);
        $area->areaName=$data['areaName'];
        $area->areaID=$data['areaID'];

        $area->save();
        Session::put('message','Chỉnh sửa khu vực thành công');
        return Redirect::to('area_manage');

    }
    public function deleteArea($areaID){
        $area = Area::find($areaID);
        if ($area) {
            // Xóa mục
            $area->delete();
            Session::flash('message', 'Đã xóa mục thành công.');
        } else {
            Session::flash('message', 'Mục không tồn tại.');
        }
        return Redirect::to('area_manage');
    }
}
