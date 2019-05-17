<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" contents="IE=edege">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Laravel</title>

       
    </head>
    <body>
        
        <div class="container">
           @include('inc.messages')
           @yield('content')
        </div>   

    </body>
</html>
