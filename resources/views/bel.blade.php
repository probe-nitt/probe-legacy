<!DOCTYPE HTML>
<html>
	<head>
		<title>Leaderboard | Bullseye</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
		@if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
		@endif
		@if (!session('name'))
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		@endif
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
                                    <th>Completed at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($frl as $index => $userdetail)
                                <tr @if($userdetail->id==$user->id) style="color:yellow;" @endif @if($userdetail->ifAdmin) style="color:red;" @endif>
                                    @if($userdetail->ifAdmin)
                                    <td></td>
                                    @endif
                                    @if(!$userdetail->ifAdmin)
                                    <td>{{($page-1) * $limit + $index +1}}</td>
                                    @endif
                                    <td>{{$userdetail->name}}</td>
                                    <td>{{$userdetail->cl}}</td>
                                    <td>{{\Carbon\Carbon::parse($userdetail->updated_at)->timezone('Asia/Kolkata')->format('g:i:s a, jS F')}}</td>
                                </tr>
                                @endforeach
                                @if($uf)
                                <tr style="color:yellow;">
                                    <td>{{$rank}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->cl}}</td>
                                    <td>{{$user->updated_at}}</td>
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
                        <div>
                        <!-- @if ($page < ceil($users/$limit))
                        <a href="?page={{ceil($users/$limit)}}" class="button primary" style="float: right;">>></a>
                        <a href="?page={{$page+1}}" class="button primary" style="float: right;margin: 0 10px;">></a>
                        @endif
                        @if ($page != 1)
                        <a href="?page={{$page-1}}" class="button primary" style="float: right; margin: 0 10px;"><</a>
                        <a href="?page=1" class="button primary" style="float: right;"><<</a>
                        @endif -->
                        </div>
                        <br>
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
