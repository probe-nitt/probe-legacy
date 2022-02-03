<!DOCTYPE HTML>
<html>
	<head>
		<title>Optical Character Recognition using Deep Learning | PROBE 2022</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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
							<li><a href="/login" class="button primary">Log in</a></li>
                        	@endif
							
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><b>Optical Character Recognition using Deep Learning</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">
										<section>
											@if($regbool1==0)
											<a href="/workshops/register?workshop=Optical%20Character%20Recognition%20using%20Deep%20Learning%20Day%201" class="button primary fit">Register for session on 2nd Feb, 2021</a>
                                            @endif
                                            @if($regbool1==1 && $ispaid1==0)
											<a href="/workshops/register?workshop=Optical%20Character%20Recognition%20using%20Deep%20Learning%20Day%201" class="button primary fit">Pay and Complete registration <br/> for session on 2nd Feb, 2021</a>
											@endif
											@if($regbool1==1 && $ispaid1==1)
											<span class="button primary fit disabled">Registered for Day 1</span>
                                            @endif
                                            <br/><br/>
                                            @if($regbool2==0)
											<a href="/workshops/register?workshop=Optical%20Character%20Recognition%20using%20Deep%20Learning%20Day%202" class="button primary fit">Register for session on 3rd Feb, 2021</a>
                                            @endif
                                            @if($regbool2==1 && $ispaid2==0)
											<a href="/workshops/register?workshop=Optical%20Character%20Recognition%20using%20Deep%20Learning%20Day%202" class="button primary fit">Pay and Complete registration <br/>  for  session on 3rd Feb, 2021</a>
											@endif
											@if($regbool2==1 && $ispaid2==1)
											<span class="button primary fit disabled">Registered for Day 2</span>
											@endif
											<br/><br/>
										</section>

                                        <section>
											<h3>Details</h3>
											<ul>
												<li>Maximum of participants per team: 
													<ul style="list-style-type:none">
														<li><b>2</b></li>
													</ul>
												</li>
                                                <li>Workshop fee:
													<ul style="list-style-type:none">
														<li><b>Rs 1000 per team</b></li>
													</ul>
												</li>
												<li>Duration :
													<ul style="list-style-type:none">
														<li><b>One day</b></li>
													</ul>
												</li>
												<li>Date : 
													<ul style="list-style-type:none">
														<li><b>2nd and 3rd February 2021</b></li>
													</ul>
												</li>
												<li>Limited registrations.</li>
											</ul>
										</section>

										<section>
											<h3>Contacts</h3>
											<p>Rajkiran : <b>+91 9441310986</b></p>
											<p>Srikanth : <b>+91 8309847277</b></p>
										</section>
									</section>
							</div>
							<div class="col-8 col-12-medium imp-medium">

                            <!-- Content -->
                                <section id="content">
                                    <p>Ever wondered how modern machines recognize human handwriting on their own? Get yourself engaged with the evolving trends with your workshop on 'Character Recognition using Machine Learning techniques'.</p>

                                    <p>Learn the essentials of machine learning, artificial neural networks to develop interesting applications.</p>
                                    
                                    <h3>Course content :</h3>

                                    <p>
                                        1.Introduction to Python Programming Language.
                                        <br/>2.Basics of Machine Learning (ML).
                                        <br/>3.Basics of Artificial Neural Networks.
                                        <br/>4.Character Recognition using Artificial Neural Network (ANN)
                                        (Libraries and materials will be provided)
                                       <b/>Each team should have atleast one laptop.
                                    </p>

                                    <p>Certificate from Probe will be provided immediately after completion of your workshop.</p>

                                    <h3>FAQ:</h3>
                                    <p>
                                        1.Does the workshop have any prerequisites?
                                            <br/>There are no prerequisites for the workshop. Any interested student can register for the workshop.
                                            <br/><br/>2.How should the payment be made for the workshop?
                                            <br/>Payment can be made online.
                                            <br/><br/>3.On what basis are workshop registrations confirmed?
                                            <br/>Registrations are confirmed after payment on first come first serve basis. Confirmation of your participation is subject to availability.
                                            <br/><br/>4.Will the fees paid for the workshop be refunded in case I fail to attend the workshop?
                                            <br/>Fees once paid, is strictly non-refundable. Requests for refund will not be encouraged.
                                            <br/><br/>5. Will accommodation be provided?
                                            <br/>Yes. We provide accommodation depending on the availability. You will have to register separately for that.
                                    </p>
                                </section>
							</div>
						</div>
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
