<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Hot Takes</title>
    </head>
    <body>
        <header>
            <div id="sauceManager">
                <a href={{ route('sauce') }} >ALL SAUCES</a>
                @if(session()->has('utilisateur'))
                <a href={{ route('create') }}>ADD A SAUCE</a>
                @endif
            </div>
            <a href={{ route('sauce') }}><div>
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
                <div>
                    <h1 class='title'>HOT TAKES</h1>
                    <p class='subtitle'>THE WEB'S BEST HOT SAUCES REVIEWS</p>
                </div>
            </div></a>
            <div id="accountManager">
                @if(session()->has('utilisateur'))
                    <a href={{ route('logout') }}>LOGOUT</a>
                @else
                    <a href={{ route('login') }}>LOGIN</a>
                    <a href={{ route('register') }}>REGISTER</a>
                @endif
        </header>
        @yield('content')
    </body>
</html>
