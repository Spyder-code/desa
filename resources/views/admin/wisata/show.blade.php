@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header bg-info text-white">Info Wisata</div>
                    <div class="card-body">
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Nama Wisata</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$wisatum->nama}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Deskripsi</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$wisatum->deskripsi}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Harga /orang</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        Rp. {{$wisatum->harga}}
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
                        <img src="{{ $wisatum->image }}" id="target" alt="{{ $wisatum->name }}" class="img-thumbnail" style="height: 300px">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.img').click(function (e) {
            e.preventDefault();
            var src = $(this).attr('src');
            $('#target').attr('src',src);
        });
        $('.uang').mask('000.000.000.000.000', {reverse: true});
    </script>
@endsection
