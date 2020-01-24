<!DOCTYPE HTML>
<html>
	<head>
		<title>Sponsors | PROBE 2020</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		@if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
		@endif
		@if (!session('name'))
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		@endif
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header" class="header2020">
					<nav class="nav2020">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/workshops">Workshops</a></li>
                            <li><a href="/events">Events</a></li>
							<li><a href="/lectures">Lectures</a></li>
                            <li><a href="/contact">Contact us</a></li>							
						</ul>
					</nav>
					<h1 id="logo2020"><a href="/"><img src="/images/probe_p.png"></a></h1>
					<nav class="nav2020">
						<ul>
							
			<li><a href="https://www.facebook.com/Probe.NITT/" target="_blank"><img src="/images/facebook.svg" alt="facebook"></a></li>
							<li><a href="https://www.instagram.com/probe.nitt/"" target="_blank"><img src="/images/instagram.png" alt="instagram"></a></li>
							<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" " target="_blank"><img src="/images/linkedin.svg" alt="linkedin"></a></li>							<li><a href="/sponsors">Sponsors</a></li>
							@if ($name = session('name'))
							<li>{{ $name }}</li>
							<li><a href="/logout" class="button primary">Log out</a></li>
                        	@endif
							@if (!session('name'))
							<li><a href="/register">Sign up</a></li>
							<li><a href="/login">Log in</a></li>
                        	@endif
						</ul>
					</nav>
				</header>


			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><b>Probe 2020 Sponsors</b></h2>
                        </header>
                        <!--p style="text-align: center;">Coming Soon</p-->
                        <div style="margin:auto; text-align: center; justify-content: center;" class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
                            	<p style="text-align: center; font-weight:bold;">Title sponsor</p>
                                <img style="max-width:350px" src="/images/qualcommlogo.png">
                            </div>
                        </div>

                        <div style="margin:auto; text-align: center; justify-content: center;" class="row gtr-uniform gtr-50">
                            <div class="col-12 col-24-xsmall">
                            	<p style="text-align: center; font-weight:bold;">Workshop associates</p>
                                <div class="row gtr-uniform">
	                                <section class="col-4 col-6-medium col-12-xsmall">
	                                    <img style="max-width:250px" src="/images/cypresslogo.png">
	                                </section>
	                                <section class="col-4 col-6-medium col-12-xsmall">
	                                    <img style="max-width:250px" src="/images/nationalinstruments.png">
	                                </section>
	                                <section class="col-4 col-6-medium col-12-xsmall">
	                                    <img style="max-width:250px" src="/images/entuplelogo.png">
	                                </section>
                        		</div>
                            </div>
						</div>

						<div style="margin:auto; text-align: center; justify-content: center;" class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
								<p style="text-align: center; font-weight:bold;">Media Partner</p>
								<section class="col-4 col-6-medium col-12-xsmall">
	                                    <img style="max-width:250px" src="/images/efylogo.jpg">
	                            </section>
                            </div>
                        </div>
						
						<div style="margin:auto; text-align: center; justify-content: center;" class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
								<p style="text-align: center; font-weight:bold;">Ticketing Partner</p>
								<section class="col-4 col-6-medium col-12-xsmall">
	                                    <img style="max-width:250px" src="/images/tcflogo.png">
	                            </section>
                            </div>
                        </div>

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; PROBE 2020. All rights reserved.</li>
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
            <script src="{{ asset('js/main2020.js') }}"></script>
	</body>
</html>
