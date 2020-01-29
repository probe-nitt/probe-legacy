<!DOCTYPE HTML>
<html>
<head>
	<title>Makeathon - Embedded Electronics | PROBE 2020</title>
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
				">Makeathon - Embedded Electronics</div>
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
			<p>Electronics and Communication Engineering is an eclectic mix of varied domains, each complementing and improving one another. Probe brings to you a workshop on embedded electronics, which is sure to enlighten you on microcontrollers and electronics. Learn the basics in the teaching session and put them to test with the on-spot problem statement! </p>
			<header class="minor">
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
														<li><b>Rs 1200 per team</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>One day</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>2nd February 2020</b></li>
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
				<li> <b>Are there any prerequisites?</b><br/>
					The basics of Electronics and microcontroller will be covered in the session. So it's not required.
				</li>
				<li> <b>What is the format of the workshop? </b><br/>
					The first session will be teaching session which will be followed by a hackathon session in which the participants need to solve the on spot problem statement. 
				</li>
				<li> <b> What are the required software to be installed?</b> <br/>
				<a href="/instructions/Makeathon Instructions.pdf"> Click here </a> for detailed instructions about software to be installed. 
				</li>
				<li> <b>Will accommodation be provided? </b><br/>
					Yes it will be. You have to register separately for that.
				</li>
				<li> <b>Are laptops required?</b><br/>
					Yes. One laptop per team is required.
				</li>
				<li> <b> How should the workshop fee be paid? And will the fee be refunded incase I fail to attend?</b> <br/>
				It should be paid online.  Fees once paid is strictly non-refundable. Requests for refund will not be encouraged.
				</li>
				<li> <b> Will certificates be provided?</b> <br/>
					Yes they will be.
				</li>
			</ol>
			<!-- <h4>Participation certificate for all the participants making to the finals.</h4> -->
		</section>
	</div>
</div>
@if($regbool==0)
<div class=reg-button-wrapper><a href="/workshops/register?workshop=Makeathon%20-%20Embedded%20Electronics" class="myButton">Register</a></div>
                                            @endif
                                            @if($regbool==1 && $ispaid==0)
											<div class=reg-button-wrapper><a href="/workshops/register?workshop=Makeathon%20-%20Embedded%20Electronics" class="myButton">Pay and complete registration</a></div>
											@endif
											@if($regbool==1 && $ispaid==1)
											<div class=reg-button-wrapper><a href="" class="myButton">Registered</a></div>
                                            @endif
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
