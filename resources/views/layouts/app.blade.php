<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AviationApp') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        body {
            background: url('{{ asset('images/aviation-logo.png') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        .navbar-bg {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body class="font-sans antialiased">

    <!-- Navigation -->
    <!-- @include('layouts.navigation') -->

    <!-- Page Heading -->
    @isset($header)
        <header class="container my-3">
            {{ $header }}
        </header>
    @endisset

    <!-- Page Content -->
    <!-- <main class="container my-4">
        {{ $slot }}
    </main> -->

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
