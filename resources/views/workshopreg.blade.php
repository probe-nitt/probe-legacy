@if ($regbool==1 && $ispaid==1)
<script type="text/javascript">
    window.location = "{{ url('/workshops') }}"+"/"+"{{ $workshop }}";//here double curly bracket
</script>
@endif
<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ $workshop }} Registration | PROBE 2019</title>
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
							<h2><b>{{ $workshop }} | Workshop registration</b></h2>
                        </header>
                        <p style = "text-align: center;">Please enter registration details carefully. Details once entered can't be changed.</p>
                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
						@if ($regbool!=1)
                        <form method="post" action="{{action('UserController@regworkshop')}}">
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
                                    <input type="text" name="workshop" id="workshop" value="{{ $workshop }}" placeholder="workshop" required readonly/>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li style="margin:auto"><input id="submit" type="submit" value="REGISTER" class="primary"/></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
						@endif
						@if ($ispaid==0 && $regbool==1)
						<p style="text-align: center;">Complete your registration for the {{$workshop}} workshop by paying the registration fee (for the team) using the link below</p>
						<div style="margin:auto;text-align: center;">
							<h4>Registration Details</h4>
							<p>Participant 1: {{$p1}}</p>
							@if ($mc >= 2)
							<p>Participant 2: {{$p2}}</p>
							@endif
							@if ($mc >= 3)
							<p>Participant 3: {{$p3}}</p>
							@endif
							<strong>For successful payment, please use the email that is registered in this website.</strong><br/><br/>
							<a href="https://www.thecollegefever.com/events/probe-2020" target="_blank"><button class="button primary fit">Pay and complete registration</button></a>
							
						</div>
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
		<script>
			function getPreFilledDataTS(max_count){

				if(max_count==2){

					return {
						eventcode:    "{{ $ec }}",
						name:         "{{ session('name') }}",
						emailid:      "{{ session('email') }}",
						ticketname1:  "{{ $workshop }}",
						cq1:          "{{ $p1 }}",
						cq2:          "{{ $p2 }}",
						ticketvalue1: 1,
					}
						
				}

				if(max_count==3){

					return {
						eventcode:    "{{ $ec }}",
						name:         "{{ session('name') }}",
						emailid:      "{{ session('email') }}",
						ticketname1:  "{{ $workshop }}",
						cq1:          "{{ $p1 }}",
						cq2:          "{{ $p2 }}",
						cq3:          "{{ $p3 }}",
						ticketvalue1: 1,
					}
					
				}

				return {
					eventcode:    "{{ $ec }}",
					name:         "{{ session('name') }}",
					emailid:      "{{ session('email') }}",
					ticketname1:  "{{ $workshop }}",
					cq1:          "{{ $p1 }}",
					ticketvalue1: 1,
				}
			}
		</script>
		<noscript id="tsNoJsMsg">Javascript on your browser is not enabled.</noscript>
		<script src="https://www.townscript.com/popup-widget/townscript-widget.nocache.js" type="text/javascript"></script>
		
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
