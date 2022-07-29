@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data Guru
                </div>
                <div class="card-body">
                    <form action="{{ route('eskul.update', $eskul->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label">Nama Eskul</label>
                            <input type="text" class="form-control  @error('nama_eskul') is-invalid @enderror"
                                name="nama_eskul" value="{{ $eskul->nama_eskul }}">
                            @error('nama_eskul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control  @error('deskripsi') is-invalid @enderror"
                                name="deskripsi" value="{{ $eskul->deskripsi }}">
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            @if (isset($eskul) && $eskul->foto)
                            <p>
                                <img src="{{ asset('images/eskul/' . $eskul->foto) }}"
                                    class="img-rounded img-responsive" style="width: 75px; height:75px;" alt="">
                            </p>
                            @endif
                            <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto"
                                value="{{ $eskul->foto }}">
                            @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection