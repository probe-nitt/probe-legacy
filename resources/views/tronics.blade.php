<!DOCTYPE HTML>
<html>
<head>
	<title>tronICs | PROBE 2022</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
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
				<li><a href="/guestlectures">Lectures</a></li>
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
				">tronICs</div>
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
            <p>A huge shoutout to all the garage scientists out there, who would like to solve everyday problems with electronics. </p>
			<p>PROBE 2022 brings to you tronICs, where we give you a canvas of Breadboards and ICs to develop a prototype for a problem statement given on the spot! </p>
            <header class="minor">
				<h3 class="subheader"><b>Important Dates</b></h3>
			</header>
				<ul>
				<li><b>Registration:</b> From 18th January 2020</li>
				<li><b>Deadline for submission of filled questionnaire:</b> 28th January 2020</li>
				<li><b>Shortlist announcement:</b> 29th January 2020</li>
				<li><b>Finals:</b> 1st February 2020, at NIT Trichy</li>
				</ul>

			<header class="minor">
				<h3 class="subheader"><b>Prizes</b></h3>
			</header>
				<ul>
				<li>Prizes and Goodies worth 15,000 INR for Top 3 teams.</li>
				<li>Participation Certificates for all finalists.</li>
				</ul>
			
			<header class="minor">
				<h3 class="subheader"><b>Format</b></h3>
			</header>
				<ol>
				<li>Register with a maximum of 3 members per team at probe.org.in/events/tronics. Questionnaire will be sent to the registered email ID.</li>
				<li>Submit the answers to the questionnaire before the deadline via email to <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b></li>
				<li>Shortlisted teams will have finals during PROBE 2022 at NIT-Trichy. Finals will involve a task, for which problem statement will be announced on spot. Components will be given to build the circuit. </li>
				</ol>

			<header class="minor">
				<h3 class="subheader"><b>Rules</b></h3>
			</header>
                <ul>
                <li>Maximum of 3 members per team. Teams can consist of individuals from different colleges/departments.</li>
                <li>For the prelims, mail the answers to the questionnaire to <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b> with “tronICs_&lt;your team name>" as the subject. Also mention the names and Probe IDs of the team members in the mail. </li>
                <li>For finals, a problem statement will be given on the spot. Components will be given to build the circuit. Rules for finals will be announced on the spot. </li>
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
<div class=reg-button-wrapper><a href="/events/register?event=tronICs" class="myButton">Register</a></div>
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
