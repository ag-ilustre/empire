<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pagetitle') | Empire: CRM for Real Estate</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Vollkorn+SC|Cinzel|Lato|Roboto+Condensed" rel="stylesheet" type="text/css">
    
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
            <div class="container">
                <a href="#" class="scrollup rounded-0"></a>
                <a class="navbar-brand" id="app-name" href="{{ url('/') }}">
                    Empire
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
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
                            @if(Auth::user()->role_id === 1)
                            <!-- Admin's Navbar -->
                            <li class="nav-item">
                              <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/admin/agents">Agents</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/admin/contacts">Contacts</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/admin/opportunities">Opportunities</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/admin/projects">Projects</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/admin/tasks">Tasks</a>
                            </li>
                            @elseif(Auth::user()->role_id === 2)
                            <!-- Agent's Navbar -->
                            <li class="nav-item">
                              <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/agent/contacts">Contacts</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/agent/opportunities">Opportunities</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/agent/properties">Properties</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/agent/tasks">Tasks</a>
                            </li>
                            @endif
                    </ul>

                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi, {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item btn-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('javascript');
    <script src="{{ asset('js/script.js') }}" defer></script>
    
</body>
</html>
