<?php

namespace App\Http\Controllers;
use App\Models\LocationImage;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class LocationImgController extends Controller
{
    public function locationImg_manage(){ 
        $allLocationImg=LocationImage::all();
        $manage_locationImg= view('admin.locationImg_manage')->with('allLocationImg', $allLocationImg);
        return view('admin.admin_layout')->with('admin.locationImg_manage',$manage_locationImg);
    }
    public function index(){
        $data = $this->data();
        return view('admin.add_locationImg', $data);
    }
        function data() {
        $all_location = Location::all();
        // dd($all_location);
        return [
            'all_location' => $all_location,
        ];
    }
    public function saveLocationImg(Request $request){
        //  $request->validate([
        //     'imgName' => 'required|string|max:255',
        //     'imgPath' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the rules as needed
        // ]);
        $data = $request->all();
        $img = new LocationImage();
        $img->loImgName = $data['loImgName'];
        $img->loID = $data['loID'];
        
        if ($request->hasFile('loImgPath')) {
            $get_image = $request->file('loImgPath');
            $new_image = $data['loImgName'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('frontEnd/img'), $new_image);
            $img->loImgPath = '/frontEnd/img/' . $new_image;
        }
       
        $img->save();
        Session::put('message', 'Tải hình ảnh lên thành công');
        return Redirect::to('add_locationImg');
    }
    public function editLocationImg($loImgID){
        $editLocationImg = LocationImage::find($loImgID);
        $all_location = Location::all();
        $data = [
            'editLocationImg' => $editLocationImg,
            'all_location'=> $all_location,
        ];
        return view('admin.editLocationImg', $data);
    }
    public function updateLocationImg(Request $request, $loImgID){
        $data= $request->all();
        $img= LocationImage::find($loImgID);
        if (!$img) {
            return redirect()->back()->withErrors(['error' => 'Image not found']);
        }
        $img->loImgName = $data['loImgName'];
        $img->loID = $data['loID'];
        
        if ($request->hasFile('loImgPath')) {
            if (file_exists(public_path($img->loImgPath))) {
                unlink(public_path($img->loImgPath));
            }
    
            // Process the new image
            $image = $request->file('loImgPath');
            $imageName = $data['loImgName'] . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontEnd/img'), $imageName);
            $img->loImgPath = '/frontEnd/img/' . $imageName;
        }
        $img->save();
        Session::put('message','Chỉnh sửa hình ảnh thành công');
        return Redirect::to('locationImg_manage');

    }
    public function deleteLocationImg($loImgID){
        $img = LocationImage::find($loImgID);
        if ($img) {
            // Xóa mục
            $img->delete();
            Session::flash('message', 'Đã xóa hình ảnh thành công.');
        } else {
            Session::flash('message', 'Hình ảnh không tồn tại.');
        }
        return Redirect::to('locationImg_manage');
    }
}
