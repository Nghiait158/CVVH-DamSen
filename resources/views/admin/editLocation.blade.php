@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật địa điểm vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/updateLocation/'.$editLocation-> loID)}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="loName">ID địa điểm(loID)</label>
                            <input type="text" value="{{ $editLocation->loID }}" class="form-control" name="loID"  id="loID"  >
                        </div>
                        <div class="form-group">
                            <label for="loName">Tên địa điểm (loName)</label>
                            <input type="text" value="{{ $editLocation->loName }}" class="form-control" name="loName"  id="loName"  >
                        </div>
                        <div class="form-group">
                            <label for="loDescription">Mô tả địa điểm(loDescription)</label>
                            <input type="text" value="{{ $editLocation->loDescription }}" class="form-control" name="loDescription"  id="loDescription" >
                        </div>
                        <div class="form-group">
                            <label for="loContent">Content(loContent)</label>
                            <textarea style="width: 994px; height: 237px;" type="text" value="{{ $editLocation->loContent }}" class="form-control" name="loContent"  id="loContent"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="loDate">Ngày(loDate)</label>
                            <input type="text" value="{{ $editLocation->loDate }}" class="form-control" name="loDate"  id="loDate" >
                        </div>
                        <h1></h1>
                        <div class="form-group">
                            @csrf
                        
                            <label for="areaID">Thể loại(categoryID)</label>
                            <select class="form-control" name="categoryID">
                                @foreach($all_cate as $key =>$cate)
                                 <option value="{{ $cate->categoryID }}">{{ $cate->categoryName }}</option>
                                @endforeach
                            </select>
                        </div>
                       
                        <button type="submit" name="updateCategory" class="btn btn-info">Cập nhật khu vực </button>
                        </form>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </section>
</div>    
@endsection
