<!DOCTYPE HTML>
<html>
	<head>
		<title>Events | PROBE 2019</title>
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
                <section id="four" class="wrapper style1 special fade-up">
                    <div class="container">
                        <header class="major">
                            <h2>EVENTS | PROBE 2019</h2>
                        </header>
                        <div class="box alt">
                            <div class="row gtr-uniform">
                                <section class="col-4 col-6-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/events/ideathon">
                                    <span style="cursor: pointer;" class="icon alt major fa-lightbulb-o"></span>
                                    <h3>Qualcomm Ideathon</h3>
                                    </a>
                                </section>
                                <section class="col-4 col-6-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/events/bullseye">
                                    <span style="cursor: pointer;" class="icon alt major fa-bullseye"></span>
                                    <h3>Bullseye</h3>
                                    </a>
                                </section>
                                <section class="col-4 col-6-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/events/cryptech">
                                    <span style="cursor: pointer;" class="icon alt major fa-puzzle-piece"></span>
                                    <h3>Cryptech</h3>
                                    </a>
                                </section>
                                <section class="col-4 col-6-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/events/embedtronix">
                                    <span style="cursor: pointer;" class="icon alt major fa-microchip"></span>
                                    <h3>Embedtronix</h3>
                                    </a>
                                </section>
                                <section class="col-4 col-6-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/events/matrix">
                                    <span style="cursor: pointer;" class="icon alt major fa-code"></span>
                                    <h3>Matrix</h3>
                                    </a>
                                </section>
                                <section class="col-4 col-6-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/events/paper">
                                    <span style="cursor: pointer;" class="icon alt major fa-file-text-o"></span>
                                    <h3>Paper Presentation</h3>
                                    </a>
                                </section>
                                <section class="col-4 col-6-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/events/probequiz">
                                    <span style="cursor: pointer;" class="icon alt major fa-question"></span>
                                    <h3>Probe Quiz</h3>
                                    </a>
                                </section>
                                <section class="col-4 col-6-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/events/probeit">
                                    <span style="cursor: pointer;" class="icon alt major fa-exclamation"></span>
                                    <h3>Probe It</h3>
                                    </a>

                                </section>
                            </div>
                        </div>
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