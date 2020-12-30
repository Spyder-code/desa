@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-info text-white">Detail RKP</div>
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
                                        {{$rkp->bidang}}
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
                                        {{$rkp->kegiatan}}
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
                                        {{$rkp->lokasi}}
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
                                        {{$rkp->volume}}
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
                                        {{$rkp->tahun}}
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
                                        {{$rkp->sumber}}
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
                                        {{$rkp->pola}}
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
