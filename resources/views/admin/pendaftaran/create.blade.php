@extends('layouts.admin')

@section('content')
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <form class="form d-flex flex-column flex-lg-row" action="{{ route('pendaftaran.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
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
                                placeholder="Kode Pendaftaran" value="" />
                            @error('kode_pendaftaran')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Name Jurusan</label>
                            <select name="id_jurusan" class="form-control @error('id_jurusan') is-invalid @enderror">
                                @foreach ($jurusan as $data) <option value="{{ $data->id }}">{{ $data->nama_jurusan }}
                                </option>
                                @endforeach
                            </select>
                            @error('id_jurusan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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
                                placeholder="Provinsi" value="" />
                            @error('provinsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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
                                placeholder="Nama Asal Sekolah" value="" />
                            @error('nama_asal_sekolah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-10 fv-row">
                            <label class="required form-label">Alamat Sekolah</label>
                            <input type="text" name="alamat_sekolah"
                                class="form-control mb-2  @error('alamat_sekolah') is-invalid @enderror"
                                placeholder="Alamat Sekolah" value="" />
                            @error('alamat_sekolah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
                                placeholder="Nama Lengkap Ortu" value="" />
                            @error('nama_lengkap_ortu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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

                        <div class="mb-10 fv-row">
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