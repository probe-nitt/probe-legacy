<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>SignIn | PROBE 2020</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	@if ($name = session('name'))
    <link rel="stylesheet" href="{{ asset('css/main-loggedin.css') }}"  />
    @endif
 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('css/base.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/signin.css') }}"  /> 

   <!-- script
   ================================================== -->
   <script src="{{ asset('js/modernizr.js') }}"></script>
	<script src="{{ asset('js/pace.min.js') }}"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<div id="particles-js"></div>

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
               <li><a href="/logout" class="applyFont logoutBtn">Log out</a></li>
            @endif
            @if (!session('name'))
               <li><a class="applyFont" href="/register">Sign up</a></li>
               <li><a class="applyFont" href="/login">Log in</a></li>
            @endif        
	      </ul>			

		</nav>  <!-- end #menu-nav-wrap -->

    </header> <!-- end header -->  

    <section id="contact">
      

   	<div class="row contact-content">

   		<div class="col-seven tab-full animate-this">

   			<h5>Sign In</h5>

			<!-- form -->
			@if ($message = session('message'))
				<p style="text-align: center;">{{ $message }}</p>
			@endif
            <form name="loginForm" id="loginForm"  method="POST" action="{{action('UserController@login')}}">		

               <div class="form-field">
			   			<input type="email" name="email" id="email" required />
               </div>
                                         
               <div class="form-field">
                  <input name="password" type="password" id="password" placeholder="password" value="" minlength="8" required="">
              </div> 

               <div class="form-field">
                  <button class="submitform">Sign In</button>

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

            <div class="alert-box ss-error hideit" id="message-warning">
               <p>Error Message. Your Message Goes Here.</p>
               <i class="fa fa-times close"></i>
            </div><!-- /error --> 

            <!-- <div class="alert-box ss-success hideit" id="mmessage-success">
               <p>Success Message. Your Message Goes Here.</p>
               <i class="fa fa-times close"></i>
             </div>/success -->

         </div> <!-- end col-seven --> 

   	</div> <!-- end row contact-content -->
		
	</section> <!-- end contact -->


 
         <ul class="home-social-list">
           <li class="animate-intro">
                 <a href="#"><i class="fa fa-facebook-square"></i></a>
           </li>
           <li class="animate-intro">
                 <a href="#"><i class="fa fa-twitter"></i></a>
           </li>
           <li class="animate-intro">
                 <a href="#"><i class="fa fa-instagram"></i></a>
           </li>	      
        </ul> <!-- end home-social-list -->	
 
         			
    
    </section> <!-- end home -->

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