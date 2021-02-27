<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Probe</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('css/base.css') }}">
   <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">  
   <link rel="stylesheet" href="{{ asset('css/index.css') }}"> 
   <link rel="stylesheet" href="{{ asset('/css/micon/css/micon.min.css') }}"> 
   <link rel="stylesheet" href="{{ asset('css/login.css') }}"  />

   <!-- script
   ================================================== -->
   <script src="js/modernizr.js"></script>
   <script src="js/pace.min.js"></script>

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
				<li><a title="">Events (Coming Soon)</a></li>
				<li><a href="/podcasts" title="">Podcasts</a></li>
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


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
				   <div class="header-presents">
						<a href="https://www.nitt.edu/home/academics/departments/ece/ece_association/" target="_blank">
							<img src="/images/ECEA_whitelogo.png">
						</a>
						<span>and</span>
						<a href="https://in.micron.com/" target="_blank">
							<img src="/images/Micron_whitelogo.png">
						</a>
						<span>presents<span>
					</div>
					   <h1 class="animate-intro">
						   Probe
						</h1>	
						<h3 class="animate-intro">
							<span style="--i:1;">T</span>
							<span style="--i:2;">h</span>
							<span style="--i:3;">e</span>
							<span style="--i:4;">&nbsp;</span>
							<span style="--i:5;">A</span>
							<span style="--i:6;">n</span>
							<span style="--i:7;">n</span>
							<span style="--i:8;">u</span>
							<span style="--i:9;">a</span>
							<span style="--i:10;">l</span>
							<span style="--i:11;">&nbsp;</span>
							<span style="--i:12;">E</span>
							<span style="--i:13;">C</span>
							<span style="--i:14;">E</span>
							<span style="--i:15;">&nbsp;</span>
							<span style="--i:16;">S</span>
							<span style="--i:17;">y</span>
							<span style="--i:18;">m</span>
							<span style="--i:19;">p</span>
							<span style="--i:20;">o</span>
							<span style="--i:21;">s</span>
							<span style="--i:22;">i</span>
							<span style="--i:23;">u</span>
							<span style="--i:24;">m</span>
							<span style="--i:25;">&nbsp;</span>
							<span style="--i:26;">o</span>
							<span style="--i:27;">f</span>
							<span style="--i:28;">&nbsp;</span>
							<span style="--i:29;">N</span>
							<span style="--i:30;">I</span>
							<span style="--i:31;">T</span>
							<span style="--i:32;">&nbsp;</span>
							<span style="--i:33;">T</span>
							<span style="--i:34;">R</span>
							<span style="--i:35;">I</span>
							<span style="--i:36;">C</span>
							<span style="--i:37;">H</span>
							<span style="--i:38;">Y</span>
							<!-- e Annual ECE Symposium of NIT Trichy -->
						</h3>
						
				  			<div class="more animate-intro">
							  	@if ($name = session('name'))
								<p style="color: rgba(242, 242, 242, 1)">Welcome {{ $name }}</p>
								@endif
								@if (!session('name'))
				  				<a class="button stroke" href="/register">
				  					Register
								  </a>
								  <a class="button stroke" href="/login">
									Sign  In
								</a>
								@endif
							  </div>
							

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		<ul class="home-social-list">
	      <li class="animate-intro">
	        	<a href="https://www.facebook.com/Probe.NITT/" target="_blank" ><i class="fa fa-facebook-square"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank"><i class="fa fa-linkedin"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="https://www.instagram.com/probe.nitt/" target="_blank"><i class="fa fa-instagram"></i></a>
	      </li>	      
	   </ul> <!-- end home-social-list -->	

	   <div class="scrolldown">
		<a href="#services" id="scrollAbout" class="scroll-icon smoothscroll">		
		   Scroll Down		   	
		   <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
		</a>
	</div>					
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->



   <!-- about
   ================================================== -->
   <section id="services">

   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-full">
   			
   				<!-- <h3>Services</h3> -->
   			   <h1>About Us</h1>
   			
   			   <p class="lead">Probe is the Annual International Technical Symposium of the Department of ECE, NIT Trichy. It's the biggest ECE symposium in India, 
					where it creates a learning platform in the latest fields and trends related to electronics and communication.</p>
   			
   	   </div> <!-- end col-full -->
   	</div> <!-- end row -->

   	<div class="row services-content">

   		<div class="services-list block-1-2 block-tab-full group">
	      	<div class="bgrid service-item animate-this">	
		   <a href="/events">
			  	 
	      		<span class="icon"><i class="mi mi-IOT"></i></span>            
	            <div class="service-content">
	            	<h3 class="h05">Events</h3> 

		            <!-- <p>We have 8 events rangeing from</p>	         		 -->
	         	</div> 	         	 
				 </a>

			</div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">	
				<a href="/workshops">
					<span class="icon"><i class="icon-settings"></i></span>                          

	            <div class="service-content">	
				<h3 class="h05">Workshops</h3>

		            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		 -->
	            </div>	                          
				</a>
			   </div> <!-- end bgrid -->

			   <div class="bgrid service-item animate-this">
			   <a href="/lectures">

			   	<span class="icon"><i class="icon-microphone"></i></span>		            

	            <div class="service-content">
				<h3 class="h05">Guest Lectures</h3>

		            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> -->
	            </div> 	            	               
				</a>
			   </div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">
				<a href="/podcasts">
					<span class="icon"><i class="icon-megaphone"></i></span>	              

	            <div class="service-content">
				<h3 class="h05">Podcasts</h3>

		            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		 -->
	            </div>                
				</a>
				</div> <!-- end bgrid -->			   

	      </div> <!-- end services-list -->
   		
   	</div> <!-- end services-content -->   			

   </section> <!-- end services -->


   <!-- portfolio
   ================================================== -->
   
   


	<!-- stats
   ================================================== -->
   <!-- <section id="clients">

		<div class="row animate-this">
			<div class="col-twelve">

				<div class="client-lists owl-carousel">
  					<div><img src="images/clients/mozilla.png" alt=""></div>
  					<div><img src="images/clients/bower.png" alt=""></div>
  					<div><img src="images/clients/codepen.png" alt=""></div>
  					<div><img src="images/clients/envato.png" alt=""></div>
  					<div><img src="images/clients/firefox.png" alt=""></div>
  					<div><img src="images/clients/grunt.png" alt=""></div>
  					<div><img src="images/clients/evernote.png" alt=""></div>
  					<div><img src="images/clients/github.png" alt=""></div>
  					<div><img src="images/clients/joomla.png" alt=""></div>
  					<div><img src="images/clients/jQuery.png" alt=""></div>
  					<div><img src="images/clients/wordpress.png" alt=""></div>
				</div>
				
			</div> 
			<!-- end col-twelve -->
		<!-- </div>  -->
		<!-- end row -->

   <!-- </section>  --> 
   <!-- end clients -->


	<!-- contact
   ================================================== -->
   


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
						<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank" >Linkedin</a></li>
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
   
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/index.js"></script>
   <script src="js/particles.js"></script>
	<script>
	   	window.onload = setTimeout(function() {
			var scrollToAbout = document.getElementById("scrollAbout");
			if(window.location.pathname=='/' && window.location.hash=='#services')
				scrollToAbout.click();
		} , 2000);
   </script> 

</body>

</html>