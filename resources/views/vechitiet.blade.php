
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
    </div>

{{-- -----------------------content --}}
    <div class="content-VeChiTiet" >
      <?php echo $vechitiet->ticketContent ?>
      <style>
      {{ $vechitiet->ticketContentCss }}
      </style>
    </div>

{{-- -----------------footer------------------------- --}}
  
</div>
    
@endsection 