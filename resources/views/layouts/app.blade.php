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
                <a class="navbar-brand" href="{{ url('/home') }}">
                  <img src="{{ asset('img/medias.jpg') }}" alt="Media" style="height:40px;">Media
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<div class="row" style=" width: 100%">
    <div class="sidebar" style="">
        <ul class="sidebar-menu" style="list-style: none;padding: 0px">
            <li>
                <a href="http://localhost/artistsongs/artistsong/public/home" class="navio"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            
                    <li  data-toggle="collapse" data-target="#media" class="navio">
                  <i class="fas fa-h-square"></i> 
                  Media 
                  <span class="arrow"></span>
                   </li>
                     <ul class="sub-menu collapse" id="media">
                    <a href="#" class="navio" style="width: 110% ; margin-left: -10%"><i class="fa fa-edit"></i>Create</a>
                    <a href="#" class="navio" style="width: 110% ; margin-left: -10%"><i class="fa fa-laptop"></i>View</a>
                    <a href="#" class="navio" style="width: 110% ; margin-left: -10%"><i class="fa fa-folder-open"></i>subscriptions</a>
                   
                </ul>

              <li>
                <a href="http://localhost/artistsongs/artistsong/public/home" class="navio"><i class="fas fa-tachometer-alt"></i>Users</a>
            </li>
        </ul>
        
    </div>
    

</div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
