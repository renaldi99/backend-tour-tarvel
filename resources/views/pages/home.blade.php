@extends('layouts.app')

@section('title', 'Raya Tour Travel')

@section('content')
    <!-- Start Header -->
    <header class="text-center">
        <h1>
            Liburan Kemana saja
            <br>
            Yang kamu mau, <span class="type-animate"></span> 
        </h1>
        <div class="header-button">
            <a href="#tiketTour" class="btn btn-book-now px-4">Book Now</a>
            <a href="" class="btn btn-book-watch px-4">Watch Video</a>
        </div>
    </header>
    <!-- End Header -->

    <main>
        <!-- Start Content Tour -->
        <!-- Section Title -->
        <section class="section-title" id="titleTour">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-title-tour">
                        <h1>
                            Pas untuk kamu
                        </h1>
                        <p class="mt-2">
                            Paket - paket yang bikin
                            <br>
                            liburan kamu jadi seru!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Tiket -->
        <section class="section-tour" id="tiketTour">
            <div class="container">
                <div class="section-tour-content row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-12 col-md-4" data-aos="zoom-in-up" data-aos-duration="500">
                        <div class="card-tour d-flex flex-column position-relative">
                            <div class="tour-image text-center d-flex flex-column"  style="background-image: url('{{ $item->images->count() ? Storage::url($item->images->first()->image) : '' }}');">
                                <div class="tour-country text-uppercase">{{ $item->location }}</div>
                                <div class="tour-location text-uppercase">{{ $item->title }}</div>
                            </div>
                            <div class="tour-body d-flex flex-column">
                                <div class="tour-title">{{ $item->short_content }}</div>
                                <div class="tour-text">Mulai dari</div>
                                <div class="tour-price">IDR {{ $item->price }}</div>
                            </div>
                            <a href="{{ route('detail', $item->slug) }}" class="stretched-link"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Section Company -->
        <section class="section-company" id="companyTour">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 col-sm-12 text-center">
                        <img src="{{ url('frontend/images/garuda1.png') }}" alt="Image BCA">
                    </div>
                    <div class="col-md-3 col-sm-12 text-center">
                        <img src="{{ url('frontend/images/bca.png') }}" alt="Image BCA">
                    </div>
                    <div class="col-md-3 col-sm-12 text-center">
                        <img src="{{ url('frontend/images/reddoorz.png') }}" alt="Image BCA">
                    </div>
                    <div class="col-md-3 col-sm-12 text-center">
                        <img src="{{ url('frontend/images/disney1.png') }}" alt="Image BCA">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content Tour -->

        <!-- Start Testimonial -->
        <div class="section-testimonial">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            Testimonial
                        </h1>
                        <p class="mt-2">
                            Mereka memberikan kesan liburan bersama kami
                        </p>
                    </div>
                </div>
            </div>

            <div class="section-testimonial-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="testimonial active owl-carousel">
                                <!-- User 1 Testi -->
                                <div class="single-carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single-testimonial text-center">
                                                <div class="testimonial-image">
                                                    <img src="{{ url('frontend/images/img-user.png') }}" alt="Image User">
                                                </div>
                                                <p>
                                                    "Liburan di bromo mantap, pesan tiket serta pembayarannya 
                                                    juga sangat mudah"
                                                </p>
                                                <div class="testimonial-name">
                                                    <h3>
                                                        Felicia
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- User 2 Testi -->
                                <div class="single-carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single-testimonial text-center">
                                                <div class="testimonial-image">
                                                    <img src="{{ url('frontend/images/img-testi-1.png') }}" alt="Image User">
                                                </div>
                                                <p>
                                                    "Liburan di bromo mantap, pesan tiket serta pembayarannya 
                                                    juga sangat mudah"
                                                </p>
                                                <div class="testimonial-name">
                                                    <h3>
                                                        Renaldi
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- User 3 Testi -->
                                <div class="single-carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single-testimonial text-center">
                                                <div class="testimonial-image">
                                                    <img src="{{ url('frontend/images/img-testi-2.png') }}" alt="Image User">
                                                </div>
                                                <p>
                                                    "Liburan di bromo mantap, pesan tiket serta pembayarannya 
                                                    juga sangat mudah"
                                                </p>
                                                <div class="testimonial-name">
                                                    <h3>
                                                        Kelvin
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonial -->
        
        <!-- Start Subscribe -->
        <div class="section-subscribe overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-10">
                        <div class="row align-items-center">
                            <div class="col-md-5 d-flex flex-column">
                                <h2>
                                    Subscribe Our Newsletter
                                </h2>
                                <p>
                                    Subscribe newsletter to get offers and about 
                                    new places to discover.
                                </p>
                            </div>
                            <div class="col-md-7">
                                <div class="mail-form align-items-center">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="subscribe-input">
                                                <input type="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="subscribe-btn">
                                                <button class="btn btn-subscribe">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->

        <!-- Start Offer -->
        <div class="section-offer-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            Kenapa Harus Kami?
                        </h1>
                        <p>
                            Kami memberikan layanan terbaik untuk 
                            liburan anda
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-offer-card">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <div class="offer-card d-flex flex-column">
                            <img src="{{ url('frontend/images/handshake.png') }}" alt="Handshake" width="120px" height="120px">
                            <h3>Booking lebih simple</h3>
                            <p>
                                Pilih tiket yang ingin dijadikan tempat liburan, dan pesan tiket dengan mudah
                                hanya sekali klik
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-card card-active d-flex flex-column">
                            <img src="{{ url('frontend/images/payment.png') }}" alt="Handshake" width="120px" height="120px">
                            <h3>Transaksi mudah</h3>
                            <p>
                                Transaksi online saat
                                booking tiket tanpa perlu kesulitan, bisa menggunakan E-wallet
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-card d-flex flex-column">
                            <img src="{{ url('frontend/images/connection.png') }}" alt="Handshake" width="120px" height="120px">
                            <h3>Paling update</h3>
                            <p>
                                Kami memiliki tiket terbaru
                                pas untuk menemani liburan anda bersama keluarga dan teman - teman
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Offer -->

        <!-- Start Recent Tour -->
        <div class="section-recent-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            Recent Tour
                        </h1>
                        <p>
                            Perjalanan yang baru - baru ini dipesan oleh
                            member kami
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-recent-tour">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3" data-aos="slide-up" data-aos-duration="500">
                        <div class="recent-card">
                            <a href="">
                                <img src="{{ url('frontend/images/waterfall.png') }}" alt="Waterfall, Bogor">
                                <div class="recent-card-overlay">
                                    <div class="title-tour">Waterfall, Bogor</div>
                                    <div class="date-tour">21 Maret 2021</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3" data-aos="slide-up" data-aos-duration="1000">
                        <div class="recent-card">
                            <a href="">
                                <img src="{{ url('frontend/images/lombok.png') }}" alt="Lombok, Nusa Tenggara">
                                <div class="recent-card-overlay">
                                    <div class="title-tour">Lombok, Nusa Tenggara</div>
                                    <div class="date-tour">14 April 2021</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3" data-aos="slide-up" data-aos-duration="1500">
                        <div class="recent-card">
                            <a href="">
                                <img src="{{ url('frontend/images/borobudur.png') }}" alt="Waterfall">
                                <div class="recent-card-overlay">
                                    <div class="title-tour">Borobudur, Jawa Tengah</div>
                                    <div class="date-tour">7 Juni 2021</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recent Tour -->
    </main>
@endsection