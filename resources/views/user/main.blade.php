<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('user.share.header')
    @vite('resources/css/app.css')
</head>

<body class="body">
    @include('user.share.navigation')
    @yield('content')
    @include('user.share.footer')
    @include('user.share.script')
</body>

</html>
