<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @yield('title')
        <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
        <link rel="icon" href="{!! asset('assets/img/kaiadmin/favicon.ico') !!}" type="image/x-icon"/>
        <script src=" {!! asset('assets/js/plugin/webfont/webfont.min.js') !!}"></script>
        <script>
          WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
              families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
              ],
              urls: ["{!! asset('assets/css/fonts.min.css') !!}"],
            },
            active: function () {
              sessionStorage.fonts = true;
            },
          });
        </script>
        <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}" />
        <link rel="stylesheet" href="{!! asset('assets/css/plugins.min.css') !!}" />
        <link rel="stylesheet" href="{!! asset('assets/css/kaiadmin.min.css') !!}" />
        <link rel="stylesheet" href="{!! asset('assets/css/demo.css') !!}" />
    </head>
    <body>
      <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.adminsidebar')
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="main-header">
              <div class="main-header-logo">
                <!-- Logo Header -->
                @include('layouts.header')
                <!-- End Logo Header -->
              </div>
              <!-- Navbar Header -->
              @include('layouts.navbar')
              <!-- End Navbar -->
            </div>
            @yield('content')
            @include('layouts.footer')
        </div>
        <!-- End Custom template -->
      </div>
    <!--   Core JS Files   -->
    <script src="{!! asset('assets/js/core/jquery-3.7.1.min.js') !!}"></script>
    <script src="{!! asset('assets/js/core/popper.min.js') !!}"></script>
    <script src="{!! asset('assets/js/core/bootstrap.min.js') !!}"></script>
  </body>
</html>
