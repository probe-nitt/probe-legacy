<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ $title }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		@if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
		@endif
		@if (!session('name'))
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		@endif
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" /> 
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="/"><img width="100px" style="margin-top: 10px;" src="/images/whitelogo.png"></a></h1>
					<nav id="nav">
						<ul>
							@if ($name = session('name'))
							<li>Hi {{ $name }}</li>
                            <li><a href="/bullseye-event/leaderboard" class="button primary">Leaderboard</a></li>
							<li><a href="/logout" class="button primary">Log out</a></li>
                        	@endif
							@if (!session('name'))
							<li><a href="/register" class="button primary">Register</a></li>
                        	@endif
							
						</ul>
					</nav>
				</header>


            <!-- {{ $comment }} -->
            <!-- {{ $extraComment }} -->


			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
                        @if ($cb==0)
						<header class="major">
							<h2><b>Stage {{ $cl }}</b></h2>
                        </header>
                        @endif
                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
                        @if ($cb==0)
                        1.	A, B, C, D, E, F and G are sitting around a circle and are facing opposite to the center. G is second to the left of C, who is to the immediate left of F.A is third to the left of E. B is between D and E. Who is to the immediate left of B?
                        <br><br>
                        2.	Find the correct time which should be shown by the last watch. 
                        <br>
                        From the answer format of X : Y, Give the corresponding alphabet of the number at the position X.
                        <br>
                        <img style="width: min(90vw, 400px); display: block; margin: 20px auto" src="/images/bullseye/stage-2-pic-1.png">
                        <br><br>
                        3. What is the corresponding alphabet of the number in the position ‘?’ given below?
                        <br>
                        <img style="width: min(90vw, 400px); display: block; margin: 20px auto" src="/images/bullseye/stage-2-pic-2.jpg">
                        <br><br>
                        4.	There are eight people in a family viz. A, B, C, D, E, F, G and H consists of 3 generations. Four of them are female. E and C are the daughter and son of B respectively and both are married. F is the sister of H whose father is D. A and G are of 3rd generation and A is the son-in-law of F. B is the brother-in-law of H. Who among the following is sister-in-law of E?
                        <br><br>
                        5.	What is the alphabet corresponding to the number that replaces the ‘?’
                            <br>
                            <img style="width: min(90vw, 400px); display: block; margin: 20px auto" src="/images/bullseye/stage-2-pic-3.png">

                        <br/>
                        <br/>
                        <form method="post" action="{{action('UserController@bea')}}">
                            <div class="row gtr-uniform gtr-50">
                                <div class="col-12 col-12-xsmall">
                                    <?php /*
                                    <p style="text-align: center;">Enter your answers without spaces. Answer might contain special characters and Upper case letters for this level.</p>
                                    */ ?>
                                    <p style="text-align: center;">Enter your answers without spaces in lowercase. Answers contain only alphabets and numbers. No special characters are present in the answer.</p>
                                    <input type="text" name="answer" id="email" placeholder="Answer" required />
                                </div>
                                <div class="col-12 col-12-xsmall">
                                    <ul class="actions">
                                        <li style="margin:auto"><input id="submit" type="submit" value="Submit" class="primary"/></li>
                                    </ul>
                                </div>
                            </div>
                        </form>

                        
						@endif
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; PROBE 2022. All rights reserved.</li>
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
