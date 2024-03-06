@extends('layout/main')
@section('content')
    <!-- Slider Section Start -->
    <div class="section slider-section" id="home">
        <!-- Slider Section Start -->
        <div class="single-slider" style="background-image: url(assets/images/slider-bg.png);">
            <div class="container">
                <!-- Slider Section Start -->
                <div class="slider-content">
                    <h5 class="sub-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="100"> solusi akhir
                        menyelesaikan masalah </h5>
                    <h1 class="main-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">Kendaraan anda butuh
                        diservis?</h1>
                    <p data-aos="fade-up" data-aos-delay="600" class="aos-init aos-animate">
                        Servis kendaraan anda bisa dimana saja, dikerjakan dengan tanaga ahli profesional.
                        Cuman di pintukeluar
                    </p>
                    <a href="javascript.void(0)" data-aos="fade-up" data-aos-delay="800"
                        class="btn btn-custom-01 aos-init aos-animate">Gabung</a>
                </div>
                <!-- Slider Section End -->
            </div>
            <!-- Slider Images Start -->
            <div class="slider-images">
                <div class="image aos-init aos-animate" data-aos="fade-left" data-aos-delay="1000">
                    <img src="{{ asset('assets/images/slider-2.png') }}" alt="Pintukeluar">
                </div>
            </div>
            <!-- Slider Images End -->
            <!-- Slider Images Start -->
            <div class="slider-images-02">
                <div class="image aos-init aos-animate" data-aos="fade-right" data-aos-delay="1300">
                    <img src="{{ asset('assets/images/slider-1.png') }}" alt="Pintukeluar">
                </div>
            </div>
            <!-- Slider Images End -->
        </div>
        <!-- Slider Section End -->
    </div>
    <!-- Slider Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-02">
        <div class="container">

            <!-- About Wrapper Start -->
            <div class="about-wrapper">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <!-- About Images Start -->
                        <div class="about-images">
                            <div class="images aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                                <img src="{{ asset('assets/images/about.png') }}" alt="Pintukeluar">
                            </div>
                        </div>
                        <!-- About Images End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- About Content Start -->
                        <div class="about-content aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">

                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h5 class="sub-title">Selamat datang di <strong>pintukeluar</strong>.</h5>
                                <h2 class="main-title">Tenaga Profesional dengan Layanan Terpercaya</h2>
                            </div>
                            <!-- Section Title End -->

                            <p>Jika kendaraan anda mengalami masalah, segera hubungi pintukeluar, kendaraan anda akan
                                kembali normal dan aktifitas lancar</p>

                            <!-- About Count Start -->
                            <div class="about-count">
                                <!-- About Count Start -->
                                <div class="single-count">
                                    <span class="count">5000+</span>
                                    <p>Pengguna</p>
                                </div>
                                <!-- About Count End -->
                                <!-- About Count Start -->
                                <div class="single-count">
                                    <span class="count">35+</span>
                                    <p>Cabang</p>
                                </div>
                                <!-- About Count End -->
                                <!-- About Count Start -->
                                <div class="single-count">
                                    <span class="count">110+</span>
                                    <p>Solusi</p>
                                </div>
                                <!-- About Count End -->
                            </div>
                            <!-- About Count End -->

                            <a href="javascript.void(0)" class="btn btn-custom-01">Mulai</a>

                        </div>
                        <!-- About Content End -->
                    </div>
                </div>
            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Service Section Start -->
    <div class="section" id="service">
        <div class="container">
            <div class="section-padding-02 position-relative">

                <img class="services-shape" src="{{ asset('assets/images/services.png') }}" alt="Pintukeluar">

                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h5 class="sub-title">yang kami lakukan</h5>
                    <h2 class="main-title">Layanan <br> kami sediakan</h2>
                </div>
                <!-- Section Title End -->

                <!-- Service Wrapper Start -->
                <div class="service-wrapper">
                    <div class="row gx-lg-5">
                        <div class="col-lg-4 col-sm-6 pt-2">
                            <!-- Single Service Start -->
                            <div class="single-service aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                                <h4 class="title"><a href="javascript.void(0)">Layanan <br> Ganti & Jual Ban</a></h4>
                                {{-- <a href="javascript.void(0)" class="more">Lean more</a> --}}
                                <div class="service-icon mt-4">
                                    <img src="{{ asset('assets/icons/tire.svg') }}" alt="{{ env('APP_NAME') }}">
                                </div>
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-lg-4 col-sm-6 pt-2">
                            <!-- Single Service Start -->
                            <div class="single-service aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                <h4 class="title"><a href="javascript.void(0)">Recharge <br> Aki</a></h4>
                                {{-- <a href="javascript.void(0)" class="more">Lean more</a> --}}
                                <div class="service-icon mt-4">
                                    <img src="{{ asset('assets/icons/battery.svg') }}" alt="{{ env('APP_NAME') }}">
                                </div>
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-lg-4 col-sm-6 pt-2">
                            <!-- Single Service Start -->
                            <div class="single-service aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                <h4 class="title"><a href="javascript.void(0)">Layanan <br> Tambah angin</a></h4>
                                {{-- <a href="javascript.void(0)" class="more">Lean more</a> --}}
                                <div class="service-icon mt-4">
                                    <img src="{{ asset('assets/icons/tire.svg') }}" alt="{{ env('APP_NAME') }}">
                                </div>
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-lg-6 col-sm-6 mt-5">
                            <!-- Single Service Start -->
                            <div class="single-service aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                <h4 class="title"><a href="javascript.void(0)">Layanan <br> Tambal Ban</a></h4>
                                {{-- <a href="javascript.void(0)" class="more">Lean more</a> --}}
                                <div class="service-icon mt-4">
                                    <img src="{{ asset('assets/icons/tire.svg') }}" alt="{{ env('APP_NAME') }}">
                                </div>
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-lg-6 col-sm-6 mt-5">
                            <!-- Single Service Start -->
                            <div class="single-service aos-init aos-animate m-0" data-aos="fade-up" data-aos-delay="600">
                                <h4 class="title"><a href="javascript.void(0)">Layanan <br> Towing / Derek</a></h4>
                                {{-- <a href="javascript.void(0)" class="more">Lean more</a> --}}
                                <div class="service-icon mt-4">
                                    <img src="{{ asset('assets/icons/engine.svg') }}" alt="{{ env('APP_NAME') }}">
                                </div>
                            </div>
                            <!-- Single Service End -->
                        </div>
                    </div>
                </div>
                <!-- Service Wrapper End -->

            </div>
        </div>
    </div>
    <!-- Service Section End -->

    <!-- Call to Action Section Start -->
    <div class="section section-padding-02">
        <div class="container">

            <!-- Call to Action Wrapper Start -->
            <div class="call-to-action-wrapper">

                <!-- Call to Action Content Start -->
                <div class="call-to-action-content">
                    <div class="content-wrapper">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-white">
                            <h5 class="sub-title">Panggilan Darurat 24/7 </h5>
                            <h2 class="main-title">+62 823 2252 5083</h2>
                        </div>
                        <!-- Section Title End -->
                        <p>Silahkan hubungi kami jika kendaraan anda mengalami masalah, kami akan menyelesaikan masalah
                            kendaraan anda</p>
                        <a href="javascript.void(0)" class="btn btn-custom-01 btn-hover-white">Hubungi</a>
                    </div>
                    <img class="shape" src="{{ asset('assets/images/call-to-action.png') }}" alt="Pintukeluar">
                </div>
                <!-- Call to Action Content End -->

                <!-- Call to Action Images Start -->
                <div class="call-to-action-images" style="background-image: url(assets/images/call-to-action-bg.png);">
                </div>
                <!-- Call to Action Images End -->

            </div>
            <!-- Call to Action Wrapper End -->

        </div>
    </div>
    <!-- Call to Action Section End -->

    <!-- Why Choose Section Start -->
    <div class="section section-padding-02" id="why-choose-section">
        <div class="container">
            <!-- Why Choose Wrapper Start -->
            <div class="choose-wrapper">
                <div class="row align-items-center gx-xl-0">
                    <div class="col-lg-5">
                        <!-- Why Choose Content Start -->
                        <div class="choose-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h5 class="sub-title">Mengapa Memilih Kami</h5>
                                <h2 class="main-title">Kepercayaan dan Layanan adalah Prioritas kami</h2>
                            </div>
                            <!-- Section Title End -->

                            <p>Layanan tepercaya dan dapat diandalkan adalah tujuan utama kami yang sangat menyakitkan. Juga
                                tidak ada orang lain yang menyukai kita untuk mengambil contoh sepele, yang mana dari kita
                                yang melakukan memilih
                            </p>

                            <img src="{{ asset('assets/images/choose.png') }}" alt="Pintukeluar">
                        </div>
                        <!-- Why Choose Content End -->
                    </div>
                    <div class="col-lg-7">
                        <!-- Why Choose Items Wrapper Start -->
                        <div class="choose-items-wrapper">
                            <div class="row gx-xl-5 align-items-center">
                                <div class="col-sm-6">

                                    <!-- Single Choose Item Start -->
                                    <div class="single-choose-item aos-init aos-animate" data-aos="fade-up"
                                        data-aos-delay="200">
                                        <div class="item-icon">
                                            <img src="{{ asset('assets/images/icons/icon-1.svg') }}" alt="Pintukeluar">
                                        </div>
                                        <div class="item-content">
                                            <h4 class="title">Peralatan Terbaru</h4>
                                            <p>
                                                Servis mobil dengan peralatan terbaru dan canggih untuk hasil berkualitas
                                                tinggi.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Single Choose Item End -->

                                </div>
                                <div class="col-sm-6">

                                    <!-- Single Choose Item Start -->
                                    <div class="single-choose-item aos-init aos-animate" data-aos="fade-up"
                                        data-aos-delay="400">
                                        <div class="item-icon">
                                            <img src="{{ asset('assets/images/icons/icon-3.svg') }}" alt="Pintukeluar">
                                        </div>
                                        <div class="item-content">
                                            <h4 class="title">Mekanika Terbaik</h4>
                                            <p>
                                                Perawatan oleh mekanik terbaik dengan keahlian dan pengalaman.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Single Choose Item End -->

                                </div>
                                <div class="col-sm-6">

                                    <!-- Single Choose Item Start -->
                                    <div class="single-choose-item aos-init aos-animate" data-aos="fade-up"
                                        data-aos-delay="200">
                                        <div class="item-icon">
                                            <img src="{{ asset('assets/images/icons/icon-2.svg') }}" alt="Pintukeluar">
                                        </div>
                                        <div class="item-content">
                                            <h4 class="title">Layanan Kualitas</h4>
                                            <p>
                                                Pelayanan berkualitas dengan staf ramah dan profesional.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Single Choose Item End -->

                                </div>
                                <div class="col-sm-6">

                                    <!-- Single Choose Item Start -->
                                    <div class="single-choose-item aos-init aos-animate" data-aos="fade-up"
                                        data-aos-delay="400">
                                        <div class="item-icon">
                                            <img src="{{ asset('assets/images/icons/icon-4.svg') }}" alt="Pintukeluar">
                                        </div>
                                        <div class="item-content">
                                            <h4 class="title">Layanan Cepat</h4>
                                            <p>
                                                Servis mobil cepat dan efisien tanpa mengorbankan kualitas.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Single Choose Item End -->

                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Items Wrapper End -->
                    </div>
                </div>
            </div>
            <!-- Why Choose Wrapper End -->

        </div>
    </div>
    <!-- Why Choose Section End -->

    <!-- How We Work Section Start -->
    {{-- <div class="section section-padding-02">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h5 class="sub-title">Working Process</h5>
                <h2 class="main-title">How we work</h2>
                <p>Trusted and reliable service is our main goal extremely <br> painful. Nor again is there anyone who loves
                </p>
            </div>
            <!-- Section Title End -->

            <!-- How we Work Wrapper Start -->
            <div class="how-we-work-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Work Start -->
                        <div class="single-work aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <span class="number">01</span>
                            <div class="content-wrapper">
                                <img src="{{ asset('assets/images/work-1.png') }}" alt="Pintukeluar">
                                <h4 class="title"><a href="#">Book appointment</a></h4>
                            </div>
                        </div>
                        <!-- Single Work End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Work Start -->
                        <div class="single-work aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <span class="number">02</span>
                            <div class="content-wrapper">
                                <img src="{{ asset('assets/images/work-2.png') }}" alt="Pintukeluar">
                                <h4 class="title"><a href="#">Bring your Vehical</a></h4>
                            </div>
                        </div>
                        <!-- Single Work End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Work Start -->
                        <div class="single-work aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <span class="number">03</span>
                            <div class="content-wrapper">
                                <img src="{{ asset('assets/images/work-3.png') }}" alt="Pintukeluar">
                                <h4 class="title"><a href="#">Get it Repair</a></h4>
                            </div>
                        </div>
                        <!-- Single Work End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Work Start -->
                        <div class="single-work aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <span class="number">04</span>
                            <div class="content-wrapper">
                                <img src="{{ asset('assets/images/work-4.png') }}" alt="Pintukeluar">
                                <h4 class="title"><a href="#">Ready for Deliver</a></h4>
                            </div>
                        </div>
                        <!-- Single Work End -->
                    </div>
                </div>
            </div>
            <!-- How we Work Wrapper End -->

        </div>
    </div> --}}
    <!-- How We Work Section End -->

    <!-- Testimonials Section Start -->
    {{-- <div class="section section-padding-02">
        <div class="container">

            <!-- Testimonials Wrapper Start -->
            <div class="testimonials-wrapper">
                <!-- Testimonials Title Start -->
                <div class="testimonials-title">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h5 class="sub-title">Testimonials</h5>
                        <h2 class="main-title">What our Happy Clients says</h2>
                        <p>Trusted and reliable service is our main goal extremely painful. Nor again is there anyone who
                            loves our to take a trivial example, which of us undertakes chooses </p>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- Testimonials Title End -->

                <!-- Testimonials Items Start -->
                <div class="testimonials-items testimonial-active">

                    <img class="shape" src="{{ asset('assets/images/testimonials.png') }}" alt="Pintukeluar">

                    <img class="quote" src="{{ asset('assets/images/icons/quote.svg') }}" alt="Pintukeluar">

                    <div
                        class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-44bdf6510cc8bdd87" aria-live="polite"
                            style="transform: translate3d(-1008px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide" role="group" aria-label="1 / 3" style="width: 504px;">
                                <!-- Single Testimonials Start -->
                                <div class="single-testimonials">
                                    <img class="author" src="{{ asset('assets/images/user.png') }}" alt="Pintukeluar">
                                    <h3 class="name">Crystopher Lopez</h3>
                                    <p>Great service makes me happy, my car is like the most the new one is our main goal
                                        extremely painful again is there anyone who loves our to take</p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <!-- Single Testimonials End -->
                            </div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3"
                                style="width: 504px;">
                                <!-- Single Testimonials Start -->
                                <div class="single-testimonials">
                                    <img class="author" src="{{ asset('assets/images/user.png') }}" alt="Pintukeluar">
                                    <h3 class="name">Crystopher Lopez</h3>
                                    <p>Great service makes me happy, my car is like the most the new one is our main goal
                                        extremely painful again is there anyone who loves our to take</p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <!-- Single Testimonials End -->
                            </div>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3"
                                style="width: 504px;">
                                <!-- Single Testimonials Start -->
                                <div class="single-testimonials">
                                    <img class="author" src="{{ asset('assets/images/user.png') }}" alt="Pintukeluar">
                                    <h3 class="name">Crystopher Lopez</h3>
                                    <p>Great service makes me happy, my car is like the most the new one is our main goal
                                        extremely painful again is there anyone who loves our to take</p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <!-- Single Testimonials End -->
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 2"></span><span
                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 3"></span></div>

                </div>
                <!-- Testimonials Items End -->
            </div>
            <!-- Testimonials Wrapper End -->

        </div>
    </div> --}}
    <!-- Testimonials Section End -->

    <!-- Blog Section Start -->
    {{-- <div class="section section-padding-02">
        <div class="container">

            <!-- Blog Wrapper Start -->
            <div class="blog-wrapper">

                <!-- Section Title Start -->
                <div class="section-title">
                    <h5 class="sub-title">Our Blog</h5>
                    <h2 class="main-title">Latest Blog Post</h2>
                    <p>Trusted and reliable service is our main goal extremely <br> painful. Nor again is there anyone who
                        loves </p>
                </div>
                <!-- Section Title End -->

                <!-- Blog Items Start -->
                <div class="blog-items">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->
                            <div class="single-blog aos-init" data-aos="fade-up" data-aos-delay="200">
                                <div class="blog-image">
                                    <a href="blog-details-right-sidebar.html"><img
                                            src="{{ asset('assets/images/blog-01.png') }}" alt="Pintukeluar"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li> <i class="fa fa-calendar"></i> 28 May, 2023</li>
                                        <li> <i class="fa fa-user-o"></i> Albert Ross</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details-right-sidebar.html">Anti-lock Brake Servicing
                                            is very important for your vehical</a></h3>
                                    <a href="blog-details-right-sidebar.html" class="more">+ Read more</a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->
                            <div class="single-blog aos-init" data-aos="fade-up" data-aos-delay="400">
                                <div class="blog-image">
                                    <a href="blog-details-right-sidebar.html"><img
                                            src="{{ asset('assets/images/blog-02.png') }}" alt="Pintukeluar"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li> <i class="fa fa-calendar"></i> 28 May, 2023</li>
                                        <li> <i class="fa fa-user-o"></i> Albert Ross</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details-right-sidebar.html">Don’t do these 4 things
                                            if you want your car to retain its value</a></h3>
                                    <a href="blog-details-right-sidebar.html" class="more">+ Read more</a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->
                            <div class="single-blog aos-init" data-aos="fade-up" data-aos-delay="600">
                                <div class="blog-image">
                                    <a href="blog-details-right-sidebar.html"><img
                                            src="{{ asset('assets/images/blog-03.png') }}" alt="Pintukeluar"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li> <i class="fa fa-calendar"></i> 28 May, 2023</li>
                                        <li> <i class="fa fa-user-o"></i> Albert Ross</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details-right-sidebar.html">Full car Diagnostic is
                                            important for every year maintainance</a></h3>
                                    <a href="blog-details-right-sidebar.html" class="more">+ Read more</a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                    </div>
                </div>
                <!-- Blog Items End -->

                <!-- Blog Button Start -->
                <div class="blog-btn">
                    <a href="blog-right-sidebar.html" class="btn btn-custom-01">View More</a>
                </div>
                <!-- Blog Button End -->

            </div>
            <!-- Blog Wrapper End -->

        </div>
    </div> --}}
    <!-- Blog Section End -->

    <!-- Brand Section Start -->
    {{-- <div class="section section-padding">
        <div class="container">

            <!-- Brand Wrapper Start -->
            <div class="brand-wrapper brand-active">
                <div
                    class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-14fc6df2100e3b6e10" aria-live="off"
                        style="transform: translate3d(-2572px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                            aria-label="1 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-01.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                            aria-label="2 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-02.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                            aria-label="3 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-03.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 12"
                            style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-04.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0"
                            role="group" aria-label="5 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-01.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group"
                            aria-label="6 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-02.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="7 / 12"
                            style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-03.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" role="group"
                            aria-label="8 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-04.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0"
                            role="group" aria-label="9 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-01.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1"
                            role="group" aria-label="10 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-02.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                            aria-label="11 / 12" style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-03.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="3" role="group" aria-label="12 / 12"
                            style="width: 211.5px; margin-right: 110px;">

                            <!-- Single Brand Start -->
                            <div class="single-brand">
                                <img src="{{ asset('assets/images/brand-04.png') }}" alt="Pintukeluar">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
            <!-- Brand Wrapper End -->

        </div>
    </div> --}}
    <!-- Brand Section End -->
@endsection
