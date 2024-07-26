<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ asset('css/camera-white.ico') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>artisticEye | Dashboard</title>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      />

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/styles-dashboard.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/css/trix.css">
        <script type="text/javascript" src="/js/trix.js"></script>
        {{-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> --}}
        <style>
            trix-toolbar [data-trix-button-group="file-tools"]{
              display: none;
            }
            th.sorted::after {
                content: "▲";
            }   
            th.sorted.reverse::after {
                content: " ▼";
            }
            th {
                cursor: pointer;
            }
          </style>
    </head>
    <body class="sb-nav-fixed">

        @include('dashboard.layouts.header')
        <div id="layoutSidenav">
            @include('dashboard.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    @include('dashboard.layouts.footer')
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        {{-- <script src="{{ asset("js/code.jquery.com_jquery-3.7.0.min.js") }}"></script>  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts-dashboard.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset("js/datatables-simple-demo.js") }}"></script>
        <script src="{{ asset("js/lightbox-plus-jquery.min.js") }}"></script>
    </body>
</html>
