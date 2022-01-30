<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Spp Kanesa | {{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/sidebars.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  </head>

  <body style="background-color: #5B669B">
        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" >
                <h1>$pp Kanesa</h1>
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Divider -->
                    <hr class="my-3">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link  {{ ($title === "Beranda") ? 'active' : '' }}" href="beranda">
                        <i class="ni ni-tv-2 text-primary"></i>
                        <span class="nav-link-text">Beranda</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ ($title === "Profil") ? 'active' : '' }}" href="profil">
                        <i class="ni ni-single-02 text-yellow"></i>
                        <span class="nav-link-text">Profil</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="profile.html">
                        <i class="ni ni-money-coins text-orange"></i>
                        <span class="nav-link-text">Pembayaran</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="maps">
                        <i class="ni ni-pin-3 text-primary"></i>
                        <span class="nav-link-text">Google Maps Kanesa</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="ni ni-bullet-list-67 text-default"></i>
                        <span class="nav-link-text">Riwayat Pembayaran</span>
                    </a>
                    </li>
                </ul>
                {{-- <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Documentation</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                        <i class="ni ni-spaceship"></i>
                        <span class="nav-link-text">Getting started</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                        <i class="ni ni-palette"></i>
                        <span class="nav-link-text">Foundation</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                        <i class="ni ni-ui-04"></i>
                        <span class="nav-link-text">Components</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                        <i class="ni ni-chart-pie-35"></i>
                        <span class="nav-link-text">Plugins</span>
                    </a>
                    </li>
                </ul> --}}
                </div>
            </div>
            </div>
        </nav>
  <!-- Main content -->
        <div class="main-content" id="panel">
    <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                    <div class="form-group mb-0">
                    <div class="input-group input-group-alternative input-group-merge">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                    </div>
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </form>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                    <!-- Sidenav toggler -->
                    <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                    </li>
                    <li class="nav-item d-sm-none">
                    <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                        <i class="ni ni-zoom-split-in"></i>
                    </a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                        </span>
                        <div class="media-body  ml-2  d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">Aziz</span>
                        </div>
                        </div>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right ">
                        <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Hai!</h6>
                        </div>
                        <a href="#!" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Profil</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Ganti Sandi</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Keluar</span>
                        </a>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            </nav>

            {{-- ISI --}}
                @yield('isi')


            {{-- FOOTER --}}
            <footer class="footer text-center">
                <div class="container">
                  <span class="text-muted ">&copy; 2022 Aziz, Jeruxniviz</span>
                </div>
            </footer>
        </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
    <script src="js/sidebars.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
