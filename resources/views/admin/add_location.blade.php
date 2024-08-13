
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm địa điểm vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveLocation')}}" method="post">
                            {{ csrf_field() }}
                         <div class="form-group">
                                <label for="loName">ID địa điểm(loID)</label>
                                <input type="text" class="form-control" name="loID"  id="loID"  >
                        </div>
                        <div class="form-group">
                            <label for="loName">Tên địa điểm (loName)</label>
                            <input type="text" class="form-control" name="loName"  id="loName"  >
                        </div>
                        <div class="form-group">
                            <label for="loDescription">Mô tả địa điểm(loDescription)</label>
                            <input type="text" class="form-control" name="loDescription"  id="loDescription" >
                        </div>
                        <div class="form-group">
                            <label for="loContent">Content(loContent)</label>
                            <textarea style="width: 994px; height: 237px;" class="form-control tiny" name="loContent" id="loContent" ></textarea>
                
                            {{-- <textarea style="width: 994px; height: 237px;" type="text" class="form-control" name="loContent"  id="loContent"></textarea> --}}
                        </div>
                        <div class="form-group">
                            <label for="loContentCss">Content CSS(loContentCss)</label>
                            <textarea style="width: 994px; height: 237px;" type="text" class="form-control" name="loContentCss"  id="loContentCss"></textarea>
                        </div>
                            
                        <div class="form-group">
                            <label for="loContentJS">Content JS(loContentJS)</label>
                            <textarea style="width: 994px; height: 237px;" type="text" class="form-control" name="loContentJS"  id="loContentJS"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="loDate">Ngày(loDate)</label>
                            <input type="text" class="form-control" name="loDate"  id="loDate" >
                        </div>
                        <h1></h1>
                        <div class="form-group">
                            @csrf
                        
                            <label for="areaID">Thể loại(categoryID)</label>
                            <select class="form-control" name="categoryID">
                                @foreach($all_Cate as $key =>$cate)
                                 <option value="{{ $cate->categoryID }}">{{ $cate->categoryName }}</option>
                                @endforeach
                            </select>
                        </div>


                        <button type="submit" name="addLocation" class="btn btn-info">Thêm khu vực</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection