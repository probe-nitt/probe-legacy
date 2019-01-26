<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact Us | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
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
							<h2><b>Contacts</b></h2>
                        </header>
                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
                        <div style="overflow-x: auto">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Chairman</td>
                                        <td>Prakash Sabesan</td>
                                        <td>9677047469</td>
                                    </tr>
                                    <tr>
                                        <td>Overall coordinators</td>
                                        <td>Yashwanth/Kavya</td>
                                        <td>9790485851, 9790488860</td>
                                    </tr>
                                    <tr>
                                        <td>Treasurer</td>
                                        <td>Venkatesh Gopisetti</td>
                                        <td>7667114994</td>
                                    </tr>
                                    <tr>
                                        <td>General secretaries</td>
                                        <td>Naveen/Pavithra</td>
                                        <td>9629889445, 7639703926</td>
                                    </tr>
                                    <tr>
                                        <td>Workshops</td>
                                        <td>Rajkiran/Srikanth</td>
                                        <td>9441310986, 8309847277</td>
                                    </tr>
                                    <tr>
                                        <td>Events</td>
                                        <td>Srivatsan/Madhan</td>
                                        <td>9444741197, 9790381738</td>
                                    </tr>
                                    <tr>
                                        <td>Public relations and hospitality</td>
                                        <td>Venu/Priyanka</td>
                                        <td>8985792858, 9047165355</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

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