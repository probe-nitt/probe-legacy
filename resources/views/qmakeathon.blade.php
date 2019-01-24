<!DOCTYPE HTML>
<html>
	<head>
		<title>Qualcomm Make-a-thon | PROBE 2019</title>
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
							<h2><b>Qualcomm Make-a-thon</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">
										<section>
											<span class="button primary fit disabled">Registration starting soon</span>
											<br/><br/>
										</section>

                                        <section>
											<h3>Important dates</h3>
											<ul>
												<li>Duration: 
													<ul style="list-style-type:none">
														<li><b>Three months</b></li>
													</ul>
												</li>
												<li>Release of problem statements:
													<ul style="list-style-type:none">
														<li><b>3rd Feb 2019, 5:30PM</b></li>
													</ul>
                                                </li>
											</ul>
										</section>

										<section>
											<h3>Contacts</h3>
											<p>Email: <b><a href="mailto:probe2019events@gmail.com">probe2019events@gmail.com</a></b></p>
											<p>Srivatsan : <b>9444741197</b></p>
											<p>Madhan : <b>9790381738</b></p>
										</section>
									</section>
							</div>
							<div class="col-8 col-12-medium imp-medium">

                            <!-- Content -->
                                <section id="content">
                                    <p>Our flagship event is back, bigger and better than ever before. The 27th edition of Probe in association with Qualcomm presents to you Makeathon 2019, an extraordinary career-defining opportunity just for the students of NIT Trichy!</p>

                                    <p>Form teams of up to <b>6 members</b> and get ready to build solutions for industry grade problems using Qualcomm's Atheros ath10k</p>
                                    
                                    <p>Problem statements will be released on 3rd February 2019 during Probe. Participants will be given 3 months' time to build their prototype, during which multiple development deadlines and eliminative rounds will take place. Development kits and mentoring will be provided by experts from Qualcomm to help students effectively build their solutions.</p>
                                    
                                    <p>The final presentation will be conducted at NIT Trichy in front of a panel of judges from Qualcomm.</p>
                                    
                                    <p><b>This event is open exclusively for NITT students.</b></p>

                                    <h3>Prizes</h3>
                                    <p>
										<br/>The winning team will be awarded six <b>Qualcomm Snapdragon powered smartphones</b>.
										<br/>Third year students will have a unique opportunity to get directly interviewed by Qualcomm in their <b>placement</b> season.
										<br/>Second years have exciting <b>internship</b> opportunities up for grabs.
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