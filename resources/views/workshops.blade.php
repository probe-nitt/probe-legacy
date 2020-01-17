<!DOCTYPE HTML>
<html>
	<head>
		<title>Workshops Registration | PROBE 2020</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<link rel="stylesheet" href="{{ asset('css/hexagon.css') }}"  />
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
							<li><a href="/about" class="scrolly">About us</a></li>
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
							<h2><b>Workshop registration</b></h2>
            </header>
						<ul id="hexGrid">
                        <li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/workshops/probot" style="background-color:blue;">
										<img src="/images/w2.jpeg"/>
										<div class="hexagon-content">


										</div>
										<h1>Probot</h1>
										<p>Gesture Controlled IoT Based Smart Lock System</p>
										<!-- <h1>Workshop #1</h1>
										<p>Coming soon!</p> -->
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="/workshops/cyw" style="background-color:blue;">
										<img src="/images/w1.png"/>
										<div class="hexagon-content">
										</div>
										<h1>Hands On Bluetooth with CYW20719</h1>
										<p>Write a Bluetooth application on your own. </p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Workshop #3
										</div>
										<h1>Workshop #3</h1>
										<p>Coming soon!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Workshop #4
										</div>
										<h1>Workshop #4</h1>
										<p>Coming soon!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Workshop #5
										</div>
										<h1>Workshop #5</h1>
										<p>Coming soon!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Workshop #6
										</div>
										<h1>Workshop #6</h1>
										<p>Coming soon!</p>
									</a>
								</div>
							</li>
							<li class="hex">
								<div class="hexIn">
									<a class="hexLink" href="#" style="background-color:blue;">
										<!-- <img src="" alt="Event1" /> -->
										<div class="hexagon-content">
											Workshop #7
										</div>
										<h1>Workshop #7</h1>
										<p>Coming soon!</p>
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
    <script src="{{ asset('js/main2020.js') }}"></script>
  </body>
</html>
