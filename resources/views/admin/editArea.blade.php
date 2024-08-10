@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật khu vực vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/updateArea/'.$editArea-> areaID)}}" method="post">
                            {{ csrf_field() }}
                        {{-- <div class="form-group">
                            <label for="title">Tên bài viết(title)</label>
                            <input type="text" value="{{ $editPosts -> title }}"  class="form-control" name="title"  id="title">
                        </div> --}}
                        <div class="form-group">
                            <label for="areaID">areaID</label>
                            <input type="text" value="{{ $editArea->areaID }}" class="form-control" name="areaID" id="areaID">
                        </div>

                        <div class="form-group">
                            <label for="areaName">Tên khu vưc(areaName)</label>
                            <input type="text" value="{{ $editArea->areaName }}" class="form-control" name="areaName" id="areaName">
                        </div>
                       
                        <button type="submit" name="updateArea" class="btn btn-info">cập nhật khu vực </button>
                        </form>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </section>
</div>    
@endsection
