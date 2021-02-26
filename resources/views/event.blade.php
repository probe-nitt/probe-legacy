<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Events | PROBE 2021</title>
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

	<section id="cards">
		<div id="events">
			<h5 id="title">Events</h5>	
		</div>
		<div id="events">				
			<div class="econtainer">
				<h5 style="font-size: 2rem;">Cryptech</h5>
				<img src="/images/EVENTS/bullseye.jpg" >
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore 
					magna aliqua. Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					 <span>Number of Participants: </span>#<br>
					<span>Date:</span> dd-mm-yyyy</p>
				<button class="LM"><a class="LM" href="events/cryptech">Learn More</a></button>
			</div>
		</div>
		<div id="events">
			<div class="econtainer">
				<h5 style="font-size: 2rem;">Event name</h5>
				<img src="/images/EVENTS/bullseye.jpg" >
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore 
					magna aliqua. Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					<span>Number of Participants: </span>#<br>
					<span>Date:</span> dd-mm-yyyy</p>
				<button class="LM">Learn More</button>
			</div>
		</div>
		<div id="events">
			<div class="econtainer">
				<h5 style="font-size: 2rem;">Event name</h5>
				<img src="/images/EVENTS/bullseye.jpg" >
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore 
					magna aliqua. Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					<span>Number of Participants: </span>#<br>
					<span>Date:</span> dd-mm-yyyy</p>
				<button class="LM">Learn More</button>
			</div>
		</div>

		<div id="events">				
			<div class="econtainer">
				<h5 style="font-size: 2rem;">Event name</h5>
				<img src="/images/EVENTS/bullseye.jpg" >
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore 
					magna aliqua. Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					<span>Number of Participants: </span>#<br>
					<span>Date:</span> dd-mm-yyyy</p>
				<button class="LM">Learn More</button>
			</div>
		</div>
		<div id="events">
			<div class="econtainer">
				<h5 style="font-size: 2rem;">Event name</h5>
				<img src="/images/EVENTS/bullseye.jpg" >
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore 
					magna aliqua. Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					<span>Number of Participants: </span>#<br>
					<span>Date:</span> dd-mm-yyyy</p>
				<button class="LM">Learn More</button>
			</div>
		</div>
		<div id="events">
			<div class="econtainer">
				<h5 style="font-size: 2rem;">Event name</h5>
				<img src="/images/EVENTS/bullseye.jpg" >
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore 
					magna aliqua. Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
					<span>Number of Participants: </span>#<br>
					<span>Date:</span> dd-mm-yyyy</p>
				<button class="LM">Learn More</button>
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
<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/particles.js') }}"></script>

</body>

</html>
