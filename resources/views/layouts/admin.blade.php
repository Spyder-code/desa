<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/kabmalang.png') }}">
    <title>Dashboard | Admin Desa Sukolilo</title>
    <link href="{{ asset('admin/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="{{ url('home') }}">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{ asset('images/logo-banner.png') }}" alt="homepage" style="height: 45px; max-width:180px; min-width:60px" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset('images/logo-banner.png') }}" alt="homepage" style="height: 75px; max-width:180px; min-width:150px" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            {{-- <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{ asset('admin/assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="{{ asset('admin/assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                            </span> --}}
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('images/guest.png') }}" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block">
                                    <span class="text-dark">{{ Auth::user()->name }}</span>
                                    <i data-feather="chevron-down" class="svg-icon"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href=""><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('logout') }}" onclick="return confirm('Are You sure?')"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav mb-5">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('/home') }}"
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">Dashboard</span></a></li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Produk</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('hukum.index') }}"
                        aria-expanded="false"><i data-feather="award" class="feather-icon"></i><span
                            class="hide-menu">Produk Hukum
                        </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('produk.index') }}"
                            aria-expanded="false"><i data-feather="archive" class="feather-icon"></i><span
                                class="hide-menu">Produk Desa
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('pertanian.index') }}"
                        aria-expanded="false"><i data-feather="wind" class="feather-icon"></i><span
                            class="hide-menu">Pertanian/Peternakan
                        </span></a>
                    </li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Informasi</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Penduduk </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{ route('penduduk.pekerjaan') }}" class="sidebar-link"><span
                                    class="hide-menu"> Pekerjaan
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('penduduk.umur') }}" class="sidebar-link"><span
                                    class="hide-menu"> Rentang umur
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('penduduk.agama') }}" class="sidebar-link"><span
                                    class="hide-menu"> Agama
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('penduduk.pendidikan') }}" class="sidebar-link"><span
                                    class="hide-menu"> Pendidikan
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('penduduk.dusun') }}" class="sidebar-link"><span
                                    class="hide-menu"> Dusun
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{ route('penduduk.perkawinan') }}" class="sidebar-link"><span
                                    class="hide-menu"> Status perkawinan
                                </span></a>
                        </li>
                    </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('wisata.index') }}"
                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Wisata</span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('berita.index') }}"
                            aria-expanded="false"><i data-feather="plus-square" class="feather-icon"></i><span
                                class="hide-menu">Berita</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('kunjung.index') }}"
                            aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                class="hide-menu">Jadwal Kunjung
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('bum.index') }}"
                            aria-expanded="false"><i data-feather="user-check" class="feather-icon"></i><span
                                class="hide-menu">BUM Desa
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('kesehatan.index') }}"
                            aria-expanded="false"><i data-feather="heart" class="feather-icon"></i><span
                                class="hide-menu">Kesehatan
                            </span></a>
                    </li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Pembangunan</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('rpjm.index') }}"
                        aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">RPJM Desa
                        </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('rkp.index') }}"
                        aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">RKP Desa
                        </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('apb.index') }}"
                        aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">APB Desa
                        </span></a>
                    </li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('profile') }}"
                    aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span class="hide-menu">Profile</span></a></li>
                    {{-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="pesan"
                    aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span class="hide-menu">Pesan Masuk</span></a></li> --}}
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('logout') }}" onclick="return confirm('Are You sure?')"
                            aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('admin/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{ asset('admin/dist/js/feather.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/dist/js/custom.min.js')}}"></script>
    <script src="{{ asset('admin/assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{ asset('admin/assets/extra-libs/c3/c3.min.js')}}"></script>
    {{-- <script src="{{ asset('admin/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script> --}}
    <script src="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
    {{-- <script src="{{ asset('admin/dist/js/pages/dashboards/dashboard1.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>
