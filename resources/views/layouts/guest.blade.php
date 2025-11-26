<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        body {
            background: url('{{ asset("images/aviation-logo.png") }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center mb-4">
            <a href="/">
                <x-application-logo class="w-20 h-20" />
            </a>
        </div>

        <div class="card w-100 w-sm-50 p-4 shadow">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
