<!DOCTYPE HTML>
<html>
	<head>
		<title>IoT Training using PSoC | PROBE 2019</title>
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
							<h2><b>IoT Training using PSoC</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">
                                        <section>
											@if($regbool==0)
											<a href="/workshops/register?workshop=IoT%20Training%20using%20PSoC" class="button primary fit">Register</a>
                                            @endif
                                            @if($regbool==1 && $ispaid==0)
											<a href="/workshops/register?workshop=IoT%20Training%20using%20PSoC" class="button primary fit">Pay and Complete registration</a>
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
														<li><b>Rs 2100 per team</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>One day - 6 hours</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>2nd February 2019</b></li>
													</ul>
												</li>
											</ul>
										</section>

										<section>
											<h3>Contacts</h3>
											<p>Srikanth : <b>+91 8309847277</b></p>
											<p>Rajkiran : <b>+91 9441310986</b></p>
										</section>
									</section>
							</div>
							<div class="col-8 col-12-medium imp-medium">

                            <!-- Content -->
                                <section id="content">
                                    <p>Organizer : <b>Cypress Semiconductors</b></p>

                                    <p> 
                                        Play with Internet of Things using Cypress Semiconductors' upbeat CY8CKIT-042-BLE PSoC 4 BLE Pioneer Kit 
                                        <br/>PSoC 4 bridges the gap between expensive, power hungry application processors and low‑performance microcontrollers (MCUs).
                                        <br/>The ultra‑low‑power PSoC BLE(Bluetooth low energy) MCU architecture offers the processing performance needed by IoT devices, eliminating the tradeoffs between power and performance.
                                    </p>

                                    <p>Each team should have at least one laptop.</p>
                                    
                                    <h3>Course content :</h3>

                                    <p>
                                        1. Introduction to PSoC 4 BLE
                                        <br/>2. PSoC Sub-System, PWM Blinky
                                        <br/>3.IoT Sensor based system design – BLE Find Me
                                        <br/>4.CapSense design with BLE connectivity – Buttons and Sliders.
                                    </p>

                                    <p>Key takeaways : An over whelming hands on experience on PSoc 4 Low power Bluetooth and it's bombarding applications.</p>
                                    <p>Certificate from Probe and company will be provided immediately after completion of your workshop.</p>

                                    <h3>FAQ:</h3>
                                    <p>
                                        1.Does the workshop have any prerequisites?
                                            <br/>There are no prerequisites for the workshop. Any interested student can register for the workshop.
                                            <br/><br/>2.How should the payment be made for the workshop?
                                            <br/>Payment can be made online.
                                            <br/><br/>3.On what basis are workshop registrations confirmed?
                                            <br/>Registrations are confirmed after payment on first come first serve basis. Confirmation of your participation is subject to availability.
                                            <br/><br/>4.Will the fees paid for the workshop be refunded in case I fail to attend the workshop?
                                            <br/>Fees once paid, is strictly non-refundable. Requests for refund will not be encouraged.
                                            <br/><br/>5. Will accommodation be provided?
                                            <br/>Yes. We provide accommodation depending on the availability. You will have to register separately for that.
                                    </p>
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