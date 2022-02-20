<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Events | PROBE 2022</title>
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
   <link rel="stylesheet" href="{{ asset('css/eventsnew.css') }}"  />
   <!-- Link sheets for splitting -->
   <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
    <link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />

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
<div class="hero-nav">
    <div class="hero-nav__inner">
        <h1>ProbeIT</h1>
    </div>
</div>
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
				<li><a href="/lectures" title="">Guest Lectures</a></li>
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
    
    <div class="page">
    

<h1 data-splitting>Description</h1>
        <p>Surely many of us must have wondered about the working of devices ranging from a simple
            remote to complex processors in our palms. The necessity to develop better devices makes us break
            old boundaries. We're sure many of you would have been developing your acumen for electronics and
            waiting for the right time to come to showcase it. Join us in "ProbeIT" to test your knowledge through
            exciting Quiz about general electronics.
        </p>

<h1 data-splitting>Important Details</h1>
<ul>
    <li>12th March 2021 (6:00 – 6:15 pm)</li>
</ul>
    <!-- <li>Registration cost : 25/-</li> -->
    <h1 data-splitting>Prizes</h1>
    <ul>
        <li>Prizes worth 6,000 INR for Top 3 teams.</li>
        <li>Participation Certificates will be provided.</li>
    </ul>
     <h1 data-splitting>Rules</h1>
    <ul>
        <li>This is an individual event.</li>
        <li>Decision by the event organizers will be the ultimate.</li>
    </ul>    
   


<h1 data-splitting id="faq-header">FAQ</h1>


        <ol>
            <li>On which platform is the event conducted?</li>
            <span class='answer-faq'>MS Forms</span>
        </ol>
        
<h1 data-splitting class='contact-workshop'>Contacts</h1>

<p>Email: <b><a href="mailto:probe.events2021@gmail.com">probe.events2021@gmail.com</a></b></p>
			<p>Purushothaman: +91 8825573900</p>
			<p>Kiran Raj Karthi: +91 9940555314</p>

            
    </div>
    <br>
    <br>
    @if($regbool==0)
    <div class="wrap">
                <h1 data-splitting id="reg-message">Registrations Closed</h1>            
            </div>
    @endif
    @if($regbool==1 )
    <div class="wrap">

            <h1 data-splitting id="reg-message">Registered Successfully</h1>
                <a class="button eventbtn" id="buttonz" href='https://forms.office.com/Pages/ResponsePage.aspx?id=p1CEoozbM0yRKkQzEbIt21wF0FvSSI5Mqj_gmGLRE_lURElCRjYwVjFFV1NWUjVJN0tLU0dFMktLMS4u'>ENTER EVENT</a>

    </div>
    @endif

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

<!-- CDNs for splitting.js and scroll-out.js -->
<script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>

<script>
    Splitting();
    ScrollOut({
   targets: '[data-splitting]'
});
var heroShinker = function() {
    var hero = $('.hero-nav'),
        heroHeight = $('.hero-nav').outerHeight(true);
        $(hero).parent().css('padding-top', heroHeight);
    $(window).scroll(function() {
        var scrollOffset = $(window).scrollTop();
        if (scrollOffset < heroHeight) {
            $(hero).css('height', (heroHeight - scrollOffset));
        }
        if (scrollOffset > (heroHeight - 215)) {
            hero.addClass('fixme');
        } else {
            hero.removeClass('fixme');
        };
    });
}
heroShinker();
</script>
</body>

</html>
