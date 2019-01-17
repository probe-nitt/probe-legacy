<!DOCTYPE HTML>
<html>
	<head>
		<title>Matrix | PROBE 2019</title>
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
							<h2><b>MATRIX</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">
										<section>
											@if($regbool==0)
											<a href="/events/register?event=Matrix" class="button primary fit">Register</a>
											@endif
											@if($regbool==1)
											<span class="button primary fit disabled">Registered</span>
											@endif
											<br/><br/>
										</section>

                                        <section>
											<h3>Important dates</h3>
											<ul>
												<li>Registration: 
													<ul style="list-style-type:none">
														<li><b>From 17th January 2019</b></li>
													</ul>
												</li>
                                                <li>Deadline for questionnaire submission:
													<ul style="list-style-type:none">
														<li><b>29th January 2019</b></li>
													</ul>
												</li>
												<li>Shortlist announcement:
													<ul style="list-style-type:none">
														<li><b>30th January 2019</b></li>
													</ul>
												</li>
												<li>Finals:
													<ul style="list-style-type:none">
														<li><b>2nd - 3rd February 2019</b></li>
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
                                    <p>Are you one of those for whom array indexing starts at 1? Do you know what to do when there is a "dimension mismatch" or when your "index exceeds matrix dimension"? Come join the tribe to show your command over MATLAB with Matrix, a programming contest for all the MATLAB enthusiasts out there. Matrix tests your ability to skilfully implement algorithms and code your way to glory.</p>

                                    <h3>Prizes</h3>
                                    <p>
										Cash prizes worth :
										<br/>First prize : 4000 INR
										<br/>Second prize : 3000 INR
										<br/>Third prize : 2000 INR
										<br/>And Goodies worth 1000 INR.
                                    </p>
                                    
                                    <h3>Format</h3>

                                    <p>
                                        Step 1: Register with a maximum of 2 members per team at probe.org.in/events/matrix Questionnaire will be sent to the registered email ID.
                                        <br/>Step 2:Submit the codes answers to the questionnaire before the deadline via email
                                        <br/>Step 3:Shortlisted teams will have finals during Probe 2019 at NIT Trichy. Finals will involve a MATLAB coding round. Problem Statement will be announced on spot.
                                    </p>

                                    <h3>Rules</h3>
                                    <ul>
                                        <li>Maximum of 2 members per team.</li>
                                        <li>For the prelims, submission of codes and answers to the questionnaire is compulsory.</li>
                                        <li>Mail the codes and answers to the questionnaire to the given email id as word doc/PDF with <code>“Matrix_<'team name'>_<'college name'>”</code> as the subject. Also mention the names and Probe IDs of the team members in the mail. </li>
                                        <li>Only one submission permitted per team.</li>
                                    </ul>
									<h4>Participation certificate for all the participants</h4>
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