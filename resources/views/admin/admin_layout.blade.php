<!DOCTYPE html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{('/backend/css/bootstrap.min.css')}}" >
<script src="https://cdn.tiny.cloud/1/1q890v2u4elq568lhuaho9gsb44mdc546lkuzh3v93gi841p/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{('/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{('/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<link href="{{('/backend/css/jquery.dataTables.min.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{('/backend/css/font.css')}}" type="text/css"/>

<link href="{{('/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{('/backend/css/morris.css')}}" type="text/css"/>

<!-- calendar -->
<link rel="stylesheet" href="{{('/backend/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{('/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{('/backend/js/raphael-min.js')}}"></script>
<script src="{{('/backend/js/morris.js')}}"></script>
<script type="text/javascript">
    tinymce.init({
      selector: '.tiny',
      width: 990,
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
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a target="_blank" href="{{url('/')}}" class="logo">
        HomePage
    </a>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{('public/backend/images/2.png')}}">
                <span class="username">
                	<?php
					$name = Session::get('admin_name');
					if($name){
						echo $name;
						
					}
					?>

                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i>Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/admin')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Tổng quan</span>
                    </a>
                </li>
                 
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Khu vực</span>
                    </a>
                    <ul class="sub">
                        {{-- <li><a href="{{URL::to('/manage-slider')}}">Profile</a></li> --}}
                        <li><a href="{{URL::to('/area_manage')}}">Quản lý các khu vực</a></li>
                        <li><a href="{{URL::to('/add_area')}}">Thêm khu vực</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Thể Loại</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/category_manage')}}">Quản lý các thể loại</a></li>
                        <li><a href="{{URL::to('/add_category')}}">Thêm thể loại</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Địa Điểm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/location_manage')}}">Quản lý các địa điểm</a></li>
                        <li><a href="{{URL::to('/add_location')}}">Thêm địa điểm</a></li>
                        <li><a href="{{URL::to('/locationImg_manage')}}">Quản lý hình ảnh địa điểm</a></li>
                        <li><a href="{{URL::to('/add_locationImg')}}">Thêm hình ảnh địa điểm</a></li>
                    </ul>
                </li>
                   
                </li>
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Hình ảnh trang Khám Phá</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/imgMainPage_manage')}}">Quản lý hình ảnh</a></li>
						<li><a href="{{URL::to('/add_imgMainPage')}}">Thêm hình ảnh</a></li>
                    </ul>
                </li>
                 <li class="sub-menu">
                    {{-- <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Tuyển Dụng</span>
                    </a> --}}
                    <ul class="sub">
                        <li><a href="{{URL::to('/job_manage')}}">Quản Lí Tuyển Dụng</a></li>
                        <li><a href="{{URL::to('/add_recruitments')}}">Thêm Bài Viết Tuyển Dụng</a></li>
                        
                        <li><a href="{{URL::to('/employee')}}">Nhân Viên</a></li>

                        {{-- <li><a href="{{URL::to('/employee')}}">Nhân Viên</a></li> --}}
                        
                    </ul>
                </li>
                 <li class="sub-menu">
                    {{-- <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Frontend</span>
                    </a> --}}
                    <ul class="sub">
                        <li><a href="{{URL::to('/manageImgPage')}}">Quản lý Hình ảnh Page</a></li>
                        
                        
                      
                    </ul>
                </li>
                
             
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        @yield('admin_content')
    </section>
 <!-- footer -->
		
  <!-- / footer -->
</section>
<!--main content end-->
</section>

<script src="{{('/backend/js/bootstrap.js')}}"></script>
<script src="{{('/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{('/backend/js/scripts.js')}}"></script>
<script src="{{('/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{('/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{('/backend/ckeditor/ckeditor.js')}}"></script>
<script src="{{('/backend/js/jquery.form-validator.min.js')}}"></script>
<script src="{{('/backend/js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
</script>
<script type="text/javascript">
        $.validate({
            
        });
</script>
 <script>
       // Replace the <textarea id="editor1"> with a CKEditor
       // instance, using default configuration.
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('ckeditor2');
        CKEDITOR.replace('ckeditor3');
        CKEDITOR.replace('id4');
</script>

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{('/backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="{{('/backend/js/monthly.js')}}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
