
@extends('layout/header')
@section('content')

<div class="contentVeChiTiet">
    <div class="imgHead-VeChiTiet">
        @foreach ($images as $image)
            <img src="{{ asset($image->ticketImgPath) }}" alt="Image Ticket">
        @endforeach
    </div>

    <div class="introduce-ticket">
        <p class="ticketName-VeChiTiet">{{ $vechitiet -> ticketName }}</p>
        {{-- <p class="ticketName-VeChiTiet">Vé Trong Công Viên</p> --}}

        <div class="linebw-VeChiTiet"></div>
    </div>
    <div class="introduceRight-ticket">
        <p class="mota-VeChiTiet">Mô Tả</p>

        <div class="linebw2-VeChiTiet"></div>
        <p class="DescTicket-VeChiTiet">{{ $vechitiet -> ticketDescription }}</p>
        {{-- <p class="DescTicket-VeChiTiet">Đầm Sen là điểm check-in được ưa chuộng của giới trẻ hiện nay.</p> --}}
    </div>

{{-- -----------------------content --}}
    <div class="content-VeChiTiet" >
        <div class="root">
            <div class="container">
              <img
                class="container-child"
                loading="lazy"
                alt=""
                src="./public/frame-11.svg"
              />
      
              <div class="info-block">
                <div class="hours-block">
                  <h2 class="gi-m-ca">GIỜ MỞ CỬA</h2>
                  <div class="validity">
                    <div class="h00-8h00-container">
                      <p class="h00-8h00">4h00 - 8h00</p>
                      <p class="mi-ngy">(mỗi ngày)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container1">
              <img
                class="container-item"
                loading="lazy"
                alt=""
                src="./public/frame-11-1.svg"
              />
      
              <div class="container-inner">
                <div class="frame-parent">
                  <div class="gi-v-wrapper">
                    <h2 class="gi-v">GIÁ VÉ</h2>
                  </div>
                  <div class="nglt">5.000 đồng/lượt</div>
                </div>
              </div>
            </div>
            <div class="container2">
              <img
                class="frame-icon"
                loading="lazy"
                alt=""
                src="./public/frame-11-2.svg"
              />
      
              <div class="frame-div">
                <div class="v-thng-parent">
                  <h2 class="v-thng">VÉ THÁNG</h2>
                  <div class="cha-p-dng-wrapper">
                    <div class="cha-p-dng">Chưa áp dụng</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <style>
        /* {{ $vechitiet->ticketContentCss }} */
        .container-child {
  width: 295px;
  flex: 1;
  position: relative;
  max-height: 100%;
  overflow: hidden;
  max-width: 97%;
}
.gi-m-ca {
  margin: 0;
  position: relative;
  font-size: inherit;
  line-height: 120%;
  font-weight: 800;
  font-family: inherit;
}
.h00-8h00,
.mi-ngy {
  margin: 0;
}
.h00-8h00-container {
  position: relative;
  line-height: 120%;
  font-weight: 500;
}
.validity {
  flex-direction: row;
  padding: 0 59px;
  font-size: var(--nunito-23px-23px-medium-size);
  color: var(--gray-gray-500);
}
.container,
.hours-block,
.info-block,
.validity {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.hours-block {
  flex-direction: column;
  gap: var(--gap-5xs);
}
.container,
.info-block {
  box-sizing: border-box;
}
.info-block {
  flex-direction: row;
  padding: 0 23px 0 22px;
  max-width: 100%;
}
.container {
  height: 441px;
  box-shadow: 0 5.1px 10.2px rgba(0, 0, 0, 0.2);
  border-radius: var(--br-5xl);
  background-color: var(--white);
  border: 5.1px solid var(--color-mediumseagreen);
  overflow: hidden;
  flex-direction: column;
  padding: var(--padding-19xl) var(--padding-6xl) 93px var(--padding-7xl);
  gap: var(--gap-26xl);
  max-width: 100%;
}
.container-item {
  width: 295px;
  flex: 1;
  position: relative;
  max-height: 100%;
  overflow: hidden;
  max-width: 97%;
}
.gi-v {
  margin: 0;
  position: relative;
  font-size: inherit;
  line-height: 120%;
  font-weight: 800;
  font-family: inherit;
}
.gi-v-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0 15px;
}
.nglt {
  position: relative;
  font-size: var(--nunito-23px-23px-medium-size);
  line-height: 28px;
  font-weight: 500;
  color: var(--gray-gray-500);
  text-align: left;
}
.container-inner,
.container1,
.frame-parent {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.frame-parent {
  flex-direction: column;
  gap: var(--gap-5xs);
}
.container-inner,
.container1 {
  box-sizing: border-box;
}
.container-inner {
  flex-direction: row;
  padding: 0 64px 0 63px;
  max-width: 100%;
}
.container1 {
  height: 441px;
  box-shadow: 0 5.1px 10.2px rgba(0, 0, 0, 0.2);
  border-radius: var(--br-5xl);
  background-color: var(--white);
  border: 5.1px solid #ff41b2;
  overflow: hidden;
  flex-direction: column;
  padding: var(--padding-19xl) var(--padding-6xl) var(--padding-102xl)
    var(--padding-7xl);
  gap: var(--gap-26xl);
  max-width: 100%;
  color: #fa40af;
}
.frame-icon {
  width: 295px;
  flex: 1;
  position: relative;
  max-height: 100%;
  overflow: hidden;
  max-width: 97%;
}
.v-thng {
  margin: 0;
  position: relative;
  font-size: inherit;
  line-height: 120%;
  font-weight: 800;
  font-family: inherit;
}
.cha-p-dng {
  position: relative;
  line-height: 28px;
  font-weight: 500;
}
.cha-p-dng-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0 33px;
  text-align: left;
  font-size: var(--nunito-23px-23px-medium-size);
  color: var(--gray-gray-500);
}
.v-thng-parent {
  display: flex;
  flex-direction: column;
  gap: var(--gap-5xs);
}
.container2,
.frame-div,
.root,
.v-thng-parent {
  align-items: flex-start;
  justify-content: flex-start;
}
.frame-div {
  display: flex;
  flex-direction: row;
  padding: 0 42px;
  box-sizing: border-box;
  max-width: 100%;
}
.container2,
.root {
  max-width: 100%;
}
.container2 {
  height: 441px;
  box-shadow: 0 5.1px 10.2px rgba(0, 0, 0, 0.2);
  border-radius: var(--br-5xl);
  background-color: var(--white);
  border: 5.1px solid var(--color-cornflowerblue);
  box-sizing: border-box;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  padding: var(--padding-19xl) var(--padding-6xl) var(--padding-102xl)
    var(--padding-7xl);
  gap: var(--gap-26xl);
  color: var(--color-cornflowerblue);
}
.root {
  width: 1188px;
  display: grid;
  flex-direction: row;
  gap: 60px;
  line-height: normal;
  letter-spacing: normal;
  grid-template-columns: repeat(3, minmax(267px, 1fr));
  text-align: center;
  font-size: var(--font-size-21xl);
  color: var(--color-mediumseagreen);
  font-family: var(--nunito-23px-23px-medium);
}
@media screen and (max-width: 900px) {
  .gi-m-ca,
  .gi-v,
  .v-thng {
    font-size: var(--font-size-13xl);
    line-height: 38px;
  }
  .root {
    justify-content: center;
    grid-template-columns: repeat(2, minmax(267px, 463px));
  }
}
@media screen and (max-width: 700px) {
  .root {
    gap: 30px;
    grid-template-columns: minmax(267px, 1fr);
  }
}
@media screen and (max-width: 450px) {
  .gi-m-ca {
    font-size: var(--font-size-5xl);
    line-height: 29px;
  }
  .h00-8h00-container {
    font-size: var(--font-size-lg);
    line-height: 22px;
  }
  .container {
    gap: var(--gap-3xl);
    padding-top: var(--padding-6xl);
    padding-bottom: 60px;
    box-sizing: border-box;
  }
  .gi-v {
    font-size: var(--font-size-5xl);
    line-height: 29px;
  }
  .nglt {
    font-size: var(--font-size-lg);
    line-height: 22px;
  }
  .container-inner {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }
  .container1 {
    gap: var(--gap-3xl);
    padding-top: var(--padding-6xl);
    padding-bottom: var(--padding-60xl);
    box-sizing: border-box;
  }
  .v-thng {
    font-size: var(--font-size-5xl);
    line-height: 29px;
  }
  .cha-p-dng {
    font-size: var(--font-size-lg);
    line-height: 22px;
  }
  .frame-div {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }
  .container2 {
    gap: var(--gap-3xl);
    padding-top: var(--padding-6xl);
    padding-bottom: var(--padding-60xl);
    box-sizing: border-box;
  }
}

body {
  margin: 0;
  line-height: normal;
}

:root {
  /* fonts */
  --nunito-23px-23px-medium: Nunito;

  /* font sizes */
  --nunito-23px-23px-medium-size: 23px;
  --font-size-lg: 18px;
  --font-size-21xl: 40px;
  --font-size-13xl: 32px;
  --font-size-5xl: 24px;

  /* Colors */
  --white: #fff;
  --color-cornflowerblue: #3781db;
  --gray-gray-500: #666;
  --color-mediumseagreen: #259e58;

  /* Gaps */
  --gap-26xl: 45px;
  --gap-3xl: 22px;
  --gap-5xs: 8px;

  /* Paddings */
  --padding-19xl: 38px;
  --padding-6xl: 25px;
  --padding-102xl: 121px;
  --padding-7xl: 26px;
  --padding-60xl: 79px;
  --padding-xl: 20px;

  /* Border radiuses */
  --br-5xl: 24px;
}

        </style>

    </div>

{{-- -----------------footer------------------------- --}}
  
</div>
    
@endsection 