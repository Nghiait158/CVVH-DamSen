@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật vé vào cơ sở dữ liệu  
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">
                    {{-- @foreach($allArea as $key => $area) --}}

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/updateTicket/'.$editTicket-> ticketID )}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="ticketID">ID vé(ticketID )</label>
                            <input type="text" value="{{ $editTicket->ticketID  }}" class="form-control" name="ticketID"  id="ticketID"  >
                        </div>
                        <div class="form-group">
                            <label for="ticketName">Tên vé(ticketName)</label>
                            <input type="text" value="{{ $editTicket->ticketName  }}" class="form-control" name="ticketName"  id="ticketName" >
                        </div>
                        <div class="form-group">
                            <label for="ticketDescription">Mô tả vé(ticketDescription)</label>
                            <input type="text" value="{{ $editTicket->ticketDescription  }}" class="form-control" name="ticketDescription"  id="ticketDescription" >
                        </div>
                        <div class="form-group">
                            <label for="ticketContent">Content(ticketContent)</label>
                            <textarea style="width: 994px; height: 237px;" value="{{ $editTicket->ticketContent  }}" class="form-control tiny" name="ticketContent" id="ticketContent" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ticketContentCss">Content CSS(ticketContentCss)</label>
                            <textarea style="width: 994px; height: 237px;" value="{{ $editTicket->ticketContentCss  }}" type="text" class="form-control" name="ticketContentCss"  id="ticketContentCss"></textarea>
                        </div>
                            
                        <div class="form-group">
                            <label for="ticketContentJS">Content JS(ticketContentJS)</label>
                            <textarea style="width: 994px; height: 237px;" type="text" value="{{ $editTicket->ticketContentJS  }}" class="form-control" name="ticketContentJS"  id="ticketContentJS"></textarea>
                        </div>
                        <button type="submit" name="updateTicket" class="btn btn-info">Cập nhật Vé </button>
                        </form>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </section>
</div>    
@endsection
