<!DOCTYPE html>
<html>
<head>
    <title>@yield('page-name')</title>
    <link rel="stylesheet" href={{asset("css/layouts/main.css") }}>
    @yield('page-includes')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FB Page Share -->
    @yield('fb-share-config')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href={{asset("css/bootstrap/bootstrap.min.css") }}>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Poiret+One&family=Give+You+Glory&family=Caveat+Hallelujah&family=Satisfy&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src={{asset("js/index.js") }}></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
                <a href={{url("/index")}}><li id="active-link">Home</li></a>
                <a href={{url("/about")}}><li>About</li></a>
                <a href={{url("/blog/articles/")}}><li>Blog</li></a>
                <a href={{url("/contact")}}><li>Contact</li></a>
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
