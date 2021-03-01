<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Podcasts | PROBE 2021</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('css/base.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/events.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/login.css') }}"  />


   <!-- script
   ================================================== -->
	<script src="{{ asset('js/modernizr.js') }}"></script>
	<script src="{{ asset('js/pace.min.js') }}"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header> 

   	<div class="header-logo">
	      <a href="/">Probe</a>
	   </div> 

		<a id="header-menu-trigger" href="#0">
		 	<span class="header-menu-text">Menu</span>
		  	<span class="header-menu-icon"></span>
		</a> 

				<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	   	<h3>Probe</h3>  

			<ul class="nav-list">
				@if ($name = session('name'))
				<li>{{ $name }}</li>
				<li><a href="/logout" class="login-button button">Log out</a></li>
				@endif
				@if (!session('name'))
					<li><a class="login-button button" href="/register">Sign up</a></li>
					<li><a class="login-button button"  href="/login">Log in</a></li>
				@endif
				<li class="current"><a href="/" title="">Home</a></li>
				<li><a href="/#services" title="">About</a></li>
				<li><a href="/workshops" title="">Workshops</a></li>
				<li><a href="/events" title="">Events</a></li>
				<li><a href="/lectures" title="">Guest Lectures</a></li>
				<li><a href="/podcasts" title="">Podcasts</a></li>
				<li><a href="/sponsors" title="">Sponsors</a></li>
				<li><a href="#contacts" title="">Contact Us</a></li>

			</ul>	
			<ul style="text-align:center;" class="header-social-list">
	         <li>
	         	<a href="https://www.facebook.com/Probe.NITT/" target="_blank" ><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank" ><i class="fa fa-linkedin"></i></a>
	         </li>
	         <li>
	         	<a href="https://www.instagram.com/probe.nitt/" target="_blank" ><i class="fa fa-instagram"></i></a>
			 </li>  
	      </ul>		
			
		</nav>  <!-- end #menu-nav-wrap -->
	</header> <!-- end header --> 

	<section id="cards">
		<div id="events">
			<h5 id="title">Probe FM 55.5</h5>	
		</div>
		<div id="events">				
			<div class="econtainer">
				<h5>Mr. Anil Agarwal</h5>
				<img src="/images/podcastPerson.jpg" >
				<p>Mr. Anil Agarwal is the Director of NVM System Quality and Reliability division at Micron Technology, Bangalore. After doing his masters study in Electrical Engineering at IIT Roorkie, he equipped himself with adequate industrial knowledge to rise from an application engineer to the Director of Quality and Reliability Engineering at SanDisk. He has a decade of experience in system design, quality and reliability engineering. Probe'21 in association with Micron presents Mr. Anil Agarwal for the upcoming podcast. Stay tuned!<br></p>
				<span>
					<div>
						<span class="micron-present">brought to you by</span>
						<a href="https://in.micron.com/" target="_blank">
							<img class="micron-img" src="/images/Micron_whitelogo.png">
						</a>
					</div>
				</span>
				<button class="LM"><a class="LM" href="#">Coming Soon</a></button>
			</div>
		</div>
        <div id="events">
            <div class="econtainer">
				<h5 style="font-size: 2rem;">Dr. S. Dasgupta</h5>
				<img src="/images/PODCASTS/dasGupta.png" >
				<p>Dr. S. Dasgupta is currently a Professor and the Head of the department of Electronics and Communication Engineering at IIT Roorkee. He has authored more than 250 research papers in peer-reviewed international journals and conferences. He is a member of various prestigious institutions like EDS, ISTE and Institute of Nanotechnology, UK. He is also a DAAD and Erasmus Mundus scholar. In this podcast he shares his wisdom about the future course of technology with us!<br>
				</p>
			    <button class="LM"><a class="LM" href="https://open.spotify.com/episode/18lhLyqZg6q4wzSqGUTRuy">Listen</a></button>
			</div>
		</div>
		<div id="events">				
			<div class="econtainer">
				<h5 style="font-size: 2rem;">Dr. Chandani Anand</h5>
				<img src="/images/PODCASTS/chandini.jpg" >
				<p>Dr. Chandani Anand is an engineer working at the Samsung Semiconductor R&D Institute, Bengaluru, India. She earned her Ph.D. degree from the Electrical Engineering Department at IIT Delhi. She has designed and tested multiple prototype image sensors for time-of-flight 3D cameras during her Ph.D. They are one of the first indigenous attempts towards developing depth sensing cameras in modern day smartphones. Tune in to listen to her experiences and learnings in life!<br>
                </p>
				<button class="LM"><a class="LM" href="https://open.spotify.com/episode/5LuxOCmeJwcOsToKebNkkf?si=Sk75X0OLRX6w2WZeU2gOhQ&nd=1">Listen</a></button>
			</div>
		</div>
		<div id="events">
            <div class="econtainer">
				<h5 style="font-size: 2rem;">Dr. Shilpa Ashok Pandit</h5>
				<img src="/images/PODCASTS/shilpa.jpg" >
				<p>Dr Shilpa Pandit, is a prominent researcher in Psychology. In her two decade long career in social psychology, she has been a researcher and consultant on issues such as poverty and contributing to public policy such as MGNREGA. She has worked with  UNICEF, UNDP prior to founding her own NGO Dreampath Foundation. Tune in to listen to the life lessons she has gained throughout her journey.
                <br>
				</p>
                <button class="LM"><a class="LM" href="https://open.spotify.com/episode/1a960jAGYWB6POkk4OCLhq?si=3JzUlC0xQUW7gBOq0lzHUA&nd=1">Listen</a></button>
			</div>
		</div>

		<div id="events">				
            <div class="econtainer">
				<h5 style="font-size: 2rem;">Mr. Sai Kamal</h5>
				<img src="/images/PODCASTS/saiKamal.jpg" >
				<p>Mr Sai Kamal is an ongoing masters student specialising in VLSI and computer engineering at Purdue University. He had previously worked on developing state of the art NPUs (Neuromorphic Processing Units) in Samsung Research Institute Bangalore for 2 years. He worked with the Microsoft BING FPGA engineering team, on improving the efficiency of Neural Function Unit (NFU) last summer. Listen from the ex-chairman of Probe himself on how the experiences in college helped in shaping his career and also about his journey from the corporate world to Purdue.<br>
				</p>
				<button class="LM"><a class="LM" href="https://open.spotify.com/episode/1a960jAGYWB6POkk4OCLhq?si=3JzUlC0xQUW7gBOq0lzHUA&nd=1">Listen</a></button>
			</div>
		</div>
	</section>
		<!-- footer
   ================================================== -->
 	<footer id="contacts">

     	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-five tab-full footer-about">       

	            <h4 class="h05">Contact Us</h4>

	            <ul class="list-links">
	      				<li>Devesh: +91 6301 924 908</li>
						<li>Surya: +91 98495 29201</li>
						<li>Nishant: +91 94456 38282</li>						
					</ul>	            

		      </div> <!-- end footer-about -->

	      	<div class="col-three tab-full footer-social">

	      		<h4 class="h05">Follow us</h4>

	      		<ul class="list-links">
	      			<li><a href="https://www.facebook.com/Probe.NITT/" target="_blank" >Facebook</a></li>
						<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank" >Twitter</a></li>
						<li><a href="https://www.instagram.com/probe.nitt/" target="_blank" >Instagram</a></li>						
					</ul>

	      	</div> <!-- end footer-social -->  

	      	<div class="col-four tab-full footer-subscribe end">

	      		<h4 class="h05">Stay up to date</h4>

	      		<p>Take a look at our <a href="https://medium.com/probe-nit-trichy">blog</a>.</p>
	      	           	
	      	</div> <!-- end footer-subscribe -->      	    

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

   	<div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Probe 2021</span> 
		         	<span>Built by Probe Webops and Design Teams</span>		         	
		         </div>		               
	      	</div>

      	</div>   	

      </div> <!-- end footer-bottom -->

      <div id="go-top">
		   <a title="Back to Top" href="#top">
		   	<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
		   </a>
		</div>		
   </footer>

<div id="preloader"> 
   <div id="loader"></div>
</div> 

<!-- Java Script
================================================== --> 
<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/particles.js') }}"></script>

</body>

</html>
