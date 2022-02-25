<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Guest Lectures | PROBE 2022</title>
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
				<li><a href="/about-us" title="">About Us</a></li>
				<li><a href="/workshops" title="">Workshops</a></li>
				<li><a href="/events" title="">Events</a></li>
				<li><a href="/guestlectures" title="">Guest Lectures</a></li>
				<li><a href="/podcasts" title="">Podcasts</a></li>
<li><a href="/combos" title="">Combos</a></li>
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
			<h5 id="title">Guest Lectures</h5>
		</div>
		<div id="events">				
			<div class="econtainer big">
				<h4>Personal Finance</h4>
				<h5>Kaushik Akiwatkar, <i>Head of Product, Elearnmarkets</i>
				</h5>
				
				<img src="/images/kaushik.jpg" >
				<p>
				Probe presents to you "Personal Finance", a Guest Lecture by Kaushik Akiwatkar! 
				<br>
				Mr. Kaushik Akiwatkaris is an academician, researcher, and financial market enthusiast currently working with Elearnmarkets as Head of Product with a vision to democratize financial education in the nation. He has spent over a decade in the field of education before joining Elearnmarket. In the past, he has worked with Rishihood University as Founding Director, Gujarat Technological University (GTU), Indian Institute of Management Ahmedabad (IIMA) and Youth Connect Magazine. Crash Course worth INR 999 is free for all the participants! Join us!
				</p>
				<span>
					Date: 26th February, 3 PM
					<br>
					Registration deadline: 26th February 11 AM
				</span>
				<button class="LM" ><a href="https://forms.gle/5YrSm4KZpBhiYJDq8">Register here</a></button>
			</div>
		</div>
		<div id="events">				
			<div class="econtainer big">
				<h4>SoC DFT - Silicon on Chip: Don’t Forget Test</h4>
				<h5>Chidambaram Ramaswamy, <i>Director of Engineering, Qualcomm</i>
				</h5>
				
				<img src="/images/Passport_Photo.JPG" >
				<p>We are delighted to present to you a Guest Lecture on "Silicon on Chip" organized in association with Qualcomm! The workshop will be conducted by Mr. Chidambaram Ramaswamy, currently a Director of Engineering at Qualcomm, Chennai, SoC Design Center (CDC) managing the Design Implementation vertical since 2016. He has more than 25 years of industry experience. He holds a Bachelor's degree in Computer Engineering from Thiagarajar College of Engineering, Madurai and a Masters degree in Computer Engineering from Wayne State University, Michigan. Join us to learn about the latest and trending technologies on SoC!</p>
				<span>
					Date: 26th February 10:30 AM
					<br>
					Registration deadline: 25th February
				</span>
				<button class="LM" ><a href="">Register here</a></button>
			</div>
		</div>

		<?php /*<div id="events">				
			<div class="econtainer big">
				<h4>Bad AI - current scary usages of AI</h4>
				<h5>Rehan Ahmad, <i>Head of AI team, Qualcomm</i>
				</h5>
				
				<img src="/images/rehan.png" >
				<p></p>
				<span>
					Date: 27th February, 2 PM
					<br>
					Registration deadline: 26th February
				</span>
				<button class="LM" ><a href="">Register here</a></button>
			</div>
		</div> */ ?>
		
	</section>
		<!-- footer
   ================================================== -->
 	<footer id="contacts">

     	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-five tab-full footer-about">       

	            <h4 class="h05">Contact Us</h4>

	            <ul class="list-links">
	      				<li>Akhil: +91 9381 332 279</li>
						<li>Pavan sai: +91 9573 514 613</li>
<li>Email: <a href="mailto:probe@nitt.edu">probe@nitt.edu</a></li>
												
					</ul>	            

		      </div> <!-- end footer-about -->

	      	<div class="col-three tab-full footer-social">

	      		<h4 class="h05">Follow us</h4>

	      		<ul class="list-links">
						<li><a href="https://www.instagram.com/probe.nitt/" target="_blank" >Instagram</a></li>
						<li><a href="https://www.facebook.com/Probe.NITT/" target="_blank" >Facebook</a></li>
						<li><a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank" >Linkedin</a></li>
						<li><a href="https://www.youtube.com/channel/UCIHhIMy1mdE5suJMN7lYT-w">Youtube</a></li>
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
		         	<span>© Copyright PROBE 2022</span> 
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

