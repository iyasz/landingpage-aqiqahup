@extends('layout.mainlayout')

@section('content')
    <section id="home">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="home-main mt-">
                        <div data-aos="fade-up" data-aos-delay="50" class="text-info-main px-2 py-1 rounded-2">
                            <p class="mb-0 fs-s-sm fw-300-p"><i class="bi bi-caret-down-fill"></i> Aqiqah Terpercaya dan
                                Terbaik!</p>
                        </div>
                        <h1 data-aos="fade-up" data-aos-delay="100" class="text-main fw-600-p">Pengusaha Aqiqah <br> Itu
                            Berani <span> SCALE UP!</span></h1>
                        <p data-aos="fade-up" data-aos-delay="150" class="fw-300-p fs-sm mt-4 ">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.
                            illo porro provident <br> blanditiis est, amet autem voluptatem minima magnam a sed dolore <br>
                            dolores Cupiditate, a? Aliquid, asperiores totam! .</p>
                        <div class="btn-main" data-aos="fade-up" data-aos-delay="250">
                            <a href="https://app.aqiqahup.id/register?ref=website"
                                class="btn btn-primary btn-daftar fw-500-p py-2">Daftar Sekarang <i
                                    class="bi bi-arrow-right-short"></i></a>
                            <a href="#paket" id="playLink" class="btn btn-info btn-play ms-3 fw-500-p "><i
                                    class="bi bi-play-circle me-2"></i> <span>Mulai</span></a>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="250"
                            class="statistik-home-main d-flex mt-5 justify-content-evenly justify-content-md-evenly justify-content-lg-start">
                            <div class="statistik text-center me-lg-5 me-md-4 me-4">
                                <h2 data-purecounter-start="0" data-purecounter-end="400" class="fw-600-p mb-0 purecounter">
                                    +</h2>
                                <p class="fw-500-p fs-s-sm mt-3">Pengguna</p>
                            </div>
                            <div class="statistik text-center me-lg-5 me-md-4 me-4">
                                <h2 data-purecounter-start="0" data-purecounter-end="20" class="fw-600-p mb-0 purecounter">
                                </h2>
                                <p class="fw-500-p fs-s-sm mt-3">Partner</p>
                            </div>
                            <div class="statistik text-center me-lg-5 me-md-4 me-4">
                                <h2 data-purecounter-start="0" data-purecounter-end="13" class="fw-600-p mb-0 purecounter">
                                </h2>
                                <p class="fw-500-p fs-s-sm mt-3">Cabang</p>
                            </div>
                            <div class="statistik text-center ">
                                <h2 class="fw-600-p mb-0">A+</h2>
                                <p class="fw-500-p fs-s-sm mt-3">Akreditasi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-aos="zoom-out" data-aos-delay="250" class="row justify-content-center">
                        <img width="330px" class="rounded-circle" src="/assets/img/mainimg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quality" class="">
        <div class="container-fluid">
            <div class="row justify-content-center ">
                <div class="col-lg-12">
                    <div class="img-quality text-center d-flex justify-content-center position-relative overflow-x-auto">
                        <img class="px-4" src="/assets/img/1.svg" alt="">
                        <img class="px-4" src="/assets/img/2.svg" alt="">
                        <img class="px-4" src="/assets/img/3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center about-main">
                        <div class=" d-flex justify-content-center">
                            <div class="text-info-main2 px-2 py-1 rounded-2">
                                <p class="mb-0 fs-s-sm fw-300-p">#AqiqahUP</p>
                            </div>
                        </div>
                        <h1 class="fw-600-p mt-2">Sofware Andalan Para <br> Pengusaha <span>Aqiqah</span></h1>
                        <p class="fs-6 opacity-75 mt-3">Aqiqahup.id adalah aplikasi terlengkap dalam memahami setiap bisnis
                            proses pemesanan, <br> pengiriman sampai dengan laporan keuangan lembaga Aqiqah.</p>
                    </div>
                </div>
            </div>
            <div
                class="row text-lg-start text-md-center text-center justify-content-lg-start justify-content-md-center justify-content-center">
                <div
                    class="col-lg-7 col-md-12 col-11 gy-4 text-lg-end text-md-center text-center d-block d-md-block d-lg-none">
                    <div class="">
                        <img src="/assets/img/aboutimg.png" width="560px" class="rounded-3 img-about" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 col-11 gy-5">
                    <div class="about title-1 mb-5">
                        <h3 class="fw-600-p mb-3">Fitur Formulir pemesanan</h3>
                        <p class="fw-300-p ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum veritatis
                            iure assumenda.</p>
                    </div>
                    <div class="about title-2 mb-5">
                        <h3 class="fw-600-p mb-3">Management order yang terpusat dan mudah dimengerti</h3>
                        <p class="fw-300-p ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque
                            officia veritatis in. Architecto totam distinctio, ullam voluptatibus molestias magnam.</p>
                    </div>
                    <div class="about title-3 mb-3">
                        <h3 class="fw-600-p mb-3">Laporan akuntasi yang lengkap dan otomatis</h3>
                        <p class="fw-300-p ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores commodi esse
                            velit laborum iure repellat voluptate quam facere neque asperiores voluptatum quia sapiente!</p>
                    </div>
                </div>
                <div
                    class="col-lg-7 col-md-12 col-11 gy-5 text-lg-end text-md-center text-center d-none d-md-none d-lg-block">
                    <div class="mt-lg-5 mt-md-2 mt-0">
                        <img src="/assets/img/aboutimg.png" width="560px" class="rounded-3 img-about" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-12 col-12 text-lg-start text-md-center text-sm-center ">
                    <div class="about-video-main mb-4">
                        <iframe width="470" height="304" src="https://www.youtube.com/embed/Hd0CemwmMUc"
                            title="Aqiqahup Video Marketing" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-12">
                    <div class="about-video-text">
                        <h4 class="mb-0 fw-500-p">Akuntasi Lebih Mudah!</h4>
                        <h1 class="fw-600-p">Marketing Dibikin Mudah Aja!</h1>
                        <p class="mt-4 fw-300-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eaque
                            aliquam nisi repudiandae quas repellendus doloribus assumenda reiciendis similique quae totam,
                            dicta neque!</p>
                    </div>
                    <div class="about-button">
                        <a class="btn btn-primary btn-daftar fw-500-p py-2 mt-3"
                            href="https://aqiqahup.tawk.help/article/business-flow">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5" id="paket">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class=" d-flex justify-content-center">
                        <div class="text-info-main2 px-2 py-1 rounded-2">
                            <p class="mb-0 fs-s-sm fw-300-p">#PaketMurah</p>
                        </div>
                    </div>
                    <div class="about-main text-center">
                        <h1 class="fw-600-p mt-2">Pilih Paket <span> Aqiqah</span> Mu!</h1>
                        <p class="fs-6 opacity-75 mt-3">Software luar biasa dengan harga yang sederhana.</p>
                    </div>
                </div>
            </div>
            <div class="swiper mySwiper mt-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="card-main">
                            <div class="head-cover"></div>
                            <div class="header-main-card mt-4">
                                <h4 class="fw-600-p mb-0">Paket Basic</h4>
                                <p class="fw-300-p">Sangat Cocok Untuk Pemula</p>
                            </div>
                            <div class="content-card">
                                <h1 class="fw-600-p "><span>Rp</span>349.000<span>/bln</span></h1>
                                <a href="https://app.aqiqahup.id/register?ref=website"
                                class="btn btn-primary fw-500-p py-2 px-5 mt-3">Trial 14 Hari</a>
                                <p class="fw-300-p mt-3">Dapat diperpanjang setiap bulan</p>
                            </div>
                            <hr class="my-4 mx-4">
                            <div class="resource mx-4">
                                <div class="d-flex ">
                                    <div class="co me-2">
                                        <i class="bi bi-check full"></i>
                                    </div>
                                    <div class="co text-start">
                                        <p class="fw-300-p mb-0 mt-2">Unlimited Formulir Pemesanan</p>
                                    </div>
                                    <div class="co ms-auto">
                                        <i class="bi bi-question-circle"></i>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="co me-2">
                                        <i class="bi bi-check full"></i>
                                    </div>
                                    <div class="co text-start">
                                        <p class="fw-300-p mb-0 mt-2">Unlimited Formulir Pemesanan</p>
                                    </div>
                                    <div class="co ms-auto">
                                        <div class=""></div>
                                        <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                        <div id="tooltip" role="tooltip">
                                            Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                            <div id="arrow" data-popper-arrow></div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="card-main">
                            <div class="head-cover cover-primary"></div>
                            <div class="header-main-card mt-4">
                                <h4 class="fw-600-p mb-0">Paket Premium</h4>
                                <p class="fw-300-p">Cocok Untuk Bisnis Menengah Dan Setaranya</p>
                            </div>
                            <div class="content-card content-paket-primary">
                                <h1 class="fw-600-p "><span>Rp</span>999.000<span>/bln</span></h1>
                                <a href="https://app.aqiqahup.id/register?ref=website"
                                    class="btn btn-primary fw-500-p py-2 px-5 mt-3">Daftar di sini</a>
                                <p class="fw-300-p mt-3">Dapat diperpanjang setiap bulan</p>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="card-main">
                            <div class="head-cover"></div>
                            <div class="header-main-card mt-4">
                                <h4 class="fw-600-p mb-0">Paket Custom</h4>
                                <p class="fw-300-p">Paket Untuk Customisasi Fiturmu!</p>
                            </div>
                            <div class="content-card">
                                <h1 class="fw-600-p ">CUSTOM</h1>
                                <a href="https://app.aqiqahup.id/register?ref=website"
                                    class="btn btn-primary fw-500-p py-2 px-5 mt-3">Daftar di sini</a>
                                <p class="fw-300-p mt-3">Dapat diperpanjang setiap bulan</p>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="swiper-slide">Slide 2</div> --}}
                </div>
                <div class="swiper-button-next d-lg-none d-md-block d-block"></div>
                <div class="swiper-button-prev d-lg-none d-md-block d-block"></div>
                <div class="swiper-pagination d-lg-none d-md-block d-block"></div>

            </div>
        </div>
    </section>

    <section id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>
@endsection
