@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{ $data->count() }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah semua produk</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="box"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <a href="{{ route('berita.create') }}" class="btn btn-success">Tambah data</a>
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

        <div class="row">
            <div class="col">
                <div class="card border border-primary">
                    <div class="card-header bg-primary text-white">List Berita</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ substr($item->nama,0,30) }}</td>
                                        <td>{{ substr($item->deskripsi,0,30 ) }}</td>
                                        <td><img src="{{ $item->image }}" class="img-fluid" style="height: 100px"></td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('berita.show',['beritum'=>$item->id]) }}" class="btn btn-warning mr-2" data-toggle="tooltip" data-placement="bottom" title="Detail berita"><i class="text-white fas fa-search"></i></a>
                                            <form action="{{ route('berita.destroy',['beritum'=>$item->id]) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger mr-2" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="bottom" title="Hapus berita"><i class="text-white fas fa-trash-alt"></i></button>
                                            </form>
                                            <a href="{{ route('berita.edit',['beritum'=>$item->id]) }}" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Edit berita"><i class="text-white fas fa-pencil-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- CSS Here -->
<link href="{{ asset('admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
<!-- Javascript Here -->
<script src="{{ asset('admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
<script>
    $('#zero_config').DataTable();
</script>
@endsection
