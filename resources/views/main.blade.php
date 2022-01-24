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

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  </head>

  <body style="background-color: #5B669B">
    <main>
        {{-- SIDEBAR --}}
        <div class=" d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 250px">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            {{-- <i class="bi bi-wallet2 fs-5"></i> --}}
            <h1 class=" text-white">$</h1>
            <span class="fs-4  text-white">pp Kanesa</span>
            </a>
            <hr class=" text-white">
            <ul class="nav nav-pills flex-column ">
            <li>
                <a href="#" class="nav-link {{ ($title === "Beranda") ? 'active' : '' }} text-white">
                <i class="bi bi-house-fill"></i>
                Beranda
                </a>
            </li>
            <li>
                <a href="#" class="nav-link {{ ($title === "Pembayaran") ? 'active' : '' }} text-white">
                <i class="bi bi-credit-card-2-front-fill"></i>
                Pembayaran
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link  text-white link-white collapsed" data-bs-toggle="collapse" data-bs-target="#home2-collapse" aria-expanded="true">
                <i class="bi bi-file-earmark-text-fill"></i>
                    Laporan
                </a>
                <div class="collapse show" id="home2-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="nav-link {{ ($title === "a") ? 'active' : '' }} text-white">Overview</a></li>
                    <li><a href="#" class="nav-link {{ ($title === "b") ? 'active' : '' }} text-white">Updates</a></li>
                    <li><a href="#" class="nav-link {{ ($title === "c") ? 'active' : '' }} text-white">Reports</a></li>
                    </ul>
                </div>
            </li>
            <hr class=" text-white">
            <li class="nav-item">
                <a href="#" class="nav-link  text-white link-white collapsed" data-bs-toggle="collapse" data-bs-target="#home3-collapse" aria-expanded="true">
                <i class="bi bi-file-earmark-text-fill"></i>
                    Laporan
                </a>
                <div class="collapse show" id="home3-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="nav-link {{ ($title === "d") ? 'active' : '' }} text-white">Overview</a></li>
                    <li><a href="#"class="nav-link {{ ($title === "e") ? 'active' : '' }} text-white">Updates</a></li>
                    <li><a href="#" class="nav-link {{ ($title === "f") ? 'active' : '' }} text-white">Reports</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#" class="nav-link {{ ($title === "g") ? 'active' : '' }} text-white">
                    <i class="bi bi-credit-card-2-front-fill"></i>
                Customers
                </a>
            </li>
            </ul>
        </div>

        {{-- HEADER --}}
        <div class="container-fluid p-3">
            <header class="py-3 mb-3 border-bottom">
                <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
                  <div class="container">

                  </div>

                  <div class="d-flex align-items-center">
                    <form class="w-100 me-3">
                      <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="flex-shrink-0 dropdown align-items-center">
                      <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/jeruxniviz.png" alt="mdo" width="32" height="32" class="rounded-circle">
                      </a>
                      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">Ganti password</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login">Keluar</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
            </header>

            {{-- ISI --}}
            @yield('isi')

            {{-- FOOTER --}}
            <footer class="footer mt-2 py-4 bg-light text-center">
                <div class="container">
                  <span class="text-muted ">&copy; 2022 Aziz, Jeruxniviz</span>
                </div>
            </footer>
        </div>

    </main>

    <script src="js/sidebars.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
