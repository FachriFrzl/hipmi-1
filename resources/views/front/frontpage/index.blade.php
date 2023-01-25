@section('content')
@extends('layouts.frontapp', ['title' => 'Home'])
@include('front.component.slider')

<section class="home-visi">
    <div class="container">
        <div class="row row-flex">
            <div class="col-md-6">
                <div class="scroll-element js-scroll fade-in-down">
                    <h4 class="text-grey">WELCOME TO</h4>
                    <h1 class="big ">HIPMI<br>KOTA CIMAHI</h0>
                </div>
                <h5 class="scroll-element js-scroll fade-in-top">Kami percaya bahwa pengusaha muda memiliki potensi besar untuk mengubah dunia dan kami bekerja keras untuk membantu Anda meraih sukses. Bergabunglah bersama kami sekarang dan jadilah bagian dari generasi pengusaha muda yang mengubah dunia!</h5>
            </div>
            <div class="col-md-6 scroll-element js-scroll slide-right">
                <a class="features__card features__card--size-small feature-card feature-card--mobile-same-size aos-init aos-animate" href="{{route('home')}}/sambutan" data-aos="fade-up">
                    <span class="feature-card__image">
                      <img src="{{asset('assets/img/firaldi_akbar.jpg')}}" width="410" height="490" alt="Concept">
                    </span>
                    <span class="feature-card__caption">M. Firaldi Akbar<br><span>Ketua HIPMI Kota Cimahi</span>
                    </span>
                    <div class="centered"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />  <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" /></svg></div>
                </a>

            </div>
        </div>
    </div>
    @include('front.component.counter_data')
</section>
<!-- <section class="section-why">
    @include('front.component.unggulan')
</section> -->
<section class="pt-100 pb-100 home-summary">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mt-30 scroll-element js-scroll slide-left">
                <div class="card-home-about"><img src="{{asset('assets/img/about_hipmi.jpg')}}"/>
                    <div class="bottom-left text-white"><h5>About Us</h5></div>
                    <div class="info">
                    <h3>About Us</h3>
                    <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                    <button>Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-30 scroll-element js-scroll slide-right">
                <div class="card-home-about"><img src="{{asset('assets/img/muscab.jpg')}}"/>
                    <div class="bottom-left text-white"><h5>Our Programs</h5></div>
                    <div class="info">
                    <h3>Our Programs</h3>
                    <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                    <button>Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-30 scroll-element js-scroll slide-left">
                <div class="card-home-about"><img src="{{asset('assets/img/members.jpg')}}"/>
                    <div class="bottom-left text-white"><h5>Our Members</h5></div>
                    <div class="info">
                    <h3>Our Members</h3>
                    <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                    <button>Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-30 scroll-element js-scroll slide-right">
                <div class="card-home-about"><img src="{{asset('assets/img/parteners.jpg')}}"/>
                    <div class="bottom-left text-white"><h5>Our Partners</h5></div>
                    <div class="info">
                    <h3>Our Partners</h3>
                    <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
                    <button>Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-agenda text-black">
    <div class="container">
@include('front.component.agenda')
    </div>
</section>
<section class="home-testimoni">
    <div class="container">
        @include('front.component.testimony')
    </div>
</section>

@include('front.component.prestasi')

<section class="home-news text-center">
    <div class="container">
        <h5 class="t-white">Berita & Artikel</h5>
        <h2 class="home-news-title mb-50">HIPMI UPDATE</h2>
        <div class="row col-news">
            @foreach($posts as $post)
            <div class="col-md-3 col-sm-6 box-home-news scroll-element js-scroll fade-in-bottom">
                
                    <img src="{{asset('/storage/posts/'.$post->image)}}" alt="" class="img-news">
                    <p class="mt-15">{{date('l, d F Y', strtotime($post->updated_at))}}</p>
                    <a href="{{route('post.post.show',['post'=>$post])}}"><h5 class="mt-15"><b>{{$post->title}}</b></h5></a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection