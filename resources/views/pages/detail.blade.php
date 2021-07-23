@extends('layouts.app')

@section('title', 'Detail Tiket Tour')

@section('content')
<main>
    <!-- Start Card Details -->
    <section class="section-details">
        <div class="container">
            <div class="row">
                <div class="col p-md-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item align-items-center d-flex"><i class="la la-home"></i><a href="{{ route('home') }}"> Home</a></li>
                            <li class="breadcrumb-item active align-items-center d-flex"><i class="las la-suitcase"></i><a href="{{ route('detail') }}"> Detail</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pl-lg-0">
                    <div class="card card-details">
                        <h2 class="text-uppercase">RAJA AMPAT, PAPUA</h2>
                        <p class="text-uppercase">
                            INDONESIA
                        </p>
                        <div class="gallery d-md-flex flex-md-row">
                            <div class="banner xzoom-container">
                                <img src="./frontend/images/image-banner.png" alt="Banner" class="xzoom w-100 h-auto" id="xzoom-default" xoriginal="./frontend/images/image-banner.png">
                            </div>
                            <div class="xzoom-thumbs thumbnail d-md-flex flex-md-column mr-md-4">
                                <a href="./frontend/images/image-banner.png">
                                    <img src="./frontend/images/image-thumb.png" class="xzoom-gallery ml-0" width="128" xpreview="./frontend/images/image-banner.png">
                                </a>
                                <a href="./frontend/images/image-banner-1.png">
                                    <img src="./frontend/images/image-thumb-1.png" class="xzoom-gallery ml-0" width="128" xpreview="./frontend/images/image-banner-1.png">
                                </a>
                                <a href="./frontend/images/image-banner-2.png">
                                    <img src="./frontend/images/image-thumb-2.png" class="xzoom-gallery ml-0" width="128" xpreview="./frontend/images/image-banner-2.png">
                                </a>
                                <a href="./frontend/images/image-banner-3.png">
                                    <img src="./frontend/images/image-thumb-3.png" class="xzoom-gallery ml-0" width="128" xpreview="./frontend/images/image-banner-3.png">
                                </a>
                            </div>
                        </div>
                        <div class="content-gallery">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>
                                        Tentang Wisata
                                    </h2>
                                    <p>
                                        Terletak di ujung barat laut Semenanjung Kepala Burung di pulau New Guinea,
                                        di provinsi Papua Barat di Indonesia, Raja Ampat, atau Empat Raja adalah sebuah 
                                        Kepulauan terdiri dari lebih dari 1.500 pulau kecil, ngarai, dan beting yang mengelilingi 
                                        empat pulau utama Misool, Salawati, Batanta, dan Waigeo, dan Pulau Kecil Kofiau.
                                        Kepulauan Raja Ampat mengangkangi Khatulistiwa dan merupakan bagian dari Segitiga 
                                        Terumbu Karang yang mengandung keanekaragaman hayati laut terkaya di bumi.
                                    </p>
                                    <div class="feature row">
                                        <div class="col-md-4">
                                            <div class="feature-content d-flex flex-row">
                                                <i class="las la-suitcase" style="font-size: 24px; text-align: center; margin-right: 10px;"></i>
                                                <p>Water Activities</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="feature-content d-flex flex-row">
                                                <i class="las la-language" style="font-size: 24px; text-align: center; margin-right: 10px;"></i>
                                                <p>Indonesian / English</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="feature-content d-flex flex-row">
                                                <i class="las la-utensils" style="font-size: 24px; text-align: center; margin-right: 10px;"></i>
                                                <p>Traditional Food</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- maps -->
                                    <div class="maps">
                                        <div class="row">
                                            <div class="col">
                                                <h2>Location Map</h2>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2042457.4824699077!2d129.38375669291239!3d-1.0291010456643883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5c3eaaccb47097%3A0x7851bd844c4cdf44!2sRaja%20Ampat%20Regency!5e0!3m2!1sen!2sid!4v1626837225709!5m2!1sen!2sid" style="border:0; width: 100%; min-height: 300px;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- maps -->
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-right">
                                        <h2>
                                            Member sudah join
                                        </h2>
                                        <div class="members my-2">
                                            <img src="{{ url('frontend/images/img-userjoin-1.png') }}" alt="" class="members-img mr-2">
                                            <img src="{{ url('frontend/images/img-userjoin-2.png') }}" alt="" class="members-img mr-2">
                                            <img src="{{ url('frontend/images/img-userjoin-3.png') }}" alt="" class="members-img mr-2">
                                            <img src="{{ url('frontend/images/img-userjoin-4.png') }}" alt="" class="members-img mr-2">
                                        </div>
                                        <hr>
                                        <h2>Deskripsi Ringkas</h2>
                                        <table class="deskripsi-ringkas">
                                            <tr>
                                                <th width="50%">Tanggal Berangkat</th>
                                                <td width="50%" class="text-right">
                                                    22 Desember 2021
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">Jumlah Hari</th>
                                                <td width="50%" class="text-right">
                                                    2D 1N
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">Tipe Tour</th>
                                                <td width="50%" class="text-right">
                                                    Open
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">Harga</th>
                                                <td width="50%" class="text-right">
                                                    Rp. 970.000 / Orang
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="join-container">
                                        <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now py-2">
                                            Join Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Card Details -->

    <!-- Start Whats Include -->
    <div class="section-what-include">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>What's Include</h1>
                    <hr width="50" style="border: 2px solid #ff8667; margin-bottom: 50px;">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5 col-12 justify-content-center d-flex">
                    <ul>
                        <li><i class="la la-check"></i> Penginapan dihotel dengan sarapan pagi</li>
                        <li><i class="la la-check"></i> Tour dan makan sesuai itinerary</li>
                        <li><i class="la la-check"></i> Transportasi sesuai jumlah perserta</li>
                        <li><i class="la la-check"></i> Gratis penggunaan standard masker</li>
                        <li><i class="la la-check"></i> Tiket masuk objek wisata</li>
                    </ul>
                </div>
                <div class="col-md-7 col-12 justify-content-center d-flex">
                    <div class="img-what-include">
                        <img src="{{ url('frontend/images/img-content-what-include.png') }}" alt="Image" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Whats Include -->
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 100,
                zoomHeight: 100,
                title: false,
                tint: '#135a8d',
                Xoffset: 15,
            });
        });
    </script>
@endpush