<!DOCTYPE HTML>
<html>
	<head>
		<title>Change Password | PROBE 2020</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		@if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
		@endif
		@if (!session('name'))
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		@endif
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
							<li><a href="https://www.instagram.com/probe.nitt/" target="_blank"><img src="/images/instagram.png" alt="instagram"></a></li>
							<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank"><img src="/images/linkedin.svg" alt="linkedin"></a></li>
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
							<h2 class="major-h2"><b>Change Password</b></h2>

                        </header>

                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
                        <form method="post" action="{{action('UserController@changePassword')}}" onsubmit="return checkForm(this)";>
                            <div class="row gtr-uniform gtr-50 login-page-container">
                                <div class="col-12 col-12-xsmall">
																	<!-- <label class="loginPage-label"  for="">Probe-ID</label> -->
																	<label class="registration-form-label">Email ID</label>
                                    <input type="text" class="loginPage" name="email" id="email" required />
                                </div>
                                <div class="col-12 col-12-xsmall">
																	<!-- <label class="loginPage-label"  for="">Probe-ID</label> -->
																	<label class="registration-form-label">New Password</label>
                                    <input type="password" class="loginPage loginPage-password" name="password" id="password" required />
                                    <span id=pass_msg style="color:red;"></span>
                                </div>
                                <div class="col-12 col-12-xsmall">
																	<label class="registration-form-label">Confirm New Password</label>
                                                                    <input type="password" class="loginPage loginPage-password"  name="confirm_password" id="confirm_password" value="" required/>
                                                                          <span id=cpass_msg style="color:red;"></span>
                                </div>
                                <input type="hidden"  name="forgot_password_hash" id="forgot_password_hash" value="{{ $hash }}" required/>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li style="margin:auto;margin-left:13%; width:27%"><input id="submit" type="submit" value="Change Password" class="primary"/></li>
                                    </ul>
                                </div>
                            </div>
                        </form>

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
        <script type="text/javascript">
function checkForm(form)
{
  if(!(form.password.value != "" && form.password.value == form.confirm_password.value)) {
    document.getElementById("cpass_msg").innerHTML="Passwords do not match!";
    form.password.focus();
    return false;
  }
  return true;
}

</script>
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
