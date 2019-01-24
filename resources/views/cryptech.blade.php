<!DOCTYPE HTML>
<html>
	<head>
		<title>Cryptech | PROBE 2019</title>
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
							<h2><b>CRYPTECH</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Date and Time</h3>
											<p><b>2nd Feb 2019</b></p>
											<p>Prelims : <b>1pm-3pm</b></p>
											<p>Finals : <b>3:30pm-5:30pm</b></p>
											<p>Venue : <b>Orion S1</b></p>
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
                                    <p>Fan of Dan Brown novels? Like to solve puzzles and unravel mysteries? Bring your partner along to put your encoding and decoding skills to the test with CRYPTECH, the puzzle and brain teaser event of Probe to win exciting prizes.</p>

                                    <h3>Prizes</h3>
                                    <p>
										Cash prizes worth :
										<br/>First prize : 2500 INR
										<br/>Second prize : 1500 INR
										<br/>Third prize : 1000 INR
                                    </p>
                                    
                                    <h3>Format</h3>
                                    <ul>
                                        <li>Cryptech will have two rounds – Prelims & Finals</li>
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