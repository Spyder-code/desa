@extends('layouts.user')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4 mt-3">
                <a href="#">
                    <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <h3 class="cat-text text-success font-weight-bold">{{ $data->sehat }}</h3>
                            <h3 class="cat-text"> <i class="fas fa-heart"></i> Sehat</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 mt-3">
                <a href="#">
                    <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <h3 class="cat-text text-success font-weight-bold">{{ $data->sakit }}</h3>
                            <h3 class="cat-text"> <i class="fas fa-viruses"></i> Sakit</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 mt-3">
                <a href="#">
                    <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <h3 class="cat-text text-success font-weight-bold">{{ $data->hamil }}</h3>
                            <h3 class="cat-text"> <i class="fas fa-female"></i> Hamil</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection