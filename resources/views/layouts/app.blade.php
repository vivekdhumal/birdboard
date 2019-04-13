<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="theme-light bg-page">
    <div id="app">
        <nav class="bg-header">
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-2">
                    <h3>
                        <a href="{{ url('/') }}">
                            {{-- <img src="/images/logo.svg" alt="{{ config('app.name', 'Laravel') }}"> --}}
                            @include('svglogo')
                        </a>
                    </h3>

                    <div>
                        <!-- Right Side Of Navbar -->
                        <div class="ml-auto flex items-center">
                            <!-- Authentication Links -->
                            @guest
                                <a class="text-default no-underline mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="text-default no-underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <theme-switcher></theme-switcher>

                                <div class="flex items-center nav-link text-default dropdown-toggle flex items-center mr-3" v-pre>
                                    <img src="{{ gravatar_url(Auth::user()->email) }}" alt="{{ Auth::user()->name }}'s avatar" class="rounded-full mr-3" width="35"> {{ Auth::user()->name }} <span class="caret"></span>
                                </div>

                                <div>
                                    <a class="no-underline text-accent" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="container mx-auto py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
