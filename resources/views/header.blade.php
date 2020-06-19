<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="nugDev">
        
        <title>@yield('title')</title>
        
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        
        <!-- Custom styles -->
        <link href="{{ asset('/css/cstyle.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Jember Online Service</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-
        
        target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Hubungi Kami</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- END : Navigation -->