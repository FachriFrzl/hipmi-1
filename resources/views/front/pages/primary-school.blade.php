@extends('layouts.frontapp', ['title' => 'OUR IMPACT'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/slider-1.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">OUR IMPACT</h1>
        </div>
    </section>
    
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <p class="italic">
                    “We measure the impact of our work to make sure we are achieving the best results for the young entrepreneurs we support, our members and our partners.”
                    </p>
                    <p>Our vibrant global network collaborates to maximise our collective impact. We enable our members to strengthen their effectiveness and influence and increase the opportunities and successes of our young entrepreneurs, leading to more employment, sustainable businesses and strengthened communities.</p>
                </div>

                <div class="col-sm-3">
                    @include('front.component.program_menu')
                </div>  

            </div>
        </div>
    </section>

    {{-- <section>
        <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1">
            </button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
                ></button>
                <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3">
            </button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full">
                <img
                    src="{{asset('assets/img/slider4.jpg')}}"
                    class="block w-full"
                    alt="..."
                />
                </div>
                <div class="carousel-item relative float-left w-full">
                <img
                    src="{{asset('assets/img/Prestasi_final_hongkong_math_olympiad.jpg')}}"
                    class="block w-full"
                    alt="..."
                />
                </div>
                <div class="carousel-item relative float-left w-full">
                <img
                    src="{{asset('assets/img/al-lathif-islamic-school-1-3.jpg')}}"
                    class="block w-full"
                    alt="..."
                />
                </div>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </section> --}}


    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="fw-600 mb-30">Our Model</h3><hr>
                    <h6>Our approach to supporting underserved young entrepreneurs is outlined in our Theory of Change.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <img src="assets/img/impact.jpg" alt="our model">
                    <p>Our vibrant global network collaborates to maximise our collective impact. We enable our members to strengthen their effectiveness and influence and increase the opportunities and successes of our young entrepreneurs, leading to more employment, sustainable businesses and strengthened communities.</p>
                </div>
            </div>
        </div>
    </section>



   

    {{-- <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="fw-600 mb-30">Ekstrakurikuler</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <p>Kami meyakini bahwa setiap anak itu cerdas baik dalam satu bidang maupun dalam beberapa bidang keilmuan. Oleh karena itu, sekolah memfasilitasi agar para murid dapat mencoba beragam kegiatan. Dengan begitu, mereka akan memiliki pengalaman yang kaya. Walaupun demikian kami senantiasa mengarahkan para siswa/siswi untuk menekuni kegiatan yang disunnahkan oleh Rasulullah saw, yaitu beladiri, berenang, dan memanah</p>
                    <div class="row">
                        <div class=" col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/01-scout.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">PRAMUKA</h5>
                            </center>
                        </div>
                        <div class=" col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/02-martial-art.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">SILAT</h5>
                            </center>
                        </div>
                        <div class=" col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/03-robotic.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">ROBOTIK</h5>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/04-swimming.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">BERENANG</h5>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/05-astronomy.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">ASTRONOMI</h5>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/06-archery.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">MEMANAH</h5>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/09-angklung.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">ANGKLUNG</h5>
                            </center>
                        </div>
                        <div class=" col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/10-qiroat.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">QIROAT</h5>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection