<!DOCTYPE HTML>
<html>
	<head>
		<title>Probot | PROBE 2019</title>
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
							<h2><b>Probot</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">
										<section>
											@if($regbool==0)
											<a href="/workshops/register?workshop=Probot" class="button primary fit">Register</a>
                                            @endif
                                            @if($regbool==1 && $ispaid==0)
											<a href="/workshops/register?workshop=Probot" class="button primary fit">Pay and Complete registration</a>
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
														<li><b>Rs 3000 per team</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>Two days – 12 hours</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>2nd - 3rd February 2019</b></li>
													</ul>
                                                </li>
                                                <li>Every team must have atleast one laptop to participate in this workshop.</li>
                                                <li>Take away kit will be provided.</li>
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
                                    <p>Want to dive headlong into the amazing world of robotics but not sure where to start?</p>

                                    <p>Register now for the PRO-BOT workshop and build a mobile robot which can autonomously avoid obstacles in the path that it traverses and get our exclusive take-away kit!</p>
                                    
                                    <h3>Course content :</h3>

                                    <p>
                                        1.Introduction to basic coding and electronics.
                                        <br/>2.Basics of Microcontrollers
                                        <br/>3.Basics of Timers and Registers
                                        <br/>4. Basics of Interrupts 
                                        <br/>5. Basics of ADC 
                                        <br/>6. Fabrication of obstacle avoidance bot.

                                    </p>

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