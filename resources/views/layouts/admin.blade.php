<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Tour Travel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('includes.admin.style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        {{-- Navbar --}}
        @include('includes.admin.navbar')
        {{-- End Navbar --}}
        
        {{-- Sidebar --}}
        @include('includes.admin.sidebar')
        {{-- End Sidebar --}}
      
        <!-- Dashboard -->
        @yield('content')
        <!-- End Dashboard -->
      
        {{-- Footer --}}
        @include('includes.admin.footer')
        {{-- End Footer --}}

        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
<!-- ./wrapper -->

    @include('includes.admin.script')
</body>
</html>
