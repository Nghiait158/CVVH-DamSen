<?php

namespace App\Http\Controllers;
use App\Models\EventImage;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class EventImgController extends Controller
{
    public function eventImg_manage(){ 
        $allEventImg=EventImage::all();
        $manage_eventImg= view('admin.eventImg_manage')->with('allEventImg', $allEventImg);
        return view('admin.admin_layout')->with('admin.eventImg_manage',$manage_eventImg);
    }
    public function index(){
        $data = $this->data();
        return view('admin.add_eventImg', $data);
    }
        function data() {
        $all_event = Event::all();
        // dd($all_event);
        return [
            'all_event' => $all_event,
        ];
    }
    // public function saveEventImg(Request $request){
    //     $data = $request->all();
    //     $img = new EventImage();
    //     $img->eImgID = $data['eImgID'];
    //     $img->eImgName = $data['eImgName'];
    //     $img->eID  = $data['eID'];
        
    //     if ($request->hasFile('eImgPath')) {
    //         $get_image = $request->file('eImgPath');
    //         $new_image = $data['eImgName'] . '.' . $get_image->getClientOriginalExtension();
    //         $get_image->move(public_path('frontEnd/img'), $new_image);
    //         $img->eImgPath = '/frontEnd/img/' . $new_image;
    //     }
       
    //     $img->save();
    //     Session::put('message', 'Tải hình ảnh lên thành công');
    //     return Redirect::to('add_eventImg');
    // }
    public function saveEventImg(Request $request){
        $data = $request->all();
        $img = new EventImage();
        $img->eImgID = $data['eImgID'];
        $img->eImgName = $data['eImgName'];
        $img->eID  = $data['eID'];
        
        if ($request->imageChoice == 'file' && $request->hasFile('eImgPath')) {
            $get_image = $request->file('eImgPath');
            $new_image = $data['eImgName'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('frontEnd/img'), $new_image);
            $img->eImgPath = '/frontEnd/img/' . $new_image;
        } elseif ($request->imageChoice == 'text' && !empty($data['eImgUrl'])) {
            $img->eImgPath = $data['eImgUrl'];
        }
       
        $img->save();
        Session::put('message', 'Tải hình ảnh lên thành công');
        return Redirect::to('add_eventImg');
    }
    
    public function editEventImg($eImgID){
        $editEventImg = EventImage::find($eImgID);
        $all_event = Event::all();
        $data = [
            'editEventImg' => $editEventImg,
            'all_event'=> $all_event,
        ];
        return view('admin.editEventImg', $data);
    }
    // public function updateEventImg(Request $request, $eImgID){
    //     $data= $request->all();
    //     $img= EventImage::find($eImgID);
    //     if (!$img) {
    //         return redirect()->back()->withErrors(['error' => 'Image not found']);
    //     }
    //     $img->eImgID = $data['eImgID'];
    //     $img->eImgName = $data['eImgName'];
    //     $img->eID = $data['eID'];
        
    //     if ($request->hasFile('eImgPath')) {
    //         if (file_exists(public_path($img->eImgPath))) {
    //             unlink(public_path($img->eImgPath));
    //         }
    //         // Process the new image
    //         $image = $request->file('eImgPath');
    //         $imageName = $data['eImgName'] . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('frontEnd/img'), $imageName);
    //         $img->eImgPath = '/frontEnd/img/' . $imageName;
    //     }
    //     $img->save();
    //     Session::put('message','Chỉnh sửa hình ảnh thành công');
    //     return Redirect::to('eventImg_manage');

    // }
    public function updateEventImg(Request $request, $eImgID)
    {
        $data = $request->all();
        $img = EventImage::find($eImgID);
    
        if (!$img) {
            return redirect()->back()->withErrors(['error' => 'Image not found']);
        }
    
        $img->eImgID = $data['eImgID'];
        $img->eImgName = $data['eImgName'];
        $img->eID = $data['eID'];
    
        if ($data['imageChoice'] === 'file' && $request->hasFile('eImgPath')) {
            if (file_exists(public_path($img->eImgPath))) {
                unlink(public_path($img->eImgPath));
            }
            $image = $request->file('eImgPath');
            $imageName = $data['eImgName'] . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontEnd/img'), $imageName);
            $img->eImgPath = '/frontEnd/img/' . $imageName;
        } elseif ($data['imageChoice'] === 'text' && !empty($data['eImgUrl'])) {
            $img->eImgPath = $data['eImgUrl'];
        }
    
        $img->save();
        Session::put('message', 'Chỉnh sửa hình ảnh thành công');
        return Redirect::to('eventImg_manage');
    }
    
    
    
    
    public function deleteEventImg($eImgID){
        $img = EventImage::find($eImgID);
        if ($img) {
            // Xóa mục
            $img->delete();
            Session::flash('message', 'Đã xóa hình ảnh thành công.');
        } else {
            Session::flash('message', 'Hình ảnh không tồn tại.');
        }
        return Redirect::to('eventImg_manage');
    }
}
