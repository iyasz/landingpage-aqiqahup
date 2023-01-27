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
                        <h1 class="text-main fw-700-p">Pengusaha Aqiqah <br> Itu Berani <span> SCALE UP!</span></h1>
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
                    <div class="text-center">
                        <div class=" d-flex justify-content-center">
                            <div class="text-info-main2 px-2 py-1 rounded-2">
                                <p class="mb-0 fs-s-sm fw-300-p">#AqiqahUP</p>
                            </div>
                        </div>
                        <h1 class="fw-700-p mt-2">Sofware Andalan Para <br> Pengusaha Aqiqah</h1>
                        <p class="fs-6 opacity-75 mt-3">Aqiqahup.id adalah aplikasi terlengkap dalam memahami setiap bisnis
                            proses pemesanan, <br> pengiriman sampai dengan laporan keuangan lembaga Aqiqah.</p>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-4 col-md-6 col-11 gy-5">
                            <div class="card-about">
                                <i class="bi bi-chat-square-text icon-about"></i>
                                <h6 class="text-about">Fitur Formulir Pemesanan Yang Lengkap</h6>
                                <p class="my-3 text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore
                                    quidem nemo exercitationem, delectus in tempora numquam eos dignissimos hic nihil rem
                                    nostrum assumenda at odio.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-11 gy-5">
                            <div class="card-about">
                                <i class="bi bi-bank icon-about"></i>
                                <h6 class="text-about">Management order yang terpusat dan mudah dimengerti</h6>
                                <p class="my-3 text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore
                                    quidem nemo exercitationem, delectus in tempora numquam eos dignissimos hic nihil rem
                                    nostrum assumenda at odio.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-11 gy-5">
                            <div class="card-about">
                                <i class="bi bi-database-exclamation icon-about"></i>
                                <h6 class="text-about">Laporan akuntasi yang lengkap dan otomatis</h6>
                                <p class="my-3 text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore
                                    quidem nemo exercitationem, delectus in tempora numquam eos dignissimos hic nihil rem
                                    nostrum assumenda at odio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
