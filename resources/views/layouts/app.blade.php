<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Game Save File Sharing System') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!--JQuery-->
    <script src="/js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div id="app">
        
        <!-- Header for all pages -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div style='width:100%'>       
                    <div class="navbar-brand welcome">
                        <p>{{__('webContent.welcomeUser') }} John Doe!</p>
                    </div>
                    
                    <!-- Language selection -->
                    <div class=" language">
                        
                            
                        <a href="{{ route('lang.switch', 'en') }}" class="btn "><img width="42" src='images/en.png'></a>
                        
                        <a href="{{ route('lang.switch', 'lv') }}"class="btn "><img width="42" src='images/lv.png'></a>
                    </div>
                    <div class="navbar-brand">
                        
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
