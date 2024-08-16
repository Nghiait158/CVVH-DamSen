<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class GiaVeController extends Controller
{
    public function ticket_manage(){  
        $allTicket=Ticket::all();
        $manage_Ticket= view('admin.manage_Ticket')->with('allTicket', $allTicket);
        return view('admin.admin_layout')->with('admin.manage_Ticket',$manage_Ticket);
    }
    public function index(){
        $data = $this->data();
        return view('admin.add_ticket', $data);
    }
        function data() {
        $all_ticket = Ticket::all();
        return [
            'all_ticket' => $all_ticket,
        ];
    }
    public function saveLocation(Request $request){

        $data = $request->all();
        $ticket = new Ticket();
        $ticket->ticketID  = $data['ticketID'];
        $ticket->ticketName = $data['ticketName'];
        $ticket->ticketDescription = $data['ticketDescription'];
        $ticket->ticketContent = $data['ticketContent'];
        $ticket->ticketContentCss = $data['ticketContentCss'];
        $ticket->loContentCss = $data['loContentCss'];
        $ticket->ticketContentJS = $data['ticketContentJS'];
        
        $ticket->ticketID = $data['ticketID'];

       
        $ticket->save();
        Session::put('message', 'Tải vé lên thành công');
        return Redirect::to('add_ticket');
    }
    public function editLocation($loID){
        $editLocation = Location::find($loID);
        $all_cate = Category::all();
        $data = [
            'editLocation' => $editLocation,
            'all_cate' => $all_cate,
        ];
        return view('admin.editLocation', $data);
        // return view('admin.editLocation', $data);
    }
    public function updateLocation(Request $request, $loID){
        $data= $request->all();
        $location= Location::find($loID);
        
        $location->loID  = $data['loID'];
        $location->loName = $data['loName'];
        $location->loDescription = $data['loDescription'];
        $location->loContent = $data['loContent'];
        $location->loDate = $data['loDate'];
        $location->loContentCss = $data['loContentCss'];
        $location->loContentJS = $data['loContentJS'];
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
