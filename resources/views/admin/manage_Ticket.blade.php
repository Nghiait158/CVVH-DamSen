@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê các loại vé
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
            <th style="width:30px;"></th>
            <th>ticketID</th>
            <th>ticketName</th>
            <th>ticketDescription</th>
            <th>ticketContent</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allTicket ?? [] as $ticket)
          <tr>
            <td>
              <a href="{{ URL::to('/editTicket/'.$ticket->ticketID) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa loại vé này ko?')" href="{{ URL::to('/deleteTicket/'.$ticket->ticketID) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
            <td><span class="text-ellipsis">{{ $ticket->ticketID }} </span></td>
            <td><span class="text-ellipsis">{{ $ticket->ticketName }}</span></td>
            <td><span class="text-ellipsis">{{ $ticket->ticketDescription }}</span></td>
            <td><span class="text-ellipsis">
                <?php echo $ticket->ticketContent ?>
                <style>
                {{ $ticket->ticketContentCss }}
                </style>
            </span></td>
            


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