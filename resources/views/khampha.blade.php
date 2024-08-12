
@extends('layout/header')
@section('content')
<div class="map">
    

{{-- ---------------------------------------------------- --}}

@foreach ($locations as $index => $location)
    <div class="locationPoint l{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}">
        <p class="text-location">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">{{ $location['areaName'] }}</div>
                <div class="popup-cardSubtitle">{{ $location['loName'] }}</div>
            </div>
            <a href="{{ $location['loID'] ? URL::to('/khamphaChiTiet/' . $location['loID']) : '#' }}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ asset('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
@endforeach


{{-- ---------------------------------------------------- --}}

    <img src="{{ ('/frontEnd/img/Map2.png') }}" alt="map" class="imgMap">

    
</div>



<script>
// document.querySelectorAll('.locationPoint').forEach(point => {
//     point.addEventListener('click', function() {
//         const popup = this.querySelector('.popup-location');
//         if (popup.classList.contains('hidden')) {
//             popup.classList.remove('hidden');
//             popup.style.display = 'block';
//         } else {
//             popup.classList.add('hidden');
//             popup.style.display = 'none';
//         }
//     });
// });



</script>
@endsection 

