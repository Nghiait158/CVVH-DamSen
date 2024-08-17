
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm hình ảnh sự kiện vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveEventImg')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="eImgID">ID Hình Ảnh(eImgID)</label>
                                <input type="text" class="form-control" name="eImgID"  id="eImgID"  >
                            </div>
                            <div class="form-group">
                                <label for="eImgName">Tên Hình Ảnh(eImgName) *Lưu ý: viết thường không dấu, không khoảng trắng</label>
                                <input type="text" class="form-control" name="eImgName"  id="eImgName"  >
                            </div>
                            <div class="form-group">
                                @csrf
                                <label for="eID">Sự Kiện(eID)</label>
                                <select class="form-control" name="eID">
                                    @foreach($all_event ?? [] as $event ) 
                                     <option value="{{ $event->eID }}">{{ $event->eName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="eImgPath">Chọn Hình Ảnh</label>
                                <input type="file" class="form-control" name="eImgPath" id="eImgPath" required>
                            </div>

                        <button type="submit" name="add_eventImg" class="btn btn-info">Thêm hình ảnh</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection