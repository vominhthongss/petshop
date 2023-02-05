<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('user.share.header')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="body">
    <div class="fixed w-full bg-white z-10">
        @include('user.share.navigation')
    </div>

    <div class="py-24">
        @yield('content')
    </div>
    @include('user.share.footer')
    @include('user.share.script')
    @include('user.share.modal-search')
</body>

</html>
