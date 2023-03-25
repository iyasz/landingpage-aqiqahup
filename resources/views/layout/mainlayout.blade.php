<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AqiqahUP - Aqiqah ready to UP!</title>

    {{-- bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- icon bootstrap  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- izitoast  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- font google  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    {{-- swiper js  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    {{-- data Aos js  --}}
    {{-- <link rel="stylesheet" href="bower_components/aos/dist/aos.css" /> --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- izimodal  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/css/iziModal.css">

    <link rel="stylesheet" href="/assets/css/custom.css">
  </head>
  <body>

    <div class="container mt-2 d-lg-block d-md-none d-none">
        <div class="row">
            <div class="col-3">
                <a class="mb-0 text-decoration-none text-gray-50 fs-sm link-top" href="mailto:halo@aqiqahup.id"><i class="bi bi-chat-left-text"></i> halo@aqiqahup.id</a>
            </div>
            <div class="col-3">
                <a href="tel:+62215852475" class="mb-0 text-decoration-none text-gray-50 fs-sm link-top"><i class="bi bi-telephone"></i> +62215852475</a>
            </div>
        </div>
    </div>
    <hr class="mb-0 hr-nav d-lg-block d-md-none d-none">
        <nav id="navbar" class="navbar navbar-expand-lg py-3 bg-white sticky-top">
            <div class="container">
              <a class="navbar-brand" href=""><img class="" width="170px" src="/assets/img/logo.svg" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">AqiqahUP</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item mx-1">
                      <a class="nav-link fw-400-r" href="#home">Home</a>
                    </li>
                    <li class="nav-item mx-1">
                      <a class="nav-link fw-400-r" href="#about">About Us</a>
                    </li>
                    <li class="nav-item mx-1">
                      <a class="nav-link fw-400-r" href="#paket">Paket</a>
                    </li>
                    <li class="nav-item mx-1">
                      <a class="nav-link fw-400-r" href="#kontak">Contact</a>
                    </li>
                    <li class="nav-item mx-1">
                      <a class="nav-link fw-400-r" href="https://aqiqahup.tawk.help/">Bantuan</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-brightness-high-fill"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" >
                        <li><a class="dropdown-item" href="#"><i class="bi bi-brightness-high-fill"></i> Light</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-moon-stars-fill"></i> Dark</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>

        @yield('content')

        <div class="" id="modal">
          <p>kanjut</p>
        </div>

        <section id="footer" class="mt-5">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="content-footer text-center" >
                  <div class="my-5">
                    <a href=""><img src="/assets/img/logo.svg" width="170px" alt=""></a>
                  </div>
                  <div class="link-footer fw-500-p my-5">
                    <a class="mx-1" href="/">Home</a>
                    <a class="mx-1" data-izimodal-zindex="20000" data-izimodal-preventclose="" data-izimodal-open="#modal" data-izimodal-transitionin="fadeInDown" href="">Kebijakan Privasi</a>
                    <a class="mx-1" href="https://aqiqahup.id/syarat-ketentuan.html">Syarat Ketentuan</a>
                    <a class="mx-1" href="https://stats.uptimerobot.com/PAEDgS0Xgm">Status Server</a>
                    <p class="fw-300-p fs-s-sm mt-2">Jalan Joglo Raya No. 52 B Jakarta Barat</p>
                  </div>
                  <div class=" my-5">
                    <p class="fw-300-p fs-s-sm">&copy; Copyright <strong> PT Solusi Data Pratama</strong>. All Rights Reserved</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      <div id="loader"></div>
  
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{-- bootstrap  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    {{-- Purecounter js  --}}
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

    {{-- Data Aos Js  --}}
    {{-- <script src="bower_components/aos/dist/aos.js"></script> --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    {{-- izitoast  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- popper js  --}}
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    {{-- izimodal  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/js/iziModal.min.js"></script>

    {{-- script  --}}
    <script src="/assets/js/main.js"></script>
    
  </body>
</html>