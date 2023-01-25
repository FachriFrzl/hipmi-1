<footer>
<section class="footer-ads mt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h1 class="fw-600">READY FOR <br>TAKE OFF?</h1>
                <a href="{{route('home')}}/formdaftar" class="btn btn-light"><b>JOIN NOW</b></a>
            </div>
            <div class="col-sm-7">
                <img src="{{asset('assets/img/launch_success.png')}}" alt="HIPMI Kota Cimahi" class="launch_success">
            </div>
        </div>
        <!-- <div class="footer-ads-block">
            <div class="row align-items-center">
                <div class="col-sm-9 t-white">
                    <h1 class="big">READY FOR <br>TAKE OFF?</h1>
                    <h4>Bergabunglah bersama organisasi pengusaha muda terbesar di Indonesia</h4>
                </div>
                <div class="col-sm-3"><a href="{{route('home')}}/formdaftar" class="btn btn-light"><b>DAFTAR SEKARANG</b></a></div>
            </div>
        </div> -->
    </div>
</section>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('assets/img/logo_hipmi_cimahi-01.png')}}" alt="HIPMI Kota Cimahi" class="footer-logo">
                </a>
                <div class="sosmed-footer">
                    @include('front.component.sosmed')
                </div>
            </div>
            <div class="col-sm-2 mt-20">
                <h5 class="title-footer">Quick Links</h5>
                <div class="footer-menu-block">
                    <a href="{{route('home')}}/pendaftaran">Pendaftaran</a>
                    <hr>
                    <a href="{{route('home')}}/tentang-kami">Tentang Kami</a>
                    <hr>
                    <a href="{{route('home')}}/post">Berita</a>
                    <hr>
                    <a href="{{route('home')}}/contact">Kontak</a>
                </div>
            </div>
            <div class="col-sm-3 mt-20">
                <h5 class="title-footer">Contact Us:</h5>
                <div class="footer-menu-block">
                    <h6 class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg><span>&nbsp;022-222222</span></h6>
                    <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg><span> &nbsp;info@hipmicimahi.com</span></p>
                    <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg><span> &nbsp;Jl. Raya Cimahi No. 67<br>Kota Cimahi</span></p>
                </div>

            </div>
            
        </div>
    </div>
</section>
<section class="copyrigth">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php echo date("Y"); ?> &copy; <a href="{{route('home')}}">HIPMI Kota Cimahi </a><br>ALL RIGHTS RESERVED.
            </div>
        </div>
    </div>
</section>
</footer>
<!-- @include('front.component.mobile_menu') -->
