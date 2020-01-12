<!DOCTYPE HTML>
<html>
	<head>
		<title>Event Registration | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
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
							<li><a href="/register"><img src="/images/facebook.svg" alt="facebook"></a></li>
							<li><a href="/register"><img src="/images/instagram.png" alt="instagram"></a></li>
							<li><a href="/register"><img src="/images/linkedin.svg" alt="linkedin"></a></li>
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
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Event #3

										</div>
										<h1>Event #3</h1>
										<p>Coming soon!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Event #4

										</div>
										<h1>Event #4</h1>
										<p>Coming soon!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Event #5

										</div>
										<h1>Event #5</h1>
										<p>Coming soon!</p>
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
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Event #6

										</div>
										<h1>Event #6</h1>
										<p>Coming soon!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Event #7

										</div>
										<h1>Event #7</h1>
										<p>Coming soon!</p>
									</a>
								</div>
							</li>

						</ul>
        </div>

      <!-- Footer -->
        <footer style="margin-bottom:0" id="footer">
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
