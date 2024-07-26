<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Required Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('css/camera-white.ico') }}">

    {{-- Splide CSS --}}
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{--Fonts Awesome --}}
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  />

    {{-- External CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Midtrans --}}
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <title>Artistic Eye | {{ $title }}</title>
</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <main class="container" style="position: relative">
        @yield('content')
    </main>
    
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 

    {{-- Bootstrap JS --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- Splide JS --}}
    <script src="{{ asset('js/splide.min.js') }}"></script>
    <script src="{{ asset('js/splide-extension-auto-scroll.min.js') }}"></script>

    {{-- External JS --}}
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>