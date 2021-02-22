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
				<li><a href="#services" title="">About</a></li>
				<li><a href="/events" title="">Events</a></li>
				<li><a href="/workshops" title="">Workshops</a></li>
				<li><a href="/lectures" title="">Guest Lectures</a></li>
				<li><a href="/podcasts" title="">Podcasts</a></li>
				<li><a href="/contact" title="">Contact Us</a></li>
			</ul>	
			<ul style="text-align:center;" class="header-social-list">
	         <li>
	         	<a href="https://www.facebook.com/Probe.NITT/" target="_blank" ><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank" ><i class="fa fa-twitter"></i></a>
	         </li>
	         <li>
	         	<a href="https://www.instagram.com/probe.nitt/" target="_blank" ><i class="fa fa-instagram"></i></a>
			 </li>  
	      </ul>		
			
		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header --> 

	<section id="cards">
		<div id="events">
			<h5 style="font-size: 5rem;">Podcasts</h5>	
		</div>
        <div id="events">
            <div class="econtainer">
				<h5 style="font-size: 2rem;">S.Dasgupta</h5>
				<img src="/images/PODCASTS/dasGupta.png" >
				<p> <span style="font-size: 2rem;">H.O.D ECE,IIT ROORKEE</span></br>
					S. Dasgupta is presently working as a Professor and Head, in the Department of Electronics and Communication Engineering at the Indian Institute of Technology, Roorkee. He has authored/co-authored more than 250 research papers in peer-reviewed international journals and conferences. He is a member of EDS, ISTE, and an associate member of the Institute of Nanotechnology, UK. His areas of interest are Nanoelectronics, Nanoscale MOSFET modeling and simulation, Design and Development of low power novel devices, and development of reconfigurable logic, to name a few. He has won several awards to carry out his groundbreaking research. Dr. Dasgupta has also acted as a reviewer and member of 
					several technical committees of various international conferences.<br>
				</p>
			    <button class="LM"><a class="LM" href="https://open.spotify.com/episode/18lhLyqZg6q4wzSqGUTRuy">Spotify</a></button>
			</div>
		</div>
		<div id="events">				
			<div class="econtainer">
				<h5 style="font-size: 2rem;">Chandani Anand</h5>
				<img src="/images/PODCASTS/chandini.jpg" >
				<p> <span style="font-size: 2rem;">Staff Engineer(CMOS image sensors) SAMSUNG R&D INSTITUTE INDIA</span></br>
					Chandani Anand received her Ph.D. degree with the Image Sensors 
					Research Group, Electrical Engineering Department at IIT Delhi. 
					Currently, she is working with Samsung Semiconductor R&D Institute, 
					Bengaluru, India. She has designed and tested multiple prototype image sensors for time-of-flight 3D cameras during her Ph.D. and has contributed to designing various state-of-the-art commercial CMOS image sensors during her industry experience. She has published multiple papers in reputed IEEE Journals and conferences. She has received the best paper award and a travel grant in IEEE APCCAS 2016. Her professional interests include analog and mixed-signal circuit design for CMOS image sensors, time-of-flight cameras, and sensor applications.<br>
                </p>
				<button class="LM"><a class="LM" href="https://open.spotify.com/episode/5LuxOCmeJwcOsToKebNkkf?si=Sk75X0OLRX6w2WZeU2gOhQ&nd=1">Spotify</a></button>
			</div>
		</div>
		<div id="events">
            <div class="econtainer" >
				<h5 style="font-size: 2rem;">Shilpa Pandit</h5>
				<img src="/images/PODCASTS/shilpa.jpg" >
				<p> <span style="font-size: 1.8rem;">Co-Founder at Dreampath Foundation,Research and Evaluation,Technology and Social sector,Social policy</span></br>
					Shilpa Pandit, in her more than two-decade-long adventure, has primarily identified herself as a researcher in Psychology. During her work of 23 years, she has alternatively wandered and worked as a pilgrim and an exile in three actions: 
                   Teaching – social psychology, theories in psychology, and research methods. Researching and consulting on issues such as poverty, public policy relating to MGNREGA, associating with several organizations such as UNICEF, UNDP, to name a few. Founding - The organization - Dreampath Foundation, which has reached out to more than 15,000 students in 100 schools in Karnataka, through its workshops and a dedicated career helpline.
                    She has worked as a UNDP Research officer, on public policy relating to rural employment with the Ministry of Rural Development, she was also the Head- Monitoring and Evaluation, Hand in Hand(India), and was selected for the Chevening Fellowship (CRISP) at the University of Oxford, UK, for her leadership in the social sector.
                <br>
				</p>
                <button class="LM"><a class="LM" href="https://open.spotify.com/episode/1a960jAGYWB6POkk4OCLhq?si=3JzUlC0xQUW7gBOq0lzHUA&nd=1">Spotify</a></button>
			</div>
		</div>

		<div id="events">				
            <div class="econtainer">
				<h5 style="font-size: 2rem;">Sai Kamal</h5>
				<img src="/images/PODCASTS/saiKamal.jpg" >
				<p> <span style="font-size: 2rem;">MS in ECE at purdue university</span></br>
					Sai Kamal is an ongoing masters student and a Graduate 
					Teaching Assistant at Purdue University.
					He had previously worked on developing state of the 
					art NPUs (Neuromorphic Processing Units) in 
					Samsung Research Institute Bangalore for 2 years. 
					During the last summer he worked in Microsoft  BING FPGA 
					engineering team, where he worked on improving the efficiency of Neural function unit (NFU). 
					 He is currently specialising in the field of VLSI and Computer Engineering 
					 at Purdue. His professional interests include frontend design, computer architecture and hardware for machine learning.NITT - Chairman Probe, Vice President Apekshaa<br>
				</p>
				<button class="LM"><a class="LM" href="https://open.spotify.com/episode/1a960jAGYWB6POkk4OCLhq?si=3JzUlC0xQUW7gBOq0lzHUA&nd=1">Spotify</a></button>
			</div>
		</div>

	</section>
		<!-- footer
   ================================================== -->
   <footer>

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

	      		<h4 class="h05">Follow Us.</h4>

	      		<ul class="list-links">
	      			<li><a href="https://www.facebook.com/Probe.NITT/" target="_blank" >Facebook</a></li>
						<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank" >Twitter</a></li>
						<li><a href="https://www.instagram.com/probe.nitt/" target="_blank" >Instagram</a></li>						
					</ul>

	      	</div> <!-- end footer-social -->  

	      	<div class="col-four tab-full footer-subscribe end">

	      		<h4 class="h05">Stay up to date.</h4>

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
<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
