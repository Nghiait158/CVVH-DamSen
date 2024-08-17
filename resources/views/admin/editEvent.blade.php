@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sự kiện vào cơ sở dữ liệu  
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
                        <form role="form" action="{{URL::to('/updateEvent/'.$editEvent-> eID )}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="eID">ID sự kiện (eID )</label>
                            <input type="text" value="{{ $editEvent->eID  }}" class="form-control" name="eID"  id="eID"  >
                        </div>
                        <div class="form-group">
                            <label for="eName">Tên vé(eName)</label>
                            <input type="text" value="{{ $editEvent->eName  }}" class="form-control" name="eName"  id="eName" >
                        </div>
                        <div class="form-group">
                            <label for="eStatus">Trạng thái sự kiện(eStatus)</label>
                            <input type="text" value="{{ $editEvent->eStatus  }}" class="form-control" name="eStatus"  id="eStatus" >
                        </div>
                        <div class="form-group">
                            <label for="eDate">Ngày sự kiện (eDate)</label>
                            <input type="text" value="{{ $editEvent->eDate  }}" class="form-control" name="eDate"  id="eDate" >
                        </div>
                        <div class="form-group">
                            <label for="eDescription">Mô tả sự kiện(eDescription)</label>
                            <input type="text" value="{{ $editEvent->eDescription  }}" class="form-control" name="eDescription"  id="eDescription" >
                        </div>
                        <div class="form-group">
                            <label for="eContent">Content(eContent)</label>
                            <textarea style="width: 994px; height: 237px;" value="{{ $editEvent->eContent  }}" class="form-control tiny" name="eContent" id="eContent" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="eContentCSS">Content CSS(eContentCSS)</label>
                            <textarea style="width: 994px; height: 237px;" value="{{ $editEvent->eContentCSS  }}" type="text" class="form-control" name="eContentCSS"  id="eContentCSS"></textarea>
                        </div>
                            
                        <div class="form-group">
                            <label for="eContentJS">Content JS(eContentJS)</label>
                            <textarea style="width: 994px; height: 237px;" type="text" value="{{ $editEvent->eContentJS  }}" class="form-control" name="eContentJS"  id="eContentJS"></textarea>
                        </div>
                        <button type="submit" name="updateEvent" class="btn btn-info">Cập nhật sự kiện  </button>
                        </form>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </section>
</div>    
@endsection
