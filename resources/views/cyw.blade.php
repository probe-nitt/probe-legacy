<!DOCTYPE HTML>
<html>
<head>
	<title>Hands on Bluetooth with CYW20719 and it's peripheral capabilities | PROBE 2022</title>
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
				">Hands on Bluetooth with CYW20719 and it's peripheral capabilities</div>
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
			<p>Have you ever wondered how Bluetooth works? Ever thought of writing a Bluetooth application on your own? Or are you one of those who're enthusiastic about a hands-on experience on Bluetooth technology? </p>
			<p>We, at Probe NIT Trichy, present to you the workshop <b>'Hands on Bluetooth with CYW20719 and its peripheral capabilities'</b> by <b>Cypress Semiconductors</b> where-in RF System-On-Chip’s (SoCs) are introduced, taught to the participants alongside teaching them the Basics of Bluetooth and BLE (Bluetooth Low Energy) concepts. The participants will be trained to write Bluetooth application on their own. </p>
			<p>What’s more exciting is that you will be given a hands-on experience with Cypress Semiconductors' <b>CYW20719 take-away kits worth 50$.</b></p>
			<header class="minor">
				<h3 class="subheader"><b>DETAILS</b></h3>
			</header>
											<ul>
												<li>Organizer: 
													<ul style="list-style-type:none">
														<li><b>Cypress Semiconductor</b></li>
													</ul>
												</li>
												<li>Maximum of participants per team: 
													<ul style="list-style-type:none">
														<li><b>3</b></li>
													</ul>
												</li>
                                                <li>Workshop fee:
													<ul style="list-style-type:none">
														<li><b>2700 per team</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>One day</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>1st February 2020</b></li>
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
				<li> <b>Does the workshop have any prerequisites? </b><br/>
					There are no prerequisites for the workshop. Any interested student can register for the workshop.
				</li>
				<li> <b>How should the payment be made for the workshop? </b><br/>
					Payment can be made online.
				</li>
				<li> <b> What are the required software to be installed?</b> <br/>
				<a href="/instructions/Cypress Instructions.pdf"> Click here </a> for detailed instructions about software to be installed. 
				</li>
				<li> <b>On what basis are workshop registrations confirmed? </b><br/>
					Registrations are confirmed after payment on first come first serve basis. Confirmation of your participation is subject to availability. 
				</li>
				<li> <b>Will the fees paid for the workshop be refunded in case I fail to attend the workshop? </b><br/>
					Fees once paid, is strictly non-refundable. Requests for refund will not be encouraged.
				</li>
				<li> <b>Will accommodation be provided?</b> <br/>
				Yes. We provide accommodation depending on the availability. You will have to register separately for that.
				</li>
			</ol>
			<!-- <h4>Participation certificate for all the participants making to the finals.</h4> -->
		</section>
	</div>
</div>
@if($regbool==0)
<div class=reg-button-wrapper><a href="/workshops/register?workshop=Hands%20on%20Bluetooth%20with%20CYW20719" class="myButton">Register</a></div>
                                            @endif
                                            @if($regbool==1 && $ispaid==0)
											<div class=reg-button-wrapper><a href="/workshops/register?workshop=Hands%20on%20Bluetooth%20with%20CYW20719" class="myButton">Pay and complete registration</a></div>
											@endif
											@if($regbool==1 && $ispaid==1)
											<div class=reg-button-wrapper><a href="" class="myButton">Registered</a></div>
                                            @endif
</div>
</div>

<!-- Footer -->
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
