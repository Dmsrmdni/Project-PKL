<!DOCTYPE html>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{asset('assets/')}}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&amp;l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    {{--
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}"> --}}

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link href="{{asset('assets2/css/style.css')}}" rel="stylesheet">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>
    
</head>

<body>

    @include('sweetalert::alert')
    <main style="margin: 20px">
    <!-- Button trigger modal -->
    <div class="container">
        <div class="section-title">
           <h2 style="font-size: 40px; text-align:center;padding:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Daftar Sekarang Juga !!!!</h2>
       </div>
        <br>
        @if (session('nama_lengkap'))

        <button type="button" id="modal-btn" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <span class="indicator-label"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                    class="bi bi-send-fill" viewBox="0 0 16 16">
                    <path
                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                </svg> Cek Data </span>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>Kode Pendaftaran:
                            </strong> {{ session('kode_pendaftaran') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>:</td>
                                <td>{{session('nama_lengkap') }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>{{session('jenis_kelamin') }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>:</td>
                                <td>{{session('tempat_lahir')}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>:</td>
                                <td>{{session('tanggal_lahir')}}</td>
                            </tr>

                            <tr>
                                <th>No Hp Siswa</th>
                                <td>:</td>
                                <td>{{session('no_hp_siswa')}}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td>{{session('email')}}</td>
                            </tr>

                            <tr>
                                <th>Provinsi</th>
                                <td>:</td>
                                <td>{{session('provinsi')}}</td>
                            </tr>

                            <tr>
                                <th>Kota</th>
                                <td>:</td>
                                <td>{{session('kota')}}</td>
                            </tr>

                            <tr>
                                <th>Kecamatan</th>
                                <td>:</td>
                                <td>{{session('kecamatan')}}</td>
                            </tr>

                            <tr>
                                <th>Desa</th>
                                <td>:</td>
                                <td>{{session('desa')}}</td>
                            </tr>

                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{session('alamat')}}</td>
                            </tr>

                            <tr>
                                <th>Kode Pos</th>
                                <td>:</td>
                                <td>{{session('kode_pos')}}</td>
                            </tr>

                            <tr>
                                <th>Nama Asal Sekolah</th>
                                <td>:</td>
                                <td>{{session('nama_asal_sekolah')}}</td>
                            </tr>

                            <tr>
                                <th>Alamat Sekolah</th>
                                <td>:</td>
                                <td>{{session('alamat_sekolah')}}</td>
                            </tr>

                            <tr>
                                <th>Nama Lengkap Orang Tua</th>
                                <td>:</td>
                                <td>{{session('nama_lengkap_ortu')}}</td>
                            </tr>

                            <tr>
                                <th>No HP Yang Bisa Di Hubungi</th>
                                <td>:</td>
                                <td>{{session('no_hp_yang_bisa_di_hubungi')}}</td>
                            </tr>

                            <tr>
                                <th>Alamat Ortu</th>
                                <td>:</td>
                                <td>{{session('alamat_ortu')}}</td>
                            </tr>

                        </table>
                    </div>
                    <div class="modal-footer">
                        <a href="{{url('/')}}" class="btn btn-info me-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" fill="currentColor" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5z" />
                            </svg> Oke</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.querySelector('#modal-btn').click();
        </script>

        @endif
        <!--end::Button-->
        <form action="{{ route('pendaftaran.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4 shadow-lg rounded card" style="margin: 2%; padding:1% ">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Data Diri Calon Pendaftar</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="hidden" name="kode_pendaftaran"
                                    class="form-control mb-2 @error('kode_pendaftaran') is-invalid @enderror" readonly
                                    value="{{'NBM-'. date('dmy') . $kd}}" />
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Nama Jurusan</label>
                                <select name="id_jurusan"
                                    class="form-control @error('id_jurusan') is-invalid @enderror">
                                    @foreach ($jurusan as $data) <option value="{{ $data->id }}">{{ $data->nama_jurusan
                                        }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('id_jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap"
                                    class="form-control mb-2  @error('nama_lengkap') is-invalid @enderror"
                                    placeholder="Nama lengkap" value="" />
                                @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir"
                                    class="form-control mb-2  @error('tempat_lahir') is-invalid @enderror"
                                    placeholder="Tempat Lahir" value="" />
                                @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="required form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir"
                                    class="form-control mb-2  @error('tanggal_lahir') is-invalid @enderror"
                                    placeholder="Tanggal Lahir" value="" />
                                @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="required form-label">No HP</label>
                                <input type="text" name="no_hp_siswa"
                                    class="form-control mb-2  @error('no_hp_siswa') is-invalid @enderror"
                                    placeholder="No Hp Siswa" value="" />
                                @error('no_hp_siswa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="required form-label">Email</label>
                                <input type="email" name="email"
                                    class="form-control mb-2  @error('email') is-invalid @enderror" placeholder="Email"
                                    value="" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl">
                    <div class="card mb-4 shadow-lg rounded card" style="margin: 3%; padding:1px ">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Alamat Calon Pendaftar</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Provinsi</label>
                                <input type="text" name="provinsi"
                                    class="form-control mb-2  @error('provinsi') is-invalid @enderror"
                                    placeholder="Provinsi" value="" />
                                @error('provinsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="required form-label">Kota</label>
                                <input type="text" name="kota"
                                    class="form-control mb-2  @error('kota') is-invalid @enderror" placeholder="Kota"
                                    value="" />
                                @error('kota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Kecamatan</label>
                                <input type="text" name="kecamatan"
                                    class="form-control mb-2  @error('kecamatan') is-invalid @enderror"
                                    placeholder="Kecamatan" value="" />
                                @error('kecamatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Desa</label>
                                <input type="text" name="desa"
                                    class="form-control mb-2  @error('desa') is-invalid @enderror" placeholder="Desa"
                                    value="" />
                                @error('desa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Alamat</label>
                                <textarea name="alamat" cols="30" rows="7"
                                    class="form-control mb-2  @error('alamat') is-invalid @enderror"
                                    placeholder="Alamat"></textarea>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Kode Pos</label>
                                <input type="text" name="kode_pos"
                                    class="form-control mb-2  @error('kode_pos') is-invalid @enderror"
                                    placeholder="Kode Pos" value="" />
                                @error('kode_pos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4 shadow-lg rounded card" style="margin: 2%; padding:1% ">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Data Asal Sekolah</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Nama Asal Sekolah</label>
                                <input type="text" name="nama_asal_sekolah"
                                    class="form-control mb-2  @error('nama_asal_sekolah') is-invalid @enderror"
                                    placeholder="Nama Asal Sekolah" value="" />
                                @error('nama_asal_sekolah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Alamat Sekolah</label>
                                <textarea name="alamat_sekolah" cols="30" rows="7"
                                    class="form-control mb-2  @error('alamat_sekolah') is-invalid @enderror"
                                    placeholder="Alamat Sekolah"></textarea>
                                @error('alamat_sekolah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{url('/')}}" class="btn btn-danger me-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                            </svg> Kembali</a>
                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary mx-3">
                            <span class="indicator-label"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                </svg> Kirim </span>
                        </button>

                        <button type="reset" class="btn btn-warning mx-3">
                            <span class="indicator-label"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    fill="currentColor" class="bi bi-arrow-clockwise" viewBox=" 0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                    <path
                                        d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                </svg> Ulang </span>
                        </button>
                    </div>
                </div>

                <div class="col-xl">
                    <div class="card mb-4 shadow-lg rounded card" style="margin: 2%; padding:1% ">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Data Orang Tua</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Nama Lengkap Ortu</label>
                                <input type="text" name="nama_lengkap_ortu"
                                    class="form-control mb-2  @error('nama_lengkap_ortu') is-invalid @enderror"
                                    placeholder="Nama Lengkap Ortu" value="" />
                                @error('nama_lengkap_ortu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="required form-label">Pekerjaan</label>
                                <input type="text" name="pekerjaan"
                                    class="form-control mb-2  @error('pekerjaan') is-invalid @enderror"
                                    placeholder="Pekerjaan" value="" />
                                @error('pekerjaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">No HP Yang Bisa Di hubungi</label>
                                <input type="text" name="no_hp_yang_bisa_di_hubungi"
                                    class="form-control mb-2  @error('no_hp_yang_bisa_di_hubungi') is-invalid @enderror"
                                    placeholder="No HP Yang Bisa Di Hubungi" value="" />
                                @error('no_hp_yang_bisa_di_hubungi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="required form-label">Alamat Orang Tua</label>
                                <textarea name="alamat_ortu" cols="30" rows="7"
                                    class="form-control mb-2  @error('alamat_ortu') is-invalid @enderror"
                                    placeholder="Alamat Orang Tua"></textarea>
                                @error('alamat_ortu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    </main>
    
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
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>