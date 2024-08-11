@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật hình ảnh địa điểm vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/updateLocationImg/'.$editLocationImg-> loImgID)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="loImgID">loImgID</label>
                            <input type="text" value="{{ $editLocationImg->loImgID }}"  class="form-control" name="loImgID"  id="loImgID">
                        </div>    
                        <div class="form-group">
                            <label for="loImgName">Tên hình ảnh(loImgName)</label>
                            <input type="text" value="{{ $editLocationImg->loImgName }}"  class="form-control" name="loImgName"  id="loImgName">
                        </div>
                        <div class="form-group">
                            @csrf
                        
                            <label for="loID">Địa điểm(loID)</label>
                            <select class="form-control" name="loID">
                                @foreach($all_location ?? [] as $location ) 
                                 <option value="{{ $location->loID }}">{{ $location->loName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="loImgPath">Chọn hình ảnh thay thế(nếu có)</label>
                            <input type="file" value="{{ $editLocationImg->loImgPath }}" class="form-control" name="loImgPath" id="loImgPath" required>
                        </div>
                        <button type="submit" name="updateImgMainPage" class="btn btn-info">cập nhật hình ảnh </button>
                        </form>
                    </div>
                </div>
            </section>
</div>    
@endsection
