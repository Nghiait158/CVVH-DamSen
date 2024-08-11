@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật hình ảnh vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/updateImgMainPage/'.$editImgMainPage-> imgID)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="imgID">imgID</label>
                            <input type="text" value="{{ $editImgMainPage->imgID }}"  class="form-control" name="imgID"  id="imgID">
                        </div>    
                        <div class="form-group">
                            <label for="imgName">Tên hình ảnh(imgName)</label>
                            <input type="text" value="{{ $editImgMainPage->imgName }}"  class="form-control" name="imgName"  id="imgName">
                        </div>
                        <div class="form-group">
                            <label for="imgPath">Chọn hình ảnh thay thế(nếu có)</label>
                            <input type="file" value="{{ $editImgMainPage->imgPath }}" class="form-control" name="imgPath" id="imgPath" required>
                        </div>
                        <button type="submit" name="updateImgMainPage" class="btn btn-info">cập nhật hình ảnh </button>
                        </form>
                    </div>
                </div>
            </section>
</div>    
@endsection
