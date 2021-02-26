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
							<h2><b>Level {{ $cl }}</b></h2>
                        </header>
                        @endif
                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
                        @if ($cb==0)
                        <div style="margin:auto; text-align: center;" >
                            @if($img1)
                            <div class="col-6 col-12-xsmall">
                                <img style="max-width:250px" src="/bullseye/Level%20{{ $cl }}/{{ $img1 }}">
                            </div>
                            @endif
                            <!-- @if($img2)
                            <div class="col-6 col-12-xsmall">
                                <img style="max-width:250px" src="/bullseye/Level%20{{ $cl }}/{{ $img2 }}">
                            </div>
                            @endif
                            @if($img3)
                            <div class="col-6 col-12-xsmall">
                                <img style="max-width:250px" src="/bullseye/Level%20{{ $cl }}/{{ $img3 }}">
                            </div>
                            @endif
                            @if($img4)
                            <div class="col-6 col-12-xsmall">
                                <img style="max-width:250px" src="/bullseye/Level%20{{ $cl }}/{{ $img4 }}">
                            </div>
                            @endif  -->
                        </div>
                        <br/>
                        <br/>
                        <form method="post" action="{{action('UserController@bea')}}">
                            <div class="row gtr-uniform gtr-50">
                                <div class="col-12 col-12-xsmall">
                                    <p style="text-align:center; color:red;"> The Event is over and your answers won't afffect the leaderboard. But you could try them, nevertheless ;)</b></p>
                                    @if($extraComment!="")
                                    <p style="text-align: center;">Additional clues are added.</p>
                                    @endif
                                    @if($cl==9)
                                    <p style="text-align: center;">Enter your answers without spaces. Answer might contain special characters and Upper case letters for this level.</p>
                                    @endif
                                    @if($cl!=9)
                                    <p style="text-align: center;">Enter your answers without spaces in lowercase. Answers contain only alphabets and numbers. No special characters are present in the answer.</p>
                                    @endif
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
						<li>&copy; PROBE 2021. All rights reserved.</li>
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
