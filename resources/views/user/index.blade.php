@extends('layouts.user')
@section('nav-home','active')
@section('content')
    <!-- Top News Start-->
    <div class="top-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 tn-left">
                    <div class="row tn-slider">
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height:344px;" src="{{ asset('images/berita.jpg')}}" />
                                <div class="tn-title">
                                    <a href="{{ route('user.berita') }}">Berita</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height:344px;" src="{{ asset('images/kunjung.png')}}" />
                                <div class="tn-title">
                                    <a  href="{{ route('user.kunjung') }}">Jadwal Kunjung</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height:344px;" src="{{ asset('images/hukum.jpg')}}" />
                                <div class="tn-title">
                                    <a  href="{{ route('user.hukum') }}">Produk Hukum</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height:344px;" src="{{ asset('images/penduduk.jpg')}}" />
                                <div class="tn-title">
                                    <a  href="{{ route('user.penduduk') }}">Data Penduduk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height:344px;" src="{{ asset('images/pertanian.jpg')}}" />
                                <div class="tn-title">
                                    <a  href="{{ route('user.pertanian') }}">Pertanian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tn-right">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height: 172px" src="{{ asset('images/hukum.jpg')}}" />
                                <div class="tn-title">
                                    <a href="{{ route('user.hukum') }}">Produk Hukum</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height: 172px" src="{{ asset('images/berita.jpg')}}" />
                                <div class="tn-title">
                                    <a href="{{ route('user.berita') }}">Berita</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height: 172px" src="{{ asset('images/kunjung.png')}}" />
                                <div class="tn-title">
                                    <a href="{{ route('user.kunjung') }}">Jadwal Kunjung</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img" data-aos="fade-up" data-aos-delay="100">
                                <img style="height: 172px" src="{{ asset('user/img/news-350x223-4.jpg')}}" />
                                <div class="tn-title">
                                    <a href="{{ route('user.bum') }}">BUM Desa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News End-->

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" data-aos="fade-up" data-aos-delay="100" style="background: rgba(255, 255, 77, 0.5);">
                        <div class="card-body">
                            <h2>Paket wisata</h2>
                            <div class="row cn-slider">
                                @foreach ($wisata as $item)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="{{ $item->image }}" style="height: 170px" />
                                        <div class="cn-title">
                                            <a href="{{ route('user.wisata.show',['wisata'=>$item->id]) }}">
                                                <span>{{ $item->nama }}</span>
                                                <span class="float-right text-success">Rp. {{ $item->harga }} /orang</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a href="{{ route('user.wisata') }}" class="btn btn-light w-100">Lihat semua</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" data-aos="fade-up" data-aos-delay="100" style="background: rgba(255, 255, 77, 0.5);">
                        <div class="card-body">
                            <h2>Produk Desa</h2>
                            <div class="row cn-slider">
                                @foreach ($produk as $item)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="{{$item->image }}" style="height: 170px" />
                                        <div class="cn-title">
                                            <a href="{{ route('user.produk.show',['produk'=>$item->id]) }}">
                                                <span>{{ $item->nama }}</span>
                                                <span class="float-right text-success">Rp. {{ $item->harga }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a href="{{ route('user.produk') }}" class="btn btn-light w-100">Lihat semua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <!-- Category News Start-->
    <div class="cat-news mb-4">
        <div class="container">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="100">Penduduk & Pertanian</h2>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col">
                    <div class="cn-img">
                        <img style="height: 250px;" class="img-fluid" src="{{ asset('images/penduduk.jpg')}}" />
                        <div class="cn-title">
                            <a href="{{ route('user.penduduk') }}">Penduduk</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cn-img">
                        <img style="height: 250px;" class="img-fluid" src="{{ asset('images/pertanian.jpg')}}" />
                        <div class="cn-title">
                            <a href="{{ route('user.pertanian') }}">Pertanian</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <div class="cat-news mb-4">
        <div class="container">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="100">Pembangunan</h2>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-sm mb-4">
                    <div class="cn-img">
                        <img src="{{ asset('images/apb.jpg')}}" />
                        <div class="cn-title">
                            <a href="{{ route('user.apb') }}">APB Desa</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cn-img">
                        <img src="{{ asset('images/rkp.jpg')}}" />
                        <div class="cn-title">
                            <a href="{{ route('user.rkp') }}">RKP Desa</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cn-img">
                        <img src="{{ asset('images/rpjm.jpg')}}" />
                        <div class="cn-title">
                            <a href="{{ route('user.rpjm') }}">RPJM Desa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
