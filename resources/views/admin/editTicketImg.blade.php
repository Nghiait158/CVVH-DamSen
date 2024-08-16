@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật hình ảnh loại vé vào cơ sở dữ liệu  
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/updateTicketImg/'.$editTicketImg-> ticketImgID)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="ticketImgID">ticketImgID</label>
                            <input type="text" value="{{ $editTicketImg->ticketImgID }}"  class="form-control" name="ticketImgID" id="ticketImgID">
                        </div>    
                        <div class="form-group">
                            <label for="ticketImgName">Tên hình ảnh(ticketImgName)</label>
                            <input type="text" value="{{ $editTicketImg->ticketImgName }}"  class="form-control" name="ticketImgName"  id="ticketImgName">
                        </div>
                        <div class="form-group">
                            @csrf
                        
                            <label for="ticketID">Vé (ticketID)</label>
                            <select class="form-control" name="ticketID">
                                @foreach($all_ticket ?? [] as $ticket ) 
                                 <option value="{{ $ticket->ticketID  }}">{{ $ticket->ticketName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ticketImgPath">Chọn hình ảnh thay thế(nếu có)</label>
                            <input type="file" value="{{ $editTicketImg->ticketImgPath }}" class="form-control" name="ticketImgPath" id="ticketImgPath" required>
                        </div>
                        <button type="submit" name="updateTicketImg" class="btn btn-info">cập nhật hình ảnh</button>
                        </form>
                    </div>
                </div>
            </section>
</div>    
@endsection
