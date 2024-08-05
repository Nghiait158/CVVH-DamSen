
@extends('layout/header')
@section('content')
    <div class="img-Home-Page">
        <img class="damSenPark-HomePage" src="{{ ('/frontEnd/img/damSenPark.png') }}">
        <img class="logoDamSen-HomePage" src="{{ ('/frontEnd/img/logoDamSen.png') }}">
        
        <img class="LogoMoveLeft-HomePage" src="{{ ('/frontEnd/img/LogoMoveLeft.png') }}" onclick="moveLeft()">
        <img class="LogoMoveRight-HomePage" src="{{ ('/frontEnd/img/LogoMoveRight.png') }}" onclick="moveRight()">
        
        <div class="image-containerDamSen">
            <img src="{{ ('/frontEnd/img/DamSen1.png') }}" alt="DamSen1" class="damsen-imageHomePage">
            <img src="{{ ('/frontEnd/img/DamSen2.png') }}" alt="DamSen2" class="damsen-imageHomePage">
            <img src="{{ ('/frontEnd/img/DamSen3.png') }}" alt="DamSen2" class="damsen-imageHomePage">
            
        </div>
        <div class="KhamPhaNgay">
            <p class="KhamPhaNgay-text">KHÁM PHÁ NGAY</p>
        </div>
    </div>




    {{-- JS --}}
    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.damsen-imageHomePage');
        const totalImages = images.length;

        function showImage(index) {
            const container = document.querySelector('.image-containerDamSen');
            container.style.transform = `translateX(-${index * 100}%)`;
        }

        function moveRight() {
            currentIndex = (currentIndex + 1) % totalImages;
            showImage(currentIndex);
        }

        function moveLeft() {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            showImage(currentIndex);
        }
    </script>
    
@endsection 