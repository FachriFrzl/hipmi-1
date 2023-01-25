@extends('layouts.frontapp', ['title' => 'Berita & Artikel'])

@section('content')
<section class="header-page" style="background-image:url({{asset('/assets/img/allathif_news_background.jpg')}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">Success Story</h1>
    </div>
</section>

<?php
    $story = DB::table('story')
?>

@foreach ($story as $ress )

<section>
    <div class="container mt-100">
        <div class="row">
            <div class="col-sm-8">
                <div class="title-post-show text-center">
                    <h3 class="py-20 ml-20 font-bold">{{ $ress->judul }}</h3>
                    <p>{{ $ress->nama }}</p>
                </div>
                

                <figure class="figure">
                <img src="{{asset('storage/posts/img.hpg')}}" class="post-detail-image" alt="">
                <div class="mt-5">
                    <p>{!! $ress->deskripsi !!}</p>
                </div>
                </figure>

            </div>
        </div>
    </div>
</section>
@endforeach



@endsection