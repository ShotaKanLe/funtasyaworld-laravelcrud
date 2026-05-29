<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ElectroShop') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-50/50">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-[#0f4c3a]/5 via-transparent to-transparent">
        <div>
            <a href="/" class="text-3xl font-extrabold tracking-tight text-gray-900 hover:opacity-90 transition-opacity">
                Electro<span class="text-[#0f4c3a]">Shop</span>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-8 px-8 py-8 bg-white border border-gray-100 shadow-xl shadow-gray-100/40 overflow-hidden rounded-3xl">
            {{ $slot }}
        </div>
    </div>
</body>
</html>