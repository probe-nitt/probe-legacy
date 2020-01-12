<!DOCTYPE HTML>
<html>
	<head>
		<title>Event Registration | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />

		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
      <header id="header" class="header2020">
					<nav class="nav2020">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/workshops">Workshops</a></li>
                            <li><a href="/events">Events</a></li>
							<li><a href="/about" class="scrolly">About us</a></li>
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
            <header class="major" style="margin-bottom:30px;">
							<h2 style="margin-bottom:0px;">About Us</h2>
            </header>
						<div class="about-us-text">
              <h1>Probe is the Annual International Technical Symposium of the Department of ECE,NIT Trichy.PROBE is the biggest ECE symposium in India,where it creates a learning platform in the latest fields and trends related to electronics and communication.</h1>

            </div>
            <div class="row">

                 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/PAVAN KUMAR.jpeg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Pavan Kumar</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Chairman</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/ARVIND BALAJI.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Arvind Balaji</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Overall Coordinator</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/HARIKA.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Harika</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Overall Coordinator</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/NAVEEN.JPG" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Naveen</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Treasurer</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/SOUMITH REDDY.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Soumith Reddy</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Organising</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/SANJAY.JPG" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Sanjay</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Marketing</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/VASANTH.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Vasanth</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Events</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/BHUVANA.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Bhuvana</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Events</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/PAVAN. jpg.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Pavan</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Workshops</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

                   <div class="about-us-container">
                    <div class="about-us-circle" style="overflow:none;">
                     <div class="about-us-small-circle" style="overflow: hidden;">


                       <!-- <div class="quarter bottom-right"></div> -->
											 <img src="/images/core20/HARIHARAN.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
                      </div>
                     </div>

                    </div>
                     <div class="name-designation">
                       <h1 class="about-us-h1">Hariharan</h1>
                       <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Workshops</h1>
                     </div>
                 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/NIVETHA.JPG" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">Nivetha</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Content</h1>
										 </div>
								 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/TEJAS.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">Tejas</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Content</h1>
										 </div>
								 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/SHIVARANJANI.jpEg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">Shivaranjani</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Content</h1>
										 </div>
								 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/ASHISH BHARGAV.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">Ashish Bhargav</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Publicity</h1>
										 </div>
								 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/HIMAJA KRISHNA.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">Himaja</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Publicity</h1>
										 </div>
								 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/CHAANDINI.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">R Chaandini</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Ambience</h1>
										 </div>
								 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/LEELA PRASAD.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">Leela Prasad</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, PR and Hospitality</h1>
										 </div>
								 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/SOWMYA.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">Sowmya</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, PR and Hospitality</h1>
										 </div>
								 </div>
								 <div class="col-3 col-4-medium col-6-small  col-12-xsmall">

									 <div class="about-us-container">
										<div class="about-us-circle" style="overflow:none;">
										 <div class="about-us-small-circle" style="overflow: hidden;">


											 <!-- <div class="quarter bottom-right"></div> -->
											<img src="/images/core20/PRAKASH.jpeg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
											</div>
										 </div>

										</div>
										 <div class="name-designation">
											 <h1 class="about-us-h1">Prakash</h1>
											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, PR and Hospitality</h1>
										 </div>
								 </div>
       <div class="col-3 col-4-medium col-6-small  col-12-xsmall">
								 									 <div class="about-us-container">
								 										<div class="about-us-circle" style="overflow:none;">
								 										 <div class="about-us-small-circle" style="overflow: hidden;">


								 											 <!-- <div class="quarter bottom-right"></div> -->
								 											<img src="/images/core20/BHAVANA.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
								 											</div>
								 										 </div>

								 										</div>
								 										 <div class="name-designation">
								 											 <h1 class="about-us-h1">Bhavana</h1>
								 											 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Social Responsibility</h1>
								 										 </div>
								 								 </div>

																											<div class="col-3 col-4-medium col-6-small  col-12-xsmall">
																																											<div class="about-us-container">
																																											 <div class="about-us-circle" style="overflow:none;">
																																												<div class="about-us-small-circle" style="overflow: hidden;">


																																													<!-- <div class="quarter bottom-right"></div> -->
																																												 <img src="/images/core20/MUKHESH.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
																																												 </div>
																																												</div>

																																											 </div>
																																												<div class="name-designation">
																																													<h1 class="about-us-h1">Mukhesh</h1>
																																													<h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Design</h1>
																																												</div>
																																										</div>
																																										<div class="col-3 col-4-medium col-6-small  col-12-xsmall">
																								 																																	 <div class="about-us-container">
																								 																																		<div class="about-us-circle" style="overflow:none;">
																								 																																		 <div class="about-us-small-circle" style="overflow: hidden;">


																								 																																			 <!-- <div class="quarter bottom-right"></div> -->
																								 																																			<img src="/images/core20/NAVEN S R.jpg" style="width:100%;height:100%;transform:rotate(-50deg);"  alt="">
																								 																																			</div>
																								 																																		 </div>

																								 																																		</div>
																								 																																		 <div class="name-designation">
																								 																																			 <h1 class="about-us-h1">Naven S R</h1>
																								 																																			 <h1 class="about-us-h1" style="font-size:1.55rem;color:#f44336;">Head, Webops</h1>
																								 																																		 </div>
																								 																																 </div>




            </div>
        </div>

      <!-- Footer -->
        <footer style="margin-bottom:0" id="footer">
          <ul class="copyright">
            <li>&copy; PROBE 2019. All rights reserved.</li>
          </ul>
        </footer>

    </div>
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
