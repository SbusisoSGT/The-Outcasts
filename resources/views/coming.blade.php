<!DOCTYPE html>
<html>
<head>
    <title>The Outcasts</title>
    <link rel="stylesheet" href={{asset("css/coming.css") }}>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Poiret+One&family=Give+You+Glory&family=Caveat+Hallelujah&family=Satisfy&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src={{asset("js/coming.js") }}></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<div class="color-overlay">
    </div>
<body>
    <nav class="nav">
        
            <span class="logo">
                <a href="">The Outcast<span class="outcast-logo" style="
    color: #FFF !important;
">s</span></a>
            </span>
    </nav>
    <main class="main-container">
        <section>
            <div class="coming-container">
                <div class="coming-header">
                    Coming Soon
                </div>
            </div>
            <div class="countdown-container">
                <div class="time-container">
                    <span class="time-display" id="days"></span>
                    <span class="time-subtext time-anomaly">Days</span>
                </div>
                <div class="time-container">
                    <span class="time-display" id="hours"></span>
                    <span class="time-subtext time-anomaly">Hours</span>
                </div>
                <div class="time-container">
                    <span class="time-display" id="minutes"></span>
                    <span class="time-subtext">Minutes</span>
                </div>
                <div class="time-container">
                    <span class="time-display" id="seconds"></span>
                    <span class="time-subtext">Seconds</span>
                </div>
            </div>
            <div class="form-container">
                <form action="" method="POST">
                    <input type="email" name="email" class="input-form" placeholder="Email">
                    <button type="button" class="submit-form"> Notify Me <i class="far fa-paper-plane"></i></button>
                </form>
                <span class="form-subtext">
                    Stay Tuned for something amazing!
                </span>
            </div>
        </section>
    </main>
    <footer class="contact-container">
            <a href="https://facebook.com/theoutcasts"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com/theoutcasts"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/theoutcasts"><i class="fab fa-twitter"></i></a>
    </footer>
</body>
</html>

<style>
    .countdown-container{
	width: 100%;
	display: flex;
	justify-content: center;
	flex-direction: row;
	position: relative;
	z-index: 3;
	margin-top: 3vh;
}

.time-container{
	display: flex;
	flex-direction: column;
	justify-content: center;
	margin-right: 2.6rem;
	width: 7.9rem;
}

.time-display{
	align-self: center;
	font-size: 4.5rem;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #FFF !important;
}

.time-subtext{
	align-self: center;
	color: #DEDEDE;
	font-weight: bold;
	margin: 0 0 1.4rem 0rem;
}
</style>