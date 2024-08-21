
@extends('layout/header')
@section('content')

<div class="contentKhamPhaChiTiet">
    <div class="introduce-location">
        <p class="locationTitle-khamphachititet">{{ $locationDetail -> loName }}</p>
        <div class="linebw"></div>
        <div class="under-introduce-location">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M19.8305 8.6998L15.3005 4.1698C14.3505 3.2198 13.0405 2.7098 11.7005 2.7798L6.70046 3.0198C4.70046 3.1098 3.11046 4.6998 3.01046 6.6898L2.77046 11.6898C2.71046 13.0298 3.21046 14.3398 4.16046 15.2898L8.69046 19.8198C10.5505 21.6798 13.5705 21.6798 15.4405 19.8198L19.8305 15.4298C21.7005 13.5798 21.7005 10.5598 19.8305 8.6998ZM9.50046 12.3798C7.92046 12.3798 6.62046 11.0898 6.62046 9.4998C6.62046 7.9098 7.92046 6.6198 9.50046 6.6198C11.0805 6.6198 12.3805 7.9098 12.3805 9.4998C12.3805 11.0898 11.0805 12.3798 9.50046 12.3798ZM17.5305 13.5298L13.5305 17.5298C13.3805 17.6798 13.1905 17.7498 13.0005 17.7498C12.8105 17.7498 12.6205 17.6798 12.4705 17.5298C12.1805 17.2398 12.1805 16.7598 12.4705 16.4698L16.4705 12.4698C16.7605 12.1798 17.2405 12.1798 17.5305 12.4698C17.8205 12.7598 17.8205 13.2398 17.5305 13.5298Z" fill="#EC008C"/>
            </svg>
            <p class="sapdienra-location" >Giáo Dục và Trải Nghiệm</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M10 5.83333V10L12.0833 11.25M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="sapdienra-location">{{ $locationDetail -> loDate }} </p>
        </div>
    </div>

    <div class="content-ThucVat" >
        
        <div class=box_Intro>
            <img src="https://s3-alpha-sig.figma.com/img/15f3/48d4/84d24bf95e0d1af9fbed525565083648?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ermFHR5UXuPjjMdqoeiiUliUhqUNS3Y7f5Cw0Cvo4gWyVFHDoRTP8cgbEnxB09DgNfqQmo7uMnYVZoxqijuU1F7DpimCScqdKuv~LZiGotn9OLDrHgnRaWghx~rt89BK4aOeAO6SlnysC7xvsDEUX3VxQvM8mkFem1xCsEvhmLpoZmU5TjC-EmWkEZRDGlYhmJmKYYW2y9KWgv80FIySB~hwEaj3m7KpOgpMfojYxmaNX-z3GgB~QwnLYLK89-BRpALZFQGeKwWlptDqmkPg3RT-guKonnuvKkMW3op3~00recADlnogY8LS8J~ByvpUrwDTUgIptYjg-FVK6HX-6g__" alt="">
            <h1>Hoa Sen</h1>
            <div class=lineThucVat"></div>
            <p>Hoa sen từ lâu đã được biết tới là loài hoa thanh khiết có ý nghĩa truyền thống lâu đời ở phương Đông. Sen mọc và lớn lên giữa bùn lầy nhưng không hề vì bùn mà bị ô nhiễm, vấy bẩn.</p>


            <a href="{{URL::to('/khamphaChiTiet/59/1') }}" style="text-decoration:none">
                <div class="boxXemThemThucVat">Xem Thêm <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                    <path d="M20.625 15L15.625 10M20.625 15L15.625 20M20.625 15L6.5625 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></div>
            </a>

        </div>
        <div class="space">

        </div>
        <div style="position: relative; will-change: top, left; left: -170px;">
            <div class="listEvent">
                @foreach($first8ThucVat ?? [] as $tv)
                
                <div class="boxEvent">
                    {{-- @if($tv->tvImgPath->isNotEmpty()) --}}
                                <img src="{{ $tv->tvImgPath }}" alt="{{ $tv->tvName }}" />
                    {{-- @else
                        <img src="https://s3-alpha-sig.figma.com/img/10f7/48be/f448c491645e7668401ee80874842561?Expires=1725235200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=KXTRK30gDe2fkm0BV-7iuvJGzCoI4l2QOp1zXRbwhfMVAnEmfeyCKAHw05GmIA2DqhbwgMzyroMU5zxh2n351apuvvuaPx985LzKq4wI8qCdnX03M9qOJBnN56DedCoyUBSHtp3qk4pOtSnAix5dByYicL1pcQIOrhS92e0wSLmgHUKKbuJBp~~4GDWqk4V3FxRwVIba0-nO2bRjh5n6zKNLZfWKNipxC2sNs46eOdKhi~xJevMgxnQ2c9oya57sHr9~nDuyEZIyuqd3ywmCc4PMpd-SPAJoASkUHwY8d0rELbLJAQ05OZ9o27UTQLaedt4vQxDcpd~C5y5M8Y4k3g__" alt="{{ $tv->tvName }}" />
                    @endif --}}
                    <p class="nameEvent">{{ $tv->tvName }}</p>
                    <p class="descEvent">{{ $tv->tvDescription }}</p>
        
                    <div class="box-info">
                        <div class="boxSuKien-SuKien">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16.5254 7.24919L12.7504 3.47419C11.9587 2.68252 10.8671 2.25752 9.75039 2.31585L5.58372 2.51585C3.91705 2.59085 2.59205 3.91585 2.50872 5.57419L2.30872 9.74085C2.25872 10.8575 2.67539 11.9492 3.46705 12.7409L7.24205 16.5159C8.79205 18.0659 11.3087 18.0659 12.8671 16.5159L16.5254 12.8575C18.0837 11.3159 18.0837 8.79919 16.5254 7.24919ZM7.91705 10.3159C6.60039 10.3159 5.51705 9.24085 5.51705 7.91585C5.51705 6.59085 6.60039 5.51585 7.91705 5.51585C9.23372 5.51585 10.3171 6.59085 10.3171 7.91585C10.3171 9.24085 9.23372 10.3159 7.91705 10.3159ZM14.6087 11.2742L11.2754 14.6075C11.1504 14.7325 10.9921 14.7909 10.8337 14.7909C10.6754 14.7909 10.5171 14.7325 10.3921 14.6075C10.1504 14.3659 10.1504 13.9659 10.3921 13.7242L13.7254 10.3909C13.9671 10.1492 14.3671 10.1492 14.6087 10.3909C14.8504 10.6325 14.8504 11.0325 14.6087 11.2742Z" fill="#EC008C"/>
                            </svg>
                            <p class="boxSuKien-SuKien-name">{{ $tv->tvStatus }}</p>
        
                        </div>
                    </div>
                    <a href="{{URL::to('/khamphaChiTiet/59/' .$tv->tvID) }}">
                        <div class="boxXemThem2">Xem Thêm <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M20.625 15L15.625 10M20.625 15L15.625 20M20.625 15L6.5625 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></div>
                    </a>
                   
                </div>
        
                @endforeach
            </div>
        </div>
       
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