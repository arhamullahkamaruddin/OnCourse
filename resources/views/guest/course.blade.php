@extends('guest.master')

@section('content')
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Kursus</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('course') }}">Kursus</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? top subjects Area Start -->
    <div class="topic-area section-padding40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Jelajahi topik terpopuler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="guest-template/assets/img/gallery/topic1.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="{{ route('login') }}">Teknologi & Pemrograman</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="guest-template/assets/img/gallery/topic2.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="{{ route('login') }}">Bisnis & Manajemen</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="guest-template/assets/img/gallery/topic3.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="{{ route('login') }}">Desain & Kreativitas</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="guest-template/assets/img/gallery/topic4.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="{{ route('login') }}">Pengembangan Diri</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="guest-template/assets/img/gallery/topic5.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="{{ route('login') }}">Bahasa Asing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="guest-template/assets/img/gallery/topic6.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="{{ route('login') }}">Keuangan & Investasi</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="guest-template/assets/img/gallery/topic7.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="{{ route('login') }}">Kesehatan & Kebugaran</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="guest-template/assets/img/gallery/topic8.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="{{ route('login') }}">Pendidikan & Pelatihan Profesional</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mt-20">
                        <a href="{{ route('login') }}" class="border-btn">Lihat Topik Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top subjects End -->
    <!-- ? services-area -->
    <div class="services-area services-area2 section-padding40">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="guest-template/assets/img/icon/icon1.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>60+ kursus UX</h3>
                            <p>Proses otomatis untuk semua tugas situs web Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="guest-template/assets/img/icon/icon2.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Instruktur Ahli</h3>
                            <p>Proses otomatis untuk semua tugas website Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="guest-template/assets/img/icon/icon3.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Akses seumur hidup</h3>
                            <p>Proses otomatis untuk semua tugas situs web Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Area End -->
@endsection
