@extends('layouts.user')
@section('nav-informasi','active')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="card border border-info">
                    <div class="card-header bg-info">Wisata {{ $wisata->nama }}</div>
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
                                <a href="https://api.whatsapp.com/send?phone=6285234317297&text=Permisi%20saya%20mau%20tanya%20wisata%20{{ $wisata->nama }}" class="btn btn-success w-100">Contact Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
