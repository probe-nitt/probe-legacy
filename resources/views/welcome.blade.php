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
	      <a href="index.html">Probe</a>
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
			  		
					   <h1 class="animate-intro">
						   Probe
						</h1>	
						<h3 class="animate-intro">The Annual ECE Symposium of NIT Trichy</h3>
						
				  			<div class="more animate-intro">
				  				<a class="button stroke" href="/register">
				  					Register
								  </a>
								  <a class="button stroke" href="/login">
									Sign  In
								</a>
							  </div>
							

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		<ul class="home-social-list">
	      <li class="animate-intro">
	        	<a href="https://www.facebook.com/Probe.NITT/"><i class="fa fa-facebook-square"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="https://www.linkedin.com/company/probe-nit-trichy/"><i class="fa fa-linkedin"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="https://www.instagram.com/probe.nitt/"><i class="fa fa-instagram"></i></a>
	      </li>	      
	   </ul> <!-- end home-social-list -->	

	   <div class="scrolldown">
		<a href="#about" class="scroll-icon smoothscroll">		
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
   			   <h1>What We Do.</h1>
   			
   			   <p class="lead">We here at Probe, conduct World class Events and Workshops counducted by Professionals from various Organizations and Industries.</p>
   			
   	   </div> <!-- end col-full -->
   	</div> <!-- end row -->

   	<div class="row services-content">

   		<div class="services-list block-1-2 block-tab-full group">

	      	<div class="bgrid service-item animate-this">	

	      		<span class="icon"><i class="mi mi-IOT"></i></span>            

	            <div class="service-content">
	            	<a href="#"> <h3 class="h05">Events</h3> </a>

		            <!-- <p>We have 8 events rangeing from</p>	         		 -->
	         	</div> 	         	 

				</div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">	

					<span class="icon"><i class="icon-settings"></i></span>                          

	            <div class="service-content">	
				<a href="#"><h3 class="h05">Workshops</h3>  </a>

		            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		 -->
	            </div>	                          

			   </div> <!-- end bgrid -->

			   <div class="bgrid service-item animate-this">

			   	<span class="icon"><i class="icon-microphone"></i></span>		            

	            <div class="service-content">
				<a href="#"><h3 class="h05">Guest Lectures</h3> </a>

		            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> -->
	            </div> 	            	               

			   </div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">

					<span class="icon"><i class="icon-megaphone"></i></span>	              

	            <div class="service-content">
				<a href="#"><h3 class="h05">Marketing</h3> </a>

		            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		 -->
	            </div>                

				</div> <!-- end bgrid -->			   

	      </div> <!-- end services-list -->
   		
   	</div> <!-- end services-content -->   			

   </section> <!-- end services -->


   <!-- portfolio
   ================================================== -->
   
   


	<!-- stats
   ================================================== -->
   <section id="clients">

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
				
			</div> <!-- end col-twelve -->
		</div> <!-- end row -->

   </section> <!-- end clients -->


	<!-- contact
   ================================================== -->
   <section id="contact">

      <div class="overlay"></div>

		<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-twelve">
   			<h3>Contact</h3>
   			<h1>Get In Touch.</h1>

   			<!-- <p class="lead">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p> -->
   		</div> 
   	</div> <!-- end section-intro -->

   	<div class="row contact-content">

   		<div class="col-seven tab-full animate-this">

   			<h5>Send Us A Message</h5>

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post">     			

               <div class="form-field">
 					   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
               </div>

               <div class="row">
                 	<div class="col-six tab-full">
                 		<div class="form-field">
                 			<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                 		</div>		      			   
		            </div>
	            	<div class="col-six tab-full">	            
	            		<div class="form-field">
	            			<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	                  </div>		     				   
		            </div>
               </div>
                                         
               <div class="form-field">
	              	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	            </div> 

               <div class="form-field">
                  <button class="submitform">Submit</button>

                  <div id="submit-loader">
                     <div class="text-loader">Sending...</div>                             
       			      <div class="s-loader">
							  	<div class="bounce1"></div>
							  	<div class="bounce2"></div>
							  	<div class="bounce3"></div>
							</div>
						</div>
               </div>

      		</form> <!-- end form -->

            <!-- contact-warning -->
            <div id="message-warning"></div> 

            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- end col-seven --> 

         <div class="col-four tab-full contact-info end animate-this">

         	<h5>Contact Information</h5>

         	<div class="cinfo">
	   			<h6>Where to Find Us</h6>
	   			<p>
	            	1600 Amphitheatre Parkway<br>
	            	Mountain View, CA<br>
	            	94043 US
	            </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo">
	   			<h6>Email Us At</h6>
	   			<p>
	   				someone@Probesite.com<br>
				   	info@Probesite.com			     
				   </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo">
	   			<h6>Call Us At</h6>
	   			<p>
	   				Phone: (+63) 555 1212<br>
				   	Mobile: (+63) 555 0100<br>
				     	Fax: (+63) 555 0101
				   </p>
	   		</div>

         </div> <!-- end cinfo --> 

   	</div> <!-- end row contact-content -->
		
	</section> <!-- end contact -->


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

	      		<h4 class="h05">Get Notified.</h4>a

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
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/index.js"></script>
   <script src="js/particles.js"></script>
   <script src="js/app.js"></script>


</body>

</html>