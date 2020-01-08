<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/songs') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="form-inline my-2 my-lg-0" style="margin-left: auto; margin-right: 20px; ">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input class="form-control"  name="search" type="search">
                            <div class="input-group-append">
                            <button class="btn btn-success btn-sm my-2 my-sm-0" type="submit">Search
                                
                            </button>    
                            </div>
                            
                        </div>
                        
                    </form>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                        

               
                </div>
            </div>
        </nav>


         <div class="row" style="width:100%">
                <div class="sidebar" >
                    <ul class="sidebar-menu" style="list-style: none; padding: 0px;">
                    <li><a href="{{url('/songs')}}/home" class="navio"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li><a href="#" class="navio"><i class="fa fa-bus" aria-hidden="true"></i>Trending</a></li>
                        
                    
                        </ul>
                </div>
              
            </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
