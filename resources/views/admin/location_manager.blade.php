@extends('admin.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê các địa điểm 
    </div>
    {{-- <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <form action="{{ URL::to('/searchPosts') }}" method="GET">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="submit">Go!</button>
            </span>
          </form>
        </div>
      </div>
    </div> --}}
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
            <th>areaID</th>
            <th>areaName</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allArea ?? [] as $area)
          <tr>
            {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="recruit[]"><i></i></label></td> --}}
            <td><span class="text-ellipsis">{{ $area->areaID }} </span></td>
            <td><span class="text-ellipsis">{{ $area->areaName }}</span></td>
            {{-- <td><span class="text-ellipsis">{{ $recruit -> numsOfRecruits }}</span></td> --}}

            <td>
              {{-- <a href="{{ URL::to('/editPosts/'.$post->postID) }}" class="active styling-edit" ui-toggle-class=""> --}}
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              {{-- <a onclick="return confirm('Bạn có chắc là muốn xóa bài viết này ko?')" href="{{ URL::to('/deletePosts/'.$post->postID) }}" class="active styling-edit" ui-toggle-class=""> --}}
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
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
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