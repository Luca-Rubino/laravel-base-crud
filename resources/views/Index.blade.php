<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    <title>@yield('title-page', 'Index')</title>
</head>
<body>
    @include('component.nav')
    @include('component.main')
    @include('component.footer')

    {{-- @include('resources.js.myScript') --}}
</body>
</html>