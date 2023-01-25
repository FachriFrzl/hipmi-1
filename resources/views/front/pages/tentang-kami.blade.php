@extends('layouts.frontapp', ['title' => 'Tentang HIPMI Kota Cimahi'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/slider-2.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">TENTANG HIPMI</h1>
    </div>
</section>
@include('front.component.profile_menu')
<section class="home-agenda mt-50 mb-50 ">
    <div class="container">
        @foreach($about as $item)
        <div class="row align-items-center">
            <div class="col-md-6 scroll-element js-scroll slide-left">
                <img src="{{asset('storage/about/'.$item->gambar_about)}}" alt="" class="object-fit-contain border rounded">
            </div>
            <div class="col-md-6 home-widget-agenda scroll-element js-scroll slide-right">
                <p>{{$item -> deskripsi}}</p>
                <p>{{$item -> deskripsi_lanjutan}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="philosophy scroll-element js-scroll fade-in-bottom" style="#">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="fw-600">MOTO</h2>
                <h4>HIPMI {{ $item -> motto -> kota }}</h4>
                <h5 class="mt-50 fw-700">{{ $item -> motto -> motto }}</h5>
                <br>
                <p>- HIPMI</p>
            </div>
        </div>
    </div>
</section>
<section class="mt-10 mb-5">
    <div class="row align-items-center">
        <div class="col-sm-5 scroll-element js-scroll slide-left">
            <img src="{{asset('storage/visi/'.$item->visi->gambar)}}" alt="">
        </div>
        <div class="col-sm-6 scroll-element js-scroll slide-right">
            <h1 class="section-title">VISI HIPMI</h1>
            <hr class="under_title">
            <h4 class="mt-20">{{ $item -> visi -> visi }}</h4>
        </div>
    </div>
</section>
<section class="mt-5 mb-10">
    <div class="row align-items-center justify-content-end">
        <div class="col-sm-6 scroll-element js-scroll slide-left">
            <h1 class="section-title">MISI HIPMI</h1>
            <hr class="under_title">
            <h4 class="mt-20">{{ $item -> misi -> misi }}</h4>
        </div>
        <div class="col-sm-5 scroll-element js-scroll slide-right">
            <img src="{{asset('storage/misi/'.$item->misi->gambar_misi)}}" alt="">
        </div>
    </div>
</section>

@endsection