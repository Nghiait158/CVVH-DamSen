
@extends('layout/header')
@section('content')
<div class="map">
    

{{-- ---------------------------------------------------- --}}

@foreach ($locations as $index => $location)
    <div class="locationPoint l{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}">
        <p class="text-location">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</p>
        <div class="popup-location">
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
@endsection 

