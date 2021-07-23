<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.home.style')
    @stack('addon-style')
</head>
<body>
    
    <!-- Start Navbar -->
    @include('includes.home.navbar-alternate')
    <!-- End Navbar -->
    {{-- header and main--}}
    @yield('content')

    @stack('prepend-script')
    @include('includes.home.script')
    @stack('addon-script')
</body>
</html>