@if (($regbool==1 && $ispaid==1) || 0)
<script type="text/javascript">
    window.location = "{{ url('/workshops') }}"+"/"+"{{ $workshop }}";//here double curly bracket
</script>
@endif
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Workshop Registration | PROBE 2022</title>
		<meta name="description" content="">  
		<meta name="author" content="">

	<!-- mobile specific metas
	================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{ asset('css/base.css') }}"  />
	<link rel="stylesheet" href="{{ asset('css/vendor.css') }}"  />
	<link rel="stylesheet" href="{{ asset('css/signin.css') }}"  /> 
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
	<section id="contact" style="padding-top: 8rem;">
      

		<div class="row contact-content">

			<div class="col-seven tab-full animate-this">
				@if ($regbool!=1)
					<h2 class="major-header">{{ $workshop }} | Workshop registration</h2>
					<h5 style = "text-align: center;">Please enter registration details carefully. Details once entered can't be changed.</h5>
				@endif
				<!-- form -->
				@if ($message = session('message'))
					<p style="text-align: center;">{{ $message }}</p>
				@endif
				@if ($regbool!=1)
				<form method="post" action="{{action('UserController@regworkshop')}}">
					<div class="form-field">
						<input type="text" name="p1" id="p1" placeholder="Participant 1's PROBE ID" value="{{ session('pid') }}" required readonly/>
					</div>
					@if ($mc >= 2)
					<div class="form-field">
						<input type="text" name="p2" id="p2" placeholder="Participant 2's PROBE ID" />
					</div>
					@endif
					@if ($mc >= 3)
					<div class="form-field">
						<input type="text" name="p3" id="p3" placeholder="Participant 3's PROBE ID" />
					</div>
					@endif
					<div class="form-field">
						<input type="text" name="workshop" id="workshop" value="{{ $workshop }}" placeholder="workshop" required readonly/>
					</div>
					<div class="form-field">
						<button class="submitform">Register</button>
						<div id="submit-loader">
							<div class="text-loader">Sending...</div>                             
							<div class="s-loader">
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>
						</div>
					</div>
				</form>
				@endif
				@if ($ispaid==0 && $regbool==1)
					<h2 class="major-header">Complete your registration for the {{$workshop}} workshop by paying the registration fee (for the team) using the link below</h2>
					<div style="margin:auto;text-align: center;">
						<h5 id='registration-details'>Registration Details</h5>
						<p class='participant'>Participant 1: {{$p1}}</p>
						@if ($mc >= 2)
						<p class='participant'>Participant 2: {{$p2}}</p>
						@endif
						@if ($mc >= 3)
						<p class='participant'>Participant 3: {{$p3}}</p>
						@endif
						<strong>For successful payment, please use the email that is registered in this website.</strong><br/><br/>
						<button id="payment-btn" onclick="popup('{{$workshopCode}}');" class="tsbutton">Pay and complete registration</button><noscript id="tsNoJsMsg">Javascript on your browser is not enabled.</noscript><script src="https://www.townscript.com/static/Bookingflow/js/townscript-widget.nocache.js" type="text/javascript"></script>
					</div>
				@endif
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
    	<div id="loader">
		</div>
		</div>


			<!-- Java Script
		================================================== --> 
		

        <!-- Scripts -->
		<script>
			function getPreFilledDataTS(max_count){

				if(max_count==2){

					return {
						eventcode:    "{{ $ec }}",
						name:         "{{ session('name') }}",
						emailid:      "{{ session('email') }}",
						ticketname1:  "{{ $workshop }}",
						cq1:          "{{ $p1 }}",
						cq2:          "{{ $p2 }}",
						ticketvalue1: 1,
					}
						
				}

				if(max_count==3){

					return {
						eventcode:    "{{ $ec }}",
						name:         "{{ session('name') }}",
						emailid:      "{{ session('email') }}",
						ticketname1:  "{{ $workshop }}",
						cq1:          "{{ $p1 }}",
						cq2:          "{{ $p2 }}",
						cq3:          "{{ $p3 }}",
						ticketvalue1: 1,
					}
					
				}

				return {
					eventcode:    "{{ $ec }}",
					name:         "{{ session('name') }}",
					emailid:      "{{ session('email') }}",
					ticketname1:  "{{ $workshop }}",
					cq1:          "{{ $p1 }}",
					ticketvalue1: 1,
				}
			}
		</script>
		<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
		<script src="{{ asset('js/plugins.js') }}"></script>
		<script src="{{ asset('js/index.js') }}"></script>
		<script src="{{ asset('js/particles.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>
