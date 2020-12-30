@extends('layouts.user')
@section('nav-informasi','active')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="card border border-dark">
                    <div class="card-header" style="background: rgba(255, 255, 77, 0.5);">Wisata {{ $wisata->nama }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="{{ $wisata->image }}" target="d_blank">
                                    <img src="{{ $wisata->image }}" alt="{{ $wisata->nama }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col">
                                <h2>Wisata {{ $wisata->nama }}</h2>
                                <hr>
                                <h5>Harga /orang:</h5>
                                <p class="text-success">Rp. {{ $wisata->harga }}</p>
                                <h5>Deskripsi:</h5>
                                <p>{{ $wisata->deskripsi }}</p>
                                <a href="" class="btn btn-success w-100">Contact Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
