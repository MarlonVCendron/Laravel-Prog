<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('/css/app.css')}}" rel="stylesheet">

    <title>Trabalho Laravel</title>
</head>

<body>
    <x-navbar/>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="/js/app.js"></script>
</body>

</html>