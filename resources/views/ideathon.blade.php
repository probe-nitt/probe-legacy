<!DOCTYPE HTML>
<html>
	<head>
		<title>Qualcomm Ideathon | PROBE 2019</title>
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
							<li><a href="/login" class="button primary">Log in</a></li>
                        	@endif
							
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><b>Qualcomm Ideathon</b></h2>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                
									<section id="sidebar">
										<section>
											@if($regbool==0)
											<a href="/events/register?event=Qualcomm Ideathon" class="button primary fit">Register</a>
											@endif
											@if($regbool==1)
											<span class="button primary fit disabled">Registered</span>
											@endif
											<br/><br/>
										</section>

                                        <!-- <section>
											<h3>Important dates</h3>
											<ul>
												<li>Registration: 
													<ul style="list-style-type:none">
														<li><b>From 17th January 2019</b></li>
													</ul>
												</li>
                                                <li>Deadline for questionnaire submission:
													<ul style="list-style-type:none">
														<li><b>29th January 2019</b></li>
													</ul>
												</li>
												<li>Shortlist announcement:
													<ul style="list-style-type:none">
														<li><b>30th January 2019</b></li>
													</ul>
												</li>
												<li>Finals:
													<ul style="list-style-type:none">
														<li><b>2nd - 3rd February 2019</b></li>
													</ul>
												</li>
											</ul>
										</section> -->

										<section>
											<h3>Contacts</h3>
											<p>Email: <b><a href="mailto:probe2019events@gmail.com">probe2019events@gmail.com</a></b></p>
											<p>Srivatsan : <b>9444741197</b></p>
											<p>Madhan : <b>9790381738</b></p>
										</section>
									</section>
							</div>
							<div class="col-8 col-12-medium imp-medium">

                            <!-- Content -->
                                <section id="content">
                                    <p>A single thought can change the world. Are you a visionary technocrat with such revolutionary ideas? Get ready to fire your neurons at the Ideathon challenge at Probe'19. Don't miss this unique opportunity to present your ideas to the expert panel from <strong>Qualcomm</strong>.</p>
                                    <p><strong>Topic and Theme:</strong> Networking and Wireless Communications (Wi-Fi)</p>
                                    <p><strong>Prizes:</strong> Cash prize worth INR 15k and smart fitness watches for top two teams.</p>

                                    <!-- <h3>Prizes</h3>
                                    <p>
										Cash prizes worth :
										<br/>First prize : 4000 INR
										<br/>Second prize : 3000 INR
										<br/>Third prize : 2000 INR
										<br/>And Goodies worth 1000 INR.
                                    </p>
                                    
                                    <h3>Format</h3>

                                    <p>
                                        Step 1: Register with a maximum of 2 members per team at probe.org.in/events/matrix Questionnaire will be sent to the registered email ID.
                                        <br/>Step 2:Submit the codes answers to the questionnaire before the deadline via email to <b><a href="mailto:probe2019events@gmail.com">probe2019events@gmail.com</a></b>
                                        <br/>Step 3:Shortlisted teams will have finals during Probe 2019 at NIT Trichy. Finals will involve a MATLAB coding round. Problem Statement will be announced on spot.
                                    </p> -->

                                    <h3>Rules</h3>
                                    <ul>
                                        <li>The students are invited to submit papers reporting original unpublished research and recent developments in above topic.</li>
                                        <li>Maximum of 3 members per team.</li>
                                        <li>Recommended areas in the above Topic includes (and is not limited to),
                                            <ol>
                                              <li>Application of machine learning and AI in the wireless LAN networking.</li>
                                              <li>Expanding wireless LAN applications beyond just connectivity.</li>
                                              <li>Security in Wireless LAN networking.</li>
                                            </ol>
                                        </li>
                                        <li>The following parameters are important and are expected in the paper presented:
                                          <ol>
                                            <li>Title.</li>
                                            <li>Objective and Abstract of the topic of presentation.</li>
                                            <li>Detailed description and explanation of the topic chosen.</li>
                                            <li>Benefits of the solution/topic presented.</li>
                                            <li>Details of  Prototypes/Implementations that have been done on this topic (if any).</li>
                                            <li>Identify if this is an enhancement of an existing technology or an innovative new idea.</li>
                                            <li>References to public domain information used in the presentation.</li>
                                          </ol>
                                        </li>
                                        <li>Send the soft copy of camera ready paper in PDF or WORD format to <b><a href="mailto:probe2019events@gmail.com">probe2019events@gmail.com</a></b> with <code>“Ideathon_<'author_name'>_<'college_ name'>”</code> as the subject.
                                        <li>All papers should strictly comply with the standard IEEE camera-ready format (IEEE standard format, double column, and 10-point font).</li>
                                        <li>Mention the team name and names of team members (along with their Probe IDs) in the word/PDF file.</li>
                                        <li>Top five shortlisted submissions will have finals during Probe2019 at NIT-Trichy, where they can present their papers in the form of Power point presentation.</li>
                                        <li>Duration of presentation for each team is 10 minutes and will be adjudged by a panel from <b>Qualcomm.</b></li>
                                        <li>Only one submission permitted per team.</li>
                                    </ul>
									<!-- <h4>Participation certificate for all the participants</h4> -->
                                </section>
							</div>
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