<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title> @yield('title') </title>
    <link  rel="shortcut icon" href="./assets/imgs/Hapolearn_logo" type="image/png" />
</head>
<body>
    <div id="app">
        <!-- Header -->
        @include('layouts.header')
        
        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.footer')
    
        <!-- Login/Register -->
         @include('components.authentication')

        <!-- chatbox -->
        @include('contact.chatbox')
    </div>

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
