<!DOCTYPE HTML>
<html>
<head>
	<title>Life of SoC | PROBE 2020</title>
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
				<li><a href="/about" class="scrolly">About us</a></li>
				<li><a href="/contact">Contact us</a></li>
			</ul>
		</nav>
		<h1 id="logo2020"><a href="/"><img src="/images/probe_p.png"></a></h1>
		<nav class="nav2020">
			<ul>
<li><a href="https://www.facebook.com/Probe.NITT/" target="_blank"><img src="/images/facebook.svg" alt="facebook"></a></li>
							<li><a href="https://www.instagram.com/probe.nitt/" target="_blank"><img src="/images/instagram.png" alt="instagram"></a></li>
							<li><a href="https://www.linkedin.com/company/probe-nit-trichy/"  target="_blank"><img src="/images/linkedin.svg" alt="linkedin"></a></li>				<li><a href="/sponsors">Sponsors</a></li>
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
			<h2><b>Workshops</b></h2>
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
				">Life of SoC</div>
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
			<p>Mobile devices are evolving from a means of communication to a pocket-sized PC, driven by increasing usage in the automation of industrial processes and connected network of objects. With the increasing number and complexity of tasks to be performed and a constraint to make the device as power-efficient as possible, it is useful to know from what features to consider for designing a SoC to its verification and testing. Probe 2020 presents “Life of SoC”, an opportunity to get a sneak peak into the world of SoC design from the resource persons of Qualcomm. Exclusive for students of NIT Trichy. </p>
			<!-- <header class="minor">
				<h3 class="subheader"><b>DETAILS</b></h3>
			</header>
											<ul>
												<li>Maximum of participants per team: 
													<ul style="list-style-type:none">
														<li><b>3</b></li>
													</ul>
												</li>
                                                <li>Workshop fee:
													<ul style="list-style-type:none">
														<li><b>Rs 2100 per team (10% discount till 17th Jan)</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>Two days</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>1st - 2nd February 2020</b></li>
													</ul>
						</li>
						<li>
							Limited Registrations.
						</li>
						<li>
							Students have to bring their own laptops.
						</li>
						</ul>
			<header class="minor">
				<h3 class="subheader"><b>FAQ</b></h3>
			</header>
			<ol>
				<li> <b>Should we have the basic knowledge about wireless communication? </b><br/>
					 Not necessary. You will be taught the basics of wireless communication.
				</li>
				<li> <b>Are laptops required? </b><br/>
					One laptop per team is required.
				</li>
				<li> <b>Is knowledge of coding compulsory? </b><br/>
					Not necessary. The basics of coding will be covered. 
				</li>
				<li> <b>Will you provide any compensation class if we miss any of the session? </b><br/>
				No compensation class will be provided. However the power point presentation will be given which can be referred.
				</li>
				<li> <b> Is it a certified course?</b> <br/>
				Yes. The participants will be given certificates from Probe on completion of the workshop.
				</li>
				<li> <b> Will the money be refunded if we miss the workshop in any case?</b> <br/>
				No. The money won't be refunded.
				</li>
				<li> <b> Can we pay you directly if we miss the deadline of payment in worst case?</b> <br/>
				No. The payments have to be done online. Only after the payment is done can the teams participate in the workshop. 
				</li>
				<li> <b> Is this limited to particular branch or year? </b><br/>
				No. Any undergraduate student from any year can participate.
				</li>
				<li> <b> What are the required software to be installed?</b> <br/>
				Arduino and OpenCV Python need to be installed. A detailed document will be released later regarding the installation process.
				</li>
			</ol> -->
			<!-- <h4>Participation certificate for all the participants making to the finals.</h4> -->
		</section>
	</div>
</div>

<div class=reg-button-wrapper><a href="" class="myButton">Only for NIT Trichy Students</a></div>
                                    
</div>
</div>

<!-- Footer -->
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
