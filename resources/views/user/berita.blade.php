@extends('layouts.user')
@section('nav-informasi','active')
@section('content')
    <!-- Main News Start-->
    <div class="main-news mt-5">
        <div class="cat-news container">
            <h2>Berita</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($data as $item)
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{$item->image}}" style="height: 250px" />
                                <div class="mn-title">
                                    <a href="{{ route('user.berita.show',['berita'=>$item->id]) }}">
                                        <span>{{ $item->nama }}</span>
                                            <span class="float-right text-primary">{{ date('d F Y', strtotime($item->created_at)) }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection
