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
                            <li><a href="/techtalk">Tech Talks</a></li>
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
							<h2><b>High Efficiency Wi-Fi Technology: IEEE 802.11ax</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">

                                        <section>
											<h3>Details</h3>
											<ul>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>3rd February 2019, 5:30PM</b></li>
													</ul>
                                                </li>
                                                <li>Venue : 
													<ul style="list-style-type:none">
														<li><b>A2 Hall</b></li>
													</ul>
                                                </li>
                                                
											</ul>
										</section>
									</section>
							</div>
							<div class="col-8 col-12-medium imp-medium">

                            <!-- Content -->
                                <section id="content">
                                    <p>The use of Wi-Fi Technology  in homes, large campuses and enterprises is becoming inevitable day by day. Number of WiFi devices per unit area and data consumption per WiFi device grow largely with time which demands a redesign of Wi-Fi systems as the conventional Wi-Fi technologies had concentrated only on the peak data rates but not on the large number of users/devices.</p>

                                    <p>IEEE 802.11 ax Wi-Fi technology addresses this high density usage scenarios by having several technological changes in  physical layer and medium access control layer such as Orthogonal Frequency Division Multiple Access (OFDMA), Mulituser-Multiple Input Multiple Output (MU-MIMO), Longer OFDM symbol, Uplink resource allocation, Basic Service Set (BSS) Coloring, etc.</p>
                                    
                                    <p>This talk will highlight these technology building blocks for high efficiency WiFi operations in dense scenarios. We will also discuss several new use cases that are catered by IEEE 802.11ax networks.</p>
                                    
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