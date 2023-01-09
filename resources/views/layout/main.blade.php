<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <title>@yield('title')</title>
        @include('layout.head')
        @yield('styles')
   </head>
   <body>
    @include('layout.loader')
    @include('layout.navbar')
    <main>
        @yield('content')
    </main>
    @include('layout.footer')
    @include('layout.scripts')
    @yield('scripts')
    </body>
</html>
