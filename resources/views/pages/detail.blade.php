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
                            <li class="breadcrumb-item active align-items-center d-flex"><i class="las la-suitcase"></i><a href="{{ route('detail', $item->slug) }}"> Detail</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pl-lg-0">
                    <div class="card card-details">
                        <h2 class="text-uppercase">{{ $item->title }}</h2>
                        <p class="text-uppercase">
                            {{ $item->location }}
                        </p>
                        @if ($item->images->count())
                        <div class="gallery d-md-flex flex-md-row mb-md-5">
                            <div class="banner xzoom-container">
                                <img src="{{ Storage::url($item->images->first()->image) }}" alt="Banner" class="xzoom w-100 h-auto" id="xzoom-default" xoriginal="{{ Storage::url($item->images->first()->image) }}">
                            </div>
                            <div class="xzoom-thumbs thumbnail d-md-flex flex-md-column mr-md-4 pt-md-5">
                                @foreach ($item->images as $image)
                                <a href="{{ Storage::url($image->image) }}">
                                    <img src="{{ Storage::url($image->image) }}" class="xzoom-gallery ml-0" width="128" xpreview="{{ Storage::url($image->image) }}">
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <div class="content-gallery">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>
                                        Tentang Wisata
                                    </h2>
                                    <p>
                                       {!! $item->description !!}
                                    </p>
                                    <div class="feature row">
                                        <div class="col-md-4">
                                            <div class="feature-content d-flex flex-row">
                                                <i class="las la-suitcase" style="font-size: 24px; text-align: center; margin-right: 10px;"></i>
                                                <p>{{ $item->event }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="feature-content d-flex flex-row">
                                                <i class="las la-language" style="font-size: 24px; text-align: center; margin-right: 10px;"></i>
                                                <p>{{ $item->language }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="feature-content d-flex flex-row">
                                                <i class="las la-utensils" style="font-size: 24px; text-align: center; margin-right: 10px;"></i>
                                                <p>{{ $item->food }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- maps -->
                                    <div class="maps">
                                        <div class="row">
                                            <div class="col">
                                                <h2>Location Map</h2>
                                                <iframe src="{{ $item->map == '' ? 'Empty set' : $item->map }}" style="border:0; width: 100%; min-height: 300px;" allowfullscreen="" loading="lazy"></iframe>
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
                                                    {{ \Carbon\Carbon::create($item->departure)->format('F n, Y') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">Jumlah Hari</th>
                                                <td width="50%" class="text-right">
                                                    {{ $item->duration }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">Tipe Tour</th>
                                                <td width="50%" class="text-right">
                                                    {{ $item->type }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">Harga</th>
                                                <td width="50%" class="text-right">
                                                    Rp. {{ $item->price }} / Orang
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="join-container">
                                        @auth
                                            <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-block btn-join-now py-2" type="submit">
                                                    Book Now
                                                </button>
                                            </form>
                                        @endauth
                                        @guest
                                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now py-2">
                                                Login or Register to Join
                                            </a>
                                        @endguest
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