<!DOCTYPE HTML>
<html>
	<head>
		<title>Leaderboard | Bullseye</title>
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


			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><b>Bullseye | Leaderboard</b></h2>
                        </header>
                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
                        <table>
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($leaderboard as $key => $leaderboard_row)
                                <tr>
                                    <td>1</td>
                                    <td>{{$leaderboard_row[$key]}}</td>
                                    <td>{{$key}}</td>
                                </tr>
                                @endforeach

                                <!--
                                @foreach ($frl as $index => $userdetail)
                                <tr @if($userdetail->id==$user->id) style="color:yellow;" @endif>
                                    <td>{{$index+1}}</td>
                                    <td>{{$userdetail->name}}</td>
                                    <td>{{$userdetail->cl}}</td>
                                </tr>
                                @endforeach-->
                                @if($uf)
                                <tr style="color:yellow;">
                                    <td>{{$rank}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->cl}}</td>
                                </tr>
                                @endif
                                <!-- <tr>
                                    <td>Item 1</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item 2</td>
                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item 3</td>
                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                    <td>29.99</td>
                                </tr>
                                <tr>
                                    <td>Item 4</td>
                                    <td>Vitae integer tempus condimentum.</td>
                                    <td>19.99</td>
                                </tr>
                                <tr>
                                    <td>Item 5</td>
                                    <td>Ante turpis integer aliquet porttitor.</td>
                                    <td>29.99</td>
                                </tr> -->
                            </tbody>
                        </table>

                        <p>Further updates regarding cash prizes will be notified via registered email.</p>

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