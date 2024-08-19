
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
        <?php echo $locationDetail->loContent ?>
        <style>
        {{ $locationDetail->loContentCss }}
        body {
            margin: 0;
            line-height: normal;
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