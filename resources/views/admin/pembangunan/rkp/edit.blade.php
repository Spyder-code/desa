@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Update RKP Desa!</h3>
            </div>
            <div class="col-5 align-self-center">
                <div class="bg-white border-0 custom-shadow custom-radius float-right p-3">
                    {{ date('d F Y') }}
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info text-white">Data RKP Desa</div>
                    <div class="card-body">
                        <form action="{{ route('rkp.update',['rkp'=>$rkp->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label>Bidang</label>
                                    <input type="text" name="bidang" class="form-control @error('bidang') is-invalid @enderror" value="{{ $rkp->bidang }}">
                                    @error('bidang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label>Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ $rkp->lokasi }}">
                                    @error('lokasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Volume</label>
                                    <input type="text" name="volume" class="form-control @error('volume') is-invalid @enderror" value="{{ $rkp->volume }}">
                                    @error('volume')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Jumlah</label>
                                    <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ $rkp->jumlah }}">
                                    @error('jumlah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label>Sumber</label>
                                    <input type="text" name="sumber" class="form-control @error('sumber') is-invalid @enderror" value="{{ $rkp->sumber }}">
                                    @error('sumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Pola</label>
                                    <input type="text" name="pola" class="form-control @error('pola') is-invalid @enderror" value="{{ $rkp->pola }}">
                                    @error('pola')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Tahun</label>
                                    <input type="number" name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ $rkp->tahun }}">
                                    @error('tahun')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <textarea name="kegiatan" cols="30" rows="5" class="form-control @error('kegiatan') is-invalid @enderror">{{ $rkp->kegiatan }}</textarea>
                                    @error('kegiatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-success d-block mt-3 w-100">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

