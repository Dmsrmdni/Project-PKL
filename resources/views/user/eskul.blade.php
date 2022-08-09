{{-- @extends('layouts.user')
@section('content') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMK ASSALAAM BANDUNG</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets2/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets2/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets2/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets2/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets2/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets2/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets2/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets2/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Dewi - v4.8.1
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    {{-- <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>SMK ASSALAAM BANDUNG</h1>
            <h2>Sekolah Pusat Keunggulan Berbasis Industri</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Daftar Sekarang</a>
                <a href="https://youtu.be/N8qXhEe07l0" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
    </section><!-- End Hero --> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2 style="font-size: 30px">Ekstra Kurikuler</h2>
            </div>


            <div class="row" data-aos="fade-up" data-aos-delay="200">
                @foreach ($eskul as $data)
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="card mb-3 shadow-lg rounded card" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $data->image() }}" style="width: 100%; padding:15px; margin:30px" class="card-img-top
                                mx-auto">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">{{$data->nama_eskul}}</a></h5>
                                    <p class="card-text">{{$data->deskripsi}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{url('/')}}" class="btn btn-info"><i class="bi bi-play-circle"></i><span> Kembali</span></a>
    </section><!-- End Services Section -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                           <img src="{{asset('assets/img/assalam.png')}}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-6">
                        <div class="footer-info">
                            <h3>SMK ASSALAAM</h3>
                            <p>
                            Jalan Situ Tarate Jl. Cibaduyut, Cangkuang Kulon, Kec. Dayeuhkolot, Kota Bandung, Jawa Barat 40265 <br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SMK ASSALAAM BANDUNG</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Kelompok 26</a>
            </div>
        </div>
    </footer>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets2/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets2/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets2/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets2/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets2/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets2/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets2/js/main.js')}}"></script>
</body>

</html>

{{-- @endsection --}}