@extends('layouts.user')
@section('nav-produk','active')
@section('content')
    <div class="cat-news my-5 container">
        <div class="row">
            <div class="col">
                <h2>Produk hukum</h2>
                <div class="card border border-info">
                    <div class="card-header bg-info">List hukum</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis</th>
                                        <th>Nomor</th>
                                        <th>Tentang</th>
                                        <th>Ditetapkan</th>
                                        <th>Diundang</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->jenis }}</td>
                                        <td>{{ $item->nomor }}</td>
                                        <td>{{ $item->tentang }}</td>
                                        <td>{{ date('d F Y', strtotime($item->ditetapkan)) }}</td>
                                        <td>{{ date('d F Y', strtotime($item->diundangkan)) }}</td>
                                        <td><a href="{{ $item->file }}" class="btn btn-success"><i class="fas fa-download"></i></a></td>
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
