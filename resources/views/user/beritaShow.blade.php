@extends('layouts.user')
@section('nav-informasi','active')
@section('content')
<div class="single-news">
    <div class="container my-5 bg-white">
        <div class="row">
            <div class="col-lg-8 mt-3">
                <div class="sn-container">
                    <div class="sn-img">
                        <p>Upload on {{ date('d F Y',strtotime($berita->created_at)) }}</p>
                        <img src="{{ $berita->image }}" />
                    </div>
                    <div class="sn-content">
                        <h1 class="sn-title">{{ $berita->nama }}</h1>
                        <p>{!! $berita->deskripsi !!}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="mn-list">
                            <h2>Berita lainya</h2>
                            <ul>
                                @foreach ($data as $item)
                                    <li><a href="{{ route('user.berita.show',['berita'=>$item->id]) }}">{{ $item->nama }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
