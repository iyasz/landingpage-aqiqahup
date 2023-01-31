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
            <div class="swiper mySwiper mt-4 px-lg-2 px-md-0 px-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="card-main pb-5">
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
                            <hr class="m-4">
                            <div class="resource mx-4">
                                <div class="d-flex ">
                                    <div class="co me-2">
                                        <i class="bi bi-check full"></i>
                                    </div>
                                    <div class="header-card-resource text-start">
                                        <p class="fw-300-p mb-0 mt-2"> <span>Unlimited</span> Formulir Pemesanan</p>
                                    </div>
                                    <div class="co ms-auto">
                                        <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                        <div id="tooltip" role="tooltip">
                                            Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                            <div id="arrow" data-popper-arrow></div>
                                          </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="co me-2">
                                        <i class="bi bi-check min"></i>
                                    </div>
                                    <div class="header-card-resource text-start">
                                        <p class="fw-300-p mb-0 mt-2">Single <span>Kitchen</span></p>
                                    </div>
                                    <div class="co ms-auto">
                                        <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                        <div id="tooltip" role="tooltip">
                                            Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                            <div id="arrow" data-popper-arrow></div>
                                          </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="co me-2">
                                        <i class="bi bi-check min"></i>
                                    </div>
                                    <div class="header-card-resource text-start">
                                        <p class="fw-300-p mb-0 mt-2">Single <span>RPH</span></p>
                                    </div>
                                    <div class="co ms-auto">
                                        <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                        <div id="tooltip" role="tooltip">
                                            Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                            <div id="arrow" data-popper-arrow></div>
                                          </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="co me-2">
                                        <i class="bi bi-check min"></i>
                                    </div>
                                    <div class="header-card-resource text-start">
                                        <p class="fw-300-p mb-0 mt-2"><span>Basic</span> Accounting</p>
                                    </div>
                                    <div class="co ms-auto">
                                        <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                        <div id="tooltip" role="tooltip">
                                            Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                            <div id="arrow" data-popper-arrow></div>
                                          </div>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="co me-2">
                                        <i class="bi bi-check min"></i>
                                    </div>
                                    <div class="header-card-resource text-start">
                                        <p class="fw-300-p mb-0 mt-2"><span>Basic</span> User Management</p>
                                    </div>
                                    <div class="co ms-auto">
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
                        <div class="card-main pb-5">
                            <div class="head-cover cover-primary"></div>
                            <div class="header-main-card mt-4">
                                <h4 class="fw-600-p mb-0">Paket Premium</h4>
                                <p class="fw-300-p">Cocok Untuk Bisnis Menengah Dan Keatas</p>
                            </div>
                            <div class="content-card content-paket-primary">
                                <h1 class="fw-600-p "><span>Rp</span>999.000<span>/bln</span></h1>
                                <a href="https://app.aqiqahup.id/register?ref=website"
                                    class="btn btn-primary fw-500-p py-2 px-5 mt-3">Daftar di sini</a>
                                <p class="fw-300-p mt-3">Dapat diperpanjang setiap bulan</p>
                                <hr class="m-4">
                                <div class="resource mx-4">
                                    <div class="d-flex ">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2"> <span>Unlimited</span> Formulir Pemesanan</p>
                                        </div>
                                        <div class="co ms-auto">
                                            <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                            <div id="tooltip" role="tooltip">
                                                Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                                <div id="arrow" data-popper-arrow></div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2">Multi <span>Kitchen</span></p>
                                        </div>
                                        <div class="co ms-auto">
                                            <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                            <div id="tooltip" role="tooltip">
                                                Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                                <div id="arrow" data-popper-arrow></div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2">Multi <span>RPH</span></p>
                                        </div>
                                        <div class="co ms-auto">
                                            <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                            <div id="tooltip" role="tooltip">
                                                Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                                <div id="arrow" data-popper-arrow></div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2"><span>Pro</span> Accounting</p>
                                        </div>
                                        <div class="co ms-auto">
                                            <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                            <div id="tooltip" role="tooltip">
                                                Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                                <div id="arrow" data-popper-arrow></div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2"><span>Multi</span> User Management</p>
                                        </div>
                                        <div class="co ms-auto">
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
                    </div>
                    <div class="swiper-slide ">
                        <div class="card-main pb-5">
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
                                <hr class="m-4">
                                <div class="resource mx-4">
                                    <div class="d-flex ">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2"> <span>Semua</span> Fitur Pro</p>
                                        </div>
                                        <div class="co ms-auto">
                                            <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                            <div id="tooltip" role="tooltip">
                                                Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                                <div id="arrow" data-popper-arrow></div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2">Integrasi <span>Bank</span></p>
                                        </div>
                                        <div class="co ms-auto">
                                            <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                            <div id="tooltip" role="tooltip">
                                                Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                                <div id="arrow" data-popper-arrow></div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2"><span>Custom</span> Module</p>
                                        </div>
                                        <div class="co ms-auto">
                                            <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                            <div id="tooltip" role="tooltip">
                                                Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                                <div id="arrow" data-popper-arrow></div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2">Dedicated <span>Server</span></p>
                                        </div>
                                        <div class="co ms-auto">
                                            <i id="button" aria-describedby="tooltip" class="bi bi-question-circle"></i>
                                            <div id="tooltip" role="tooltip">
                                                Mantap banget ancrit ini popper awdawdawdaw awodjajwdia jwidjaj diajwid awodjajwdia
                                                <div id="arrow" data-popper-arrow></div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="co me-2">
                                            <i class="bi bi-check full"></i>
                                        </div>
                                        <div class="header-card-resource text-start">
                                            <p class="fw-300-p mb-0 mt-2">Dedicated <span>Suppoert</span></p>
                                        </div>
                                        <div class="co ms-auto">
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
                    </div>
                    {{-- <div class="swiper-slide">Slide 2</div> --}}
                </div>
                <div class="swiper-button-next d-lg-none d-md-block d-block"></div>
                <div class="swiper-button-prev d-lg-none d-md-block d-block"></div>
                <div class="swiper-pagination d-lg-none d-md-block d-block"></div>

            </div>
            <div class="row mt-5 mb-4">
                <div class="col-lg-7 col-md-12 col-12 text-center d-lg-none d-md-block d-block">
                    <img src="/assets/img/contentregister.png" width="100%" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="content-register-now">
                        <div class="text-info-main px-2 py-1 rounded-2 mb-1 mt-4">
                            <p class="mb-0 fs-s-sm fw-300-p">#SoftwareAndalan</p>
                        </div>
                        <h1 class="fw-600-p">Daftar Sekarang <span> Yuk!</span></h1>
                        <p class="fw-300-p mt-4 mb-0">Mari bergabung dengan ratusan pengusaha Aqiqah yang telah menggunakan AqiqahUP</p>
                        <a href="https://app.aqiqahup.id/register?ref=website" class="fw-500-p mt-4 text-decoration-none">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-7 text-center d-lg-block d-md-none d-none">
                    <img src="/assets/img/contentregister.png" width="100%" height="250px" alt="">
                </div>
            </div>
        </div>
    </section>
    

    <section id="kontak" class="">
        <div class="container">
            <div class="row ">
                <div class="col-12 mt-3">
                    <div class="contact-header-main text-center">
                        <div class="d-flex justify-content-center ">
                            <div class="text-info-main px-2 py-1 rounded-2 mb-1 mt-4">
                                <p class="mb-0 fs-s-sm fw-300-p">#ContactUs</p>
                            </div>
                        </div>
                        <div class="content-header">
                            <h1 class="fw-600-p">Interested? <span> Contact us!</span></h1>
                        <p class="fw-300-p">Presentasi dengan mengisi formulir di bawah ini. Team bussines  kami akan segera menghubungi anda :</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-md-12 col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3234211480717!2d106.73792901476904!3d-6.221014495496669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0b3439247b1%3A0xc3490e6b265e33c5!2sPT%20Solusi%20Data%20Pratama!5e0!3m2!1sen!2sid!4v1667997657966!5m2!1sen!2sid" frameborder="0" width="100%" height="300px" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <form action="" method="post">
                    @csrf
                    <div class="form-contact mt-4 mt-lg-0 mt-md-4">
                        <label>Nama Lengkap</label>
                        <input autocomplete="off" type="text" class="form-control" name="">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-contact">
                                <label>Email</label>
                                <input autocomplete="off" type="text" class="form-control" name="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-contact">

                                <label>No Whattsapp</label>
                                <input autocomplete="off" type="text" class="form-control" name="">
                            </div>
                        </div>
                    </div>
                    <div class="form-contact">
                        <label>Pertanyaan</label>
                        <textarea autocomplete="off" name="" class="form-control" style="height: 130px"></textarea>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
@endsection
