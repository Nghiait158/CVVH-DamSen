
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
                        <form role="form" action="{{URL::to('/saveLocationImg')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="loImgName">Tên Hình Ảnh(loImgName)</label>
                                <input type="text" class="form-control" name="loImgName"  id="loImgName"  >
                            </div>
                            <div class="form-group">
                                <label for="loImgPath">Chọn Hình Ảnh</label>
                                <input type="file" class="form-control" name="loImgPath" id="loImgPath" required>
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

                        <button type="submit" name="add_locationImg" class="btn btn-info">Thêm hình ảnh</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection