@extends('layouts.admin')

@section('content')
<!--begin::Content-->
<div class="container">
    <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Data Diri</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Kode Pendaftaran</label>
                            <input type="text" name="kode_pendaftaran"
                                class="form-control mb-2 @error('kode_pendaftaran') is-invalid @enderror" readonly
                                value="{{ $pendaftaran->kode_pendaftaran }}" />
                        </div>
                        <div class="mb-3">
                            <label class="required form-label">Name Jurusan</label>
                            <select name="id_jurusan" class="form-control @error('id_jurusan') is-invalid @enderror">
                                @foreach ($jurusan as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $data->id_jurusan ? 'selected' : ''
                                    }}>{{ $data->nama_jurusan }}
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
                                placeholder="Nama lengkap" value="{{ $pendaftaran->nama_lengkap }}" />
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
                                placeholder="Tempat Lahir" value="{{ $pendaftaran->tempat_lahir }}" />
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
                                placeholder="Tanggal Lahir" value="{{ $pendaftaran->tanggal_lahir }}" />
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
                                placeholder="No Hp Siswa" value="{{ $pendaftaran->no_hp_siswa }}" />
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
                                value="{{ $pendaftaran->email }}" />
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
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic with Icons</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="required form-label">Provinsi</label>
                            <input type="text" name="provinsi"
                                class="form-control mb-2  @error('provinsi') is-invalid @enderror"
                                placeholder="Provinsi" value="{{ $pendaftaran->provinsi }}" />
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
                                value="{{ $pendaftaran->kota }}" />
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
                                placeholder="Kecamatan" value="{{ $pendaftaran->kecamatan }}" />
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
                                value="{{ $pendaftaran->desa }}" />
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
                                placeholder="Alamat">{{$pendaftaran->alamat }}</textarea>
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
                                placeholder="Kode Pos" value="{{ $pendaftaran->kode_pos }}" />
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
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic Layout</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="required form-label">Nama Asal Sekolah</label>
                            <input type="text" name="nama_asal_sekolah"
                                class="form-control mb-2  @error('nama_asal_sekolah') is-invalid @enderror"
                                placeholder="Nama Asal Sekolah" value="{{ $pendaftaran->nama_asal_sekolah }}" />
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
                                placeholder="Alamat Sekolah">{{ $pendaftaran->alamat_sekolah }}</textarea>
                            @error('alamat_sekolah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>

            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic with Icons</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="required form-label">Nama Lengkap Ortu</label>
                            <input type="text" name="nama_lengkap_ortu"
                                class="form-control mb-2  @error('nama_lengkap_ortu') is-invalid @enderror"
                                placeholder="Nama Lengkap Ortu" value="{{ $pendaftaran->nama_lengkap_ortu }}" />
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
                                placeholder="Pekerjaan" value="{{ $pendaftaran->pekerjaan }}" />
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
                                placeholder="No HP Yang Bisa Di Hubungi"
                                value="{{ $pendaftaran->no_hp_yang_bisa_di_hubungi }}" />
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
                                placeholder="Alamat Orang Tua">{{ $pendaftaran->alamat_ortu }}</textarea>
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
@endsection