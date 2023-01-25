@extends('layouts.frontapp', ['title' => 'Pendaftaran'])

@section('content')
<section class="header-page-pendaftaran">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4 class="t-yellow mt-40 fw-600 mt-30">Selamat Datang Generasi Muda Terbaik</h4>
                <br>
                <h2 class="t-white fw-700">Di Website Hipmi</h2>
                <br>
                <h5 class="t-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ipsa quasi possimus, voluptate numquam quo.</h5>
                <a href="{{route('home')}}/formdaftar" class="btn btn-light mb-30 mt-30">DAFTAR SEKARANG</a>
            </div>
            <div class="col-md-6">
                <div class="video-border">
                    <iframe width="100%" height="330" src="" title="Himpunan Pengusaha Muda Indonesia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection