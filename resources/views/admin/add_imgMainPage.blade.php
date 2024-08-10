
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm hình ảnh vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveImgMainPage')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="imgName">Tên Hình Ảnh(imgName)</label>
                                <input type="text" class="form-control" name="imgName"  id="imgName"  >
                            </div>
                            <div class="form-group">
                                <label for="imgPath">Chọn Hình Ảnh</label>
                                <input type="file" class="form-control" name="imgPath" id="imgPath" required>
                            </div>


                        <button type="submit" name="add_imgMainPage" class="btn btn-info">Thêm hình ảnh</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection