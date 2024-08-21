@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê các ThucVat
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
            <th>tvID</th>
            <th>tvName</th>
            <th>tvContent</th>
            <th>tvImgPath</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($allThucVat ?? [] as $thucvat)
          <tr>
            <td>
              <a href="{{ URL::to('/editThucVat/'.$thucvat->tvID) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa loại vé này ko?')" href="{{ URL::to('/deleteThucVat/'.$thucvat->tvID) }}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
            <td><span class="text-ellipsis">{{ $thucvat->tvID }} </span></td>
            <td><span class="text-ellipsis">{{ $thucvat->tvName }}</span></td>
            <td><span class="text-ellipsis">
                <?php echo $thucvat->tvContent ?>
                <style>
                {{ $thucvat->tvContentCSS }}
                </style>
            </span></td>
            <td><span class="text-ellipsis"><img class="imgShow" src="{{ $thucvat->tvImgPath }}"></span></td>
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