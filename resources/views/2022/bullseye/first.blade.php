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
                        1.	Answer the given question based on the following English Alphabet:
                        <br>
                            Z Y X W V U T S R Q P O N M L K J I H G F E D C B A
                        <br>
                            If every alternate letter starting from Z is deleted from the given alphabet, which of the following will be 12th letter from the left end?
                        <br><br>
                        2.	If in a certain language BLUE is coded as EIXB and WHITE is coded as ZE<b>?</b>QH.
                        <br>
                            What is the alphabet in the place of ‘<b>?</b>’?
                        <br><br>
                        3.	B M N G O P C Q R H S T F L U V W X Y A K Z D I E J
                        <br>
                            Counting from left if it is possible to make a meaningful word from the third and fifth letters from left, using each at least twice and third letter from right in sequence, only once. What is the first letter of the word?
                        <br><br>
                            4.	If the first half of English alphabet is left undisturbed and the second half of the English alphabet is reversed, then which letter will be 7th to the right of 15th letter from the left?
                        <br><br>
                            5.	Which alphabet replaces the question mark?
                            <br>
                            14 I 58
                            72 T 37
                            96 O 16
                            24 ? 35

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
