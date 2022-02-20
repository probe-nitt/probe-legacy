<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Workshops | PROBE 2022</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/events.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/eventsnew.css') }}" />

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
            <h1 style="text-align:center;">VIDEO CALL INTERFACE WORKSHOP</h1>
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
                <li><a class="login-button button" href="/login">Log in</a></li>
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
                    <a href="https://www.facebook.com/Probe.NITT/" target="_blank"><i class="fa fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/probe.nitt/" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>

        </nav> <!-- end #menu-nav-wrap -->

    </header> <!-- end header -->

    <div class="page">



        <h1 data-splitting>Description</h1>
        <p>
        Have you ever wondered how the video chat applications you use daily, such as MS Teams, Zoom, etc., work? Can you believe that you can create your own video chat application and use it to call your family and friends?
        </p>
        <p>
        Well, without further ado, here we are, presenting a workshop on programming with sockets and implementing a video call application that works over the internet! What are you waiting for? Join us in this workshop to learn how to create a server and client nodes, use various protocols to transfer video and audio, and much more!
        </p>

        <h1 data-splitting>Workshop details</h1>

        <ul>
            <li>Date: 27th February (Session 1 + Session 2)
            <li>Duration: 1 day</li>
            <li>Timings: 
                <ul>
                    <li>Session 1: 9:30 AM - 12:30 PM</li>
                    <li>Session 2: 2:00 PM - 5:00 PM</li>
                </ul>
            <li>Fee : 200 INR</li>
            <li>Platform: Microsoft Teams</li>
            <li>Team: Individual</li>
        </ul>

        <h1 data-splitting>Key takeaways:</h1>
        <ul>
            <li>Hands on experience</li>
            <li>Presentations</li>
            <li>Project implementation</li>
            <li>Resources</li>
            <li>Certificate</li>
        </ul>

        <h1 data-splitting>EARLY BIRD OFFER</h1>
        <ul>
            <li><strike>200</strike> 175 INR</li>
            <li>Valid till Feb 18th</li>
        </ul>

        <h1 data-splitting id="faq-header">FAQ</h1>

        <ol>
            <li>What is the format of the workshop?</li>
            <span class='answer-faq'>Workshop is conducted in Microsoft Teams, before the workshop every participant will be added into teams, all the meetings and discussion will be done in Microsoft Teams. </span>
            <li>Are there any prerequisites for the workshop?</li>
            <span class='answer-faq'>No need for any prerequisites, all the concepts will be taught from basics.</span>
            <li>Is this limited to students?</li>
            <span class='answer-faq'>No. Any UG, PG Students or working professionals can participate.</span>
            <li>Is it a certified course?</li>
            <span class='answer-faq'>Yes. The participants will be given certificates on completion of the workshop.</span>
            <li>How do we receive the certificate?</li>
            <span class='answer-faq'>After the completion of the workshop, certificate will be mailed to participants.</span>
        </ol>

        <h1 data-splitting>Workshop heads:</h1>

        <ul class="list-links">
            <li>Raghavender: +91 96400 12088</li>
            <li>Sentilnathan: +91 70948 48375</li>
            <li>Vivek: +91 74409 39693</li>
        </ul>
    </div>
    <br>
    <br>
    @if($regopen==1 && $regbool==1 && $ispaid==0 )
    <div class="wrap">
        <h1 data-splitting id="reg-message">Limited Registrations!</h1>
        <a class="button pay-btn" id="buttonz" href="/workshops/register?workshop={{$workshop}}">Make payment</a>
    </div>
    @endif

    @if($regbool==1 && $ispaid==1 )
    <div class="wrap">
        <h1 data-splitting id="reg-message">Registered Successfully</h1>
    </div>
    @endif

    @if($regopen==1 && $regbool==0)
    <div class="wrap">
        <h1 data-splitting id="reg-message">Limited Registrations!</h1>
        <a class="button pay-btn" id="buttonz" href="/workshops/register?workshop={{$workshop}}">Register now</a>
    </div>
    @endif
    @if($regopen==0 && $ispaid==0)
    <div class="wrap">
        <h1 data-splitting id="reg-message">Registrations Full!</h1>
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
                        <li><a href="https://www.instagram.com/probe.nitt/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.facebook.com/Probe.NITT/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.linkedin.com/company/probe-nit-trichy/" target="_blank">Linkedin</a></li>
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
