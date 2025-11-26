<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        body {
            background: url('{{ asset("images/AirbusA380.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-5 rounded-5 text-center" style="width: 1300px; background: rgba(255, 255, 255, 0.95);">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
