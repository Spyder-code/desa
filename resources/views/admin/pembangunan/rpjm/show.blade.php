@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-info text-white">Detail RPJM</div>
                    <div class="card-body">
                        <ul class="list-group text-left">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Bidang</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$rpjm->bidang}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Sub bidang</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$rpjm->sup_bidang}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Kegiatan</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$rpjm->kegiatan}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Lokasi</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$rpjm->lokasi}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Volume</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$rpjm->volume}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Tahun</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$rpjm->tahun}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Sumber</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$rpjm->sumber}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col col-4">
                                        <label for="address">Pola</label>
                                    </div>
                                    <div class="col col-2">
                                        <label for="">:</label>
                                    </div>
                                    <div class="col">
                                        {{$rpjm->pola}}
                                    </div>
                                </div>
                            </li>
                        </ul>
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
