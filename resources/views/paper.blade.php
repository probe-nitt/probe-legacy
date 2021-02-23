<!DOCTYPE HTML>
<html>
	<head>
		<title>Paper Presentation | PROBE 2021</title>
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
							<h2><b>PAPER PRESENTATION</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Important dates</h3>
											<ul>
												<li>Last date for Paper Submission (extended): 
													<ul style="list-style-type:none">
														<li><b>27th January 2021</b></li>
													</ul>
												</li>
												<li>Notification of Acceptance:
													<ul style="list-style-type:none">
														<li><b>29th January 2021</b></li>
													</ul>
												</li>
												<li>Final paper submission:
													<ul style="list-style-type:none">
														<li><b>31st January 2021</b></li>
													</ul>
												</li>
												<li>Event Date:
													<ul style="list-style-type:none">
														<li><b>3rd February 2021, 9AM - 12PM</b></li>
														<li>Venue : <b>Orion S3</b></li>
													</ul>
												</li>
											</ul>
										</section>
										<hr />
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
										<p>A spark in any human's mind is priceless, as it has the potential to conquer the entire cosmos. And if that person is an engineer, there's certainly no stopping them. If you have an idea that you think could revolutionise the current electronics and communication research scenario, where better to debut them than at Probe! The Paper Presentation event is here to be a platform to convert your ideas into reality, and you can showcase your practical knowledge and win exciting prizes.</p>

										<p>Maximum of 3 members per team.</p>
										<h3>Prizes</h3>
										<p>
										Prizes and Goodies worth 8000 INR for Top three teams.
										</p>

										<h3>Topics</h3>
										<ul>
											<li>Integrated Circuits and VLSI</li>
											<li>Embedded Systems</li>
											<li>Computer Architecture</li>
											<li>Signal & Image Processing</li>
											<li>Machine Learning</li>
											<li>Robotics & Control</li>
											<li>Networking</li>
											<li>Telecommunications</li>
										</ul>

										<h3>Guidelines for Paper Submission</h3>
										<p>
										Prospective authors are invited to submit papers reporting original unpublished research and recent developments in the topics related to the event. All papers should strictly comply with the standard IEEE camera-ready format (IEEE standard format, double column, and 10-point font). Submissions must include title, abstract, keywords, author and affiliation with email address.
										</p>
										<p>
										The IEEE templates can be found at:
										<a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html">here</a>
										</p>
										<p>
										Send the soft copy of camera ready paper in PDF and WORD format to
										<a href="mailto:probe2019events@gmail.com">probe2019events@gmail.com</a> with <code>Paper_<'author_name'>_<'college_name'></code> as the subject.
										</p>
										<p>
										Shortlisted students will have finals during Probe2021 at NIT-Trichy, where they can present their papers in the form of Power point presentation.
										</p>
										<h4>Participation certificate for all the participants</h4>
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