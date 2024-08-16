<?php

namespace App\Http\Controllers;
use App\Models\TicketImage;
use App\Models\Ticket;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;


class TicketImgController extends Controller
{
    public function ticketImg_manage(){ 
        $allTicketImg=TicketImage::all();
        $manage_ticketImg= view('admin.ticketImg_manage')->with('allTicketImg', $allTicketImg);
        return view('admin.admin_layout')->with('admin.ticketImg_manage',$manage_ticketImg);
    }
    public function index(){
        $data = $this->data();
        return view('admin.add_ticketImg', $data);
    }
        function data() {
        $all_ticket = Ticket::all();
        // dd($all_ticket);
        return [
            'all_ticket' => $all_ticket,
        ];
    }
    public function saveTicketImg(Request $request){
        $data = $request->all();
        $img = new TicketImage();
        $img->ticketImgID = $data['ticketImgID'];
        $img->ticketImgName = $data['ticketImgName'];
        $img->ticketID  = $data['ticketID'];
        
        if ($request->hasFile('ticketImgPath')) {
            $get_image = $request->file('ticketImgPath');
            $new_image = $data['ticketImgName'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('frontEnd/img'), $new_image);
            $img->ticketImgPath = '/frontEnd/img/' . $new_image;
        }
       
        $img->save();
        Session::put('message', 'Tải hình ảnh lên thành công');
        return Redirect::to('add_ticketImg');
    }
    public function editTicketImg($ticketImgID){
        $editTicketImg = TicketImage::find($ticketImgID);
        $all_ticket = Ticket::all();
        $data = [
            'editTicketImg' => $editTicketImg,
            'all_ticket'=> $all_ticket,
        ];
        return view('admin.editTicketImg', $data);
    }
    public function updateTicketImg(Request $request, $ticketImgID){
        $data= $request->all();
        $img= TicketImage::find($ticketImgID);
        if (!$img) {
            return redirect()->back()->withErrors(['error' => 'Image not found']);
        }
        $img->ticketImgID = $data['ticketImgID'];
        $img->ticketImgName = $data['ticketImgName'];
        $img->ticketID = $data['ticketID'];
        
        if ($request->hasFile('ticketImgPath')) {
            if (file_exists(public_path($img->ticketImgPath))) {
                unlink(public_path($img->ticketImgPath));
            }
            // Process the new image
            $image = $request->file('ticketImgPath');
            $imageName = $data['ticketImgName'] . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontEnd/img'), $imageName);
            $img->ticketImgPath = '/frontEnd/img/' . $imageName;
        }
        $img->save();
        Session::put('message','Chỉnh sửa hình ảnh thành công');
        return Redirect::to('ticketImg_manage');

    }
    public function deleteTicketImg($ticketImgID){
        $img = TicketImage::find($ticketImgID);
        if ($img) {
            // Xóa mục
            $img->delete();
            Session::flash('message', 'Đã xóa hình ảnh thành công.');
        } else {
            Session::flash('message', 'Hình ảnh không tồn tại.');
        }
        return Redirect::to('ticketImg_manage');
    }
}
