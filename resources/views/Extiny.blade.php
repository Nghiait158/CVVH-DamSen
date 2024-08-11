<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tiny.cloud/1/1q890v2u4elq568lhuaho9gsb44mdc546lkuzh3v93gi841p/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  {{-- <script type="text/javascript">
    tinymce.init({
        selector: '.tiny',
        // plugins: 'code',
        // toolbar: 'code',
        // setup: function(editor) {
        //     editor.on('change', function() {
        //     var content = editor.getContent();
        //     // Lưu nội dung vào cơ sở dữ liệu
        //     });
        // }
        // inline: true,
        plugins: 'advlist autolink list image charmap print preview hr anchor pagebreak searchreplace visualblock code insertdatetime code',
    });
  </script> --}}
  <script type="text/javascript">
    tinymce.init({
      selector: '.tiny',
      width: 900,
      height: 500,
      plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'help'
      ],
      toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify code | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
      menu: {
        favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
      },
      menubar: 'favs file edit view insert format tools table help',
      content_css: 'css/content.css'
    });
    </script>
</head>

<body>
    {{-- <h1 id="myeditable-h1">This Title Can Be Edited If You Click Here</h1> --}}
    <div class="position-center">
        <form role="form" action="{{URL::to('/saveLocation')}}" method="post">
            {{ csrf_field() }}
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
            <label for="loDate">Ngày(loDate)</label>
            <input type="text" class="form-control" name="loDate"  id="loDate" >
        </div>
        <h1>hello</h1>
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
    </div>
  </form>
</body>
</html>