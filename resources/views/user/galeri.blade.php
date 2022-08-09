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
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2 style="font-size:25px">Galeri</h2>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($galeri as $data)
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <img src="{{ $data->image() }}" style="width: 60%;" class="img-fluid shadow rounded card" alt="">
                    <div class="portfolio-info" style="width: 55%;">
                        <h4>{{$data->keterangan}}</h4>
                        <a href="{{ $data->image() }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="{{$data->keterangan}}"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
                <a href="{{url('/')}}" class="btn btn-info"><i class="bi bi-play-circle"></i><span> Kembali</span></a>
        </div>
    </section><!-- End Portfolio Section -->
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
                            Jalan Situ Tarate Jl. Cibaduyut, Cangkuang Kulon, Kec. Dayeuhkolot, Kota Bandung, Jawa Barat
                            40265 <br>
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