@if (session('name'))
<script type="text/javascript">
    window.location = "{{ url('/') }}";//here double curly bracket
</script>
@endif
<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration | PROBE 2019</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
		<meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
							<li><a href="/login" class="button primary">Log in</a></li>
                        	@endif

						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><b>PROBE 2019 REGISTRATION</b></h2>
                        </header>
                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
                        <form method="post" action="{{action('UserController@register')}} ">
                            <div class="row gtr-uniform gtr-50">
                                <div class="col-12 col-12-xsmall">
                                    <label class="registration-form-label">Name</label>
                                    <input type="text" name="name" id="name" value=""  class="registration-input" required />
                                </div>
                                <div class="col-12 col-12-xsmall">
                                    <label class="registration-form-label">Email</label>
                                    <input type="email" name="email" id="email"  class="registration-input" required />
                                </div>
                                <div class="col-12 col-12-xsmall">
                                  <label class="registration-form-label">Password</label>
                                    <input type="password" name="password" id="password" value="" class="registration-input"  required/>
                                </div>



                                    <label class="registration-form-label " style="position:relative;right:8px;"  >Gender</label>
                                    <div class="col-4 ">

                                        <input type="radio" id="male" name="gender" value="male" required>
                                        <label for="male" >Male</label>

                                    </div>
                                    <div class="col-4" >

                                        <input type="radio" id="female" name="gender" value="female">
                                        <label for="female">Female</label>

                                    </div>



                                <div class="col-12">
                                  <label class="registration-form-label">Year of study</label>
                                    <select name="yos" id="yos" class="registration-input minimal" required>

                                        <option value="1">1st year</option>
                                        <option value="2">2nd year</option>
                                        <option value="3">3rd year</option>
                                        <option value="4">4th year</option>
                                        <option value="5">5th year</option>
                                    </select>
                                </div>
                                <div class="col-12 col-12-xsmall">
                                  <label class="registration-form-label">Department</label>
                                    <input type="text" name="dept" id="dept" value=""  class="registration-input" required/>
                                </div>
                                <div class="col-12 col-12-xsmall">
                                  <label class="registration-form-label">College Name</label>
                                    <input type="text" name="cn" id="cn" value=""  class="registration-input" required/>
                                </div>

                                <div class="col-12">
                                  <label class="registration-form-label">Is accomodation needed?</label>
                                    <select name="acco" id="yos" class="registration-input minimal" required>

                                        <option value="1">Yes</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col-12 col-12-xsmall">
                                  <label class="registration-form-label">Phone number</label>
                                    <input type="tel" pattern='^\+?\d{0,13}' class="registration-input" name="phoneno" id="phoneno" value="" required/>
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
