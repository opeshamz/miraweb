<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Miraweb | Exchange Services Made Easy</title>
<link href="{{asset('images-current/favicons.png')}}" rel="icon">
<link rel="stylesheet" href="{{asset('css-current/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/all.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/tooltipster.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/cubeportfolio.min.css')}}">
<link rel="stylesheet" href="{{asset('css-current/revolution/navigation.css')}}">
<link rel="stylesheet" href="{{asset('css-current/revolution/settings.css')}}">
<link rel="stylesheet" href="{{asset('css-current/style.css')}}">
   <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="75" class="offset-nav">
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
               <img src="images-current/logo-dark.png" alt="logo">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto mr-auto">
                   
                   <li class="nav-item dropdown static">
                        <a class="nav-link dropdown-toggle active" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Product </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="{{url('giftcard')}}"> <img src="images-current/giftcards.svg"> &nbsp; &nbsp; GiftCards (Buy & Sell Gift Card at Best Rates) </a> </br>
                                            
                                           <a class="dropdown-item" href="{{url('bitcoin')}}"><img src="images-current/bitcoin.svg"> &nbsp; &nbsp;Bitcoin (Send, Receive Store, Trade and Store Bitcoin)</a> </br>
                                           
                                            <a class="dropdown-item" href="{{url('digital')}}"><img src="images-current/card.svg"> &nbsp; &nbsp;Digital Assets (Paypal, Perfect money, etc to Naira)</a> </br>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="{{url('refill')}}"><img src="images-current/refill.svg"> &nbsp; &nbsp;Refill (Buy airtime, data & Pay for Utilities )</a> </br>
                                            
                                           <a class="dropdown-item" href="{{url('cards')}}"><img src="images-current/pm.svg"> &nbsp; &nbsp;Miraweb Cards (Physical and virtual cards for </br> instant cash out)</a> </br>


                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li> 
                      <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Company </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('about')}}">About</a>
                            <a class="dropdown-item" href="{{url('career')}}">Careers</a>

                        </div>
                    </li>
                  <!--  <li class="nav-item">
                        <a class="nav-link" href="{{url('rates')}}">Rates</a>
                    </li>-->
                    
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="{{url('contact')}}"> Help Center </a>
                       
                    </li>
                </ul>
            </div>
            <ul class="social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp" data-wow-delay="300ms">
                <li><a href="https://www.facebook.com/Miraweb-Network-Limited-110265090777789/."><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a href="https://twitter.com/miraweb_ng"><i class="fab fa-twitter"></i> </a> </li>
                <li><a href="https://www.instagram.com/miraweb.ng/."><i class="fab fa-instagram"></i> </a> </li>
            </ul>
        </div>
        
      
        
        
        
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="gradient-bg"></span> <span class="gradient-bg"></span> <span class="gradient-bg"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages1">
                            Product <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages1" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('giftcard')}}"><img src="images-current/giftcards.svg"> &nbsp;  Exchange GiftCards (Gift Card at Best Rates)</a>
                                    
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="{{url('bitcoin')}}"> <img src="images-current/bitcoin.svg"> &nbsp;  Exchange Bitcoin (Send, Receive Store, Trade and Store Bitcoin)</a>
                                    
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{url('digital')}}"> <img src="images-current/pm.svg"> &nbsp;   Digital Assets (Paypal, Perfect money, etc to Naira)</a>
                                    
                                </li>
                                   
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('refill')}}"><img src="images-current/refill.svg"> &nbsp; Refill (Buy airtime, data & Pay for Utilities) </a>
                                    
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="{{url('cards')}}"><img src="images-current/card.svg"> &nbsp; Miraweb Cards (Physical and virtual cards for </br> instant cash out) </a>
                                    
                                </li>


                               
                            </ul>
                        </div>
                    </li>

                        <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages2">
                            Company <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages2" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('about')}}"> <img src="images-current/about.png" width="40"> &nbsp; About Us</a>
                                    
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="{{url('career')}}"> <img src="images-current/career.png" width="40"> &nbsp; Careers</a>
                                    
                                </li>

                               
                            </ul>
                        </div>
                    </li>



                   <!-- <li class="nav-item">
                        <a class="nav-link" href="{{url('rates')}}">Rates </a>
                    </li>-->
                       <li class="nav-item">
                        <a class="nav-link" href="{{url('login')}}">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">Help Center</a>
                    </li>
                    
                     </li>
                       <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                    </li>

                 

                   
                   
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                     <li><a href="https://www.facebook.com/Miraweb-Network-Limited-110265090777789/."><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a href="https://twitter.com/miraweb_ng"><i class="fab fa-twitter"></i> </a> </li>
                <li><a href="https://www.instagram.com/miraweb.ng/."><i class="fab fa-instagram"></i> </a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->
<!--Page Header-->



<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth" style="background-image:url('images-current/bg-about-header.jpg') ; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center; margin-top: 0px;">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">A New Idea</h2>
                    <h2 class="font-bold">Inspires Us To Make</h2>
                    <h2 class="font-xlight">Great Works</h2>
                    <h3 class="font-light pt-2">(Fastest Growing Exchange Platform in Nigeria)</h3>
                </div>
            </div>
        </div>

        <style type="text/css">
            .gradient-bg {
                background-image: linear-gradient(to right, #28347a 0%, #2f55a2 51%, #28347a 100%);
            }
            .ps {
    font-weight: 300;
    font-size: 16px;
    line-height: 1.7;
    color: black;
}

.feature-item .icon {
    
    color: #29357b;
}
        </style>


@yield('content')






<section class="bglight">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid bgdarkss tt">
        

        <div class="row align-items-center">

            <div class="col-md-12 col-sm-12 p-0 col-video">
                <div class="row mx-0">

                    <div class="col-md-10 offset-md-1 offset-sm-0 col-sm-12">

                        <div class="video-content-setting center-block text-center text-sm-left">
                            <h2 class=" font-normal text-capitalize mb-3" style="color:white;">Register Now!!!</h2>
                             <a href="https://miraweb.ng/register" class="button btnsecondary gradient-btn mb-sm-0 mb-4" type="submit">Click here</a>
                          <style>
    .video-content-setting {
    height: 200px;
}

.bgdarkss {
background: url("https://miraweb.ng/images-current/banner-single-2c.jpg");
}
}

</style>

                           
                        </div>
                    </div>
                </div>
                
            </div>

            
        </div>
    </div>
</section>
<br> <Br>

<!--Site Footer Here-->
<footer id="site-footer" class="">
    <div class="container">
        <div class="row">
            <style>
                @media (max-width:767px){
                    .wd{
                        width:50%;
                         word-wrap: break-word;
                    }
                    
                     .wds{
                        width:55%;
                         word-wrap: break-word;
                    }
                    .wdss{
                        width:45%;
                         word-wrap: break-word;
                    }
                }
            </style>
            <div class="col-lg-3 col-md-3 col-sm-3 wd">
                 <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class=" bottom25">Product</h3>
                    <ul class="" >
                        <li><a href="{{url('/giftcard')}}" style="color: black;">Giftcard</a></li>
                        <li><a href="{{url('/bitcoin')}}" style="color: black;">Bitcoin</a></li>
                        <li><a href="{{url('/refill')}}" style="color: black;">Refill</a></li>
                        <li><a href="{{url('/digital')}}" style="color: black;">Digital Assets</a></li>
                        <li><a href="{{url('/cards')}}" style="color: black;">Miraweb Card</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 wd">
               <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class=" bottom25">Company</h3>
                    <ul class="" >
                        <li><a href="{{url('/')}}" style="color: black;">Home</a></li>
                        <li><a href="{{url('/about')}}" style="color: black;">About Us</a></li>
                        <li><a href="{{url('/career')}}" style="color: black;">Careers</a></li>
              <!--          <li><a href="{{url('/rates')}}" style="color: black;">Rates</a></li>-->
                        <li><a href="{{url('/contact')}}" style="color: black;">Contact Us</a></li>
                        
                    </ul>
                </div>
            </div>
        <div class="col-lg-3 col-md-3 col-sm-3 wds">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class=" bottom25">Contact</h3>
                     <div class="d-table w-100 address-item bottom25">
                        
                        <p class="d-table-cell align-middle bottom0">
                          <a class="d-block" href="mailto:support@miraweb.com.ng">support@miraweb.com.ng</a>
                        </p>
                    </div>
                   
                  
                     
                         <ul class="social-icons  wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="https://www.facebook.com/Miraweb-Network-Limited-110265090777789/" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="https://twitter.com/miraweb_ng" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
               
                        <li><a href="https://www.instagram.com/miraweb.ng/" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 wdss">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class=" bottom25">Legal</h3>
                   
                    <ul class="">
                          <li><a href="privacy_policy">Privacy-Policy</a></li>
                        <li><a href="terms_of_service">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js-current/jquery-3.4.1.min.js"></script>
<!--Bootstrap Core-->
<script src="js-current/propper.min.js"></script>
<script src="js-current/bootstrap.min.js"></script>
<!--to view items on reach-->
<script src="js-current/jquery.appear.js"></script>
<!--Owl Slider-->
<script src="js-current/owl.carousel.min.js"></script>
<!--number counters-->
<script src="js-current/jquery-countTo.js"></script>
<!--Parallax Background-->
<script src="js-current/parallaxie.js"></script>
<!--Cubefolio Gallery-->
<script src="js-current/jquery.cubeportfolio.min.js"></script>
<!--Fancybox js-->
<script src="js-current/jquery.fancybox.min.js"></script>
<!--Tooltip js-->
<script src="js-current/tooltipster.min.js"></script>
<!--wow js-->
<script src="js-current/wow.js"></script>
<!--Revolution SLider-->
<script src="js-current/revolution/jquery.themepunch.tools.min.js"></script>
<script src="js-current/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="js-current/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js-current/revolution/extensions/revolution.extension.video.min.js"></script>
<!--custom functions and script-->
<script src="js-current/functions.js"></script>
</body>

</html>
