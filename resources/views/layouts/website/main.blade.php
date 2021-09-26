<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('layouts.website.headscripts')
<body>
   @include('layouts.website.header')
   @yield('content')
   @include('layouts.website.footer')
   @include('layouts.website.footerscripts')
</body>
</html>
