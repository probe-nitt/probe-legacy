<!DOCTYPE HTML>
<html>
	<head>
		<title>Event Registration | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<link rel="stylesheet" href="{{ asset('css/hexagon.css') }}"  />
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
							<h2><b>Event registration</b></h2>
            </header>
						<ul id="hexGrid">
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">

												Hello World

										</div>
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
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
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p>Event desc and other stuff</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:red;">
										<!-- <img src="" alt="Event1" /> -->
										<h1>Event</h1>
										<p style="color:white;">Event desc and other stuff</p>
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
