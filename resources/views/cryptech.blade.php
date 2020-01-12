<!DOCTYPE HTML>
<html>
<head>
	<title>Cryptech | PROBE 2019</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{ asset('css/workshops.css') }}"  />
	<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
	<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	<style media="screen">
	.hexagon {
  position: relative;
  width: 300px;
  height: 173.21px;
  margin: 86.60px 0;
  background-image: url(https://csshexagon.com/img/meow.jpg);
  background-size: auto 346.4102px;
  background-position: center;
}

.hexTop,
.hexBottom {
  position: absolute;
  z-index: 1;
  width: 212.13px;
  height: 212.13px;
  overflow: hidden;
  -webkit-transform: scaleY(0.5774) rotate(-45deg);
  -ms-transform: scaleY(0.5774) rotate(-45deg);
  transform: scaleY(0.5774) rotate(-45deg);
  background: inherit;
  left: 43.93px;
}

/*counter transform the bg image on the caps*/
.hexTop:after,
.hexBottom:after {
  content: "";
  position: absolute;
  width: 300.0000px;
  height: 173.20508075688775px;
  -webkit-transform:  rotate(45deg) scaleY(1.7321) translateY(-86.6025px);
  -ms-transform:      rotate(45deg) scaleY(1.7321) translateY(-86.6025px);
  transform:          rotate(45deg) scaleY(1.7321) translateY(-86.6025px);
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  background: inherit;
}

.hexTop {
  top: -106.0660px;
}

.hexTop:after {
  background-position: center top;
}

.hexBottom {
  bottom: -106.0660px;
}

.hexBottom:after {
  background-position: center bottom;
}

.hexagon:after {
  content: "";
  position: absolute;
  top: 0.0000px;
  left: 0;
  width: 300.0000px;
  height: 173.2051px;
  z-index: 2;
  background: inherit;
}
	</style>
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
							<li><a href="https://www.facebook.com/Probe.NITT/" target="_blank"><img src="/images/facebook.svg" alt="facebook"></a></li>
							<li><a href="https://www.instagram.com/probe.nitt/"" target="_blank"><img src="/images/instagram.png" alt="instagram"></a></li>
							<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" " target="_blank"><img src="/images/linkedin.svg" alt="linkedin"></a></li>				<li><a href="/sponsors">Sponsors</a></li>
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
					<section id="sidebar" >
						<a href="/events/cryptech">
							<div class="hexagon">
	              <div class="hexTop"></div>
	              <div class="hexBottom"></div>
	            </div>
						</a>

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
