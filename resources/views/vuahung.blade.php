
@extends('layout/header')
@section('content')

<div class="contentKhamPhaChiTiet">
    <div class="imgHead">
        @foreach ($images as $image)
            <img src="{{ asset($image->loImgPath) }}" alt="Image">
        @endforeach
        {{-- <img class="" src="{{ asset($images->loImgPath) }}" alt="Description of the image"> --}}
    </div>

    <div class="introduce-location">
        <p class="locationTitle-khamphachititet">{{ $locationDetail -> loName }}</p>
        <div class="linebw"></div>
        <div class="under-introduce-location">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M19.8305 8.6998L15.3005 4.1698C14.3505 3.2198 13.0405 2.7098 11.7005 2.7798L6.70046 3.0198C4.70046 3.1098 3.11046 4.6998 3.01046 6.6898L2.77046 11.6898C2.71046 13.0298 3.21046 14.3398 4.16046 15.2898L8.69046 19.8198C10.5505 21.6798 13.5705 21.6798 15.4405 19.8198L19.8305 15.4298C21.7005 13.5798 21.7005 10.5598 19.8305 8.6998ZM9.50046 12.3798C7.92046 12.3798 6.62046 11.0898 6.62046 9.4998C6.62046 7.9098 7.92046 6.6198 9.50046 6.6198C11.0805 6.6198 12.3805 7.9098 12.3805 9.4998C12.3805 11.0898 11.0805 12.3798 9.50046 12.3798ZM17.5305 13.5298L13.5305 17.5298C13.3805 17.6798 13.1905 17.7498 13.0005 17.7498C12.8105 17.7498 12.6205 17.6798 12.4705 17.5298C12.1805 17.2398 12.1805 16.7598 12.4705 16.4698L16.4705 12.4698C16.7605 12.1798 17.2405 12.1798 17.5305 12.4698C17.8205 12.7598 17.8205 13.2398 17.5305 13.5298Z" fill="#EC008C"/>
            </svg>
            <p class="sapdienra-location" >{{ $locationDetail -> areaName }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M10 5.83333V10L12.0833 11.25M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="sapdienra-location">{{ $locationDetail -> loDate }} </p>
        </div>
    </div>


    <div class="description-location">
        <p class="MoTa">Mô tả</p>
        <div class="linebw2"></div>
        <p class="desc">{{ $locationDetail -> loDescription }}</p>
    </div>

    <div class="contentLocation-khamphachitiet" >

        <p class="p1">Hàng ngàn du khách đã đến dâng hương trước tượng Hùng Vương tại Quảng trường vua Hùng trong ngày 14/4/2019. Đây là quảng trường thứ 3 của CVVH Đầm Sen đưa vào hoạt động. (Trước đó, Đầm Sen đã có quảng trường Âu Lạc và quảng trường La Mã chuyên phục vụ sự kiện). Đền thờ này được xem như một cúng phẩm dâng lên trong ngày giổ Quốc tổ.</p>
        <h2>Ra mắt Quảng trường vua Hùng</h2>

        <p class="p2">Quảng trường này có tổng diện tích gần 1000m2. Bao gồm sân hành lễ được lát đá Granite với hoa văn mặt trời đặt ở chính giữa. Kế đến là thang rồng, tiết diện bề ngang 4,5 mét, đáp ứng đoàn khách 5 hàng. Trên cùng là khu vực dâng hương, được thiết kế 3 đền thờ. Chính giữa là chánh điện với tượng vua Hùng cao 1,7 mét, được làm bằng chất liệu composite phủ đồng, đặt trên bệ đá cao 0,8m.</p>

        <img class="img1" src="https://s3-alpha-sig.figma.com/img/7e43/5237/73309c0e5aacb41acc8f3d840eff55b7?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=DPPhIZBsdzl0m-Me0zsi4fcrqEo9sn~x3NeZGwl8iE0xhM~Jk8TTVaIOhiiZkEXh104xGcAv4cM~DVHkVA0738-nAoK5AcKVfP7dKBASX0aw60q1KvMqpn1qxfi-XPMo1YAbYDz1CYw1q~oD5OE~xSB7~8LicHB0MqSjelB~dn3m~UxLtHTmT2~HEGEqz3LOrwRWeIX5Mzwj56T3a3r9H1VkvL7oXIv7H9c-h8wsZMxN4OqvtXuWF9zz~I05DLTcBV9gQ~r3xZEDNXzvN0pyKky5M7kYno-WamXQdXAXKFQU0jEOjNIV3j8OpGJHJzWFDnBeJ47hiCSZAJWneoNkuA__" alt="">

        <p class="underimg1">Quảng trường vua Hùng trong ngày giỗ quốc tổ</p>

        <p class="p3">Bức tượng vua Hùng tại Đầm Sen đã được Thạc sĩ – Điêu khắc gia Phạm Văn Út thực hiện. Tác giả đã xây dựng bố cục vua Hùng ngồi trên ngai, cách điệu từ hoa văn trống đồng. Mặt tượng nhìn thẳng thể hiện sự tôn nghiêm. Tay phải nắm chùm bông lúa, ý muốn đề cao một nền văn hóa lúa nước của dân tộc Việt, cho con cháu đời sau phải gìn giữ và tôn vinh. Tay trái để tự nhiên trong tư thế ngồi trao đổi với các Lạc tướng, Lạc hầu. Các hoa văn trang trí trên bộ trang phục, được lấy cảm hứng từ đường nét của nền văn hóa Đông Sơn. Đặc biệt là hoa văn trên trống đồng Ngọc Lũ.</p>


        <div class="container">
            <div class="box1">
                <img src="https://s3-alpha-sig.figma.com/img/1d27/4ca3/c8eea6a1924a777684dbcc97323aeffe?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=eIvj5TtBf-LYm1dAGXh8y2Zq-xcGcFuwb7gz4fGbwUyCHYiLn3R1x8msToelazZ10R3QQDeiK1xEkwuKJWoFIfdJwt5Mflc9YFCj7~Cl9qFnn34qN7sVC1QZRTVa-K7I3TXOEhB09t0q3Ucsb7cExnfoQKUokWqeKxSyBhe6aFBgz-2M3Iy0EgbnWJ2KwpyIxJv5iUnFDQZSfUN~5kEH2y7dZ-bJQof623N7pyq2Gny6cy7MF8~ZQ2Ydq233JE5NGyd19LJP3GB5ewJKcVTB-q7BaX2GYg-sJlCwmpQhcplvWiAKmk37YLKNVU2weDN49-HsOugbFfDIni~cbgrU7A__" alt="">
                <p>Bức tượng vua Hùng mới được đặt tại Đầm Sen</p>
            </div>
            <div class="box2">
                <img src="https://s3-alpha-sig.figma.com/img/38f5/5806/fd05093d667d201ecb5cba81a4b3ff5e?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=OBbYZS0tjHYQBZlgE5CRWkwJYZX2djY54rF9HVQnQsmILvaC-qvlZoof4DGGaDD4btp5s8ICCV8GxKtKkFL8SMX2xY4Xwzp8Jwo9~IEI5CBFiggU3YOq6x1MVvKL3ryULFTmNC4z8pi4WrLZgjHXmHzYrRSEbZFzaaXkVbJSiL9AO7XlAlMHlOgFJnaKcaQMD~8x5stNYnYHFs7a45z9eUmMQ1SMWKisbixFfrUoUp1LCPfHkazLem0LiFRDaqzy2bj9IOdcFTp3HMRl8wXQeZs1E4jQKbZE~o-6QEBFYuJLT~dPldjl-NEl46z2EE5JibNv5VQZepNrXwLn6EKU2Q__" alt="">
                <p>Điêu khắc gia Phạm Văn Út</p>
            </div>
        </div>

        <img class="img1" src="https://s3-alpha-sig.figma.com/img/e984/f169/782170a03e6ed8506cf58829fa298969?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=CtW9iMh8Z~PNx744gvYNsqp2yStA4ptoYcHwy~Cq~TOsmgtHUfJvAUjNoyaYZxdoU3NXo49PzE8hZhMvkE4H9ZPa24mHK9pASk0XN2GyTuZVDq7I9iVW-aPWd7GemFEuCouCQ~fJ1go7yhr6it8HLrzU0I40Mg33mcemN0-DU3CE5tx75qKJRzX2-zlgTpvr3vHroyECHK-K2eiXX9RVuMR2ANenV7-svX3eMiMWPgc6ufpXRDTXDjslRpWDPoDVk0XsTv7I5lfAxQ9fg~XayDCZY2OqP2RVT2knlot3VBqZrzVypLGKF2~UfzqjwpAtqg8BR9DJ6Ud0OEReDpVMwQ__" alt="">

        <p class="underimg1">Chánh điện thờ vua Hùng trong ngày giỗ tổ</p>

        <p class="p4">Bên cạnh đó, chủ tịch Hồ Chí Minh từng nói: “Các vua Hùng đã có công dựng nước, Bác cháu ta phải cùng nhau giữ lấy nước” (xem lịch sử câu nói tại đây). Thấu hiểu điều đó, Phuthotourist không chỉ hướng ý thức của du khách đến viếng người có công dựng nước, mà còn muốn nhắc đến công giữ nước của những danh tướng đã làm nên lịch sử. Đó là đền thờ Hưng Đạo Vương, vị vua từng đánh tan hai cuộc xâm lược của quân Nguyên – Mông (năm 1285 và năm 1288). Hưng Đạo Vương còn lưu truyền thế hệ sau bằng bài thơ “Hịch tướng sĩ”.</p>
        
        <img class="img1" src="https://s3-alpha-sig.figma.com/img/d971/cfc3/75f5afccf5825f7113129058bccbda2e?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Nv90GPV2kga4IjNucu6R86cYc09uzHb3LhsuRTDkRgKBCTd6aIzMFuJ4L8h-BkOlq3Olq7W6HcTHba4I~nL5r4gxGcwO-KTKZjuvfiSQGzVXD8wOjdYLoJuDu6ft2z0HNTHxOkwA2dlrXgQ0qF5SA~XGFZr3W9quCn-RXGhVAln9Gwm1KkCtL22MXsQirwNR7k7bnBZvuYfYksNlhB-P07Wq7j3wdKNqoAgGj2rshnrtWeTYZg3f9HD5QP~jcgNnbRQtfvVYkfp6YF1VG3mkU2UMPqczfq-nMBrCaSv8J9mbmmjEtTqAz0V12vGRikaPVnWk3DsmJmQAdL51FhJGCw__" alt="">

        <p class="underimg1">Gian thờ Hưng Đạo Vương đặt bên phải, với bào thơ Hịch Tướng Sĩ</p>

        <p class="p4">Danh tướng thứ hai là Hai Bà Trưng (xem thông tin lịch sử tại đây). Hai nữ anh hùng dân tộc đầu tiên của đất Việt, phất cờ khởi nghĩa. Và lập quốc gia với kinh đô tại Mê Linh. Bà Trưng Trắc lên ngôi Nữ vương, trở thành vị vua nữ đầu tiên trong trong lịch sử Việt Nam. Với danh hiệu Trưng Nữ Vương. Cả hai biểu tượng danh tướng đều được đặt hai bên chánh điện, trong khuôn viên của quảng trường vua Hùng. (xem thêm về lễ khánh thành tượng Hai Bà Trưng tại đây)</p>


        <img class="img1" src="https://s3-alpha-sig.figma.com/img/99a4/e900/4be8f54a303469df19d5ef0096f2ca05?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=N5p-GpqlyuAHWEAUJSQhLfl5P9SBGVYmaV0Vm7tXtNAuzKecBp5J9~cXSKK~2REFjGaOKD9WLCJtrHHkcJ~87D2UCiC7e2zuOhghTmx-jj9iYOX9eV8m5WztIfvLwJSemh7XdCYP2Iv5grx9YMLcRvBPDp-Crc1B2aB86r88incRVqaf2yEzf57l60qvVdvfBkJfR2G7lGpHWo5bLVc7r9VLZP-7r0b09QCr4kTpdyrCIChxtG4ScQ9JR9iPjnwY75-JEJJsAhILKTvpgTEZxW0mQd56Rj1KgfihqUfvGhb~y9~D4yxKYH0~LjP-8hEMBqo5KyNVse91m~WZHUQtuA__" alt="">

        <p class="underimg1">Tượng Hai Bà Trưng trên mình voi</p>


        <h2> Ngày giỗ tổ đầu tiên trước linh tượng</h2>

        <p class="p4">8 giờ sáng ngày 14/4/2019, Phuthotourist cùng UBND Quận 11, Mặt trận tổ quốc VN Quận 11, Viện Lịch sử các dòng họ, đã tổ chức lễ dâng hương đầu tiên trước linh tượng vua Hùng. Và đây cũng là sự kiện ra mắt quảng trường Hùng Vương tại Đầm Sen. Hàng ngàn người dân và du khách đã đem lễ vật đến đây để dâng lên quốc tổ, cùng ôn lại lịch sử dân tộc ngàn năm.</p>



        <div class="containerSlide">
            <div class="main">
                <img src="https://s3-alpha-sig.figma.com/img/1d27/4ca3/c8eea6a1924a777684dbcc97323aeffe?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=eIvj5TtBf-LYm1dAGXh8y2Zq-xcGcFuwb7gz4fGbwUyCHYiLn3R1x8msToelazZ10R3QQDeiK1xEkwuKJWoFIfdJwt5Mflc9YFCj7~Cl9qFnn34qN7sVC1QZRTVa-K7I3TXOEhB09t0q3Ucsb7cExnfoQKUokWqeKxSyBhe6aFBgz-2M3Iy0EgbnWJ2KwpyIxJv5iUnFDQZSfUN~5kEH2y7dZ-bJQof623N7pyq2Gny6cy7MF8~ZQ2Ydq233JE5NGyd19LJP3GB5ewJKcVTB-q7BaX2GYg-sJlCwmpQhcplvWiAKmk37YLKNVU2weDN49-HsOugbFfDIni~cbgrU7A__" alt="" class="imgfeature">
                <p class="underimg1">Cảnh làm lễ giỗ quốc tổ tại quảng trường vua Hùng 2019</p>
                <div class="control prev"><</div>
                <div class="control next">></div>
            </div>
            <div class ="list-image">
                <div>
                    <img src="https://s3-alpha-sig.figma.com/img/d971/cfc3/75f5afccf5825f7113129058bccbda2e?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Nv90GPV2kga4IjNucu6R86cYc09uzHb3LhsuRTDkRgKBCTd6aIzMFuJ4L8h-BkOlq3Olq7W6HcTHba4I~nL5r4gxGcwO-KTKZjuvfiSQGzVXD8wOjdYLoJuDu6ft2z0HNTHxOkwA2dlrXgQ0qF5SA~XGFZr3W9quCn-RXGhVAln9Gwm1KkCtL22MXsQirwNR7k7bnBZvuYfYksNlhB-P07Wq7j3wdKNqoAgGj2rshnrtWeTYZg3f9HD5QP~jcgNnbRQtfvVYkfp6YF1VG3mkU2UMPqczfq-nMBrCaSv8J9mbmmjEtTqAz0V12vGRikaPVnWk3DsmJmQAdL51FhJGCw__" alt="">
                </div>
                <div>
                    <img src="https://s3-alpha-sig.figma.com/img/82cc/c346/07aaad7868ea53bdc2f7dc54a087cc98?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=YoZyPAAFWsYziwZqcfsBkyypk8LYsdojUvEc0yG8zOxjMIyBS7CWi9adANBm6MprXF5c0UtrA9y~3POaZrF-h8Rf1YGUFYnZucIa-BvX4p9Bc2OgDIWqhTmqzdIX596ffI-Ol7m7qDCXyoXBTT6rcwtCR0nNSVaFBcLRNVbCyJ~pqKz86uugaUfJglCfRfrIPwbOENsJ9nEM50-kjI4AY30IqXVDISDAi4hBFqAzob~L8DhxvBiorTgCgVJfC8YM7jawOgUYtO7iK1~IujTzOHEVvFHg-ng646TpeAGpIo391TjsBPbjuLovsZ8l46df0KTv~IOjtOn9GIQfHiwaAA__" alt="">
                </div>
                <div>
                    <img src="https://s3-alpha-sig.figma.com/img/7e43/5237/73309c0e5aacb41acc8f3d840eff55b7?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=DPPhIZBsdzl0m-Me0zsi4fcrqEo9sn~x3NeZGwl8iE0xhM~Jk8TTVaIOhiiZkEXh104xGcAv4cM~DVHkVA0738-nAoK5AcKVfP7dKBASX0aw60q1KvMqpn1qxfi-XPMo1YAbYDz1CYw1q~oD5OE~xSB7~8LicHB0MqSjelB~dn3m~UxLtHTmT2~HEGEqz3LOrwRWeIX5Mzwj56T3a3r9H1VkvL7oXIv7H9c-h8wsZMxN4OqvtXuWF9zz~I05DLTcBV9gQ~r3xZEDNXzvN0pyKky5M7kYno-WamXQdXAXKFQU0jEOjNIV3j8OpGJHJzWFDnBeJ47hiCSZAJWneoNkuA__" alt="">
                </div>
                <div>
                    <img src="https://s3-alpha-sig.figma.com/img/624b/20ef/bfce3929f46aa5b8a7c078c36a6fab03?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=V39J3Y6UUADGuhFq3-xDPEkbykfbpozDRKqex0tE1XMZuBjo3Vf8LfP0jDgr-S25cguaRbaRijui6ReG1G4hzrqvRR~7ycjhLPY-czTIZyx5BnhfjqovP6PZLuJ6S6nDe0mjafkTi2rYjGNE~9fIkG2lVaCYBtbDxMJGCQYDmw9z2eO9irHkmd~DYBaY2ovnCDylc6HBSjGP58gz0aE6BqB~XhzuYB0-dOuc78eqSXKTzbNb6wgjrCLm7GXZtCpUgKc7TnjDTCgt4l6wiinfBpe5sx0glOAZLf2SL8jjKFDUm5IEGMuYw7JkvBBAENj-mUJVy6q6sqlE6gjxF5QH8A__" alt="">
                </div>
                <div>
                    <img src="https://s3-alpha-sig.figma.com/img/b7cf/fa9b/04c32d330ce18b94eb27ee4cace3a732?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=oE437-vLgaibvsmgWy5RHOSnFcT2pXKtSQ4VyvuyPjB1j7NVeo67vMF33OztibyJM4eC~WlTt-j6xmxtdEsS4eaXzMcXNGWIEjTvStFzpbK8pYND8avA4jYTXB8BPNW4fkW-4eQHUfCTyyyoo3bwunap5OMFPh2ajnqgDWYMg9oECyY33bt7e--eA4DiMA~kxfNO~JdW9GBEASgS-aU8aT7vuez8fPc2dXw3xdF5ecJCGJSpRvIhV~OztUR6dnKgbVL8Hl6AwJfnnE5dxzsLH6zNmBfyOme2tpQKqZqnrPQmst8teGar7d1Eq36NynAXLKZIYZOOJgHqEFKGwVHMNg__" alt="">
                </div> 
            </div>

        </div>

        <p class="p4">Bên cạnh đó, Đầm Sen cũng tổ chức thi nấu bánh chưng với sự tham gia của các đơn vị trong quận 11. Tổng số bánh chưng 3000 chiếc đã được phát lộc cho du khách đến dâng hương tại quảng trường ngay trong buổi sáng giỗ tổ.</p>


        <h2>Từ chiếc bánh chưng khổng lồ</h2>

        <p class="p4">Trước 2007, Phuthotourist từng tự tổ chức ngày giổ tổ Hùng Vương tại Đầm Sen vào ngày 10/3 âm lịch. Với mục đích ban đầu là tạo địa điểm để nhân viên Phuthotourist và những du khách tưởng nhớ tổ tiên dân tộc. Số lượng khách tham dự lúc bấy giờ lên đến cả chục ngàn người, vượt xa dự tính ban đầu.</p>

        <p class="p4">Sau khi Quốc Hội quyết định công nhận ngày quốc tổ vào tháng 4/2007, Phuthotourist đã phối hợp với UBMT Tổ Quốc Quận 11, tổ chức nhiều hoạt động lớn hơn. Tuy nhiên, Đầm Sen vẫn mong muốn làm được cống vật gì xứng đáng. Và phải mang ý nghĩa góp công sức của tập thể. Vậy là ý tưởng về chiếc bánh chưng khổng lồ ra đời từ những năm đầu 2010. Và đến năm 2016, Đầm Sen đã xác lập kỷ lục Guinness Thế giới với chiếc bánh chưng khổng lồ nặng nhất: 2,5 Tấn. Để làm chiếc bánh chưng này, đã có hơn 50 người với nhiều công đoạn gói, nấu bánh khác thường. Sau đó luộc suốt 3 ngày liên tục để dâng cúng Quốc tổ.</p>
            
        <h2>Đến nhu cầu cần một đền thờ vua Hùng</h2>
        <p class="p4">Từ những thành công đó, Phuthotourist lại tiếp tục suy nghĩ: Nếu như nhà thờ không thể thiếu tượng chúa, Đình chùa không thể vắng tượng phật. Thì một nơi mà hàng ngàn người dân cùng hướng về tổ tiên lại càng không thể thiếu một linh tượng.</p>
        <img class="img1" src="https://s3-alpha-sig.figma.com/img/8444/5f09/cc05ccce6ad24653640aeca0bd6f7e85?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=VoB-P1~Io~LkNZA15LLv~sgNWtPEfJ0QF9uln9b7AvteH2KYRhjWMVyTh5S1MnCtfmR6vQWjtQig1ZHybz4hL7vcbr2uJcdjz49eWEt2cPjW738FyrS6d4ta3EDQR0fyjXZAmbwltShqXQg917e7f13Y40dBt0t-ASODX-rS8hyvK1Egup~oxRr~gDyMODxpwvhZRr-wvnJn6zM6Y5dJ2roECfCsY6Yq2lmbJhGpXpWUdJ-oNE17LuiJ1h~KJ~Z40dkItlffOgkrcueBS4BcdUIdfYUdAU6z-b7EBW2zv4S259IVXDVRgEPc3n~Rsuy0fhQ4hrRgsw-iSrbXPd1Cqw__" alt="">

        <p class="underimg1">Các vị lãnh đạo và đại biểu lên dâng hương trước linh tượng vua Hùng tại Đầm Sen</p>
        <p class="p4">Qua một khảo sát, cho thấy các địa điểm thờ phụng vua Hùng chỉ tập trung khách viếng vào ngày 10/3 âm lịch. Còn những ngày thường thì do mưu sinh cuộc sống, nên ít người lui tới. Thời gian rảnh rỗi chủ yếu vui chơi để phục hồi sức khỏe làm việc. Vì vậy, việc xây dựng một đền thờ vua Hùng vào khu vui chơi giải trí là việc nên làm. Khi du khách dạo chơi qua đây, sẽ dành vài phút tưởng nhớ đến các bậc anh linh đất Việt. Và truyền dạy cho con trẻ về chân dung của những vị vua nhân ái của đất nước.</p>
        
        <script>
            var imgFeature= document.querySelector('.imgfeature')
            var listImg= document.querySelectorAll('.list-image img')
            var prevBtn= document.querySelector('.prev')
            var nextBtn= document.querySelector('.next')
            var currentIndex=0;

            function updateImageByIndex(index){
                // remove Active
                document.querySelectorAll('.list-image div').forEach(item=>{
                    item.classList.remove('active1')
                })

                currentIndex=index
                imgFeature.src = listImg[index].getAttribute('src')
                listImg[index].parentElement.classList.add('active1')
            }

            listImg.forEach((imgElement, index)=>{
                imgElement.addEventListener('click',e=>{
                  updateImageByIndex(index)
                })
            })
            
            updateImageByIndex(0)

            prevBtn.addEventListener('click',e=>{
                if(currentIndex==0){
                    currentIndex =listImg.length-1;
                }else{
                    currentIndex--
                }
                updateImageByIndex(currentIndex)
            })
            
            nextBtn.addEventListener('click',e=>{
                if(currentIndex==listImg.length-1){
                    currentIndex =0;
                }else{
                    currentIndex++
                }
                updateImageByIndex(currentIndex)
            })


        </script>
        <style> 
        .containerSlide{
            display: flex;
            width: 1471px;
            height: 865px;
            padding: 48px 60px 47px 60px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 68px;
        }
        .main{
            height: 80%;
            margin-bottom: 20px;
            position: relative;
        }
        .list-image{
            width: 100%;
            height: 15%;
            display: flex;
            justify-content: space-between;
        }
        .list-image div{
            flex:1;
            padding: 5px;
        }
        .list-image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .imgfeature{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .control{
            position: absolute;
            top: 50%;
            font-size: 50px;
            color: rgb(255, 255, 255);
            transform: translateY(-50%);
            cursor: pointer;
            user-select: none;
        }
        .prev{
            left:10px;
        }
        .next{
            right:10px;
        }
        .active1{
            border: 4px solid var(--pink-pink-500, #EC008C);
        }


        .p2,.p3,.p4,
        .p1{
            color: var(--gray-gray-500, #666);
            width: 981px;
            /* Nunito/18px/18px: Regular */
            font-family: Nunito;
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%; /* 27px */
        }
        .contentLocation-khamphachitiet h2{
            color: var(--pink-pink-500, #EC008C);

            /* Bangers/50px */
            font-family: Bangers;
            font-size: 50px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .img1{
            width: 100%;
            height: 980px;
        }
        .underimg1{
            color: var(--gray-gray-500, #666);
            text-align: center;
            /* Nunito/16px/16px: Regular */
            font-family: Nunito;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%; /* 24px */
        }
        .box1, .box2 {
            flex: 1;                /* Để hai div chiếm đều diện tích trong container */
            text-align: center;     /* Canh giữa nội dung bên trong */
        }

        .box1 img {
            width: 482px;            /* Để hình ảnh chiếm toàn bộ chiều rộng của div */
            height: 709px;           /* Giữ tỷ lệ khung hình của hình ảnh */
        }
        .box2 img {
            width: 963px;         /* Để hình ảnh chiếm toàn bộ chiều rộng của div */
            height: 709px;           /* Giữ tỷ lệ khung hình của hình ảnh */
        }


        .box1 p, .box2 p {
            margin-top: 10px; 
            color: var(--gray-gray-500, #666);
            text-align: center;
            /* Nunito/16px/16px: Regular */
            font-family: Nunito;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%; /* 24px */      /* Khoảng cách giữa ảnh và văn bản */
        }
        .container {
            display: flex;          /* Đặt hai div nằm cạnh nhau */
            gap: 20px;              /* Khoảng cách giữa hai div */
        }
        </style>
    </div>

    <div class="footer-khamphachitiet">
        <div class="nextKhamPhaChitiet">
            <a href="{{ URL::to('/khamphaChiTiet/' . ($locationDetail->loID - 1)) }}" class="muitenTrai">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M10 16.0007L15.3333 21.334M10 16.0007L15.3333 10.6673M10 16.0007L25 16.0007" stroke="#EC008C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p>{{ $previousLocation->loName ?? 'Không có địa điểm trước' }}</p>
            </a>
            <a href="{{ URL::to('/khamphaChiTiet/' . ($locationDetail->loID + 1)) }}" class="muitenPhai">
                <p>{{ $nextLocation->loName ?? 'Không có địa điểm tiếp theo' }}</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M22 15.9993L16.6667 10.666M22 15.9993L16.6667 21.3327M22 15.9993L7.00004 15.9993" stroke="#EC008C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

        <div class="cothebanthich-khamphachitiet">
            <p class="cothebanthich">Có thể bạn thích </p>

            <div class="LocationNext4">
                @foreach($randomLocations as $location)
                    <div class="locationItem-cothebanthich">
                        @if($location->images->isNotEmpty())
                            @php
                                $firstImage = $location->images->first();
                            @endphp
                            <img src="{{ asset($firstImage->loImgPath) }}" alt="{{ $location->loName }}" class="imgLocationNext4">
                        @else
                            <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="No image available" class="imgLocationNext4">
                        @endif
                        <div class="footerLocationNext4">
                            <div class="vuonthuCotheBanThich">
                                <a style="text-decoration: none" href="{{ URL::to('/khamphaChiTiet/' . ($location->loID)) }}">
                                    <p class="locationTitle-cothebanthich">{{ $location->loName }}</p>
                                </a>

                                <p class="locationDate-cothebanthich">{{ $location->loDate }}</p>
                            </div>
                            <div class="areaCoTheBanThich">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M19.83 8.6998L15.3 4.1698C14.35 3.2198 13.04 2.7098 11.7 2.7798L6.69998 3.0198C4.69998 3.1098 3.10998 4.6998 3.00998 6.6898L2.76998 11.6898C2.70998 13.0298 3.20998 14.3398 4.15998 15.2898L8.68997 19.8198C10.55 21.6798 13.57 21.6798 15.44 19.8198L19.83 15.4298C21.7 13.5798 21.7 10.5598 19.83 8.6998ZM9.49998 12.3798C7.91998 12.3798 6.61998 11.0898 6.61998 9.4998C6.61998 7.9098 7.91998 6.6198 9.49998 6.6198C11.08 6.6198 12.38 7.9098 12.38 9.4998C12.38 11.0898 11.08 12.3798 9.49998 12.3798ZM17.53 13.5298L13.53 17.5298C13.38 17.6798 13.19 17.7498 13 17.7498C12.81 17.7498 12.62 17.6798 12.47 17.5298C12.18 17.2398 12.18 16.7598 12.47 16.4698L16.47 12.4698C16.76 12.1798 17.24 12.1798 17.53 12.4698C17.82 12.7598 17.82 13.2398 17.53 13.5298Z" fill="#EC008C"/>
                                </svg>
                                <p class="locationArea-cothebanthich">{{ $location->category->area->areaName }} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="locationItem-cothebanthich">p2</div>
                <div class="locationItem-cothebanthich">p3</div>
                <div class="locationItem-cothebanthich">p4</div> --}}
            </div>
        </div>
    </div>

    
    
</div>
    
@endsection 