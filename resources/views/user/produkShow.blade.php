@extends('layouts.user')
@section('nav-produk','active')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="card border border-info">
                    <div class="card-header bg-info">{{ $produk->nama }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="{{ $produk->image }}" target="d_blank">
                                    <img src="{{ $produk->image }}" alt="{{ $produk->nama }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col">
                                <h2>{{ $produk->nama }}</h2>
                                <hr>
                                <h5>Harga:</h5>
                                <p class="text-success">Rp. {{ $produk->harga }}</p>
                                <h5>Deskripsi:</h5>
                                <p>{{ $produk->deskripsi }}</p>
                                <a href="" class="btn btn-success w-100">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
