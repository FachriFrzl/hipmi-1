@extends('layouts.frontapp', ['title' => 'Success Story'])

@section('content')

<?php
    $inisiatif = DB::table('inisiatif')
        ->limit(1)
        ->get();;
?>
@foreach ($inisiatif as $ress)
<section class="header-page" style="background-image:url({{asset('storage/inisiatif/'.$ress->image)}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">Success Story</h1>
    </div>
</section>

    
<section>
    <div class="container mt-100">
        <div class="row">
            <div class="col-sm-8">
                <div class="title-post-show text-center">
                    <h3 class="py-20 ml-20 font-bold">{{ $ress->program }}</h3>
                    <h4>{{ $ress->nama }}</h4>
                </div>
                

                <figure class="figure">
                <img src="{{asset('assets/img/1.jpg')}} " class="post-detail-image" alt="FOTO">
                <div class="mt-5">
                    {!! $ress->deskripsi !!}
                </div>
                </figure>

            </div>
        </div>
    </div>
</section>
@endforeach


@endsection