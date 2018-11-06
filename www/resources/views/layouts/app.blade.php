<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Character Creator">
        <meta name="keywords" content="Character, Creator, Character creation">
        <meta name="author" content="Aky33">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Scripts -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel='stylesheet' href="{{ asset('css/basic.css') }}">

        @yield('assets')
    </head>
    
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-fixed-top">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">{{ trans('locale.characters') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/races') }}">{{ trans('locale.races') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/professions') }}">{{ trans('locale.professions') }}</a></li> 
                            <!--<li class="nav-item"><a class="nav-link" href="abilities">{{ trans('locale.abilities') }}</a></li>-->
                            <!--<li class="nav-item"><a class="nav-link" href="items">{{ trans('locale.items') }}</a></li>-->
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!--empty-->
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>

            <footer>
                <!--empty-->
            </footer>
        </div>
    </body>
</html>
