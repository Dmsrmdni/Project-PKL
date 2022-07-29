@extends('layouts.admin')
@section('content')
<!--begin::Category-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Add customer-->
            <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Data</a>
            <!--end::Add customer-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-50px">NO</th>
                    <th class="min-w-150px">Nama Jurusan</th>
                    <th class="min-w-150px">Singkatan</th>
                    <th class="min-w-150px">Deskripsi</th>
                    <th class="min-w-150px">Foto</th>
                    <th class="min-w-110px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-semibold text-gray-600">
                @php $no = 1; @endphp
                @foreach ($jurusan as $data)
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
                            {{ $data->nama_jurusan}}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            {{ $data->singkatan}}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            {{ $data->deskripsi}}
                        </div>
                    </td>

                    <td>
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <img src="{{ $data->image() }}" style="width: 100px; height:100px;" alt="">
                        </div>
                    </td>


                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="d-flex">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">Actions
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <form action="{{ route('jurusan.destroy', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="menu-item px-3">
                                    <a href="{{ route('jurusan.edit', $data->id) }}" class=" menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ route('jurusan.show', $data->id) }}" class=" menu-link px-3"
                                        data-kt-ecommerce-category-filter="delete_row">show</a>
                                </div>
                                <!--end::Menu item-->
                                <div class="menu-item px-3">
                                    <button type="submit" class="btn-danger"><a class=" menu-link px-3"
                                            data-kt-ecommerce-category-filter="delete_row"
                                            onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                @endforeach
                <!--end::Table row-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Category-->
@endsection