<div class="container" id="nav"> 
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/Logo.png') }}" alt="Logo Tour Travel"/>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span> 
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3 text-center">
                <li class="nav-item mx-md-2">
                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#popular" class="nav-link page-scroll">Tiket Tour</a>
                </li>
                <li class="nav-item dropdown mx-md-2">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Service</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Create VISA</a>
                        <a href="#" class="dropdown-item">Payment</a>
                        <a href="#" class="dropdown-item">Other Problems</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#testimonialHeading" class="nav-link page-scroll">Testimonial</a>
                </li>  
            </ul>

            @guest
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-block btn-masuk my-2 my-sm-0" type="button" onclick="event.PreventDefault(); location.href='{{ url('login') }}'">Masuk</button>
                </form>
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-block btn-daftar my-2 my-sm-0 ">Daftar</button>
                </form>

                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block mx-2">
                    <button class="btn btn-masuk my-2 my-sm-0 px-4" type="button" onclick="event.PreventDefault(); location.href='{{ url('login') }}'">Masuk</button>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block mx-2">
                    <button class="btn btn-daftar my-2 my-sm-0 px-4">Daftar</button>
                </form>
            @endguest

            @auth
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none text-center">
                    <a href="" class="my-2 my-sm-0 d-block w-100 nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item"></i>User Account</a></li>
                        <li><a href="#" class="dropdown-item">Contact Support</a></li>
                        <div class="dropdown-divider"></div>
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </ul>
                </form>

                <!-- Desktop Button -->
                <div class="form-inline my-2 my-lg-0 d-none d-md-block dropdown">
                    <a href="#" class="nav-link dropdown-toggle my-2 my-sm-0 pl-1 pr-4" data-toggle="dropdown">{{ Auth::User()->name }}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item"></i>User Account</a></li>
                            <li><a href="#" class="dropdown-item">Contact Support</a></li>
                            <div class="dropdown-divider"></div>
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </ul>
                </div>
            @endauth

        </div>
    </nav>
</div>