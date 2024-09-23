<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ session('title', 'Page Title') }}</title>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 dark:bg-slate-900">
    {{-- Cek jika bukan di halaman login, tampilkan Navbar --}}
    @if (!request()->routeIs('filament.admin.auth.login'))
        @livewire('navbar')
    @endif

    <main>
        {{ $slot }}
    </main>

    {{-- Cek jika bukan di halaman login, tampilkan Footer --}}
    @if (!request()->routeIs('filament.admin.auth.login'))
        @livewire('footer')
    @endif

    @livewireScripts
</body>

<script src="./node_modules/preline/dist/preline.js"></script>

</html>
