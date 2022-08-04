@extends('layouts.admin')
@section('content')
<div class="card card-flush">
    <div class="card-header">
        @include('sweetalert::alert')
        <a href="{{ route('pendaftaran.create') }}" class="btn btn-sm btn-primary"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
            </svg>Tambah Data</a>
    </div>
    <div class="table-responsive text-nowrap">
        <div class="container">
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Kode Pendaftaran</th>
                        <th>Nama Jurusan</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $no = 1; @endphp
                    @foreach ($pendaftaran as $data)
                    <tr>
                        <!--begin::Category=-->
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                {{ $no++}}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                {{ $data->kode_pendaftaran}}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                {{ $data->jurusan->nama_jurusan}}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                {{ $data->nama_lengkap}}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                {{ $data->jenis_kelamin}}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                {{ $data->nama_asal_sekolah}}
                            </div>
                        </td>
                        <!--end::Type=-->
                        <!--begin::Action=-->
                        <td>
                            <form action="{{ route('pendaftaran.destroy', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('pendaftaran.edit', $data->id) }}" class="btn btn-sm btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                    Edit
                                </a> |
                                <a href="{{ route('pendaftaran.show', $data->id) }}" class="btn btn-sm btn-warning"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                    Lihat
                                </a> |
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda Yakin?')"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <!--end::Table row-->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection