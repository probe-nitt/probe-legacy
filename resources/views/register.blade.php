<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>SignUp | PROBE 2021</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('css/base.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"  />
   <link rel="stylesheet" href="{{ asset('css/signup.css') }}"  /> 
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

<div id="particles-js"></div>

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

    <section id="contact">
      

   	<div class="row contact-content">

   		<div class="col-seven tab-full animate-this">
           @if ($message = session('message'))
                <p style="text-align: center;">{{ $message }}</p>
            @endif
   			<h5 id="title">Registration</h5>

            <!-- form -->
            <form name="registerForm" id="registerForm" method="POST" action="{{action('UserController@register')}}" >     			

               <label for="sampleInput" style="color: white;">Your name</label>
               <div  class="form-field">
 					   <input name="name" type="text" id="Name" placeholder="Name" value="" minlength="5" required="">
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
                  <div class="custom-select" style="color: white;">
                     <select name="gender" list="Gender" class="full-width select-menu-signup" placeholder="Gender" required="">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="other">Others</option>
                     </select>                 
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
                  <div class="custom-select" style="color: white;">
                     <select name="yos" list="Year" class="full-width select-menu-signup" placeholder="Year" id="sampleRecipientInput" required="">
                        <option value="1st">1st year</option>
                        <option value="2nd">2nd year</option>
                        <option value="3rd">3rd year</option>
                        <option value="4th">4th year</option>
                     </select>  
                  </div>			         	
             </div>

             <label for="sampleInput" style="color: white;">Phone number</label>
             <div class="form-field">
               <input  name="phoneno" type="tel" id="Phone" placeholder="123567890" value="" minlength="10" maxlength="10" required="" style="color: white; width: 100%;">
            </div>

            <label class="add-bottom" style="display:none;">
               <input type="checkbox" name="acco">	            
               <span class="label-text" style="color: white;">Do you need Accomodation?</span>
            </label>

            <div class="form-field">
               <button class="submitform" type="submit" value="Register">Register</button>

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
   <script>
      document.addEventListener("DOMContentLoaded", function(event) {
         var x, i, j, l, ll, selElmnt, a, b, c;
         x = document.getElementsByClassName("custom-select");
         l = x.length;
         for (i = 0; i < l; i++) {
         selElmnt = x[i].getElementsByTagName("select")[0];
         ll = selElmnt.length;
         a = document.createElement("DIV");
         a.setAttribute("class", "select-selected");
         a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
         x[i].appendChild(a);
         b = document.createElement("DIV");
         b.setAttribute("class", "select-items select-hide");
         for (j = 0; j < ll; j++) {
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
               var y, i, k, s, h, sl, yl;
               s = this.parentNode.parentNode.getElementsByTagName("select")[0];
               sl = s.length;
               h = this.parentNode.previousSibling;
               for (i = 0; i < sl; i++) {
                  if (s.options[i].innerHTML == this.innerHTML) {
                     s.selectedIndex = i;
                     h.innerHTML = this.innerHTML;
                     y = this.parentNode.getElementsByClassName("same-as-selected");
                     yl = y.length;
                     for (k = 0; k < yl; k++) {
                     y[k].removeAttribute("class");
                     }
                     this.setAttribute("class", "same-as-selected");
                     break;
                  }
               }
               h.click();
            });
            b.appendChild(c);
         }
         x[i].appendChild(b);
         a.addEventListener("click", function(e) {
               e.stopPropagation();
               closeAllSelect(this);
               this.nextSibling.classList.toggle("select-hide");
               this.classList.toggle("select-arrow-active");
            });
         }
         function closeAllSelect(elmnt) {
         var x, y, i, xl, yl, arrNo = [];
         x = document.getElementsByClassName("select-items");
         y = document.getElementsByClassName("select-selected");
         xl = x.length;
         yl = y.length;
         for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
               arrNo.push(i)
            } else {
               y[i].classList.remove("select-arrow-active");
            }
         }
         for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
               x[i].classList.add("select-hide");
            }
         }
         }
         document.addEventListener("click", closeAllSelect);
      });
      
   </script>
    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
