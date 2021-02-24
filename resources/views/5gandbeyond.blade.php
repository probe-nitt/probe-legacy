<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Workshops | PROBE 2021</title>
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
        <h1>5G AND Beyond</h1>
    </div>
</div>
	<!-- header 
   ================================================== -->
   <header> 

   	<div class="header-logo">
	      <a href="/" style="position: fixed;">Probe</a>
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
    
    <div class="page">
    

<h1 data-splitting>Description</h1>
        <p>Are you enthralled by the evolution of G's in the field of communication? Do you want to know more about the buzz words 5G, Machine Learning and their relations with the wireless domain? Buckle up as Probe '21 brings you Demystifying Wireless Communication: 5G and Beyond workshop by Chandhar Research Labs. You will be learning how wireless technologies evolved with the Generations, from concepts in 2G till 5G, to practical experiments with signals captured from your home's nearby cellular towers! You will also be taken through the application of Deep Learning(DL) in RF systems for signal classification. Various DL models will be explained and used for a hands-on RF signal processing session.</p>

<h1 data-splitting>Important Dates</h1>

    <ul>
		<li>Date: 13-03-2021 to 14-03-2021</li>
        <li>Duration: 2 day</li>
        <li>Timings: 9:00AM to 5:00PM </li>
        <li>Fee : 250/-</li>
        <li>Platform: Microsoft Teams</li>
        <li>Team: Individual</li>
	</ul>

<h1 data-splitting>FAQ's</h1>


            <ul>
                <li>1) Are there any prerequisites?</li>
                <li>Yes, you need to be familiar with python programming. </li>
                <li>2) What is the format of the workshop?</li>
                <li>The workshop is conducted for two days in Microsoft Teams. Before the workshop, every participant will be added into teams, all the meetings and discussion will be done in Microsoft Teams. </li>
                <li>3) What are the requirements for the workshop?</li>
                <li>Every participant should have a smartphone for 4G measurements, Laptop/Computer for running Python programs and Kaggle account for running DL experiments. </li>
                <li>4) How should the workshop fee be paid? And will the fee be refunded in case I fail to attend?</li>
                <li>It should be paid online. Fees once paid is strictly non-refundable. Requests for a refund will not be encouraged</li>
                <li>5) Is this limited to a particular branch or year?</li>
                <li>No. Any undergraduate or postgraduate student from any year can participate.</li>
                <li>6) What are the required software to be installed?</li>
                <li>No software installation is required everything will be done in Kaggle</li>
                <li>7) Can I pay you directly if we miss the deadline of payment in the worst case?</li>
                <li>No. The payments have to be done online. Only after the payment is done you can participate in the workshop.</li>
                <li>8) Is it a certified course?</li>
                <li>Yes. The participants will be given certificates from the Probe and the company on completion of the workshop.</li>
                <li>9) How do we receive the certificate?</li>
                <li>After the completion of the workshop certificate will be mailed to participants.</li>
            </ul>
            
            

<h1 data-splitting>Contacts</h1>

			<p>Vishwas: 7382548724</p>
			<p>Mukesh: 8608419656</p>

            
    </div>
    <br>
    <br>
    @if($regbool==0)
    <div class="wrap">
            
                <a class="button" id="buttonz" href="/workshops/register?workshop=5G%20AND%20Beyond">Register</a>
            
            </div>
    @endif
    @if($regbool==1 && $ispaid==0 )
    <div class="wrap">
               
               <a class="button" id="buttonz" href="/workshops/register?workshop=5G%20AND%20Beyond">Make payment</a>
            
    </div>
    @endif

    @if($regbool==1 && $ispaid==1 )
    <div class="wrap">
               
               <a class="button" id="buttonz" href="#">Registered Successfully</a>
            
    </div>
    @endif
    	<!-- footer
   ================================================== -->
   <footer>

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

         <h4 class="h05">Follow Us.</h4>

         <ul class="list-links">
             <li><a href="https://www.facebook.com/Probe.NITT/" target="_blank" >Facebook</a></li>
               <li><a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank" >Linkedin</a></li>
               <li><a href="https://www.instagram.com/probe.nitt/" target="_blank" >Instagram</a></li>						
           </ul>

     </div> <!-- end footer-social -->  

     <div class="col-four tab-full footer-subscribe end">

         <h4 class="h05">Stay up to date.</h4>

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
<script src="{{ asset('js/app.js') }}"></script>

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