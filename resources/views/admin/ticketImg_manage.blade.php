@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Các hình ảnh của các loại vé 
    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>ticketImgID</th>
            <th>ticketImgName</th>
            <th>ticketImgPath</th>
            <th>ticketID</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allTicketImg ?? [] as $img)
          <tr>
            <td><span class="text-ellipsis">{{ $img->ticketImgID }} </span></td>
            <td><span class="text-ellipsis">{{ $img->ticketImgName }}</span></td>
            <td><span class="text-ellipsis"><img class="imgShow" src="{{ $img->ticketImgPath }}"></span></td>
            <td><span class="text-ellipsis">{{ $img->ticketID }}</span></td>
            <td>
              <a href="{{ URL::to('/editTicketImg/'.$img->ticketImgID) }}" class="active styling-edit" ui-toggle-class=""> 
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
           <a onclick="return confirm('Bạn có chắc là muốn xóa hình ảnh này ko?')" href="{{ URL::to('/deleteTicketImg/'.$img->ticketImgID) }}" class="active styling-edit" ui-toggle-class=""> 
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
    </footer>
  </div>
</div>
@endsection