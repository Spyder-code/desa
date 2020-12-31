@extends('layouts.user')
@section('nav-pembangunan','active')
@section('content')
    <div class="cat-news my-5 container">
        <div class="row">
            <div class="col">
                <h2>APB Desa</h2>
                <div class="card border border-info">
                    <div class="card-header bg-info">List APB Desa</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bidang</th>
                                        <th>Kegiatan</th>
                                        <th>Anggaran</th>
                                        <th>Realisasi</th>
                                        <th>Defisit</th>
                                        <th>Sumber</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->bidang }}</td>
                                        <td>{{ $item->kegiatan }}</td>
                                        <td>{{ $item->anggaran }}</td>
                                        <td>{{ $item->realisasi }}</td>
                                        <td>{{ $item->defisit }}</td>
                                        <td>{{ $item->sumber }}</td>
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
