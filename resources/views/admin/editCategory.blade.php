@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật khu vực vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/updateCategory/'.$editCategory-> categoryID)}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="categoryName">Tên thể loại(categoryName)</label>
                            <input type="text" value="{{ $editCategory->categoryName }}"  class="form-control" name="categoryName"  id="categoryName">
                        </div>
                        <select class="form-control" name="areaID">
                            @foreach($all_area as $key =>$area)
                             <option value="{{ $area->areaID }}">{{ $area->areaName }}</option>
                            @endforeach
                        </select>
                       
                        <button type="submit" name="updateCategory" class="btn btn-info">cập nhật khu vực </button>
                        </form>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </section>
</div>    
@endsection
