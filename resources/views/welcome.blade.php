<!DOCTYPE HTML> 
<html>
	<head>
		<title>PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">PROBE</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
                            <li><a href="#two">Events</a></li>
                            <li><a href="#three">Workshops</a></li>
                            <li><a href="#four">Tech Talks</a></li>
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

			<!-- Banner -->
				<section id="banner">
					
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
                                        <h2>ABOUT PROBE</h2>
                                        <p><i>“You imagine what you desire, you will what you imagine, and at last you create what you will”</i><br> -George Bernard Shaw.</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Engineering has been the natural form of expression for creators over the past century, breathing life and inspiration into the human race. To defy convention, to change age-old perceptions and to capture the pulse of today’s crowd, a new breed of engineers that can think out of the widely-quoted 'box' is required. This has been the crux of Probe, the genre-defining symposium conducted by the Electronics and Communication Department of NIT Trichy.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Probe had its modest beginnings in 1992 as a way for the electronics buffs all over the country to exchange ideas and has now grown into a techathlon that boasts participation from not only Indian students, but also those in the Gulf, Singapore, Japan and Europe to name a few.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic04.png" alt="" /></span>
					<div class="content">
						<header>
							<h2>EVENTS</h2>
						</header>
						<p>Gear up your competitive spirit to prove your prowess in engineering! With 7+ events that cover every aspect of the domain, there is something for everyone to participate in and win exciting rewards!</p>
						<ul class="actions">
							<li><a href="/events" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>WORKSHOPS</h2>
						</header>
						<p>The best way to learn anything new is by doing. With the guidance of industry experts and takeaway kits, Probe Workshops are the best way to acquire your next set of marketable skills!</p>
						<ul class="actions">
							<li><a href="#" class="button">Coming soon</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
                </section>
                
                <section id="four" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic05.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>TECH TALKS</h2>
						</header>
						<p>The first step towards success is by learning from  the lives of stalwarts. Probe's series of tech talks features accomplished academic and industry personnel whose scintillating words are sure to inspire and uplift you!</p>
						<ul class="actions">
							<li><a href="#" class="button">Coming soon</a></li>
						</ul>
					</div>
				</section>

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