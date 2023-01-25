@extends('layouts.frontapp', ['title' => 'Success Story'])

@section('content')
<section class="header-page" style="background-image:url({{asset('/assets/img/allathif_news_background.jpg')}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">Success Story</h1>
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

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>About Us</h2>
            <p>Success<span>Story</span></p>
          </div>

          <div class="row gy-4" style=" margin-left: 7rem; margin-right: 7rem;">
            <div class="col-lg-7 position-relative about-img aos-init aos-animate" style="background-image:(assets/img/1.jpg)" data-aos="fade-up" data-aos-delay="150"></div>
            <div class="col-lg-5 d-flex align-items-end aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  “Entrepreneurs are the real heroes of any nation, who contribute a lot to society. Organisations like BYST and YBI are the manufacturers and supporters of these entrepreneurs and I’m grateful to be part of the YBI family.”
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                </ul>

                <div class="position-relative mt-4">
                  <img src="https://www.youthbusiness.org/upload/resized/110321074140Akshay%20Babar%20web%202.jpg" class="img-fluid" alt="" style="border-radius: 15px">
                  <a href="https://youtu.be/6hcrtulItas" class="glightbox play-btn"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Menu Section ======= -->
      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Our Success Story</h2>
            <p>Check Our <span>Success Story</span></p>
          </div>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="menu-starters">
              <div class="tab-header text-center">
                <p></p>
                <h3></h3>
              </div>

              <?php
                $story = DB::table('story')
                  ->limit(9)
                  ->get();;
              ?>

            
              <div class="row gy-5" style=" margin-left: 7rem; margin-right: 7rem;">
                @foreach ($story as $ress )

                <div class="col-lg-4 menu-item">
                  <a href="/success-story/{{ $ress->slug }}">
                    <img src="{{asset('/storage/story/'.$ress->image)}}" class="menu-img img-fluid" alt=""></a>
                  <h4>{{ $ress->judul }}</h4>
                  <p class="ingredients">{{ $ress->nama }}</p>
                  <p class="price">{{ $ress->negara }}</p>
                </div>
                 @endforeach
                <!-- Menu Item -->
              </div>
             
            </div>
            <!-- End Starter Menu Content -->

          </div>
        </div>
      </section>
      <!-- End Menu Section -->

    

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
      <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

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