@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê các sự kiện
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
            <th>eID</th>
            <th>eName</th>
            <th>eStatus</th>
            <th>eDate</th>
            <th>eDescription</th>
            <th>eContent</th>
            <th>eContentCSS</th>
            <th>eContentJS</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($allEvent ?? [] as $event)
          <tr>
            <td>
              <a href="{{ URL::to('/editEvent/'.$event->eID) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa loại vé này ko?')" href="{{ URL::to('/deleteEvent/'.$event->eID) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
            <td><span class="text-ellipsis">{{ $event->eID }} </span></td>
            <td><span class="text-ellipsis">{{ $event->eName }}</span></td>
            <td><span class="text-ellipsis">{{ $event->eStatus }}</span></td>
            <td><span class="text-ellipsis">{{ $event->eDate }}</span></td>         
            <td><span class="text-ellipsis">{{ $event->eDescription }}</span></td>

            <td><span class="text-ellipsis">
                <?php echo $event->eContent ?>
                <style>
                {{ $event->eContentCSS }}
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