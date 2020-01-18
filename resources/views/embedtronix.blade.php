<!DOCTYPE HTML>
<html>
	<head>
		<title>Embedtronix | PROBE 2019</title>
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
							<h2><b>EMBEDTRONIX</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">
										<section>
											@if($regbool==0)
											<span class="button primary fit disabled">Registration closed</span>
											<!--a href="/events/register?event=Embedtronix" class="button primary fit">Register</a-->
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
												<li>Deadline for abstract/video submission:
													<ul style="list-style-type:none">
														<li><b>28th January 2019</b></li>
													</ul>
                                                </li>
                                                <li>Deadline for questionnaire completion:
													<ul style="list-style-type:none">
														<li><b>28th January 2019</b></li>
													</ul>
												</li>
												<li>Shortlist announcement:
													<ul style="list-style-type:none">
														<li><b>30th January 2019</b></li>
													</ul>
												</li>
												<li>Finals:
													<ul style="list-style-type:none">
														<li><b>2nd February : 9:00 A.M - 1:00 P.M</b></li>
														<li><b>Venue : Silver Jubilee Building - Ground Floor</b></li>
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
                                    <p>Are you intrigued about designing circuits? Do you fantasize to change the world with a breadboard? Probe, NIT Trichy presents Embedtronix – a circuit design event, where you can build your own circuits for interesting real-life scenarios using ICs.</p>

                                    <h3>Prizes</h3>
                                    <p>
										Cash prizes worth :
										<br/>First prize : 8500 INR
										<br/>Second prize : 6300 INR
										<br/>Third prize : 5200 INR

									</p>
                                    
                                    <h3>Format</h3>

                                    <p>
                                        Step1: Register with a maximum of 3 members per team at probe.org.in/events/embedtronix Questionnaire will be sent to the registered email ID.
                                        <br/>Step2: Submit the abstract/video of the task and answers to the questionnaire before the deadline via email to <b><a href="mailto:probe2019events@gmail.com">probe2019events@gmail.com</a></b>
                                        <br/>Step3: Shortlisted teams will have finals during Probe 2019 at NIT-Trichy. Finals will involve a new task. Problem Statement will be announced on spot. Components will be given to build the circuit.
                                    </p>

                                    <h3>Rules</h3>
                                    <ul>
                                        <li>Maximum of 3 members per team.</li>
                                        <li>For the prelims, submission of the task is compulsory along with the answers to the questionnaire, with maximum weightage is given to the task.</li>
                                        <li>Mail the abstract for the task along with the answers to the questionnaire to <b><a href="mailto:probe2019events@gmail.com">probe2019events@gmail.com</a></b> with <code> “Embedtronix_<'team_name'>_<'college_name'>” </code> as the subject. Also mention the names and Probe IDs of the team members in the mail.</li>
                                        <li>BONUS: Post a working video demonstration for the task on YouTube and title it as <code>“Probe2019Embedtronix Task<'team name'>”</code>. Paste the link to the YouTube Video in the document to be mailed to us.</li>
                                        <li>Strictly no use of microcontrollers/microprocessors/other programmable devices.</li>
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