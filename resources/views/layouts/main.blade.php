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
    <title>@yield('page-name')</title>
    <!-- FB Page Share -->
    @yield('fb-share-config')

    <!-- TWT Page Share -->
    @yield('twt-share-config')

    @yield('page-includes')
    <link rel="stylesheet" href={{asset("css/layouts/main.css") }}>
    <link rel="stylesheet" href={{asset("css/index.css") }}>
    <link rel="stylesheet" href={{asset("css/app.css") }}>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Poiret+One&family=Give+You+Glory&family=Caveat+Hallelujah&family=Satisfy&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src={{asset("js/index.js") }}></script>
</head>
<div class="color-overlay">
</div>
<body>
    <nav class="nav">
        <span class="logo">
            <a href={{route('/')}}>
                The Outcast<span class="outcast-logo">s</span>
            </a>
        </span>
        <div class="right-nav">
            <ul class="links">
                <a href={{route("/")}}><li id="active-link">Home</li></a>
                <a href={{route("about")}}><li>About</li></a>
                <a href={{route("blog/articles")}}><li>Blog</li></a>
                <a href={{route("contact")}}><li>Contact</li></a>
            </ul>
        </div>
        <div class="hamburger-icon">
        	<i class="material-icons" id="menu">menu</i>
        </div>
    </nav>
    <main class="main-container">
        @yield('content')
    </main>
    <footer class="footer">
    	copyright (c) The Outcast<span class="logo-s-dark">s</span>
    </footer>
</body>
</html>
