@extends('layouts.success')

@section('title', 'Success Booking')

@section('content')
<main>
    <div class="section-success">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="img-success justify-content-center d-flex">
                        <lottie-player
                            autoplay
                            mode="normal"
                            src="{{ url('frontend/images/lottie/success.json') }}"
                            style="width: 320px"
                        >
                        </lottie-player>
                    </div>
                    <div class="content-success">
                        <h2>
                            Success Payment
                        </h2>
                        <p>
                            We've sent you email for trip instruction
                            <br>
                            please check and read it as well
                        </p>
                    </div>
                    <a href="{{ route('home') }}" class="btn btn-home-page px-5">
                        Home Page
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('addon-script')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@0.2.0/dist/lottie-player.js"></script>
@endpush