<!DOCTYPE HTML>
<html>
<head>
	<title>Cryptech | PROBE 2019</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
	<link rel="stylesheet" href="{{ asset('css/workshops.css') }}"  />
	<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload" style="
background-image:url(../images/backract.png);">
<div id="page-wrapper">
	
	<!-- Header -->
	<header id="header" class="header2020 header2020-landing">
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
				<h2><b>CRYPTECH</b></h2>
			</header>
			<div class="row gtr-150">
				<div class="col-4 col-12-medium">
					
					<!-- Sidebar -->
					<section id="sidebar">
						<div class="workshopcontainer">
							<img src="https://delta.nitt.edu/images/deltaLogoGreen.png" alt="Snow" style="width:100%;">
					<div class="workshopcentered" style="
					font-size: xx-large;
					">INSERT IMAGE HERE</div>
				</div>
			</section>
			
		</div>
		<div class="col-8 col-12-medium imp-medium">
			
			<!-- Content -->
			<section id="content-workshops" style="
			/* Position: absolute; */
			height: 500px;
			overflow-y: scroll;">
			<header class="minor">
				<h3 class="subheader"><b>Description</b></h3>
			</header>
			<p>Fan of Dan Brown novels? Like to solve puzzles and unravel mysteries? Bring your partner along to put your encoding and decoding skills to the test with CRYPTECH, the puzzle and brain teaser event of Probe to win exciting prizes.</p>
			
			<header class="minor">
				<h3 class="subheader"><b>Prizes</b></h3>
			</header>
			<p>
				Cash prizes worth :
				<br/>First prize : 2500 INR
				<br/>Second prize : 1500 INR
				<br/>Third prize : 1000 INR
			</p>
			<header class="minor">
				<h3 class="subheader"><b>Format</b></h3>
			</header>
			<ul>
				<li>Cryptech will have two rounds – Prelims & Finals</li>
				<li>Participate as teams of two individuals</li>
				<li>Cross-college teams are allowed</li>
				<li>Prelims is a written round</li>
				<li>Top 8 teams will qualify for Finals</li>
			</ul>
			<header class="minor">
				<h3 class="subheader"><b>Rules</b></h3>
			</header>
			<ul>
				<li>Participants should register on spot with their PROBE ID.</li>
				<li>Use of electronic gadgets for help is strictly prohibited</li>
				<li>Quiz Master’s decision will be final</li>
			</ul>
			<h4>Participation certificate for all the participants making to the finals.</h4>
		</section>
		<a href="#" class="myButton">Register</a>
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
<script src="{{ asset('js/main2020.js') }}"></script>
</body>
</html>
