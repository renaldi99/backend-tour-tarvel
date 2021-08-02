@extends('layouts.signin')

@section('content')
    <main class="regis-container">
        <div class="container">
            <div class="row page-regis d-flex align-items-center">
                <div class="section-left col-12 col-md-7 mt-2">
                    <h1 class="mb-4">
                        Start your journey now
                    </h1>
                    <img src="{{ url('frontend/images/pict-regis.png') }}" alt="" class="w-80 d-none d-sm-flex">
                </div>
                <div class="section-right col-12 col-md-4">
                    <div class="page-mobile d-lg-none d-md-none text-center">
                        <h1>Let's join with us</h1>
                        <hr class="dropdown-divider mb-3">
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('frontend/images/Logo.png') }}" alt="" class="w-50 mb-4">
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="username">{{ __('Username') }}</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Enter Username">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" aria-describedby="emailHelp" placeholder="Enter email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-login btn-block">{{ __('Register') }}</button>
                                <div class="text-center link-login mt-4">
                                    <p>Have already an account?<a href="{{ route('login') }}">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
@endsection
