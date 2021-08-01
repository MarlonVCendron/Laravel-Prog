<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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