<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.head')

    {{-- Metadatos extra por vista (SEO, Open Graph, etc) --}}
    @yield('head_extras')

    {{-- Estilos adicionales por vista --}}
    @stack('styles')
</head>

<body id="page-top">

    {{-- Header / Navbar --}}
    @include('layouts.partials.navbar')

    {{-- Contenido dinámico --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.partials.footer')

    {{-- Scripts principales --}}
    @include('layouts.partials.scripts')

    {{-- Scripts adicionales por vista --}}
    @stack('scripts')

</body>

</html>
