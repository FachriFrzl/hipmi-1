{{-- <header>
  <nav class="top-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-none d-lg-block">
          <div class="topnav">
            {{-- <a href="#">Elearning</a>
            <a href="#">Keuangan</a>
            <a href="#">Forum Orang Tua</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="top-social-media">
            @include('front.component.sosmed')
          </div>
        </div>
      </div>
    </div>
  </nav> --}}
  <header>
    <nav class="nav navbar navbar-expand-lg navbar-dark mr-auto ml-auto" id="myNavbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('assets/img/logo-hipmi-cimahi.png')}}" alt="Al Lathif Islamic School" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-4 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About Us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('home')}}/sambutan">What We Do</a></li>
              <li><a class="dropdown-item"  href="{{route('home')}}/tentang-kami">About Us</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/prestasi">Meet The Team</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/fasilitas">Partner and Supporters</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/karir">Career</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Program
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Our Program</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              HIPMI Update
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('home')}}/post">Berita & Artikel</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/agenda">Event</a></li>
            </ul>
          </li>
           <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}/impact">Our Impact</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}/contact">Kontak</a> 
          </li>
          <li class="nav-item">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end"> 
          <a class="btn btn-salaam" role="button" aria-current="page" href="{{route('home')}}/pendaftaran">Join Us</a>
        </div>
          </li>
      </ul>
      </div>
    </div>
  </nav>

  
</header>