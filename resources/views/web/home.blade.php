<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Swagat Paper</title>

	<meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="{{url('public/web/assets/stylesheet/bootstrap.min.css')}}">

	<!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{url('public/web/assets/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/web/assets/revolution/css/settings.css')}}">

	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="{{url('public/web/assets/stylesheet/style.css')}}">

	<!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{url('public/web/assets/stylesheet/colors/color1.css')}}" id="colors">

	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="{{url('public/web/assets/stylesheet/responsive.css')}}">

    <link href="{{url('public/web/assets/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{url('public/web/assets/icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{url('public/web/assets/icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{url('public/web/assets/icon/swagat.png')}}" rel="shortcut icon" type="image" >
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
</head>
	<body>
        <main>
            <!-- Preloader -->
            <div id="loading-overlay">
                <div class="loader"></div>
            </div>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    {{-- <a class="navbar-brand" href="index.html">
                        Festava Live
                    </a> --}}

                    <div id="logo" class="logo">
                        <a href="{{route('home')}}" title="">
                            <img class="logo-img" src="{{url('public/web/assets/images/swagat.png')}}" alt="logo Finance Business" />
                        </a>
                    </div>

                    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> --}}
                    <div class="btn-menu">
                        <span></span>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                            <li class="nav-item {{ Request::segment(1) == 'home' ? 'active' : '' }}">
                                <a class="nav-link click-scroll" href="{{route('home')}}">Home</a>
                            </li>

                            <li class="nav-item {{ Request::segment(1) == 'about' ? 'active' : '' }}">
                                <a class="nav-link click-scroll" href="{{route('about')}}">About</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Artists</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_6">Contact</a>
                            </li> --}}

                            <li class="nav-item {{ Request::segment(1) == 'product' ? 'active' : ''}}">
                                <a class="nav-link click-scroll" href="#" title="">PRODUCTS</a>
                                <ul class="sub-menu">
                                    <li><a class="nav-link click-scroll" href="{{route('product.kraft-paper')}}" title="">Kraft Paper</a></li>
                                    <li><a class="nav-link click-scroll" href="{{route('product.duplex-board')}}" title="">Duplex Board</a></li>
                                </ul>
                            </li>
                            <li class="nav-item {{ Request::segment(1) == 'enquiry' ? 'active' : ''}}">
                                <a class="nav-link click-scroll" href="{{route('enquiry')}}" title="">ENQUIRY</a>
                            </li>
                            <li class="nav-item {{ Request::segment(1) == 'contact' ? 'active' : ''}}">
                                <a class="nav-link click-scroll" href="{{route('contact')}}" title="">CONTACT US</a>
                            </li>
                        </ul>


                    </div>
                </div>
            </nav>

            <section class="hero-section" id="section_1">
                <div class="section-overlay"></div>

                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row">

                        <div class="col-12 mt-auto mb-5 text-center">
                            <h1 class="home-title1" style="font-family: math;">Recycle Today For a </h1>

                            <h1 class="home-title2 text-white mb-5" style="font-family: math;">BETTER TOMORROW...
                            </h1>

                            <a class="btn custom-btn smoothscroll" href="{{route('contact')}}">CONTACT US</a>
                        </div>

                        <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">

                        </div>
                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="{{url('public/web/assets/images/video/Company_Intro_high.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </section>

            <section class="flat-recent-market">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wrap-recent-text">
                                <h1 class="title">Welcome To Swagat Paper Industries LLP</h1>
                                <div class="content-text">
                                    <p style="font-size: 18px;">Swagat Paper Industries LLP is one of the leading manufacturers of Kraft paper & Duplex Board which is located at Morbi district of Gujarat, INDIA. Our company is dedicated to providing high-quality paper products made from 100% recycled fibers to meet the demands of various industries.</p>
                                    <br>
                                    <p style="font-size: 18px;">We prioritize innovation and growth, and continuously strive to improve our production line and products to meet the latest global market requirements. We invest in the latest technology and equipment to ensure that we deliver paper products of the highest quality to our customers.</p>
                                    <hr>
                                    <h4><i class="fa fa-phone"></i> Call us today</h4>
                                    <br>
                                    <div class="row col-md-12 phone-number">
                                        <span style="font-size: 20px;font-weight:bold;">+91 757 398 2207 | +91 846 992 9465</span>
                                    </div>
                                </div>
                            </div><!-- /.wrap-recent-text -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="single-image center">
                                <img src="{{url('public/web/assets/images/Home.png')}}" alt="">
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.flat-recent-market -->

            <section class="flat-why-choose bg-browse">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-choose">
                                <div class="box-left">
                                    <div class="accordion">
                                        <section class="accordion-item">
                                            <h3>COMMITMENT TO EXCELLENCE</h3>
                                            <div class="accordion-item-content">
                                                <br>
                                                <p style="font-size: 18px;font-family:system-ui;">
                                                    {{ GoogleTranslate::trans('An experienced team, committed to producing quality paper solutions works to benefit all its stakeholders - investors, dealers & consumers.', app()->getLocale()) }}
                                                    </p>
                                            </div>
                                        </section>

                                        <section class="accordion-item">
                                            <h3>VALUE CREATION</h3>
                                            <div class="accordion-item-content">
                                                <br>
                                                <p style="font-size: 18px;font-family:system-ui;">We create value for our customers by providing competitive products and services that meet their quality and sustainability requirements.</p>
                                            </div>
                                        </section>
                                    </div>

                                </div><!-- /.box-left -->
                                <div class="box-center">
                                    <div class="single-image">
                                        <img src="{{url('public/web/assets/images/core_value.png')}}" alt="" style="padding-left:10px;padding-right:10px;">
                                    </div>
                                </div><!-- /.box-center -->
                                <div class="box-right">
                                    <div class="accordion">
                                        <section class="accordion-item">
                                            <h3>INNOVATION</h3>
                                            <div class="accordion-item-content">
                                                <br>
                                                <p style="font-size: 18px;font-family:system-ui;">Innovation is the result of continuous research and development, and a philosophy we follow in our all operations.</p>
                                            </div>
                                        </section>

                                        <section class="accordion-item">
                                            <h3>CARE OF ENVIRONMENT</h3>
                                            <div class="accordion-item-content">
                                                <br>
                                                <p style="font-size: 18px;font-family:system-ui;">We improve the quality of life in communities where we work by respecting local cultures, engaging local people, and protecting the environment.</p>
                                            </div>
                                        </section>
                                    </div>

                                </div><!-- /.box-right -->
                            </div><!-- /.wrap-choose -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.flat-why-choose -->

            <section class="flat-counter style3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top-title center">
                                <h2>Facts & Figures</h2>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="wrap-counter">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="square style3 center">
                                    <div class="counter-box">
                                        <div class="icon">
                                            <i class="fa fa-cubes" aria-hidden="true"></i>
                                        </div>
                                        <div class="numb-count" data-from="0" data-to="50" data-speed="2000" data-waypoint-active="yes">72000</div><i class="production-text">Mt/Yr</i>
                                        <div class="text color-default" style="font-weight: 600">
                                            Production
                                        </div>
                                    </div>
                                </div><!-- /.square -->
                            </div><!-- /.col-md-3 col-6 -->
                            <div class="col-md-3 col-6">
                                <div class="square style3 center">
                                    <div class="counter-box">
                                        <div class="icon">
                                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="numb-count" data-from="0" data-to="70" data-speed="2000" data-waypoint-active="yes">150</div><i class="customer-text">+</i>
                                        <div class="text" style="font-weight: 600">
                                            Happy Customer
                                        </div>
                                    </div>
                                </div><!-- /.square -->
                            </div><!-- /.col-md-3 col-6 -->
                            <div class="col-md-3 col-6">
                                <div class="square style3 center">
                                    <div class="counter-box">
                                        <div class="icon">
                                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        </div>
                                        <div class="numb-count" data-from="0" data-to="120" data-speed="2000" data-waypoint-active="yes">10</div><i class="customer-text">+</i>
                                        <div class="text" style="font-weight: 600">
                                            No of Country Export
                                        </div>
                                    </div>
                                </div><!-- /.square -->
                            </div><!-- /.col-md-3 col-6 -->
                            <div class="col-md-3 col-6">
                                <div class="square style3 center">
                                    <div class="counter-box">
                                        <div class="icon">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                        <div class="numb-count" data-from="0" data-to="220" data-speed="2000" data-waypoint-active="yes">21</div><i class="customer-text">+</i>
                                        <div class="text" style="font-weight: 600">
                                            Team Members
                                        </div>
                                    </div>
                                </div><!-- /.square -->
                            </div><!-- /.col-md-3 col-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.counter -->
                </div><!-- /.container -->
            </section><!-- /.flat-counter style3 -->

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            {{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <a href="https://wa.me/+917573982207?text=Hi" class="float" target="_blank">
            <i class="fab fa-whatsapp my-float" style="font-size: 30px;"></i>
            </a>

            <footer id="footer_background">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-widgets">
                                <div class="col-md-4">
                                    <div class="widget widget-about">
                                        <div class="widget-text">
                                            <div id="logo-ft" class="logo-ft">
                                                <a href="{{route('home')}}" title="">
                                                    <img class="logo-img" src="{{url('public/web/assets/images/swagat.png')}}" alt="logo Finance Business" />
                                                </a>
                                            </div>
                                            <p>Recycle Today For a </p>
                                            <p>BETTER TOMORROW...</p>
                                        </div>
                                    </div><!-- /.widget-about -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <div class="widget widget_nav_menu">
                                        <h3 class="widget-title">IMPORTANT LINKS</h3>
                                        <ul class="menu-footer one-half">
                                            <li><a href="{{route('home')}}" title=""><i class="fa fa-angle-double-right"></i> Home</a></li>
                                            <li><a href="{{route('about')}}" title=""><i class="fa fa-angle-double-right"></i> About</a></li>
                                            <li><a href="{{route('product.kraft-paper')}}" title=""><i class="fa fa-angle-double-right"></i> Products</a></li>
                                            <li><a href="{{route('enquiry')}}" title=""><i class="fa fa-angle-double-right"></i> Enquiry</a></li>
                                            <li><a href="{{route('contact')}}" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                                        </ul><!-- /.one-half -->

                                        <div class="clearfix"></div>
                                    </div><!-- /.widget_nav_menu -->

                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4">
                                    <div class="widget widget_contact">
                                        <h3 class="widget-title">CONTACT</h3>
                                        <ul class="contact-list">
                                            <li>
                                                <label style="color:#e3c58f"><b>Address :</b> </label> <span>Old Rafaleshwar Road,
                                                    8-A National Highway, At.-Lalpar, Morbi- 363642,
                                                    Gujarat , India</span>
                                            </li>
                                            <li>
                                                <label style="color:#e3c58f"><b>Phone :</b></label> <span>(+91) 7573982207</span>
                                            </li>
                                            <li>
                                                <label style="color:#e3c58f"><b>Email :</b></label> <span>hk@swagatpaper.com</span>
                                            </li>
                                        </ul>
                                        <div class="widget widget_themesflat_socials">
                                            <ul class="themesflat-shortcode-socials">
                                                <li class="facebook">
                                                    <a href="https://www.facebook.com/SwagatPaperIndustry" target="_blank" rel="alternate" title="">
                                                        <i class="fab fa-facebook" style="font-size: 20px;line-height:2;"></i>
                                                    </a>
                                                </li>

                                                <li class="instagram">
                                                    <a href="https://instagram.com/swagatpaperindustry?igshid=ZDdkNTZiNTM=" target="_blank" rel="alternate" title="">
                                                        <i class="fab fa-instagram" style="font-size: 20px;line-height:2;"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="https://www.linkedin.com/in/harikrushna-lodaliya" target="_blank" rel="alternate" title="">
                                                        <i class="fab fa-linkedin" style="font-size: 20px;line-height:2;"></i>
                                                    </a>
                                                </li>
                                            </ul><!-- /.social -->
                                        </div>
                                    </div><!-- /.widget_contact -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.footer-widgets -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.footer -->
            </footer><!-- /#footer_background -->
        </main>
<!-- Javascript -->
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/tether.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery-countTo.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/jquery.counterup.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript" src="{{url('public/web/assets/javascript/main.js')}}"></script>
<script src="{{url('public/web/assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/web/assets/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/js/custom.js')}}"></script>
<!-- Revolution Slider -->
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/slider_v1.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/web/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-150JYFSQQG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-150JYFSQQG');
</script>
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
</body>
</html>
