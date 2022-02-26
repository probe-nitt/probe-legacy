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
                        1.&nbsp;&nbsp;	N X I , F L C , T V S , O ? K 
						<br>
						What is the alphabet that replaces the position ‘?’ .  
                        <br><br>
                        2.&nbsp;&nbsp;	How many letters pairs in the word PARADISE are such pairs, which contain the same no. of letters between them as they have in the English alphabet?   Give the corresponding alphabet to the answer. (For ex: if answer is 8, give as H)
                        <br><br>
                        3.  &nbsp;&nbsp;	A total of eight persons P, Q, R, S, T, U, V, and W are in two parallel rows, each with four persons. P, R, T, and V are seated in row 1 facing South, whereas Q, S, U, and W are seated in row 2 facing North (but not necessarily in the same order). As a result, each individual in row 1 faces another person in row 2. Each individual resides on a different floor of a building. i.e., from floor 1 to level 8.
                        <br><br>
                        Q lives on 4th floor and the person who lives on the 1st floor is not the neighbour of V in the row. W sits to the opposite of the person who sits to the immediate right of the person who lives on 2ndfloor. The person who lives on 3rd floor sits exactly between S and the person who lives on 8thfloor. V lives on even prime numbered floor. R lives neither on 1st floor nor on 5th floor. V sits opposite to U, who lives on the 8th floor. T sits between P and V. S sits at the left end of the row and lives on 6th floor
						<br><br>
						Who among the 8 people sits to the immediate left of the person who lives on 2nd floor?     
                        <br><br>
                        4.	&nbsp;&nbsp; Find the missing letter in the position ‘?’.     
							<br>
							<img style="display: block; margin: 20px auto" src="/images/bullseye/stage-4-pic-1.png">
						<br>
                        <br><br>
                        5.&nbsp;&nbsp; Today is Sunday. After 59 days it will be? Provide the first letter of the day as the answer. Check the below table for the first letter of each day.
                            <br>
                            <img style="display: block; margin: 20px auto" src="/images/bullseye/stage-4-pic-2.png">

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
