<!DOCTYPE HTML>
<html>
	<head>
		<title>System on Chip using Atheros ath10k | PROBE 2021</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		@if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
		@endif
		@if (!session('name'))
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		@endif
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
							<h2><b>System on Chip using Atheros ath10k</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                					<!--TODO: chage logic-->
									<section id="sidebar">
										<section>
											@if($regbool==0)
											<a href="/workshops/register?workshop=System%20on%20Chip%20using%20Atheros%20ath10k" class="button primary fit">Register</a>
                                            @endif
                                            @if($regbool==1 && $ispaid==0)
											<a href="/workshops/register?workshop=System%20on%20Chip%20using%20Atheros%20ath10k" class="button primary fit">Pay and Complete registration</a>
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
														<li><b>Qualcomm</b></li>
													</ul>
												</li>
												<li>Maximum of participants per team: 
													<ul style="list-style-type:none">
														<li><b>3</b></li>
													</ul>
												</li>
                                                <li>Workshop fee:
													<ul style="list-style-type:none">
														<li><b>Rs 1500 per team</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>One day</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>3rd February 2021</b></li>
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
                                    <p>Ever wondered how WiFi is connected to your laptops and enrages you at distractive speeds? Highly accurate WiFi drivers are the reason. Learn the latest System on Chip design on open source ath10k WiFi chipsets from Qualcomm Atheros.</p>

                                    <p>This one day workshop provides you the exclusive opportunity to learn about the life cycle of System on Chip and Machine learning applications in ath10k WiFi networks from the highly experienced personnel of Qualcomm.</p>
                                    
                                    <h3>Course content :</h3>

                                    <p>
                                        1.Lifecycle of System on Chip(SoC).
                                        <br/>2.Opensource on Qualcomm Atheros ath10k chipset.
                                        <br/>3.Machine learning applications on SoC.
                                        <br/>4.SoC - WiFi Networks.
                                       <b/>Each team should have atleast one laptop.
                                    </p>

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
						<li>&copy; PROBE 2021. All rights reserved.</li>
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
