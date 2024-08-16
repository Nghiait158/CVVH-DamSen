
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm loại vé vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveTicket')}}" method="post">
                            {{ csrf_field() }}
                         <div class="form-group">
                                <label for="ticketID">ID vé(ticketID)</label>
                                <input type="text" class="form-control" name="ticketID"  id="ticketID"  >
                        </div>
                        <div class="form-group">
                            <label for="ticketName">Tên vé(ticketName	)</label>
                            <input type="text" class="form-control" name="ticketName"  id="ticketName" >
                        </div>
                        <div class="form-group">
                            <label for="ticketDescription">Mô tả vé(ticketDescription)</label>
                            <input type="text" class="form-control" name="ticketDescription"  id="ticketDescription" >
                        </div>
                        <div class="form-group">
                            <label for="ticketContent">Content(ticketContent)</label>
                            <textarea style="width: 994px; height: 237px;" class="form-control tiny" name="ticketContent" id="ticketContent" ></textarea>
                
                            {{-- <textarea style="width: 994px; height: 237px;" type="text" class="form-control" name="loContent"  id="loContent"></textarea> --}}
                        </div>
                        <div class="form-group">
                            <label for="loContentCss">Content CSS(ticketContentCss)</label>
                            <textarea style="width: 994px; height: 237px;" type="text" class="form-control" name="loContentCss"  id="loContentCss"></textarea>
                        </div>
                            
                        <div class="form-group">
                            <label for="loContentJS">Content JS(ticketContentJS)</label>
                            <textarea style="width: 994px; height: 237px;" type="text" class="form-control" name="loContentJS"  id="loContentJS"></textarea>
                        </div>

                        <button type="submit" name="add_ticket" class="btn btn-info">Thêm vé</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection