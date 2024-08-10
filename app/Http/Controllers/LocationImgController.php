<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationImgController extends Controller
{
    public function imgMainPage_manage(){ 
        $allImgMainPage=ImgMainPage::all();
        $manage_img= view('admin.imgMainPage_manage')->with('allImgMainPage', $allImgMainPage);
        return view('admin.admin_layout')->with('admin.imgMainPage_manage',$manage_img);
    }
    public function index(){
        // $data = $this->data();
        return view('admin.add_imgMainPage');
    }
        // function data() {
        // $all_img = ImgMainPage::all();
        // return [
        //     'all_Cate' => $all_Cate,
        // ];
    // }
    public function saveImgMainPage(Request $request){
        //  $request->validate([
        //     'imgName' => 'required|string|max:255',
        //     'imgPath' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the rules as needed
        // ]);
        $data = $request->all();
        $img = new ImgMainPage();
        $img->imgName = $data['imgName'];
        // $img->imgPath = $data['imgPath'];
        if ($request->hasFile('imgPath')) {
            $get_image = $request->file('imgPath');
            $new_image = $data['imgName'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('frontEnd/img'), $new_image);
            $img->imgPath = '/frontEnd/img/' . $new_image;
        }
       
        $img->save();
        Session::put('message', 'Tải hình ảnh lên thành công');
        return Redirect::to('add_imgMainPage');
    }
    public function editImgMainPage($imgID){
        $editImgMainPage = ImgMainPage::find($imgID);
        $data = [
            'editImgMainPage' => $editImgMainPage,
        ];
        return view('admin.editImgMainPage', $data);
    }
    public function updateImgMainPage(Request $request, $imgID){
        $data= $request->all();
        $img= ImgMainPage::find($imgID);
        if (!$img) {
            return redirect()->back()->withErrors(['error' => 'Image not found']);
        }
        $img->imgName = $data['imgName'];
        if ($request->hasFile('imgPath')) {
            // Delete old image if exists
            if (file_exists(public_path($img->imgPath))) {
                unlink(public_path($img->imgPath));
            }
    
            // Process the new image
            $image = $request->file('imgPath');
            $imageName = $data['imgName'] . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontEnd/img'), $imageName);
            $img->imgPath = '/frontEnd/img/' . $imageName;
        }
        $img->save();
        Session::put('message','Chỉnh sửa hình ảnh thành công');
        return Redirect::to('imgMainPage_manage');

    }
    public function deleteImgMainPage($imgID){
        $img = ImgMainPage::find($imgID);
        if ($img) {
            // Xóa mục
            $img->delete();
            Session::flash('message', 'Đã xóa hình ảnh thành công.');
        } else {
            Session::flash('message', 'Hình ảnh không tồn tại.');
        }
        return Redirect::to('imgMainPage_manage');
    }
}
