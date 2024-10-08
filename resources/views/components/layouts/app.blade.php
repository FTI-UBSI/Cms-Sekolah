<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ session('title', 'Page Title') }}</title>

    {{-- Tambahkan CDN FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >  
  
    {{-- CDN Feather Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>


    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 dark:bg-slate-900">

    @livewireScripts
    {{-- Cek jika bukan di halaman login, tampilkan Navbar --}}
    @if (!request()->routeIs('filament.admin.auth.login'))
        @livewire('header') <!-- Menampilkan komponen header -->
        @livewire('navbar')
    @endif
    <div>
        {{ $slot }}
    </div>

    {{-- Cek jika bukan di halaman login, tampilkan Footer --}}
    @if (!request()->routeIs('filament.admin.auth.login'))
        @livewire('footer')
    @endif

    @yield('content')

    @livewireScripts
</body>

<script src="./node_modules/preline/dist/preline.js"></script>
<script>
    feather.replace()
</script>

</html>
