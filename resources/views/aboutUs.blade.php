<!DOCTYPE HTML>
<html>
	<head>
		<title>Event Registration | PROBE 2019</title>
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
                            <li><a href="/about">About Us</a></li>
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
							<h2>About Us</h2>
            </header>
						<div class="about-us-text">
              <h1>Probe is the Annual International Technical Symposium og the Department of ECE,NIT Trichy.PROBE is the biggest ECE symposium in India,where it creates a learning platform in the latest fields and trends related to electronics and communication.</h1>

            </div>
            <div class="row">

                 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle">
                     <div class="about-us-small-circle">
                       <!-- <div class="quarter bottom-right"></div> -->
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 style="margin-bottom:8px;">Name</h1>
                       <h1>Designation</h1>
                     </div>
                 </div>
                 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle">
                     <div class="about-us-small-circle">
                       <!-- <div class="quarter bottom-right"></div> -->
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 style="margin-bottom:8px;">Name</h1>
                       <h1>Designation</h1>
                     </div>
                 </div>
                 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle">
                     <div class="about-us-small-circle">
                       <!-- <div class="quarter bottom-right"></div> -->
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 style="margin-bottom:8px;">Name</h1>
                       <h1>Designation</h1>
                     </div>
                 </div>
                 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle">
                     <div class="about-us-small-circle">
                       <!-- <div class="quarter bottom-right"></div> -->
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 style="margin-bottom:8px;">Name</h1>
                       <h1>Designation</h1>
                     </div>
                 </div>
                 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle">
                     <div class="about-us-small-circle">
                       <!-- <div class="quarter bottom-right"></div> -->
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 style="margin-bottom:8px;">Name</h1>
                       <h1>Designation</h1>
                     </div>
                 </div>
                 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle">
                     <div class="about-us-small-circle">
                       <!-- <div class="quarter bottom-right"></div> -->
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 style="margin-bottom:8px;">Name</h1>
                       <h1>Designation</h1>
                     </div>
                 </div>
                 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle">
                     <div class="about-us-small-circle">
                       <!-- <div class="quarter bottom-right"></div> -->
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 style="margin-bottom:8px;">Name</h1>
                       <h1>Designation</h1>
                     </div>
                 </div>


            </div>
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
