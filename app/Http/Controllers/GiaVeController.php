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
    public function saveTicket(Request $request){

        $data = $request->all();
        $ticket = new Ticket();
        $ticket->ticketID  = $data['ticketID'];
        $ticket->ticketName = $data['ticketName'];
        $ticket->ticketDescription = $data['ticketDescription'];
        $ticket->ticketContent = $data['ticketContent'];
        $ticket->ticketContentCss = $data['ticketContentCss'];
        $ticket->ticketContentJS = $data['ticketContentJS'];
        
        $ticket->ticketID = $data['ticketID'];

       
        $ticket->save();
        Session::put('message', 'Tải vé lên thành công');
        return Redirect::to('add_ticket');
    }
    public function editTicket($ticketID){
        $editTicket = Ticket::find($ticketID);
        $data = [
            'editTicket' => $editTicket,
        ];
        return view('admin.editTicket', $data);
    }
    public function updateTicket(Request $request, $ticketID){
        $data= $request->all();
        $ticket= Ticket::find($ticketID);
        
        $ticket->ticketID  = $data['ticketID'];
        $ticket->ticketName = $data['ticketName'];
        $ticket->ticketDescription = $data['ticketDescription'];
        $ticket->ticketContent = $data['ticketContent'];
        $ticket->ticketContentCss = $data['ticketContentCss'];
        $ticket->ticketContentJS = $data['ticketContentJS'];

        $ticket->save();
        Session::put('message','Chỉnh sửa vé thành công');
        return Redirect::to('ticket_manage');

    }
    public function deleteTicket($ticketID){
        $ticket = Ticket::find($ticketID);
        if ($ticket) {
            // Xóa mục
            $ticket->delete();
            Session::flash('message', 'Đã xóa vé thành công.');
        } else {
            Session::flash('message', 'Vé không tồn tại.');
        }
        return Redirect::to('ticket_manage');
    }
}
