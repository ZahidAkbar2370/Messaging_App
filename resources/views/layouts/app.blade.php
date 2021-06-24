<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <title>Laravel</title> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Home | Cooking</title>
            <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
            <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
               
            <link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
            <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @yield("content")
    </body>
</html>