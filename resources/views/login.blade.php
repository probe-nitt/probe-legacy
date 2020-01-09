<!DOCTYPE HTML>
<html>
	<head>
		<title>Login | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
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
                        	@endif

						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2 class="major-h2"><b>SIGN IN</b></h2>

                        </header>

                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
                        <form method="post" action="{{action('UserController@login')}}">
                            <div class="row gtr-uniform gtr-50 login-page-container">
                                <div class="col-12 col-12-xsmall">
																	<!-- <label class="loginPage-label"  for="">Probe-ID</label> -->
																	<label class="registration-form-label">Probe ID</label>
                                    <input type="email" class="loginPage" name="email" id="email" required />
                                </div>
                                <div class="col-12 col-12-xsmall">
																	<label class="registration-form-label">Password</label>
                                    <input type="password" class="loginPage loginPage-password"  name="password" id="password" value="" required/>
																		  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li style="margin:auto;margin-left:20%; width:27%"><input id="submit" type="submit" value="Sign in" class="primary"/></li>
                                    </ul>
                                </div>
                            </div>
                        </form>

					</div>
				</div>

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
