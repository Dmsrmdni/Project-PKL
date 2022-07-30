@extends('layouts.admin')

@section('content')
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <form class="form d-flex flex-column flex-lg-row" method=" POST" enctype="multipart/form-data">
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Data</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <label class="required form-label">Kode Pendaftaran</label>
                            <input type="text" name="kode_pendaftaran"
                                class="form-control mb-2  @error('kode_pendaftaran') is-invalid @enderror"
                                value="{{ $pendaftaran->kode_pendaftaran }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Nama Jurusana</label>
                            <input type="text" name="id_jurusan"
                                class="form-control mb-2  @error('kode_pendaftaran') is-invalid @enderror"
                                value="{{ $pendaftaran->jurusan->nama_jurusan }}" disabled />
                        </div>
                        <div class="mb-10 fv-row">
                            <label class="required form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap"
                                class="form-control mb-2  @error('nama_lengkap') is-invalid @enderror"
                                value="{{ $pendaftaran->nama_lengkap }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin"
                                class="form-control mb-2  @error('jenis_kelamin') is-invalid @enderror"
                                value="{{ $pendaftaran->jenis_kelamin }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir"
                                class="form-control mb-2  @error('tempat_lahir') is-invalid @enderror"
                                value="{{ $pendaftaran->tempat_lahir }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir"
                                class="form-control mb-2  @error('tanggal_lahir') is-invalid @enderror"
                                value="{{ $pendaftaran->tanggal_lahir }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">No HP</label>
                            <input type="text" name="no_hp_siswa"
                                class="form-control mb-2  @error('no_hp_siswa') is-invalid @enderror"
                                value="{{ $pendaftaran->no_hp_siswa }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Email</label>
                            <input type="email" name="email"
                                class="form-control mb-2  @error('email') is-invalid @enderror"
                                value="{{ $pendaftaran->email }}" disabled />
                        </div>


                        <!--end::Input group-->
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->

                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Data Tempat Tinggal</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <label class="required form-label">Provinsi</label>
                            <input type="text" name="provinsi"
                                class="form-control mb-2  @error('provinsi') is-invalid @enderror"
                                value="{{ $pendaftaran->provinsi }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Kota</label>
                            <input type="text" name="kota"
                                class="form-control mb-2  @error('kota') is-invalid @enderror"
                                value="{{ $pendaftaran->kota }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Kecamatan</label>
                            <input type="text" name="kecamatan"
                                class="form-control mb-2  @error('kecamatan') is-invalid @enderror"
                                value="{{ $pendaftaran->kecamatan }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Desa</label>
                            <input type="text" name="desa"
                                class="form-control mb-2  @error('desa') is-invalid @enderror"
                                value="{{ $pendaftaran->desa }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Alamat</label>
                            <textarea name="alamat" cols="30" rows="7"
                                class="form-control mb-2  @error('alamat') is-invalid @enderror"
                                disabled>{{ $pendaftaran->alamat }}</textarea>
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Kode Pos</label>
                            <input type="text" name="kode_pos"
                                class="form-control mb-2  @error('kode_pos') is-invalid @enderror"
                                value="{{ $pendaftaran->kode_pos }}" disabled />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->

                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Data Asal Sekolah</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <label class="required form-label">Nama Asal Sekolah</label>
                            <input type="text" name="nama_asal_sekolah"
                                class="form-control mb-2  @error('nama_asal_sekolah') is-invalid @enderror"
                                value="{{ $pendaftaran->nama_asal_sekolah }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Alamat Sekolah</label>
                            <input type="text" name="alamat_sekolah"
                                class="form-control mb-2  @error('alamat_sekolah') is-invalid @enderror"
                                value="{{ $pendaftaran->alamat_sekolah }}" disabled />
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->

                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Data Orang Tua</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <label class="required form-label">Nama Lengkap Ortu</label>
                            <input type="text" name="nama_lengkap_ortu"
                                class="form-control mb-2  @error('nama_lengkap_ortu') is-invalid @enderror"
                                value="{{ $pendaftaran->nama_lengkap_ortu }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Pekerjaan</label>
                            <input type="text" name="pekerjaan"
                                class="form-control mb-2  @error('pekerjaan') is-invalid @enderror"
                                value="{{ $pendaftaran->pekerjaan }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">No HP Yang Bisa Di hubungi</label>
                            <input type="text" name="no_hp_yang_bisa_di_hubungi"
                                class="form-control mb-2  @error('no_hp_yang_bisa_di_hubungi') is-invalid @enderror"
                                value="{{ $pendaftaran->no_hp_yang_bisa_di_hubungi }}" disabled />
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Alamat</label>
                            <textarea name="alamat_ortu" cols="30" rows="7"
                                class="form-control mb-2  @error('alamat_ortu') is-invalid @enderror"
                                disabled>{{ $pendaftaran->alamat_ortu }}</textarea>
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->

                <!--end::Automation-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="{{route('pendaftaran.index')}}" class="btn btn-light me-5">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection