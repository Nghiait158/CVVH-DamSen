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
                        {{-- <div class="form-group">
                            <label for="loImgPath">Chọn hình ảnh thay thế(nếu có)</label>
                            <input type="file" value="{{ $editLocationImg->loImgPath }}" class="form-control" name="loImgPath" id="loImgPath" required>
                        </div> --}}
                        <div class="form-group">
                            <label for="imageChoice">Chọn cách nhập hình ảnh:</label><br>
                            <input type="radio" id="fileOption" name="imageChoice" value="file" checked>
                            <label for="fileOption">Tải lên từ máy tính</label><br>
                            <input type="radio" id="textOption" name="imageChoice" value="text">
                            <label for="textOption">Nhập URL hình ảnh</label>
                        </div>
                        
                        <div class="form-group" id="fileInput">
                            <label for="loImgPath">Chọn Hình Ảnh</label>
                            <input type="file" value="{{ $editLocationImg->loImgPath }}" class="form-control" name="loImgPath" id="loImgPath">
                        </div>
                        
                        <div class="form-group" id="textInput" style="display: none;">
                            <label for="locationImgUrl">Nhập URL hình ảnh</label>
                            <input type="text" value="{{ $editLocationImg->loImgPath }}" class="form-control" name="locationImgUrl" id="locationImgUrl">
                        </div>
                        <button type="submit" name="updateImgMainPage" class="btn btn-info">cập nhật hình ảnh </button>
                        </form>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const fileOption = document.getElementById('fileOption');
                            const textOption = document.getElementById('textOption');
                            const fileInput = document.getElementById('fileInput');
                            const textInput = document.getElementById('textInput');

                            fileOption.addEventListener('change', function () {
                                fileInput.style.display = 'block';
                                textInput.style.display = 'none';
                            });

                            textOption.addEventListener('change', function () {
                                fileInput.style.display = 'none';
                                textInput.style.display = 'block';
                            });
                        });

                    </script>
                </div>
            </section>
</div>    
@endsection
