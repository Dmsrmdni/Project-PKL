@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data Eskul
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Eskul</label>
                        <input type="text" class="form-control" name="nama_eskul" value="{{ $eskul->nama_eskul }}"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" value="{{ $eskul->deskripsi }}"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Foto Eskul</label>
                        @if (isset($eskul) && $eskul->foto)
                        <p>
                            <img src="{{ asset('images/eskul/' . $eskul->foto) }}" class="img-rounded img-responsive"
                                style="width: 75px; height:75px;" alt="">
                        </p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('eskul.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection