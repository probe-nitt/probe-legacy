@if ($regbool==1)
<script type="text/javascript">
    window.location = "{{ url('/events') }}"+"/"+"{{ strtolower($event) }}";//here double curly bracket
</script>
@endif
<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ $event }} Registration | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<link rel="stylesheet" href="{{ asset('css/workshops.css') }}"  />
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
							<h2><b>{{ $event }} | Event registration</b></h2>
                        </header>
                        <p style = "text-align: center;">Please enter registration details carefully. Details once entered can't be changed.</p>
                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
						@if ($regbool!=1)
                        <form method="post" action="{{action('UserController@regevent')}}">
                            <div class="row gtr-uniform gtr-50">
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="p1" id="p1" placeholder="Participant 1's PROBE ID" value="{{ session('pid') }}" required readonly/>
                                </div>
								@if ($mc >= 2)
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="p2" id="p2" placeholder="Participant 2's PROBE ID" />
                                </div>
								@endif
								@if ($mc >= 3)
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="p3" id="p3" placeholder="Participant 3's PROBE ID" />
                                </div>
								@endif
								<div class="col-12 col-12-xsmall">
                                    <input type="text" name="teamname" id="teamname" placeholder="Team Name" required/>
                                </div>
								<div class="col-12 col-12-xsmall">
                                    <input type="text" name="event" id="event" value="{{ $event }}" placeholder="event" required readonly/>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li style="margin:auto"><input id="submit" type="submit" value="REGISTER" class="primary"/></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
						@endif
					</div>
				</div>

			<!-- Footer -->
				<footer style="margin-bottom:0" id="footer">
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
		<script src="{{ asset('js/util.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
	</body>
</html>
