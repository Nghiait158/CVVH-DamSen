@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Các hình ảnh của địa điểm
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
            <th>loImgID</th>
            <th>loImgName</th>
            <th>IMG</th>
            <th>loID</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allLocationImg ?? [] as $img)
          <tr>
            <td><span class="text-ellipsis">{{ $img->loImgID }} </span></td>
            <td><span class="text-ellipsis">{{ $img->loImgName }}</span></td>
            <td><span class="text-ellipsis"><img class="imgShow" src="{{ $img->loImgPath }}"></span></td>
            <td><span class="text-ellipsis">{{ $img->loID }}</span></td>
            <td>
              <a href="{{ URL::to('/editLocationImg/'.$img->loImgID) }}" class="active styling-edit" ui-toggle-class=""> 
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
           <a onclick="return confirm('Bạn có chắc là muốn xóa hình ảnh này ko?')" href="{{ URL::to('/deleteLocationImg/'.$img->loImgID) }}" class="active styling-edit" ui-toggle-class=""> 
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        {{-- <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div> --}}
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
             {{-- {!!$all_category_product->links()!!} --}}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection