@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header bg-info text-white">Info berita</div>
                    <div class="card-body">
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Nama berita</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$beritum->nama}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Tanggal upload</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{date('d F Y',strtotime($beritum->created_at))}}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header bg-warning text-white">Image</div>
                    <div class="card-body text-center">
                        <img src="{{ $beritum->image }}" id="target" alt="{{ $beritum->nama }}" class="img-thumbnail" style="height: 300px">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {!! $beritum->deskripsi !!}
            </div>
        </div>
    </div>
@endsection

