<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">PROBE</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="/">Home</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><b>PROBE 2019 REGISTRATION</b></h2>
                        </header>
                        <form method="post" action="{{action('UserController@register')}} ">
                            <div class="row gtr-uniform gtr-50">
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="name" id="name" value="" placeholder="Name" required />
                                </div>
                                <div class="col-12 col-12-xsmall">
                                    <input type="email" name="email" id="email" placeholder="Email" required />
                                </div>
                                <div class="col-12 col-12-xsmall">
                                    <input type="password" name="password" id="password" value="" placeholder="Password" required/>
                                </div>
                                <span>Gender:</span>
                                <div class="col-3 col-12-medium">
                                    <input type="radio" id="male" name="gender" required>
                                    <label for="male">Male</label>
                                </div>
                                <div class="col-3 col-12-medium">
                                    <input type="radio" id="female" name="gender">
                                    <label for="female">Female</label>
                                </div>
                                <div class="col-3 col-12-medium">
                                    <input type="radio" id="other" name="gender">
                                    <label for="other">Other</label>
                                </div>
                                <div class="col-12">
                                    <select name="yos" id="yos" required>
                                        <option value="" selected disabled hidden>- Year of Study -</option>
                                        <option value="1">1st year</option>
                                        <option value="2">2nd year</option>
                                        <option value="3">3rd year</option>
                                        <option value="4">4th year</option>
                                        <option value="5">5th year</option>
                                    </select>
                                </div>
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="dept" id="dept" value="" placeholder="Department" required/>
                                </div>
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="cn" id="cn" value="" placeholder="College Name" required/>
                                </div>
                                <div class="col-12 col-12-xsmall">
                                    <input type="tel" pattern='^\+?\d{0,13}' name="phoneno" id="phoneno" value="" placeholder="Phone number" required/>
                                </div>
                                <div style="margin:auto" class="g-recaptcha" data-sitekey="6Lcc64gUAAAAAJz1vzmGRfscTPKk48wWvEpOlJYH" data-callback="callback"></div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li style="margin:auto"><input id="submit" type="submit" value="Register" class="primary" disabled/></li>
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
            <script src='https://www.google.com/recaptcha/api.js'></script>
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('js/browser.min.js') }}"></script>
			<script src="{{ asset('js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>
            <script>
                function callback(){
                    if (grecaptcha.getResponse() != ""){
                        $("#submit").prop('disabled', false);
                    }
                }
            

            </script>
	</body>
</html>