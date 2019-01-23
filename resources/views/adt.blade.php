<!DOCTYPE HTML>
<html>
	<head>
		<title>Antenna Design and Testing | PROBE 2019</title>
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
							<h2><b>Antenna Design and Testing</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                					<!--TODO: chage logic-->
									<section id="sidebar">
										<section>
											@if($regbool==0)
											<a href="/workshops/register?workshop=Antenna%20Design%20and%20Testing" class="button primary fit">Register</a>
                                            @endif
                                            @if($regbool==1 && $ispaid==0)
											<a href="/workshops/register?workshop=Antenna%20Design%20and%20Testing" class="button primary fit">Pay and Complete registration</a>
											@endif
											@if($regbool==1 && $ispaid==1)
											<span class="button primary fit disabled">Registered</span>
                                            @endif
											<br/><br/>
										</section>

                                        <section>
											<h3>Details</h3>
											<ul>
												<li>Organizer: 
													<ul style="list-style-type:none">
														<li><b>Entuple Technologies</b></li>
													</ul>
												</li>
												<li>Maximum of participants per team: 
													<ul style="list-style-type:none">
														<li><b>2</b></li>
													</ul>
												</li>
                                                <li>Workshop fee:
													<ul style="list-style-type:none">
														<li><b>Rs 1500 per team</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>Two day</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>2nd & 3rd February 2019</b></li>
													</ul>
												</li>
												<li>Limited registrations.</li>
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
                                    <p>Ever wondered how ISRO and DRDO were able to attain the Pinnacle of Space Science and Technology? Are you one of those who ponder of how present day communication is at its fastest pace without any distractions? What are you waiting for then? Antenna Design from the highly excelled personnel is the reason. Dive into the ocean of Electromagnetics and Antenna design to master in antenna design and testing.</p>

                                    <p>This workshop from Entuple Technologies on HFSS EM field simulation software helps you design innovative industry standard antennas faster. Learn the latest techniques behind antenna design , its fabrication and measurements in this two day workshop. Participants will be provided with desktops along with the HFSS software provided by Entuple Technologies.</p>
                                    
                                    <h3>Course content :</h3>

                                    <p>
                                        Day 1 :
                                        <br/>1. HFSS Software Introduction.
                                        <br/>2. High Frequency Structural Simulation and Analysis Basics- Tool Flow.
                                        <br/>3. Design, Simulation of an Edge Feed Microstrip Patch Antenna in HFSS.
                                        <br/>4. Post-processing and Optimization of the Patch Antenna.
                                        <br/>5. Applications of HFSS.
                                    </p>

                                    <p>
                                        Day 2 :
                                        <br/>1. Learn the techniques behind measurements of an antenna. Hands on experience of testing of the fabricated antenna.
                                    </p>

                                    <p>No laptops are required.</p>
                                    <p>Certificate from Probe and company will be provided immediately after completion of your workshop.</p>

                                    <h3>FAQ:</h3>
                                    <p>
                                        1.Does the workshop have any prerequisites?
                                            <br/><br/>1.Does the workshop have any prerequisites? 
                                            <br>There are no prerequisites for the workshop. Any interested student can register for the workshop.
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
