<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="/assets/js/jquery-3.2.1.min.js" defer></script>
    <script src="/assets/js/bootstrap.min.js" defer></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=6cd0443b-0b85-4074-8581-5cc018b8ffd3&lang=ru_RU"></script>
    <script src="/assets/js/app.js" defer></script>
    <script src="/assets/js/map.js" defer></script>
    <title>Yeelight | {{$title}}</title>
    <meta name="description" content="{{$description}}"/>
    <meta name="keywords" content="{{$keywords}}"/>
    <meta name="csrf-token" content="{{csrf_token()}}"/>
</head>
<body>
<div class="container-fluid">
    <x-header.layout :$categories/>
    {{ $slot }}
    <x-footer.layout/>
</div>
<x-analytics/>
</body>
</html>
