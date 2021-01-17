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
    @if ($name = session('name'))
		<link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
	@endif
   <link rel="stylesheet" href="{{ asset('css/base.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/events.css') }}"  />

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
				<li class="current"><a href="/" title="">Home</a></li>
				<li><a href="/about" title="">About</a></li>
				<li><a href="/events" title="">Events</a></li>
				<li><a href="/workshops" title="">Workshops</a></li>
				<li><a href="/lectures" title="">Guest Lectures</a></li>
				<li><a href="/gallery" title="">Gallery</a></li>
				<li><a href="/contact" title="">Contact</a></li>					
			</ul>	
			<ul style="text-align:center;" class="header-social-list">
	         <li>
	         	<a href="#"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-twitter"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-instagram"></i></a>
			 </li>
			 @if ($name = session('name'))
				<li>{{ $name }}</li>
				<li><a href="/logout" class="button primary">Log out</a></li>
			@endif
			@if (!session('name'))
				<li><a href="/register">Sign up</a></li>
				<li><a href="/login">Log in</a></li>
			@endif         
	      </ul>		

		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header --> 

	<section id="cards">
		<div id="events">
			<h5 style="font-size: 5rem;">Events</h5>	
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
   <footer>

	<div class="footer-main">

	  <div class="row">  

		 <div class="col-five tab-full footer-about">       

		   <h4 class="h05">Probe.</h4>

		   <p>Probe is the Annual International Technical Symposium of the Department of ECE, NIT Trichy.It's the biggest ECE symposium in India, 
			   where it creates a learning platform in the latest fields and trends related to electronics and communication.</p>	            

		 </div> <!-- end footer-about -->

		 <div class="col-three tab-full footer-social">

			 <h4 class="h05">Follow Us.</h4>

			 <ul class="list-links">
				 <li><a href="#">Facebook</a></li>
				   <li><a href="#">Twitter</a></li>
				   <li><a href="#">Instagram</a></li>						
			   </ul>

		 </div> <!-- end footer-social -->  

		 <div class="col-four tab-full footer-subscribe end">

			 <h4 class="h05">Get Notified.</h4>

			 <p>Sign up for our weekly NewsLetter</p>

			 <div class="subscribe-form">
		 
				 <form id="mc-form" class="group" novalidate="true">

					   <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email" required=""> 
		  
					  <!-- <input type="submit" name="subscribe" > -->
					  <button><i class="icon-mail"></i></button>
		  
					  <label for="mc-email" class="subscribe-message"></label>
	   
				   </form>

			 </div>
						
		 </div> <!-- end footer-subscribe -->      	    

	 </div> <!-- end row -->

  </div> <!-- end footer-main -->

  <div class="footer-bottom">

	 <div class="row">

		 <div class="col-twelve">
			 <div class="copyright">
				<span>© Copyright Probe 2021.</span> 
				<span>Design by Design and  WebDev Team of Probe</span>		         	
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
