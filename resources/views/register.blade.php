<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>SignUp | PROBE 2020</title>
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
   <link rel="stylesheet" href="{{ asset('css/signup.css') }}"  /> 

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

   <div id="particles-js"></div>

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
           @if ($message = session('message'))
                <p style="text-align: center;">{{ $message }}</p>
            @endif
   			<h5>Registration</h5>

            <!-- form -->
            <form name="registerForm" id="registerForm" method="POST" action="{{action('UserController@register')}}" >     			

               <label for="sampleInput" style="color: white;">Your name</label>
               <div  class="form-field">
 					   <input name="name" type="text" id="Name" placeholder="Harish Raj" value="" minlength="5" required="">
               </div>

               <label for="sampleInput" style="color: white;">Your E-mail ID</label>
               <div class="form-field">
                  <input name="email" type="email" id="E-mail" placeholder="abc@gmail.com" value="" minlength="5" required="">
               </div>
                                         
               <label for="sampleInput" style="color: white;">Password</label>
               <div class="form-field">
                  <input name="password" type="password" id="Password" placeholder="Atleast 8 letters" value="" minlength="8" required="">
               </div> 

               <label for="sampleInput" style="color: white;">Re-type Password</label>
               <div class="form-field">
                  <input name="password" type="password" id="Password" placeholder="Re-type Password" value="" minlength="8" required="">
               </div> 
               
               <label for="sampleInput" style="color: white;">Gender</label>
               <div class="form-field">
                  <div class="ss-custom-select" style="color: white;">
                     <input type="text" name="gender" list="Gender" class="full-width" id="sampleRecipientInput" required="">
                     <datalist id="Gender">
                        <option value="Female"></option>
                        <option value="Male"></option>
                        <option value="Others"></option>
                     </datalist>                  
                  </input>
                  </div>			         	
               </div>

               <label for="sampleInput" style="color: white;">College name</label>
               <div class="form-field">
                  <input name="cn" type="text" id="College Name" placeholder="College Name" value="" minlength="5" required="">
               </div>

               <label for="sampleInput" style="color: white;">Department</label>
               <div class="form-field">
                  <input name="dept" type="text" id="Department" placeholder="Department" value="" required="">
               </div>

               <label for="sampleInput" style="color: white;">Year of Study</label>
               <div class="form-field">
                  <div class="ss-custom-select" style="color: white;">
                     <input type="text" name="yos" list="Year" class="full-width" id="sampleRecipientInput" required="">
                     <datalist id="Year">
                        <option value="1st"></option>
                        <option value="2nd"></option>
                        <option value="3rd"></option>
                        <option value="4th"></option>
                     </datalist>  
                  </div>			         	
             </div>

             <label for="sampleInput" style="color: white;">Phone number</label>
             <div class="form-field">
               <input  name="phoneno" type="tel" id="Phone" placeholder="123567890" value="" minlength="10" maxlength="10" required="" style="color: white; width: 100%;">
            </div>

            <label class="add-bottom">
               <input type="checkbox" name="acco">	            
               <span class="label-text" style="color: white;">Do you need Accomodation?</span>
            </label>

            <div class="form-field">
               <button class="submitform" type="submit" value="Register">Sign In</button>

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
    
    </section> <!-- end home -->

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
