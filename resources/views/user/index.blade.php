@extends('layouts.user')
@section('content')
<div class="container-fluid owl-carousel owl-bg owl-theme fadOut atch">
    <div style="position: relative;">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
      <h2 style=" position: absolute;bottom: 8px;left: 16px;" class="text-white font-weight-bolder font-italic">Title</h2>
    </div>
    <div style="position: relative;">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="First slide">
      <h2 style=" position: absolute;bottom: 8px;left: 16px;" class="text-white font-weight-bolder font-italic">Title</h2>
    </div>
    <div style="position: relative;">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="First slide">
      <h2 style=" position: absolute;bottom: 8px;left: 16px;" class="text-white font-weight-bolder font-italic">Title</h2>
    </div>
  </div>

<div class="container section-kategori mb-5">
  <div class="">
    <h2 data-aos="fade-up" data-aos-delay="200">Produk</h2>
  </div>
  <div class="row">
    <div class="col-6 col-md-4 mt-3">
      <a href="{{ url('hukum') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-gavel"></i> Hukum</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 mt-3">
      <a href="{{ url('produk') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-city"></i> Desa</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col-12 col-md-4 mt-3">
      <a href="{{ url('pertanian') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="600">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-feather-alt"></i> Pertanian</h3>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="container section-kategori my-5">
  <div class="">
    <h2 data-aos="fade-up" data-aos-delay="200">Informasi</h2>
  </div>
  <div class="row">
    <div class="col-6 col-md-4 mt-3">
      <a href="{{ url('penduduk') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-users"></i><br> Penduduk</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 mt-3">
      <a href="{{ url('wisata') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-plane-departure"></i><br> Wisata</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 mt-3">
      <a href="{{ url('berita') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="600">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-newspaper"></i><br> Berita</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 mt-3">
      <a href="{{ url('kunjung') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="800">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-bus-alt"></i><br> Kunjungan</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 mt-3">
      <a href="{{ url('bum') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="1000">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-building"></i><br> BUM Desa</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 mt-3">
      <a href="{{ url('kesehatan') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="1200">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-heart"></i><br> Kesehatan</h3>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="container section-kategori my-5">
  <div class="">
    <h2 data-aos="fade-up" data-aos-delay="200">Pembangunan</h2>
  </div>
  <div class="row">
    <div class="col mt-3">
      <a href="{{ url('apb') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-atlas"></i> APB</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col mt-3">
      <a href="{{ url('rkp') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-clipboard-list"></i> RKP</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm mt-3">
      <a href="{{ url('rpjm') }}">
        <div class="card shadow text-center" data-aos="fade-up" data-aos-delay="600">
          <div class="card-body">
            <h3 class="cat-text"> <i class="fas fa-drafting-compass"></i> RPJM</h3>
          </div>
        </div>
      </div>
      </a>
  </div>
</div>
@endsection