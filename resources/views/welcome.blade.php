<!DOCTYPE HTML> 
<html>
	<head>
		<title>PROBE 2020</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	<body class="is-preload landing">
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
			<!-- Banner -->
				<section id="banner2020">
				<!-- Footer -->
					<!-- <footer id="footer">
						<ul class="copyright">
							<li>&copy; PROBE 2020. All rights reserved.</li>
						</ul>
					</footer> -->
				</section>

		</div>

		<!-- Scripts -->
        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('js/browser.min.js') }}"></script>
        <script src="{{ asset('js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('js/main2020.js') }}"></script>

	</body>
</html>