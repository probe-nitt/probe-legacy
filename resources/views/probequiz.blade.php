<!DOCTYPE HTML>
<html>
	<head>
		<title>Probe Quiz | PROBE 2019</title>
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
							<h2><b>PROBE QUIZ</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section id="sidebar">
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
                                    <p>Do you pride yourself in your knowledge of Tronix-Trivia? Can you shout out the answer and get it right? There is a strategy behind every game. Come down with a strategy and be prepared to change it, as this event has a lot in store for you. Get prepared to be "shocked" by the intense competition and stay "grounded" enough to win it. Register yourself in teams of 2 and get ready for a thrilling experience at the PROBE quiz. Exciting prizes are up for grabs!</p>

                                    <h3>Prizes</h3>
                                    <ul>
                                        <li>Prizes worth 7000INR</li>
                                    </ul>
                                    
                                    <h3>Format</h3>
                                    <ul>
                                        <li>Probe Quiz will have two rounds – Prelims & Finals</li>
                                        <li>Participate as teams of two individuals</li>
                                        <li>Cross-college teams are allowed</li>
                                        <li>Prelims is a written round</li>
                                        <li>Top 8 teams will qualify for Finals</li>
                                    </ul>

                                    <h3>Rules</h3>
                                    <ul>
                                        <li>Participants should register on spot with their PROBE ID.</li>
                                        <li>Use of electronic gadgets for help is strictly prohibited</li>
                                        <li>Quiz Master’s decision will be final</li>
                                    </ul>
                                    <h3>Registration</h3>
                                    <p>On spot registration</p>
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