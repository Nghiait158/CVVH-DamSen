<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{('/frontend/css/header.css')}}" />
    {{-- <link rel="stylesheet" href="{{('/frontend/css/global.css')}}" /> --}}
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bangers:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;800&display=swap"
    />
  
  </head>

{{-- --------------------- Start Body ----------------------}}
<body> 
  <aside>
      <div id="sidebar" class="nav-collapse">
          <!-- sidebar menu start-->
          <div class="leftside-navigation">
            <div class="menu-wrapperMap">
              <div class="menuMap">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
                  <path d="M2.5 10H23.5M2.5 2.5H23.5M2.5 17.5H13" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </div>
            <ul class="sidebar-menu" id="nav-accordion">
                  <li class="sub-menu">
                      <a class="active" href="{{URL::to('/adminContent')}}">
                          <span>Trang chủ</span>
                      </a>
                  </li>
                   
                  <li class="sub-menu">
                      <a href="javascript:;">Khám Phá</a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">Giới thiệu </a>
                      <ul class="sub">
                        <li><a href="">Lịch sử hình thành</a></li>
                        <li><a href="">Thành viên</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>    
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">Giá vé </a>
                      <ul class="sub">
                          <li><a href="">Vé trong công viên</a></li>
                          <li><a href="">Vé tập thể</a></li>
                          <li><a href="">Vé dịch vụ</a></li>                          
                          <li><a href="">Vé tập thể dục</a></li>                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                    <a href="javascript:;">Sự Kiện </a>
                </li>
                <div class="image-container">
                  <img class="damSenPark" loading="lazy" alt="" src="{{ ('/frontEnd/img/damSenPark.png') }}">
                  <img class="logoDamSen" style="position: relative; left: -7px; top: -3px;" loading="lazy" alt="" src="{{ ('/frontEnd/img/logoDamSen.png') }}">
              </div>
                    
                  

            </ul>     
          <!-- sidebar menu end-->

          
      </div>
  </aside>   
  <div style="margin-left:13%;padding:1px 16px;height:1000px; " class="show">
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p> <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
    <p>Some text..</p>
   </div>

@yield('content')
</body>
{{-- --------------------- End Body ----------------------}}

<footer>
    <h1>Footer</h1>
    
</footer>

