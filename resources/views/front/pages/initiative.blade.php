@extends('layouts.frontapp', ['title' => 'Initiative'])

@section('content')
<section class="header-page" style="background-image:url({{asset('/assets/img/allathif_news_background.jpg')}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">Initiative</h1>
    </div>
</section>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet"/>
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"/>
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"/>

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet"/>

  </head>

  <body>
    
    <?php
      $inisiatif = DB::table('inisiatif')
        ->limit(6)
        ->get();;
    ?>

           <!-- ======= Chefs Section ======= -->
           <section id="chefs" class="chefs section-bg" >
           <div class="container" data-aos="fade-up" >
             <div class="section-header">
               <h2></h2>
               <p>Our <span>Initiative</span> Program</p>
               <h2>We connect and support expert organisations, partners and young people to develop and scale new solutions to the critical challenges facing underserved young entrepreneurs.</h2>
             </div>
   
             <div class="row gy-4" style=" margin-left: 7rem; margin-right: 7rem; ">
              @foreach ($inisiatif as $ress)
                
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                          <div class="chef-member">
                            <div class="member-img">
                              <img src="{{asset('/storage/inisiatif/'.$ress->image)}}" class="img-fluid" alt="">
                              <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                            </div>
                            <div class="member-info">
                              <a href="/initiative/{{ $ress->slug }}">
                              <h4>{{ $ress->program }}</h4>
                              <span>{{ $ress->nama }}</span>
                              <p>{!! Str::limit($ress->deskripsi, 200) !!}</p>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End Chefs Member -->
              @endforeach
                      </div>
           </div>
         </section>
         <!-- End Chefs Section -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>





@endsection