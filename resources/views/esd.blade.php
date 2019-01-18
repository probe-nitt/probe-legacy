<!DOCTYPE HTML>
<html>
	<head>
		<title>Embedded System Design using CC3200 - IoT | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
                    <h1 id="logo"><a href="/"><img width="100px" style="margin-top: 10px;" src="/images/whitelogo.png"></a></h1>
					<nav id="nav">
						<ul>
                            <li><a href="/events">Events</a></li>
                            <li><a href="/workshops">Workshops</a></li>
							<li><a href="/sponsors">Sponsors</a></li>
                            <li><a href="/contact">Contact us</a></li>
							@if ($name = session('name'))
							<li>{{ $name }}</li>
							<li><a href="/logout" class="button primary">Log out</a></li>
                        	@endif
							@if (!session('name'))
							<li><a href="/register" class="button primary">Register</a></li>
							<li><a href="/login" class="button primary">Log in</a></li>
                        	@endif
							
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><b>Embedded System Design using CC3200 - IoT</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">
                                        <section>
											@if($regbool==0)
											<a href="/workshops/register?workshop=Embedded%20System%20Design%20using%20CC3200%20-%20IoT" class="button primary fit">Register</a>
                                            @endif
                                            @if($regbool==1 && $ispaid==0)
											<a href="/workshops/register?workshop=Embedded%20System%20Design%20using%20CC3200%20-%20IoT" class="button primary fit">Pay and Complete registration</a>
											@endif
											@if($regbool==1 && $ispaid==1)
											<span class="button primary fit disabled">Registered</span>
                                            @endif
											<br/><br/>
										</section>

                                        <section>
											<h3>Details</h3>
											<ul>
												<li>Maximum of participants per team: 
													<ul style="list-style-type:none">
														<li><b>3</b></li>
													</ul>
												</li>
                                                <li>Workshop fee:
													<ul style="list-style-type:none">
														<li><b>Rs 2700 per team</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>Two days - 12 hours</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>2nd and 3rd February 2019</b></li>
													</ul>
												</li>
											</ul>
										</section>

										<section>
											<h3>Contacts</h3>
											<p>Rajkiran : <b>+91 9441310986</b></p>
											<p>Srikanth : <b>+91 8309847277</b></p>
										</section>
									</section>
							</div>
							<div class="col-8 col-12-medium imp-medium">

                            <!-- Content -->
                                <section id="content">
                                    <p>Organizer : <b>Texas Instruments</b></p>

                                    <p> 
                                        Internet of Things is becoming ubiquitous with edge sensor nodes getting more and more intelligent, capable to transmit information directly to a cloud and get controlled/actuated from the cloud..
                                        <br/>This hands-on workshop covers the architecture of TI CC3200, which is a wireless micro controller and first in the industry to evolve into a single microcontroller programmable to wireless connectivity(Wi-Fi).
                                        <br/>The workshop is tailored to meet the need of engineering students to get very good exposure to internet enabled systems and their applications.
                                    </p>

                                    <p>Each team should have at least one laptop.</p>

                                    <h3>Laptop requirements :</h3>
                                    <p>
                                        Laptop requirements :
                                        <br/>1. OS with Windows 7 and above
                                        <br/>2. Minimum 1GB RAM
                                        <br/>3.Minimum disk space of 2GB(4GB recommended).
                                        <br/>4.Smart Phone with a data pack.
                                    </p>
                                    
                                    <h3>Course content :</h3>

                                    <p>
                                        1.Overview of IoT and it's Applications.
                                        <br/>2.HTTP web server
                                        <br/>3.Embedded System using ENERGIA ide
                                        <br/>4.Wireless Sensor Networks using sub 1GHz and Msp430 G2.
                                        <br/>5.Web server - Wifi
                                        <br/>6.Cloud Application - IBM cloud
                                        <br/>7.Cloud Application - eclipse.org
                                        <br/>8. Cloud Application - Thingspeak cloud
                                    </p>

                                    <p>Key takeaways :  A very good understanding of Embedded Systems - IoT and it's exploding applications.</p>
                                </section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; PROBE 2019. All rights reserved.</li>
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
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>
	</body>
</html>