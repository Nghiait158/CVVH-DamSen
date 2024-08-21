
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm ThucVat vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveThucVat')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="tvID">ID ThucVat(tvID)</label>
                                <input type="text" class="form-control" name="tvID"  id="tvID"  >
                            </div>
                            <div class="form-group">
                                <label for="tvName">Tên ThucVat(tvName)</label>
                                <input type="text" class="form-control" name="tvName"  id="tvName"  >
                            </div>
                            <div class="form-group">
                                <label for="tvStatus">Trạng thái ThucVat (tvStatus)</label>
                                <input type="text" class="form-control" name="tvStatus"  id="tvStatus" >
                            </div>
                             <div class="form-group">
                                <label for="tvDate">Ngày ThucVat(tvDate)</label>
                                <input type="text" class="form-control" name="tvDate"  id="tvDate" >
                            </div>
                            <div class="form-group">
                                <label for="tvDescription">Mô tả ThucVat(tvDescription)</label>
                                <input type="text" class="form-control" name="tvDescription"  id="tvDescription" >
                            </div>
                            <div class="form-group">
                                <label for="tvContent">Content(tvContent)</label>
                                <textarea style="width: 994px; height: 237px;" class="form-control tiny" name="tvContent" id="tvContent" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tvContentCSS">Content CSS(tvContentCSS)</label>
                                <textarea style="width: 994px; height: 237px;" type="text" class="form-control" name="tvContentCSS"  id="tvContentCSS"></textarea>
                            </div>
                                
                            <div class="form-group">
                                <label for="tvContentJS">Content JS(tvContentJS)</label>
                                <textarea style="width: 994px; height: 237px;" type="text" class="form-control" name="tvContentJS"  id="tvContentJS"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imageChoice">Chọn cách nhập hình ảnh:</label><br>
                                <input type="radio" id="fileOption" name="imageChoice" value="file" checked>
                                <label for="fileOption">Tải lên từ máy tính</label><br>
                                <input type="radio" id="textOption" name="imageChoice" value="text">
                                <label for="textOption">Nhập URL hình ảnh</label>
                            </div>
                            
                            <div class="form-group" id="fileInput">
                                <label for="tvImgPath">Chọn Hình Ảnh</label>
                                <input type="file" class="form-control" name="tvImgPath" id="tvImgPath">
                            </div>
                            
                            <div class="form-group" id="textInput" style="display: none;">
                                <label for="tvImgUrl">Nhập URL hình ảnh</label>
                                <input type="text" class="form-control" name="tvImgUrl" id="tvImgUrl">
                            </div>
                            


                        <button type="submit" name="add_thucvat" class="btn btn-info">Thêm ThucVat</button>
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