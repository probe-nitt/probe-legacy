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
        <h1>CPU DESIGN USING VERILOG WORKSHOP</h1>
    </div>
    <div class="hero-nav__broughtby">
        <span>brought to you by</span>
        <a href="https://in.micron.com/" target="_blank">
            <img src="/images/Micron_whitelogo.png">
        </a>
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
    
    <div class="page">
    

<h1 data-splitting>Description</h1>

     <p>Ever wondered what goes on under the hood of a core i5 processor? What is in common between this multi-core, highly efficient processor and Intel's 8085, which came out in the year 1976? Probe '21 presents to you, the CPU Design workshop. Here we take you on a journey which teaches you not only the basics of computer architecture, but also the programming behind it all. Verilog, the logical programmer's best friend, will be covered extensively from ground up, providing you a peek into the, highly sought after, hardware industry. Throughout the workshop, you will also learn the core fundamentals of digital electronics which will all add up to your final task: BUILDING YOUR OWN CPU.</p>

<h1 data-splitting>Workshop details</h1>

    <ul>
		<li>Date: 12-03-2021 to 14-03-2021</li>
        <li>Duration: 3 days</li>
        
        <li>
        Timings: 5:30PM to 9:00PM (Day 0) <br>
           	     9:00AM to 5:00PM (Day 1,2)
        </li>

        <li>Fee : 150/-</li>
        <li>Platform: Microsoft Teams</li>
        <li>Team: Individual</li>
	</ul>

<h1 data-splitting id="faq-header">FAQ</h1>


            <ol>
                <li>Are there any prerequisites?</li>
                <span class='answer-faq'>The basics of Digital Electronics, Verilog and Computer Architecture will be covered in the session. So it's not required.</span>
                <li>What is the format of the workshop?</li>
                <span class='answer-faq'>Workshop is conducted for 3 days in Microsoft Teams, before the workshop every participant will be added into teams, all the meetings and discussion will be done in Microsoft Teams. </span>
                <li>Are laptops required?</li>
                <span class='answer-faq'>Yes. Every participant should have a laptop or computer.</span>
                <li>How should the workshop fee be paid? And will the fee be refunded in case I fail to attend?</li>
                <span class='answer-faq'>It should be paid online. Fees once paid is strictly non-refundable. Requests for refund will not be encouraged</span>
                <li>Is this limited to a particular branch or year?</li>
                <span class='answer-faq'>No. Any undergraduate or postgraduate student from any year can participate.</span>
                <li>What are the required softwares to be installed?</li>
                <span class='answer-faq'>Installation guide will be available after payment is complete.</span>
                <li>Can I pay you directly if we miss the deadline of payment in the worst case?</li>
                <span class='answer-faq'>No. The payments have to be done online. Only after the payment is done you can participate in the workshop.</span>
                <li>Is it a certified course?</li>
                <span class='answer-faq'>Yes. The participants will be given certificates from Probe on completion of the workshop.</span>
                <li>How do we receive the certificate?</li>
                <span class='answer-faq'>After the completion of the workshop certificate will be mailed to participants.</span>
                
            </ol>
            
            

            <h1 data-splitting class='contact-workshop'>Contacts</h1>

			<p>Vishwas: 7382548724</p>
			<p>Mukesh: 8608419656</p>
            
    </div>
    <br>
    <br>
    @if($regbool==0)
    <div class="wrap">
                <h1 data-splitting id="reg-message">Limited Registrations!</h1>
                <a class="button reg-btn" id="buttonz" href="/workshops/register?workshop=cpudesign">Register</a>
            
            </div>
    @endif
    @if($regbool==1 && $ispaid==0 )
    <div class="wrap">
               <h1 data-splitting id="reg-message">Limited Registrations!</h1>
               <a class="button pay-btn" id="buttonz" href="/workshops/register?workshop=cpudesign">Make payment</a>
            
    </div>
    @endif

    @if($regbool==1 && $ispaid==1 )
    <div class="wrap">
               
    <h1 data-splitting id="reg-message">Registered Successfully</h1>
    <a class="button" id="buttonz" href='/instructions/Verilog Workshop Instruction.pdf' download>Download instructions</a>
            
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