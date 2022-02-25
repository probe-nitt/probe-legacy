<!DOCTYPE HTML>
<html>
<head>
	<title>Qualcomm Ideathon | PROBE 2022</title>
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
				">Qualcomm Ideathon</div>
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
            <p>The spark of an idea can burn more brilliantly than any star. Qualcomm in association with Probe presents Ideathon, a platform for students to showcase their technical skill and prowess. The topic for this year's competition is Networking and Wireless Communication, and if you believe you have the next big breakthrough brewing in your mind, submit your ideas and win exciting prizes from Qualcomm!</p>
		 	<p>Participants are encouraged to present ideas spanning across hardware and software on the topic of Networking and Wireless (WLAN) communications.</p>
			<p>Some of the areas that can be used for this topic include, but not restricted to
    		<ul>
				<li>AI & Machine Learning in Wi-Fi Networks</li>
    			<li>Bandwidth and Latency Improvements in Wi-Fi Networks</li>
    			<li>Cost Optimizations for hardware and Wi-Fi Access Point Products</li>
    			<li>Wi-Fi Coverage improvements</li>
				<li>User Experience improvements in dense Wi-Fi networks</li>
    			<li>Any other topic of interest for the participants</li>
			</ul>
			</p>
			<header class="minor">
				<h3 class="subheader"><b>Important Dates</b></h3>
			</header>
				<ul>
				<li><b>Registration:</b> From 21st January 2020</li>
				<li><b>Deadline for submission of abstracts:</b> 25th January 2020, 6 PM</li>
				<li><b>Shortlist announcement:</b> 28th January 2020</li>
				<li><b>Finals:</b> 1st February 2020, at NIT Trichy</li>
				</ul>

			<!-- <header class="minor">
				<h3 class="subheader"><b>Prizes</b></h3>
			</header>
				<ul>
				<li>Prizes and Goodies worth 10,000 INR for Top 3 teams.</li>
				<li>Participation Certificates for all finalists.</li>
				</ul> -->
			
			<header class="minor">
				<h3 class="subheader"><b>Format</b></h3>
			</header>
				<ol>
				<li>Register with a maximum of 2 members per team at probe.org.in/events/ideathon.</li>
				<li>Submit the abstract of the idea before the deadline via email to <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b></li>
				<li>Shortlisted teams will have finals during PROBE 2022 at NIT-Trichy. During the finals the ideas will be judged by an eminent panel from Qualcomm.</li>
				</ol>

			<header class="minor">
				<h3 class="subheader"><b>Rules</b></h3>
			</header>
                <ul>
                <li>Maximum of 2 members per team. Teams can consist of individuals from different colleges/departments.</li>
                <li>For the prelims, mail the abstract of yout idea to <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b> with “Ideathon_&lt;your team name>" as the subject. Also mention the names and Probe IDs of the team members in the mail. </li>
                <li>Prior to finals, the shortlisted teams have to submit the writeup of their idea as a printed document and mail the softcopy of the same to <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b> with “Ideathon_&lt;your team name>” as the subject. Also mention the names and Probe IDs of the team members in the mail.</li>
				<li>During finals, the ideas have to presented in front of a panel of judges from Qualcomm. </li>
				</ul>

			<header class="minor">
				<h3 class="subheader"><b>Contacts</b></h3>
			</header>
			<p>Email: <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b></p>
			<p>Vasanth: 9629457300</p>
			<p>Pavan Kumar: 8500514232</p>
		</section>

	</div>
</div>
@if($regbool==0)
<div class=reg-button-wrapper><a href="/events/register?event=Qualcomm%20Ideathon" class="myButton">Register</a></div>
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
