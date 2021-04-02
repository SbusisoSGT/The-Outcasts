<!DOCTYPE html>

<!--
	-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
	
		 ________            __    __  __                                      ______               __
		/\_____  \          /\ \__/\ \/\ \                                    /\__  _\             /\ \
		\/___//'/' __    ___\ \ ,_\ \ \_\ \    ___   __  __    ____     __    \/_/\ \/    __    ___\ \ \___
			/' /'/'__`\/' _ `\ \ \/\ \  _  \  / __`\/\ \/\ \  /',__\  /'__`\     \ \ \  /'__`\ /'___\ \  _ `\
		  /' /' /\  __//\ \/\ \ \ \_\ \ \ \ \/\ \L\ \ \ \_\ \/\__, `\/\  __/      \ \ \/\  __//\ \__/\ \ \ \ \
		 /\_/   \ \____\ \_\ \_\ \__\\ \_\ \_\ \____/\ \____/\/\____/\ \____\      \ \_\ \____\ \____\\ \_\ \_\
		 \//     \/____/\/_/\/_/\/__/ \/_/\/_/\/___/  \/___/  \/___/  \/____/       \/_/\/____/\/____/ \/_/\/_/

	-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
	
	#	Author: 7entHouse Tech PTY(LTD)
	#	About: A House of Perfect Tech Solutions
	#	Website: www.7enthousetech.co.za
	#	Email: info@7enthousetech.co.za
	
	-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
	
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-name') • {{config('app.name', 'The Outcasts')}}</title>
    @yield('fb-share-config')

    @yield('twt-share-config')
    
    @yield('page-includes')
    <link rel="canonical" href={{url()->full()}}>
    <link rel="stylesheet" href={{asset("css/layouts/main.css") }}>
    <link rel="stylesheet" href={{asset("css/index.css") }}>
    <link rel="stylesheet" href={{asset("css/app.css") }}>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Poiret+One&family=Give+You+Glory&family=Caveat+Hallelujah&family=Satisfy&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/3ef12e339b.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src={{asset("js/layouts/main.js") }}></script>
</head>
<div class="color-overlay">
</div>
<body>
    <nav class="nav-bar">
        <span class="logo">
            <a href={{route('/')}}>
                The Outcast<span class="outcast-logo">s</span>
            </a>
        </span>
        <div class="right-nav">
            <ul class="links">
                <a href={{route("/")}}><li>HOME</li></a>
                <a href={{route("articles")}}><li>BLOG</li></a>
                <a href={{route("about")}}><li>ABOUT</li></a>
                <a href={{route("contact")}}><li>CONTACT</li></a>
            </ul>

            @guest
                <a href="/login" class="nav-login-a"><span class="nav-login-btn">Login</span></a>
            @else
                <a href="{{ route('logout') }}" class="nav-login-a" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <span class="nav-login-btn">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
            @endguest
            
        </div>
        <div class="hamburger-icon" onclick="menuSlider()">
        	<i class="material-icons" id="menu">menu</i>
        </div>
    </nav>
    <nav class="dropdown-nav">
        <ul class="dropdown-links">
            <a href={{route("/")}}><li>HOME</li></a>
            <a href={{route("articles")}}><li>BLOG</li></a>
            <a href={{route("about")}}><li>ABOUT</li></a>
            <a href={{route("contact")}}><li>CONTACT</li></a>

            @guest
                <a href="/login"><li>LOGIN</li></a>
            @else
                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <li>LOGOUT</li>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf</form>
            @endguest
        </ul>
    </nav>
    <main class="main-container">
        @yield('content')
    </main>
    <footer class="footer">
    	<div class="copyright">
            <p>
                <span>Copyright &copy The Outcasts</span>
                <span class="copyright-designed-with">
                    <span class="copyright-dot"> • </span> Designed with <i class='fas fa-heart'></i> by <span id="ht">7entHouse Tech</span>
                </span>
            </p>
        </div>
    </footer>
</body>
</html>
@yield('js-code')