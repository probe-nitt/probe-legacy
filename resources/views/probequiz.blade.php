<!DOCTYPE HTML>
<html>
<head>
	<title>Probe Quiz | PROBE 2022</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	@if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
		@endif
		@if (!session('name'))
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		@endif
	<link rel="stylesheet" href="{{ asset('css/workshops.css') }}"  />
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" /> 
	<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload" style="
background-image:url(../images/backract.png);">
<div id="page-wrapper">
	
	<!-- Header -->
	<header id="header" class="header2020">
		<nav class="nav2020">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/workshops">Workshops</a></li>
				<li><a href="/events">Events</a></li>
				<li><a href="/lectures">Lectures</a></li>
				<li><a href="/contact">Contact us</a></li>
			</ul>
		</nav>
		<h1 id="logo2020"><a href="/"><img src="/images/probe_p.png"></a></h1>
		<nav class="nav2020">
			<ul>
<li><a href="https://www.facebook.com/Probe.NITT/" target="_blank"><img src="/images/facebook.svg" alt="facebook"></a></li>
							<li><a href="https://www.instagram.com/probe.nitt/"" target="_blank"><img src="/images/instagram.png" alt="instagram"></a></li>
							<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" " target="_blank"><img src="/images/linkedin.svg" alt="linkedin"></a></li>				<li><a href="/sponsors">Sponsors</a></li>
				@if ($name = session('name'))
				<li>{{ $name }}</li>
				<li><a href="/logout" class="button primary">Log out</a></li>
				@endif
				@if (!session('name'))
				<li><a href="/register">Sign up</a></li>
				<li><a href="/login">Log in</a></li>
				@endif
			</ul>
		</nav>
	</header>
	
	<!-- Main -->
	<div id="main" class="wrapper style1">
		<div class="container">
			<header class="major">
			<h2><b>Events</b></h2>
		</header>
		<div class="row gtr-150">
			<div class="col-4 col-12-medium">
				
				<!-- Sidebar -->
				<section id="sidebar">
					<div class="workshopcontainer">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="386" height="334"
						viewBox="0 0 386 334">
						<defs>
							<style>
								.cls-1 {
									fill: url(#linear-gradient);
								}
								
								.cls-2 {
									fill: #fff;
									font-size: 35px;
									font-family: Montserrat-Medium, Montserrat;
									font-weight: 500;
								}
							</style>
							<linearGradient id="linear-gradient" x1="0.722" y1="0.951" x2="0.193" y2="0.188"
							gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#2b499b" />
							<stop offset="1" stop-color="#2388fc" />
						</linearGradient>
					</defs>
					<g id="Group_47" data-name="Group 47" transform="translate(-178 -485)">
						<path id="Polygon_9" data-name="Polygon 9" class="cls-1" d="M289.5,0,386,167,289.5,334H96.5L0,167,96.5,0Z"
						transform="translate(178 485)" />
						{{-- <text id="Event_n" data-name="Event #n" class="cls-2" transform="translate(297 665)">
							<tspan x="0" y="0">Event #n</tspan>
						</text> --}}
					</g>
				</svg>
				<div class="workshopcentered" style="
				font-size: xx-large;
				">Probe Quiz</div>
			</div>
		</section>
		
	</div>
	<div class="col-8 col-12-medium imp-medium">
		
		<!-- Content -->
		<section id="content-workshops" style="
    /* Position: absolute; */
    height: 500px;
	overflow-y: scroll;">
	<header class="minor">
		<h3 class="subheader"><b>Description</b></h3>
	</header>
            <p>Do you pride yourself in your knowledge of Tronix-Trivia? Can you shout out the answer and get it right? There is a strategy behind every game. Come down with a strategy and be prepared to change it, as this event has a lot in store for you. </p>
			<p>PROBE 2022 presents, Probe Quiz. Get prepared to be "shocked" by the intense competition and stay "grounded" enough to win it. </p>
            <header class="minor">
				<h3 class="subheader"><b>Important Dates</b></h3>
			</header>
				<ul>
				<li>Event on <b>1st February 2020</b>, at NIT Trichy </li>
				</ul>

			<header class="minor">
				<h3 class="subheader"><b>Prizes</b></h3>
			</header>
				<ul>
				<li>Prizes and Goodies worth 9,000 INR for Top 3 teams.</li>
				<li>Participation Certificates for all finalists.</li>
				</ul>

			<header class="minor">
				<h3 class="subheader"><b>Rules</b></h3>
			</header>
                <ul>
                <li>Maximum of 2 members per team.</li>
                <li>Teams can consist of individuals from different colleges/departments.</li>
				<li>Participants should register online or on spot with their PROBE ID.</li>
				<li>Use of electronic gadgets for help is strictly prohibited.</li>
				<li>Quiz Master’s decision will be final.</li>
				<li>Event format will be announced on the spot.</li>
				</ul>

			<header class="minor">
				<h3 class="subheader"><b>Contacts</b></h3>
			</header>
			<p>Email: <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b></p>
			<p>Vasanth: 9629457300</p>
			<p>Bhuvana: 9585894011</p>
		</section>

	</div>
</div>
@if($regbool==0)
<div class=reg-button-wrapper><a href="/events/register?event=Probe%20Quiz" class="myButton">Register</a></div>
                                            @endif
                                            @if($regbool==1)
											<div class=reg-button-wrapper><a href="" class="myButton">Registered</a></div>
											@endif
</div>
</div>

<footer id="footer">
	<ul class="copyright">
		<li>&copy; PROBE 2022. All rights reserved.</li>
	</ul>
</footer>

</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('js/browser.min.js') }}"></script>
<script src="{{ asset('js/breakpoints.min.js') }}"></script>
<script src="{{ asset('js/main2020.js') }}"></script>
</body>
</html>
