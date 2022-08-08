@extends('layouts.user')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <h1>SMK ASSALAAM BANDUNG</h1>
        <h2>Sekolah Pusat Keunggulan Berbasis Industri</h2>
        <div class="d-flex">
            <a href="{{url('/daftar')}}" class="btn-get-started scrollto mx-3" data-aos="fade-up">Daftar Sekarang</a>
            {{-- ALUR ppdb --}}
            <button type="button" class="btn-get-started scrollto mx-3" data-aos="fade-up" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Alur PPDB
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alur PPDB Oline & Ofline</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{asset('assets2/img/images/alur.jpeg')}}" width="95%" class="img-fluid" alt="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header -->
            {{-- END ALUR ppdb --}}
            {{-- STATUS PENDAFTARN --}}
            <button type="button" class="btn btn-primary btn-get-started scrollto mx-3" data-aos="fade-up"
                data-bs-toggle="modal" data-bs-target="#cekdata" data-bs-whatever="@getbootstrap">Cek Status
                Pendaftaran</button>

            <div class="modal fade" id="cekdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cek Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Masukan Kode Pendaftaran </label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Masukan Kode">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END STATUS PENDAFTARAN --}}

            <a href="https://youtu.be/46j2COE-uqE" class="glightbox btn-watch-video mx-3" data-aos="fade-up"><i
                    class="bi bi-play-circle"></i><span>Lihat Vidio</span></a>
        </div>
    </div>
</section><!-- End Hero -->



<main id="main">
    <!-- ======= About Section ======= -->
    <section id="profil" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row justify-content-end">
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="3000"
                                    data-purecounter-duration="3" class="purecounter"></span>
                                <p>Lulusan Terbaik</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="90" data-purecounter-duration="3"
                                    class="purecounter"></span>
                                <p>Telah Bekerja</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-clock"></i>
                                <span data-purecounter-start="0" data-purecounter-end="100"
                                    data-purecounter-duration="3" class="purecounter"></span>
                                <p>Dunia Industri</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-award"></i>
                                <span data-purecounter-start="0" data-purecounter-end="300"
                                    data-purecounter-duration="3" class="purecounter"></span>
                                <p>Kuliah Di PTN</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://smkassalaambandung.sch.id/img/sakola.jpg" width="100%" class="img-fluid" alt="">
                    <a href="https://youtu.be/N8qXhEe07l0" class="glightbox play-btn mb-4"></a>
                </div>

                <div class="col-lg-6 pt-3 pt-lg-0 content">
                    <h3>Profil</h3>
                    <p>
                        SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda
                        empat) plus sepeda
                        motor dalam proses pendidikan pelatihan. Peka terhadap perubahan perkembangan teknologi baru dan
                        tuntutan kebutuhan
                        pasar kerja, agar lulusannya siap menghadapi perubahan.
                    </p>
                    <P>
                        SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai inovasi dan
                        improvisasi, mencari
                        terobosan untuk meraih keberhasilan bagi peserta didiknya.
                    </P>
                    <P>
                        Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang lengkap
                        UP TO DATE, waktu praktek
                        memadai dan praktek berstandar industri dengan pelayanan prima.
                    </P>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">
            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets2/img/images/fuso.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets2/img/images/google.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets2/img/images/honda.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets2/img/images/mitsubishi.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets2/img/images/mozila.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets2/img/images/toyota.png')}}" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->


    <!-- ======= Features Section ======= -->
    <section id="tentang" class="features">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="font-size: 25px">6 Alasan</h2>
                <p style="font-size: 20px">Kenapa Harus Sekolah Di SMK ASSALAAM</p>
            </div>
            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-2">
                    <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                        <i class="bi bi-1-circle w-20"></i>
                        <h4 class="d-none d-lg-block"></h4>
                    </a>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                        <i class="bi bi-2-circle w-20"></i>
                        <h4 class="d-none d-lg-block"></h4>
                    </a>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                        <i class="bi bi-3-circle w-20"></i>
                        <h4 class="d-none d-lg-block"></h4>
                    </a>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                        <i class="bi bi-4-circle w-30"></i>
                        <h4 class="d-none d-lg-block"></h4>
                    </a>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                        <i class="bi bi-5-circle w-20"></i>
                        <h4 class="d-none d-lg-block"></h4>
                    </a>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-6">
                        <i class="bi bi-6-circle"></i>
                        <h4 class="d-none d-lg-block"></h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Keunggulan</h3>
                            <p class="fst-italic">
                                Keahlian ganda merupakan salah satu keunggulannya, ini merupakan tambahan
                                keahlian
                                tiap paket keahlian sehingga tiap anak didik yang telah selesai melaksanakan
                                sekolah tahap
                                SMK mempunyai keahlian ganda yang bisa di praktikan di dunia kerja
                            </p>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <p>Beberapa Keunggulan lainnya :</p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i>Teaching Factory</li>
                                    <li><i class="ri-check-double-line"></i>Industries Education Based</li>
                                    <li><i class="ri-check-double-line"></i>Terakreditasi A</li>
                                    <li><i class="ri-check-double-line"></i>Perlatan Praktik Up To Date</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{asset('assets2/img/images/mozila.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Jaminan pendidikan</h3>
                            <p> Anak didik dipersiapkan untuk bekerja, berwirausaha maupun melanjutkan ke perguruan
                                tinggi. Mental, sikap serta kedisiplinan kami sesuaikan dengan Dunia Industri.
                                Begitu juga
                                dengan kurikulum telah dipersiapkan sesuai dengan kebutuhan dunia industri sehingga
                                anak
                                didik benar-benar siap terjun ke Dunia Industri ataupun Dunia Usaha
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Kerjasama dunia industri</h3>
                            <p>
                                Lebih dari 100 MoU dengan dunia industri dan dunia usaha sehingga kurikulum yang
                                diterapkan pada kegiatan belajar peserta didik merupakan hasil musyawarah dengan
                                DU/DI.
                                Peserta didik di SMK Assalaam pun tidak perlu khawatir untuk menghadapi praktik
                                kerja
                                industri ataupun mencari peluang pekerjaan.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Sertifikasi</h3>
                            <p>
                                Sertifikasi kompetensi akan didapatkan setelah dilaksanakan Uji Kompetensi yang
                                dilaksanakan dengan Para penguji Profesional dari Perusahaan yang telah MoU.
                                Sertifikat
                                yang diberikan merupakan sertifikat yang dikeluarkan langsung oleh Industri.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-5">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Fasilitas</h3>
                            <p>
                                Untuk menunjang proses pembelajaran, kami menyediakan peralatan yang up to
                                date sesuai
                                dengan kebutuhan Dunia Industri serta memiliki unit produksi SMK Assalaam
                                yang menjadi
                                laboratorium langsung bagi siswa dalam mengembangkan keterampilan
                                kejuruannya.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-6">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Lulusan</h3>
                            <p>
                                Lulusan SMK Assalaam dibekali dengan kemampuan yang disesuaikan Kebutuhan
                                Industri, mempunyai Budaya Kerja Tinggi dan Terampil bekerja.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->


    <!-- ======= About Boxes Section ======= -->
    <section id="jurusan" class="about-boxes">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="font-size: 30px">Jurusan</h2>
            </div>
            <div class="row">
                @foreach ($jurusan as $data)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow rounded card">
                        <img src="{{ $data->image() }}" style="width: 75%; padding:20px" class="card-img-top mx-auto"
                            alt="...">
                        <div class="card-icon">
                            <i class="ri-brush-4-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">{{$data->nama_jurusan}}</a></h5>
                            <br>
                            <h6><strong>{{$data->singkatan}} </strong></h6>
                            <p class="card-text">{{$data->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End About Boxes Section -->

    <!-- ======= Services Section ======= -->
    <section id="eskul" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2 style="font-size: 30px">Ekstra Kurikuler</h2>
            </div>

            <div data-aos="fade-up" data-aos-delay="200">
                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{asset('assets2/img/images/tari.png')}}" width="50%" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <h3>Have a look our extracurricular activities.</h3>
                        <p>
                            Kegiatan ekstrakurikuler menjembatani kebutuhan perkembangan peserta didik yang berbeda
                            seperti perbedaan sense akan
                            nilai moral dan sikap, kemampuan dan kreativitas.
                        </p>
                        <p> Melalui partipasinya dalam kegiatan ekstrakurikuler peserta didik
                            dapat belajar dan mengembangkan kemampuan berkomunikasi, bekerja sama dengan orang lain,
                            serta menemukan dan
                            mengembangkan potensinya.
                        </p>
                        <p> Kegiatan ekstrakurikuler juga memberikan manfaat sosial yang besar.
                        </P>

                        <a href="{{url('/eskul')}}" class="btn btn-primary" style="color:white">Lihat Selengkapnya</a>
                        <a href="https://youtu.be/nCsjw4XNr-Q" class="glightbox btn-watch-video btn btn-info"><i
                                class="bi bi-play-circle"></i><span> Watch
                                Video</span></a>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tim</h2>
                <p>Kaprog</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="pic"><img class="shadow rounded card"
                                src="{{asset('assets2/img/images/kaprog_tsm.jpg')}}" style="width: 90%"
                                class="img-fluid" alt="">
                        </div>
                        <div class="member-info  shadow rounded card">
                            <h4>Agus Riyadi</h4>
                            <span>KAPROG TSM</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img class="shadow rounded card"
                                src="{{asset('assets2/img/images/kaprog_rpl.jpg')}}" style="width: 90%"
                                class="img-fluid" alt="">
                        </div>
                        <div class="member-info  shadow rounded card">
                            <h4>Ute Juli Kurnia, S.T.</h4>
                            <span>KAPROG RPL</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="pic"><img class="shadow rounded card"
                                src="{{asset('assets2/img/images/kaprog_tkro.jpg')}}" style="width: 90%"
                                class="img-fluid" alt="">
                        </div>
                        <div class="member-info  shadow rounded card">
                            <h4>Cevi Noor Alamsah, A.Md</h4>
                            <span>KAPROG TKRO</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="lainnya" class="testimonials">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2 style="font-size: 30px">Testimoni</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets2/img/images/akmal.png')}}" class="testimonial-img" alt="">
                            <h3>Akmal Musthofa</h3>
                            <h4>Web Developer PT SMOOETS TEKNOLOGI OUTSOURCING</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Selama belajar di SMK ASSALAAM, potensi diri semakin melejit. Bersyukur bisa sekolah di
                                lembaga pendidikan yang
                                berkualitas, mengajarkan kreatifitas, dan dibekali ilmu agama seperti SMK ASSALAAM. SMK
                                ASSALAAM luar biasa bermanfaat.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets2/img/images/mahdan.png')}}" class="testimonial-img" alt="">
                            <h3>Mahdan Firdaus</h3>
                            <h4>Programmer CV. MULTI KARYA OTOMASI</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                SMK ASSALAAM adalah SMK yang paling the best, selain segi akademiknya sangat berguna
                                didunia industri, bimbingan tentang
                                sikap dari gurunya pun sangat melekat di hati saya.<i
                                    class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets2/img/images/hisan.png')}}" class="testimonial-img" alt="">
                            <h3>Hisan Abdul Latif</h3>
                            <h4>IT Support NEWTRONIC SOLUTION</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Saya yakin SMK ASSALAAM akan memberikan bekal yang terbaik untuk bersaing di masa
                                depan.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets2/img/images/agung.png')}}" class="testimonial-img" alt="">
                            <h3>Agung Kusuma</h3>
                            <h4>Mekanik Honda PT. WIJAYA ABADI MOTOR</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                SMK ASSALAAM sangat disiplin dan materi yang diajarkannya sangat terpakai didunia
                                industry.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets2/img/images/abdul.png')}}" class="testimonial-img" alt="">
                            <h3>Abdul Sodik Ibnudin</h3>
                            <h4>Mekanik Honda PT. AHASS KOPO</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Selain ilmu dan skill, kedisiplinan menjadi point penting yang sangat penting di sekolah

                                ini. Sampai saat ini saya sudah terbiasa tepat waktu dalam menyelesaikan tugas. SMK
                                ASSALAAM IDAMAN.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets2/img/images/jafar.png')}}" class="testimonial-img" alt="">
                            <h3>Jafar Sidik</h3>
                            <h4>MekanikToyota PT. WIJAYA LESTARI DAGO
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>SMK Assalaam adalah sekolah yang
                                memberikan ilmu akademis, ilmu keterampilan dan ilmu akhlak yang berguna dan bermanfaat
                                bagi saya.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets2/img/images/eko.png')}}" class="testimonial-img" alt="">
                            <h3>Eko Budi Prasetyo</h3>
                            <h4>Mekanik Mitsubishi PT. SRIKANDI DIAMON MOTORS</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                SMK Assalaam memberikan praktek bidang keahlian lebih lama, ilmu dan keterampilan
                                yang diberikan sangat terpakai sekali dalam dunia industry<i
                                    class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->
    <section id="galeri" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2 style="font-size: 30px">Galeri</h2>
            </div>

            <div data-aos="fade-up" data-aos-delay="200">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('assets2/img/images/fuso.png')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('assets2/img/images/fuso.png')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('assets2/img/images/fuso.png')}}" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        <br>
            <a href="{{url('/galeri')}}" class="btn btn-primary" style="color:white">Lihat Selengkapnya</a>
            <a href="https://youtu.be/nCsjw4XNr-Q" class="glightbox btn-watch-video btn btn-info"><i
                    class="bi bi-play-circle"></i><span> Watch
                    Video</span></a>
        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->


@endsection