
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm hình ảnh loại vé vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveTicketImg')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="ticketImgID">ID Hình Ảnh(ticketImgID)</label>
                                <input type="text" class="form-control" name="ticketImgID"  id="ticketImgID"  >
                            </div>
                            <div class="form-group">
                                <label for="ticketImgName">Tên Hình Ảnh(ticketImgName) *Lưu ý: viết thường không dấu, không khoảng trắng</label>
                                <input type="text" class="form-control" name="ticketImgName"  id="ticketImgName"  >
                            </div>
                            <div class="form-group">
                                @csrf
                                <label for="ticketID">Vé(ticketID)</label>
                                <select class="form-control" name="ticketID">
                                    @foreach($all_ticket ?? [] as $ticket ) 
                                     <option value="{{ $ticket->ticketID  }}">{{ $ticket->ticketName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ticketImgPath">Chọn Hình Ảnh</label>
                                <input type="file" class="form-control" name="ticketImgPath" id="ticketImgPath" required>
                            </div>

                        <button type="submit" name="add_ticketImg" class="btn btn-info">Thêm hình ảnh</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection