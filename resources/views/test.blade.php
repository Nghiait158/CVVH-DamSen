<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">

        <style>
       body{
    background-image: 
        linear-gradient(
            to top right, #8B5CF6, #EC4899
        );
    min-height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: monospace;
}
.slider{
    position: relative;
    width: 100%;
    height: 870px;
    overflow: hidden;
    display: flex;
    justify-content: center; /* Căn giữa theo chiều ngang */
    align-items: center; /* Căn giữa theo chiều dọc */
}
.item{
    position: absolute;
    width: 600px;
    height: 320px;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden; /* Đảm bảo hình ảnh không vượt quá viền của div */
    padding: 0; /* Loại bỏ padding để hình ảnh có thể chiếm toàn bộ div */
    transition: 0.5s;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: center;
    align-items: center;
}
.item img{
    width: 100%;
    height: 100%;
    object-fit: cover; /* Đảm bảo hình ảnh bao phủ toàn bộ div mà không bị méo */
    border-radius: 10px; /* Đảm bảo các góc của hình ảnh khớp với div */
}
#next, #prev{
    position: absolute;
    top: 50%;
    color: #ffffff;
    background-color: transparent;
    border: none;
    font-size: xxx-large;
    font-family: monospace;
    font-weight: bold;
    transform: translateY(-50%);
}
#next{
    width: 239.412px; left: 827px; top: 437px; transform: translate(521.452px, -159.413px); height: 311.125px; transition: none;
}

#prev{
    left: 646px; top: 434px; width: 232.536px; transform: translate(-59.4059px, -155.012px); height: 316.608px; transition: none;"
}
        </style>
    </head>
    <body>
        
        <div class="slider">
            <div class="item">
                <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1">
            </div>
            <div class="item">
                <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1">
            </div>
            <div class="item">
                <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1">
            </div>
            <div class="item">
                <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1">
            </div>
            <div class="item">
                <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1">
            </div>
            <div class="item">
                <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1">
            </div>
            <div class="item">
                <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1">
            </div>
            <div class="item">
                <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1">
            </div>
            <button id="next"></button>
            <button id="prev"></button>
        </div>
    
        <script> let items = document.querySelectorAll('.slider .item');
            let next = document.getElementById('next');
            let prev = document.getElementById('prev');
            
            let active = 3;
            function loadShow(){
                let stt = 0;
                items[active].style.transform = `none`;
                items[active].style.zIndex = 1;
                items[active].style.filter = 'none';
                items[active].style.opacity = 1;
                for(var i = active + 1; i < items.length; i++){
                    stt++;
                    items[i].style.transform = `translateX(${180*stt}px) scale(${1 - 0.2*stt}) perspective(16px) `;
                    items[i].style.zIndex = -stt;
                    items[i].style.filter = 'blur(3px)';
                    items[i].style.opacity = stt > 2 ? 0 : 0.6;
                }
                stt = 0;
                for(var i = active - 1; i >= 0; i--){
                    stt++;
                    items[i].style.transform = `translateX(${-180*stt}px) scale(${1 - 0.2*stt}) perspective(16px) `;
                    items[i].style.zIndex = -stt;
                    items[i].style.filter = 'blur(3px)';
                    items[i].style.opacity = stt > 2 ? 0 : 0.6;
                }
            }
            loadShow();
            next.onclick = function(){
                active = active + 1 < items.length ? active + 1 : active;
                loadShow();
            }
            prev.onclick = function(){
                active = active - 1 >= 0 ? active - 1 : active;
                loadShow();
            }</script>
    </body>
    </html>