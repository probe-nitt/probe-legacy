<!DOCTYPE HTML>
<html>
<head>
	<title>Accomodation | PROBE 2020</title>
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
			<h2><b>Accomodation</b></h2>
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
				">Details</div>
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
		<h3 class="subheader"><b>Registration Fees</b></h3>
	</header>
    <ul>
    <li><b>Probe Registration fee:-</b> Rs.250/-</li>
    A kit consisting of food coupons worth Rs.150/- that can be availed in any of the foodstalls, notepad, pen and a few other goodies will be given!
    </ul>

    <header class="minor">
		<h3 class="subheader"><b>Accomodation Fees</b></h3>
	</header>
    In case if you avail Accomodation, following should be paid:
    <ul>
    <li><b>Accommodation fee :-</b> Rs.150/- for a day</li>
    <li><b>Caution deposit :-</b> Rs.50/- (Will be refunded while checking out)</li>
	</ul>	
        </section>

	</div>
</div>
</div>
</div>

<footer id="footer">
	<ul class="copyright">
		<li>&copy; PROBE 2020. All rights reserved.</li>
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
