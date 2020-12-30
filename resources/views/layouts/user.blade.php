<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('user/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Desa Sukolilo | Kecamatan Wajak</title>
</head>

<body>

    <!-- Brand Start -->
    {{-- <div class="brand">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="b-logo">
                        <a href="index.html">
                            <img src="{{ asset('images/logo-banner.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Brand End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">Desa Sukolilo</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="{{ url('/') }}" class="nav-item nav-link @yield('nav-home')">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link @yield('nav-produk') dropdown-toggle" data-toggle="dropdown">Produk</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('user.hukum') }}" class="dropdown-item">Produk Hukum</a>
                                <a href="{{ route('user.produk') }}" class="dropdown-item">Produk Desa</a>
                                <a href="{{ route('user.pertanian') }}" class="dropdown-item">Pertanian</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link @yield('nav-informasi') dropdown-toggle" data-toggle="dropdown">Informasi</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('user.penduduk') }}" class="dropdown-item">Penduduk</a>
                                <a href="{{ route('user.wisata') }}" class="dropdown-item">Wisata</a>
                                <a href="{{ route('user.berita') }}" class="dropdown-item">Berita</a>
                                <a href="{{ route('user.kunjung') }}" class="dropdown-item">Jadwal Kunjung</a>
                                <a href="{{ route('user.bum') }}" class="dropdown-item">BUM Desa</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link @yield('nav-pembangunan') dropdown-toggle" data-toggle="dropdown">Pembangunan</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('user.apb') }}" class="dropdown-item">APB Desa</a>
                                <a href="{{ route('user.rkp') }}" class="dropdown-item">RKP Desa</a>
                                <a href="{{ route('user.rpjm') }}" class="dropdown-item">RPJM Desa</a>
                            </div>
                        </div>
                        {{-- <a href="{{ route('user.kontak') }}" class="nav-item nav-link">Kontak Kami</a> --}}
                        <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                    </div>
                    <div class="social ml-auto">
                        {{-- <img src="{{ asset('images/logo-banner.png') }}" class="img-fluid" style="width: 200px" > --}}
                        <h5 class="mt-3 text-white">Desa Sukolilo Kecamatan Wajak</h5>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Balai Desa Sukolilo Kecamatan Wajak</h3>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>Jl. Panglima Sudirman No.167, Wajak, Malang, Jawa Timur 65173</p>
                            <p><i class="fa fa-envelope"></i>admin@desasukolilo.com</p>
                            <p><i class="fa fa-phone"></i>(0341) 7714797</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Useful Links</h3>
                        <ul>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Pellentesque</a></li>
                            <li><a href="#">Aenean vulputate</a></li>
                            <li><a href="#">Vestibulum sit amet</a></li>
                            <li><a href="#">Nam dignissim</a></li>
                        </ul>
                    </div>
                </div> --}}

                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Lokasi</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31598.710333181887!2d112.69618537904056!3d-8.11789114015092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6217fb80c68af%3A0x1adc7c81c6736f3a!2sSukolilo%2C%20Wajak%2C%20Malang%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1609322741346!5m2!1sen!2sid" width="260" height="170" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Copyright &copy; <a href="">sukolilo.com</a>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('user/lib/slick/slick.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('user/js/main.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "6283857317946", // WhatsApp number
            call_to_action: "Kirimi kami pesan", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
    @yield('script')
</body>
</html>
