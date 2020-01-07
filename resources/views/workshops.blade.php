<!DOCTYPE HTML>
<html>
	<head>
		<title>Workshops Registration | PROBE 2020</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<link rel="stylesheet" href="{{ asset('css/hexagon.css') }}"  />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
            <header id="header" class="header2020">
					<nav>
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/workshops">Workshops</a></li>
                            <li><a href="/events">Events</a></li>
							<li><a href="/about" class="scrolly">About us</a></li>
                            <li><a href="/contact">Contact us</a></li>							
						</ul>
					</nav>
					<h1 id="logo2020"><a href="/"><img src="/images/probe_p.png"></a></h1>
					<nav>
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
							<h2><b>Workshop registration</b></h2>
            </header>
						<ul id="hexGrid">
                        <li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											   <!-- <h1>Hello</h1> -->


										</div>
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											   <!-- <h1>Hello</h1> -->


										</div>
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
						
						</ul>
        </div>

      <!-- Footer
        <footer style="margin-bottom:0" id="footer">
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
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
