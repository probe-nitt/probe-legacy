<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact Us | PROBE 2021</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        @if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
		@endif
		@if (!session('name'))
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		@endif
        <link rel="stylesheet" href="{{ asset('css/workshops.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/contactus.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>

<body class="is-preload" style="
background-image:url(../images/backract.png);">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="header2020">
        <nav class="nav2020">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/workshops">Workshops</a></li>
                <li><a href="/events">Events</a></li>
                <li><a href="/lectures">Lectures</a></li>
                <li><a href="/contact">Contact us</a></li>
            </ul>
        </nav>
        <h1 id="logo2020"><a href="/"><img src="/images/probe_p.png"></a></h1>
        <nav class="nav2020">
            <ul>
                <li><a href="/register"><img src="/images/facebook.svg" alt="facebook"></a></li>
                <li><a href="/register"><img src="/images/instagram.png" alt="instagram"></a></li>
                <li><a href="/register"><img src="/images/linkedin.svg" alt="linkedin"></a></li>
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
            <header class="major" style="margin-top: 65px;">
                <h2><b>CONTACTS</b></h2>
            </header>
            @if ($message = session('message'))
            <p style="text-align: center;">{{ $message }}</p>
            @endif
            <p style="text-align: center;"> Want to know more about us? <a href="/about"> Click here! </a> </p>
            <div>

                <div class="row">
                    <div class="column">
                        Pavan Kumar
                        <br />
                        <div class = "red">Chairman</div>
                        +91 85005 14232                                    </div>
                        <div class="column">
                            N Arvind Balaji
                            <br />
                            <div class="red">Overall Coordinator</div>
                            +91 87544 16697
                        </div>
                        <div class="column">
                            Harika J
                            <br />
                            <div class="red">Overall Coordinator</div>
                            +91 90925 81162
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            Naveen
                            <br />
                            <div class="red">Treasurer</div>
                            +91 96298 89445
                        </div>
                        <div class="column">
                            Soumith Reddy
                            <br />
                            <div class="red">Head, Organizing</div>
                            +91 95151 89525
                        </div>
                        <div class="column">
                            Vasanth
                            <br />
                            <div class="red">Head, Events</div>
                            +91 96294 57300
                        </div>
                        <div class="column">
                            Bhuvana
                            <br />
                            <div class="red">Head, Events</div>
                            +91 95858 94011
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                        </div>
                        <div class="column">
                            Pavan
                            <br />
                            <div class="red">Head, Workshops</div>
                            +91 94920 34685
                        </div>
                        <div class="column">
                            N Hariharan
                            <br />
                            <div class="red">Head, Workshops</div>
                            +91 99405 77673
                        </div>
                        <div class="column">
                        </div>
                    </div>                    
                    </div>

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
    <script src="{{ asset('js/main2020.js') }}"></script>

</body>
</html>
