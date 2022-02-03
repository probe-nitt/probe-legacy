<!DOCTYPE HTML>
<html>
<head>
	<title>Bullseye | PROBE 2022</title>
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
				">Bullseye</div>
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
            <p>One thing that is common from Vandhiyadhevan in Ponniyin Selvan to Ravi Mohan in Krishna Key to Sherlock Holmes is the presence of mind and accuracy of striking their target’s Bullseye. Get ready to flex your brains and use your intellect, delve deeper and unravel each layer of mystery as quickly as possible. Probe, NIT Trichy presents Bullseye - an online treasure hunt event which will test your skills in uncovering clues and solving riddles to discover the hidden treasure. Survive through a series of levels, along with clues in various forms and containing a plethora of labyrinths and puzzles and win exciting prizes! </p>
            <header class="minor">
				<h3 class="subheader"><b>Prizes</b></h3>
			</header>
				<p>Prizes and Goodies worth 10,000 INR for Top 3 winners.</p>
			
			<header class="minor">
				<h3 class="subheader"><b>Format</b></h3>
			</header>
				<p>The participant who cracks the maximum number of questions before 27th January 2020 is awarded the 1st prize.</p>

			<header class="minor">
				<h3 class="subheader"><b>Rules</b></h3>
			</header>
                <ul>
                <li>The usual clue formats involve – URL, Source, Page and Title clues. (Clues are hidden all over). </li>
                <li>Questions vary like multiple file format changes, double encryption etc. </li>
                <li>Absolutely no preparation is required for this game. All you need is free time and a lot of patience. Sometimes, obvious clues won’t strike you and at other times you might get deviated from your path by misinterpreting a clue. When this happens, take a break and play later. </li>
                <li>The moderators are there to monitor the progress of players and glitches/bugs. Keep an eye out for the clues which will be updated when required. </li>
                <li>There will be a fixed number of levels released per day and once you reach the cap you will be notified of the level block. </li>
				</ul>

			<header class="minor">
				<h3 class="subheader"><b>Contacts</b></h3>
			</header>
			<p>Email: <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b></p>
			<p>Anshuman : 7675012631</p>
			<p>For Technical Issues: Naven : 9500152736</p>

			<!-- <h4>Participation certificate for all the participants making to the finals.</h4> -->
		</section>

	</div>
</div>
<!-- <div class=reg-button-wrapper><a href="" class="myButton">Event is not open yet</a></div> -->
	<div class=reg-button-wrapper><a href="/bullseye-event" class="myButton">Play</a></div>
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
