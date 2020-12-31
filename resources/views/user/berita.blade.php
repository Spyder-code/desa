@extends('layouts.user')
@section('nav-informasi','active')
@section('content')
    <!-- Main News Start-->
    <div class="main-news my-5">
        <div class="cat-news container">
            <h2>Berita</h2>
            <div class="row">
                @foreach ($data as $item)
                <div class="col-6 col-md-4 mt-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="{{ $item->image }}" class="card-img-top img-fluid">
                            <h5 class="cat-text-p mt-2">{{ $item->nama }}</h5>
                            <div class="d-flex">
                                <span class="cat-text-p">upload on <b>{{ date('d F Y',strtotime($item->created_at)) }}</b></span>
                            </div>
                            <hr>
                            <div class="d-flex text-center">
                                <a href="{{ route('user.berita.show',['berita'=>$item->id]) }}" class="btn btn-sm w-100 btn-primary float-right cat-text-p">Baca</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection
