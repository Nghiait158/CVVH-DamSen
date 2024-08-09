
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thể loại vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveCategory')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="categoryName">Tên thể loại(categoryName)</label>
                            <input type="text" class="form-control" name="categoryName"  id="categoryName" placeholder="Tên thể loại" >
                        </div>
                        <div class="form-group">
                            @csrf
                        
                            <label for="areaID">Khu vực(areaID)</label>
                            <select class="form-control" name="areaID">
                                @foreach($all_area as $key =>$area)
                                 <option value="{{ $area->areaID }}">{{ $area->areaName }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="categoryID" class="form-control" id="categoryID" placeholder="Tác Giả"> --}}
                        </div>

                        <button type="submit" name="addCategory" class="btn btn-info">Thêm khu vực</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection
