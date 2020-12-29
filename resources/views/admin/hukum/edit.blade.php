@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambahkan hukum!</h3>
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
                    <div class="card-header bg-info text-white">Data hukum</div>
                    <div class="card-body">
                        <form action="{{ route('hukum.update',['hukum'=>$hukum->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label>Jenis</label>
                                    <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror" value="{{ $hukum->jenis }}">
                                    @error('jenis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label>Nomor</label>
                                    <input type="text" name="nomor" class="form-control @error('nomor') is-invalid @enderror" value="{{ $hukum->nomor }}">
                                    @error('nomor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label>Ditetapkan</label>
                                    <input type="date" name="ditetapkan" class="form-control @error('ditetapkan') is-invalid @enderror" value="{{ $hukum->ditetapkan }}">
                                    @error('ditetapkan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label>Diundangkan</label>
                                    <input type="date" name="diundangkan" class="form-control @error('diundangkan') is-invalid @enderror" value="{{ $hukum->diundangkan }}">
                                    @error('diundangkan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tentang</label>
                                <textarea name="tentang" cols="30" rows="5" class="form-control @error('tentang') is-invalid @enderror">{{ $hukum->tentang }}</textarea>
                                    @error('tentang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <input type="file" name="file">
                            <button type="submit" class="btn btn-success mt-3 d-block w-100">Buat hukum</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

