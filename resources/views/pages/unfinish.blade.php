@extends('layouts.success')

@section('title', 'Success Booking')

@section('content')
<main>
    <div class="section-success">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="img-success justify-content-center d-flex">
                        <img src="{{ url('frontend/images/undraw_cancel_u1it.svg') }}" alt="" width="320px">
                    </div>
                    <div class="content-success">
                        <h2>
                            Your Transaction is Unfinished
                        </h2>
                        <p>
                            Let's finish your transaction to get your own ticket,
                            <br>
                            please contact us if you get problem
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