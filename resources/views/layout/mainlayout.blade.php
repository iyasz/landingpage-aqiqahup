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

        <div class="my-3" id="modal">
  
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
                    <a class="mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">Kebijakan Privasi</a>
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

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-4" id="exampleModalLabel">Kebijakan <span class="text-primary">Privasi</span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mx-4 mt-2">

                  <p>Selamat datang di AqiqahUP,</p>
                  
                  <p>Dengan menggunakan layanan AqiqahUP maka Anda setuju untuk terikat kepada syarat-syarat dan ketentuan berikut ini mengenai kebijakan privasi yang ditetapkan oleh Kami. Kami mungkin mengubah syarat-syarat dan kondisi ini sewaktu-waktu, dan oleh karenanya Anda diharapkan untuk melakukan pengecekan secara berkala.</p>
      
                  <h6 class="mt-4">Pendaftaran</h6>
                  <p>Dengan melakukan pendaftaran, Anda menyatakan bahwa segala informasi dan perubahan-perubahannya yang Anda berikan, sekarang atau dimasa yang akan datang adalah akurat dan benar apa adanya. Apabila informasi dan termasuk perubahan-perubahannya yang Anda berikan tersebut ternyata terbukti tidak benar, maka dengan ini Kami menyatakan tidak bertanggung jawab atas segala akibat yang dapat terjadi sehubungan dengan pemberian informasi dan perubahan-perubahannya yang tidak benar tersebut.</p>
      
                  <h6 class="mt-4">Data-data/Informasi yang diperlukan</h6>
                  <p class="mb-1">Untuk keperluan pendaftaran di AqiqahUP, Kami akan memerlukan data-data pribadi dari Anda antara lain sebagai berikut:</p>
                  <li>Nama lengkap</li>
                  <li>Alamat email</li>
                  <li>Nomor HP / telepon selular</li>
                  <li>Nama Usaha / Lembaga Aqiqah</li>
                  <li>Deskripsi Usaha / Lembaga Aqiqah</li>
                  <li>Data transaksi penjualan</li>
      
                  <p class="my-3">Bahwa semua informasi yang diberikan oleh Anda tersebut akan Kami simpan sebaik-baiknya dengan memperhatikan faktor keamanan.</p>
      
                  <h6>Tujuan Pengumpulan Data</h6>
                  <p class="mb-1">Informasi dan data-data pribadi yang diperoleh oleh Kami sehubungan dengan Pendaftaran yang dilakukan oleh Anda, hanya akan digunakan antara lain untuk:</p>
                  <ol type="1">
                    <li>Memproses aplikasi dan/atau segala bentuk pendaftaran dan/atau komunikasi yang diajukan oleh Anda</li>
                    <li>Melakukan komunikasi kepada Anda</li>
                    <li>Memberikan tanggapan kepada Anda yang ingin mendapatkan keterangan dan/atau informasi lebih lanjut mengenai AqiqahUP</li>
                    <li>Memberikan tanggapan kepada Anda yang ingin mendapatkan keterangan dan/atau informasi lebih lanjut mengenai AqiqahUP</li>
                    <li>Pelaksanaan riset-riset guna pengembangan AqiqahUP, peningkatan pelayanan Kami dan/atau memenuhi permintaan Anda terhadap produk dan layanan yang disediakan oleh AqiqahUP</li>
                  </ol>
                  <h6>Pengungkapan informasi Pengguna</h6>
                  <p class="mb-1">Bahwa kecuali untuk kepentingan pengumpulan data sebagaimana telah diungkapkan diatas, AqiqahUP tidak akan menjual, mengalihkan, mendistribusikan dan/atau membuka informasi dan data-data pribadi Anda kepada orang lain dan/atau Pihak Ketiga yang tidak berkepentingan.</p>
                  <p>Dalam hal diperlukan dan/atau diperintahkan oleh Pengadilan dan/atau pejabat suatu instansi pemerintah Indonesia berdasarkan wewenang sah yang diberikan oleh ketentuan perundang-undangan, maka dalam rangka memenuhi perintah tersebut Kami dapat membuka akses atas informasi yang diperlukan sebagaimana dimaksud. Sehubungan dengan hal tersebut, maka Anda setuju untuk membebaskan Kami dari segala klaim, tuntutan, dan atau gugatan yang berkaitan dengan pemberian akses atas informasi tersebut.</p>
      
                  <h6>Cookies</h6>
                  <p class="mb-1">Cookies adalah file kecil yang secara otomatis akan tersimpan dalam perangkat komputer Pengguna, untuk mengidentifikasi dan memantau koneksi jaringan Pengguna, sehingga memungkinkan Pengguna untuk mengakses layanan AqiqahUP secara optimal.</p>
                  <p class="mb-1">Cookies tersebut tidak diperuntukkan untuk digunakan pada saat melakukan akses informasi / data lain yang Pengguna miliki di perangkat komputer Pengguna, selain dari yang telah Pengguna setujui untuk disampaikan.</p>
                  <p>Walaupun secara otomatis perangkat komputer Pengguna akan menerima cookies, Pengguna dapat menentukan pilihan untuk melakukan modifikasi melalui pengaturan / setting browser Pengguna yaitu dengan memilih untuk menolak cookies.</p>

                  <h6>Dukungan Keamanan Data</h6>
                  <p>AqiqahUP melindungi setiap Data Pengguna yang disimpan dalam sistemnya, serta melindungi data tersebut dari akses, penggunaan, modifikasi, pengambilan dan/atau pengungkapan tidak sah dengan menggunakan sejumlah tindakan dan prosedur keamanan sebagai berikut:</p>
                  <li><b>SSL,</b> untuk memastikan komunikasi antara anda dan AqiqahUP terenkripsi dengan baik melalui HTTPS, sehingga melindungi dari pencurian data saat transfer data di website</li>
                  <li><b>Enkripsi,</b>Kami melakukan penyandian (Encryption) di data-data sensitif anda, seperti email, password, data toko dll. Ini akan menjamin bahwa hanya pihak yang berhak yang bisa melihat data anda.</li>
                  <li><b>Layanan Cloud,</b> menggunakan layanan <b><a class="text-decoration-none" href="https://www.cloudkilat.com/">cloudkilat</a></b> yang selalu berusaha untuk meningkatkan keamanan data toko anda dengan menggunakan teknologi terkini dan mematuhi peraturan perundang-undangan yang berlaku untuk memenuhi harapan pihak-pihak terkait, dan untuk memastikan peningkatan kualitas yang berkelanjutan.</li>
                  <li><b>Integrasi dengan Marketplace,</b> Kami menyediakan integrasi yang aman dan telah diotorisasi oleh Marketplace ( <b><a class="text-decoration-none" href="https://www.developer.tokopedia.com/">Tokopedia</a></b> dan  <b><a class="text-decoration-none" href="https://www.open.shopee.com/">Shopee</a></b>) untuk menghubungkan informasi toko anda ke dashboard. Tujuan integrasi data ini untuk memberikan kemudahan dalam mengelola data sehingga memberikan informasi yang membantu proses bisnis anda.</li>
                  <li><b>Otorisasi dengan Sosial Media,</b> Kami menjamin keamanan yang memungkinkan pengguna untuk melakukan otorisasi dari akun sosial media. Informasi autentikasi mencakup “nama, alamat email pengguna, dan kredensial akses terenkripsi”. Pengguna juga diberitahu bahwa informasi ini dapat digunakan “untuk tujuan yang dijelaskan dalam pernyataan ini, dan ini juga dapat digunakan untuk memverifikasi kredensial Anda dengan pihak ketika (Facebook dan Google).</li>

                  <h6 class="mt-3">Hukum</h6>
                  <p>Syarat-syarat dan ketentuan dalam Kebijakan Privasi ini tunduk kepada hukum di wilayah Negara Kesatuan Republik Indonesia.</p>

                  <h6>Hubungi Kami</h6>
                  <p>Dalam hal Pengguna memiliki pertanyaan, komentar, keluhan, atau klaim mengenai Kebijakan Privasi ini atau Pengguna ingin mendapatkan akses dan/atau melakukan koreksi terhadap Data Pribadi miliknya, silakan hubungi email halo@aqiqahup.id</p>
                </div>
              </div>
            </div>
          </div>
        </div>

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