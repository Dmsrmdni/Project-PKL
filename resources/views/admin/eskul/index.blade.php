@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Eskul
                <a href="{{ route('eskul.create') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                    Tambah Data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable">
                        <thead>
                            <th>No</th>
                            <th>Nama Eskul</th>
                            <th>Deskripsi</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($eskul as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_eskul}}</td>
                                <td>{{ $data->deskripsi}}</td>
                                <td>
                                    <img src="{{ $data->image() }}" style="width: 100px; height:100px;" alt="">
                                </td>
                                <td>
                                    <form action="{{ route('eskul.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('eskul.edit', $data->id) }}"
                                            class="btn btn-sm btn-outline-success">
                                            Edit
                                        </a> |
                                        <a href="{{ route('eskul.show', $data->id) }}"
                                            class="btn btn-sm btn-outline-warning">
                                            Show
                                        </a> |
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Apakah Anda Yakin?')">Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection