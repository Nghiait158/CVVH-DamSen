@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật hình ảnh loại vé vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/updateEventImg/'.$editEventImg-> eImgID )}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="eImgID ">eImgID </label>
                            <input type="text" value="{{ $editEventImg->eImgID  }}"  class="form-control" name="eImgID " id="eImgID ">
                        </div>    
                        <div class="form-group">
                            <label for="eImgName">Tên hình ảnh(eImgName)</label>
                            <input type="text" value="{{ $editEventImg->eImgName }}"  class="form-control" name="eImgName"  id="eImgName">
                        </div>
                        <div class="form-group">
                            @csrf
                        
                            <label for="eID ">Vé (eID )</label>
                            <select class="form-control" name="eID">
                                @foreach($all_event ?? [] as $event ) 
                                 <option value="{{ $event->eID }}">{{ $event->ticketName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="eImgPath">Chọn hình ảnh thay thế(nếu có)</label>
                            <input type="file" value="{{ $editEventImg->eImgPath }}" class="form-control" name="eImgPath" id="eImgPath" required>
                        </div>
                        <button type="submit" name="updateEventImg" class="btn btn-info">cập nhật hình ảnh</button>
                        </form>
                    </div>
                </div>
            </section>
</div>    
@endsection
