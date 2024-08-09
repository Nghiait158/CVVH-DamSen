
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm khu vực vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/saveArea')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="areaName">Tên khu vưc(areaName)</label>
                            <input type="text" class="form-control" name="areaName"  id="areaName" placeholder="Tên khu vưc" >
                        </div>
                       

                        <button type="submit" name="addArea" class="btn btn-info">Thêm khu vực</button>
                        </form>
                    </div>

                </div>
            </section>
</div>    
@endsection
