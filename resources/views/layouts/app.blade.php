<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ElectroShop Dashboard') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <div class="min-h-screen flex flex-col justify-between">
        <div>
            @include('layouts.navigation')

            <div class="flex justify-center mt-10">
                <span class="text-2xl font-extrabold tracking-tight text-gray-900">
                    Electro<span class="text-[#0f4c3a]">Shop</span><span class="text-xs font-semibold uppercase tracking-wider ml-2 px-2.5 py-1 bg-[#0f4c3a]/10 text-[#0f4c3a] rounded-lg">Admin</span>
                </span>
            </div>

            <main class="py-4">
                {{ $slot }}
            </main>
        </div>

        <x-footer />
    </div>
</body>
</html>