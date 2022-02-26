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
                        1.&nbsp;&nbsp;	What is the alphabet corresponding to the number that replaces the ‘?’    
						<br>
						<img style="width: min(90vw, 400px); display: block; margin: 20px auto" src="/images/bullseye/stage-3-pic-1.png">
                        <br><br>
                        2.&nbsp;&nbsp;	Z 5 J * U 3 # K R @ L 4 ^ N 8 7 B Q $ % X 1 ÷ 6 V > T A
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;STEP I – The letters which are followed by a symbol are to be arranged in alphabetical order at the right end of the series. (Just after A) 
                        <br>
						&nbsp;&nbsp;&nbsp;&nbsp;STEP II – The numbers which are preceded by a consonant will be arranged between ‘$’ and ‘%’ in descending order. 
                        <br>
						&nbsp;&nbsp;&nbsp;&nbsp;STEP III – The symbols which are preceded by a letter will be arranged such that 1st symbol will be arranged at the left end, the 2nd symbol will be arranged at the right end, 3rd symbol will again be arranged at the left end and so on.
						<br>
						Note: STEP II is applied after STEP I and STEP III is applied after STEP II. And all operations will be applied.
						<br>
						How many such symbol(s) are there in the sequence after STEP III which are followed by a letter and preceded by a number? Give the corresponding alphabet to the answer. (Eg: If answer is 1, give A)     
                        <br><br>
                        3.  &nbsp;&nbsp; Find the suitable alphabet which completes the pattern.
                        <br>
                        <img style="width: min(90vw, 400px); display: block; margin: 20px auto" src="/images/bullseye/stage-3-pic-2.png">
                        <br><br>
                        4.	A lock can be opened by feeding the correct four-digit code. The code is a combination of four digits. To identify the correct code, the following clues are given:
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;a.	5769 - One digit is correct but wrong placed.
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;b.	1523 - Two digits are correct but wrong placed.
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;c.	9781 - One digit is right and well placed.
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;d.	4983 - Nothing is correct.
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;e.	6970 - Two digits are correct but wrong placed.
						<br>
						Finally, the lock is opened by cracking its correct four-digit code. What is the alphabet corresponding to the digit at the 2nd position of the correct code?  
                        <br><br>
                        5.&nbsp;&nbsp; 5, 12, 23, 50, 141, ?
                            <br>
                            What is the corresponding alphabet to the result of sum of all digits of the number that replaces the position ‘?’ ?    

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
