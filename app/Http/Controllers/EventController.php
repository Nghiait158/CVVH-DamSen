<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class EventController extends Controller
{
    public function event_manage(){  
        $allEvent=Event::all();
        $manage_Event= view('admin.event_manage')->with('allEvent', $allEvent);
        return view('admin.admin_layout')->with('admin.event_manage',$manage_Event);
    }
    public function index(){
        $data = $this->data();
        return view('admin.add_event', $data);
    }
        function data() {
        $all_event = Event::all();
        return [
            'all_event' => $all_event,
        ];
    }
    public function saveEvent(Request $request){

        $data = $request->all();
        $event = new Event();
        $event->eID  = $data['eID'];
        $event->eName = $data['eName'];
        $event->eStatus = $data['eStatus'];
        $event->eDate = $data['eDate'];
        $event->eDescription = $data['eDescription'];
        $event->eContent = $data['eContent'];
        $event->eContentCSS = $data['eContentCSS'];
        $event->eContentJS = $data['eContentJS'];
        
        $event->eID = $data['eID'];

       
        $event->save();
        Session::put('message', 'Tải sự kiện  lên thành công');
        return Redirect::to('add_event');
    }
    public function editEvent($eID){
        $editEvent = Event::find($eID);
        $data = [
            'editEvent' => $editEvent,
        ];
        return view('admin.editEvent', $data);
    }
    public function updateEvent(Request $request, $eID){
        $data= $request->all();
        $event= Event::find($eID);
        
        $event->eID  = $data['eID'];
        $event->eName = $data['eName'];
        $event->eStatus = $data['eStatus'];
        $event->eDate = $data['eDate'];
        $event->eDescription = $data['eDescription'];
        $event->eContent = $data['eContent'];
        $event->eContentCSS = $data['eContentCSS'];
        $event->eContentJS = $data['eContentJS'];

        $event->save();
        Session::put('message','Chỉnh sửa sự kiện thành công');
        return Redirect::to('event_manage');

    }
    public function deleteEvent($eID){
        $event = Event::find($eID);
        if ($event) {
            // Xóa mục
            $event->delete();
            Session::flash('message', 'Đã xóa sự kiện thành công.');
        } else {
            Session::flash('message', 'Sự kiện không tồn tại.');
        }
        return Redirect::to('event_manage');
    }
}
