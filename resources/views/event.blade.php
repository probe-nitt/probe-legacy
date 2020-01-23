<!DOCTYPE HTML>
<html>
	<head>
		<title>Event Registration | PROBE 2020</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		@if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
		@endif
		@if (!session('name'))
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		@endif
		<link rel="stylesheet" href="{{ asset('css/hexagon.css') }}"  />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
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
							<li><a href="/about" class="scrolly">About us</a></li>
                            <li><a href="/contact">Contact us</a></li>							
						</ul>
					</nav>
					<h1 id="logo2020"><a href="/"><img src="/images/probe_p.png"></a></h1>
					<nav class="nav2020">
						<ul>
							
							<li><a href="https://www.facebook.com/Probe.NITT/" target="_blank"><img src="/images/facebook.svg" alt="facebook"></a></li>
							<li><a href="https://www.instagram.com/probe.nitt/"" target="_blank"><img src="/images/instagram.png" alt="instagram"></a></li>
							<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" " target="_blank"><img src="/images/linkedin.svg" alt="linkedin"></a></li>							
							<li><a href="/sponsors">Sponsors</a></li>
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
							<h2><b>Event registration</b></h2>
            </header>
						<ul id="hexGrid">
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/ideathon" style="background-color:red;">
										<img src="/images/ideathon.png" alt="Event1" />
										<div class="hexagon-content">
										</div>
										<h1>Qualcomm Ideathon</h1>
										<p>Submit your ideas and win exciting prizes from Qualcomm!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/matrix" style="background-color:red;">
										<img src="/images/matrix.png" alt="Matrix" />
										<div class="hexagon-content">

										</div>
										<h1>Matrix</h1>
										<p>The MATLAB coding contest</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/quizzardo" style="background-color:red;">
										<img src="/images/quizzardo.png" alt="Event1" />
										<div class="hexagon-content">
											   <!-- <h1>Hello</h1> -->


										</div>
										<h1>Quizzardo</h1>
										<p>Quizzing event for 1st years</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/tronics" style="background-color:red;">
										<img src="/images/tronix.png" alt="tronICs" />
										<div class="hexagon-content">

										</div>
										<h1>tronICs</h1>
										<p>Develop a prototype for a problem statement given on the spot!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/probequiz" style="background-color:red;">
										<img src="/images/probequiz.png" alt="Probe Quiz" />
										<div class="hexagon-content">

										</div>
										<h1>Probe Quiz</h1>
										<p>Quizzing event during Probe'20</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/cryptech" style="background-color:red;">
										<img src="/images/cryptech.png" alt="Event1" />
										<div class="hexagon-content">


										</div>
										<h1>Cryptech</h1>
										<p>A cryptic puzzle event</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/quizzical" style="background-color:red;">
										<img src="/images/quizzical.png" alt="Event1" />
										<div class="hexagon-content">

										</div>
										<h1>Quizzical</h1>
										<p>A non-technical quiz event</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/bullseye" style="background-color:red;">
										<img src="/images/bullseye.png" alt="Event1" />
										<div class="hexagon-content">
											   <!-- <h1>Hello</h1> -->


										</div>
										<h1>Bullseye</h1>
										<p>An online treasure hunt event</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/luckydraw" style="background-color:red;">
										<img src="/images/luckydraw.png" alt="Event1" />
										<div class="hexagon-content">
											   <!-- <h1>Hello</h1> -->


										</div>
										<h1>Lucky Draw</h1>
										<p>A special 100 DTG event</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/events/probeit" style="background-color:red;">
										<img src="/images/probeit.png" alt="Event1" />
										<div class="hexagon-content">
											   <!-- <h1>Hello</h1> -->


										</div>
										<h1>Probe It!</h1>
										<p>Online quizzing event of Probe 2020</p>
									</a>
								</div>
							</li>


						</ul>
        </div>

      <!-- Footer -->
        <!-- <footer style="margin-bottom:0" id="footer">
          <ul class="copyright">
            <li>&copy; PROBE 2019. All rights reserved.</li>
          </ul>
        </footer> -->

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
