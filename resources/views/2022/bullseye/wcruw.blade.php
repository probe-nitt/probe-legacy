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
                        1.&nbsp;&nbsp;	Find the corresponding alphabet of the number which can replace the question mark.
						<br>
						<img style="display: block; margin: 20px auto" src="/images/bullseye/stage-5-pic-1.png">
                        <br><br>
                        2.&nbsp;&nbsp; Find the corresponding alphabet to the appropriate number that can fill the empty box below.
						<br>
						<img style="display: block; margin: 20px auto" src="/images/bullseye/stage-5-pic-2.png">
                        <br><br>
                        3.  &nbsp;&nbsp;	Find the missing letter in the empty box.
						<br>
						<img style="display: block; margin: 20px auto" src="/images/bullseye/stage-5-pic-3.png">
                        <br><br>
                        4.	&nbsp;&nbsp; There are 3 wall clocks attached on the wall, if they are named as A, B and C. The clock A is accurate whereas clock B gains 5 mins every day and clock C loses 5 mins every day. At exactly midnight, all three clocks were showing same time. If today is 15 February 2022, then on which date all three clocks will show the same time again? 
						<br>
						Give the corresponding alphabet of the date as the answer. For ex: if the date is DD-MM-YYYY then give the corresponding alphabet to number DD. 
                        <br><br>
                        5.&nbsp;&nbsp;	Three playing cards in a row. One can guess the cards with the help of these clues. 
						<br>
						There is a three to the right of a Queen. A Spade will be found to the left of a heart. A joker is to the left of a diamond. A diamond is to the left of a heart. Now, identify all three cards. The position of the three cards from left to right are named as K, L and M.
						<br>
						At what position does joker is placed.

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
