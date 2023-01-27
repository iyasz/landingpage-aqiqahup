@extends('layout.mainlayout')

@section('content')
    <section id="home">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="home-main mt-">
                        <div class="text-info-main px-2 py-1 rounded-2">
                            <p class="mb-0 fs-s-sm fw-300-p"><i class="bi bi-caret-down-fill"></i> Aqiqah Terpercaya dan
                                Terbaik!</p>
                        </div>
                        <h1 class="text-main fw-600-p">Pengusaha Aqiqah <br> Itu Berani <span> SCALE UP!</span></h1>
                        <p class="fw-300-p fs-sm mt-4 opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            illo porro provident <br> blanditiis est, amet autem voluptatem minima magnam a sed dolore <br>
                            dolores Cupiditate, a? Aliquid, asperiores totam! .</p>
                        <div class="btn-main">
                            <a href="https://app.aqiqahup.id/register?ref=website"
                                class="btn btn-primary btn-daftar fw-500-p py-2">Daftar Sekarang <i
                                    class="bi bi-arrow-right-short"></i></a>
                            <a href="" class="btn btn-info btn-play ms-3 fw-500-p "><i
                                    class="bi bi-play-circle me-2"></i> Mulai</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row justify-content-center">
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
            <div class="row text-lg-start text-md-center text-center justify-content-lg-start justify-content-md-center justify-content-center">
                <div class="col-lg-5 col-md-10 col-11 gy-5">
                    <div class="about title-1 mb-5">
                        <h3 class="fw-600-p mb-3">Fitur Formulir pemesanan</h3>
                        <p class="fw-300-p ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum veritatis iure assumenda.</p>
                    </div>
                    <div class="about title-2 mb-5">
                        <h3 class="fw-600-p mb-3">Management order yang terpusat dan mudah dimengerti</h3>
                        <p class="fw-300-p ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque officia veritatis in. Architecto totam distinctio, ullam voluptatibus molestias magnam.</p>
                    </div>
                    <div class="about title-3 mb-3">
                        <h3 class="fw-600-p mb-3">Laporan akuntasi yang lengkap dan otomatis</h3>
                        <p class="fw-300-p ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores commodi esse velit laborum iure repellat voluptate quam facere neque asperiores voluptatum quia sapiente, odio a libero, omnis fugiat numquam? Architecto!</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-11 gy-5 text-center">
                    <div class="mt-lg-5 mt-md-2 mt-0">
                        <img src="/assets/img/aboutmain.png" width="650px"  class="rounded-3 shadow-lg img-about" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
