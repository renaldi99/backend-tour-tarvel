@extends('layouts.signin')

@section('content')
    <main class="section-login">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-4 offset-md-1">
                    <div class="page-mobile d-lg-none d-md-none text-center">
                        <h1>Let's join with us</h1>
                        <hr class="dropdown-divider mb-3">
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('frontend/images/Logo.png') }}" alt="" class="w-50 mb-4">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                  <label for="email">{{ __('E-Mail Address') }}</label>
                                  <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelp" placeholder="Enter email">
                                </div>

                                @error('email')
                                    <spam class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </spam>
                                @enderror

                                <div class="form-group">
                                  <label for="password">{{ __('Password') }}</label>
                                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required autocomplete="current-password">
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                        </div>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="col forgot-password">
                                            <a href="{{ route('password.request') }}" class="align-right">Forgot Password?</a>
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-login btn-block">{{ __('Login') }}</button>
                                <div class="text-center mt-4">
                                    <p>Or login with</p>
                                    <img src="{{ url('frontend/images/icon_login_with.png') }}" alt="">
                                </div>
                                <div class="text-center link-register mt-5">
                                    <p>Don't have an account?<a href="{{ route('register') }}">Register</a></p>
                                </div>
                              </form>
                        </div>
                    </div>
                    
                </div>
                <div class="section-right col-12 col-md-6 offset-md-1">
                    <h1 class="mb-4">
                        Start your journey now
                    </h1>
                    <img src="{{ url('frontend/images/login_pict.png') }}" alt="" class="w-80 d-none d-sm-flex">
                </div>
            </div>
        </div>
    </main>
@endsection
