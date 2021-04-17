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
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="images-current/logo-light.svg" alt="logo" class="logo-default">
                <img src="images-current/logo-dark.svg" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                 <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown static">
                        <a class="nav-link dropdown-toggle active" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Product </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="{{url('/giftcard')}}"> <img src="images-current/giftcards.svg"> &nbsp; &nbsp; GiftCards (Buy & Sell Gift Card at Best Rates) </a> </br>
                                            
                                           <a class="dropdown-item" href="{{url('/bitcoin')}}"><img src="images-current/bitcoin.svg"> &nbsp; &nbsp;Bitcoin (Send, Receive Store, Trade and Store Bitcoin)</a> </br>
                                           
                                            <a class="dropdown-item" href="{{url('/digital')}}"><img src="images-current/card.svg"> &nbsp; &nbsp;Digital Assets (Paypal, Perfect money, etc to Naira)</a> </br>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="{{url('/refill')}}"><img src="images-current/refill.svg"> &nbsp; &nbsp;Refill (Buy airtime, data & Pay for Utilities )</a> </br>
                                            
                                           <a class="dropdown-item" href="{{url('/cards')}}"><img src="images-current/pm.svg"> &nbsp; &nbsp;Miraweb Cards (Physical and virtual cards for </br> instant cash out)</a> </br>


                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                     <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Company </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/about')}}">About</a>
                            <a class="dropdown-item" href="{{url('/career')}}">Careers</a>

                        </div>
                    </li>
                    
                    <style>
                        .gradient-bg {
    background-image: linear-gradient(to right, #28347a 0%, #2f55a2 51%, #28347a 100%);
}
                    </style>
                    
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="{{url('#')}}">Rates</a>
                    </li>-->
                    
                       <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="{{url('/blog')}}" > Blog </a>
                       
                    </li>

                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="{{url('/contact')}}"> Help Center </a>
                       
                    </li>

                     <li class="nav-item">
                        <a class="nav-link kk" href="{{url('login')}}">Sign in</a>
                    </li>
                     <style type="text/css">
                    .kk{
                    border: 1px solid #fff;
    color: #fff;
    background: transparent;
    width: 100%;
    text-align: center;
    padding: 0px 10px;
}
                </style>

                </ul>
            </div>
            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn mr-0" id="sidemenu_toggle">
                <span class="bg-white"></span> <span class="bg-white"></span> <span class="bg-white"></span>
            </a>
        </div>
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
                                    <a class="nav-link" href="{{url('/giftcard')}}"><img src="images-current/giftcard.svg"> &nbsp;  Exchange GiftCards (Gift Card at Best Rates)</a>
                                    
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="{{url('/bitcoin')}}"> <img src="images-current/bitcoin.svg"> &nbsp;  Exchange Bitcoin (Send, Receive Store, Trade and Store Bitcoin)</a>
                                    
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{url('/digital')}}"> <img src="images-current/card.svg"> &nbsp;   Digital Assets (Paypal, Perfect money, etc to Naira)</a>
                                    
                                </li>
                                   
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/refill')}}"><img src="images-current/refill.svg"> &nbsp; Refill (Buy airtime, data & Pay for Utilities) </a>
                                    
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="{{url('/cards')}}"><img src="images-current/pm.svg"> &nbsp; Miraweb Cards (Physical and virtual cards for </br> instant cash out) </a>
                                    
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
                                    <a class="nav-link" href="{{url('/about')}}"> <img src="images-current/about.png" width="40"> &nbsp; About Us</a>
                                    
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="{{url('/career')}}"> <img src="images-current/career.png" width="40"> &nbsp; Careers</a>
                                    
                                </li>

                               
                            </ul>
                        </div>
                    </li>



                  <!--  <li class="nav-item">
                        <a class="nav-link" href="#">Rates </a>
                    </li>-->
                       <li class="nav-item">
                        <a class="nav-link" href="{{url('login')}}">Sign in</a>
                    </li>
                     
                    
                        <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="{{url('/blog')}}" > Blog </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact')}}">Help Center</a>
                    </li>
                    
                     </li>
                       <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                    </li>

                 

                   
                   
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="https://www.facebook.com/Miraweb-Network-Limited-110265090777789"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="https://twitter.com/miraweb_ng"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="https://www.instagram.com/miraweb.ng/"><i class="fab fa-instagram"></i> </a> </li>
                    
                    
                     
                </ul>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->
<!--Main Slider-->
<section id="home">
    <h2 class="d-none">heading</h2>
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_one_page" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>

                 <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" class="banner-overlay">
                    <!-- MAIN IMAGE -->
                    <div class="overlay overlay-dark opacity-6"></div>
                    <img src="images-current/banner-single-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina="">
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme z-index-5 font-xlight whitecolor text-capitalize" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-60','-60']" data-fontsize="['36','36','34','32']" data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text" data-textalign="['right','right','right','center']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" style="letter-spacing: 1px;">Welcome to Miraweb
                    </div>
                    <div class="tp-caption tp-resizeme z-index-6 font-normal whitecolor text-capitalize" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-10','-10']" data-fontsize="['48','48','46','45']" data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text" data-textalign="['right','right','right','center']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none">The Future
                    </div>
                    <div class="tp-caption tp-resizeme z-index-7 font-bold whitecolor text-capitalize" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['45','45','50','50']" data-fontsize="['48','48','46','45']" data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text" data-textalign="['right','right','right','center']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" style="line-height:30px">is Now
                    </div>
                    <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']" data-textalign="['center','center','center','center']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-type="button" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="{{url('register')}}" class="button btn-primary font-13 mr-2">Get Started</a>
                        
                    </div>
                </li>




            </ul>
        </div>
    </div>
</section>
<!--Main Slider ends -->
<!--Some Feature -->
<style> 
.ps{
    font-weight:300;
    font-size:16px;
    line-height:1.7;
    color:black;
}

</style>
<section id="our-feature" class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30">Who We Are <span class="defaultcolor"></span></h2>
                </div>
                <p class="bottom35 ps"><!-- Miraweb is one of the fastest growing Exchange Platform, registered under Nigeria’s 
Corporate Affairs Commision with the name 'Miraweb Networks Limited` and RC Number 1709342. <br> <br> -->
 Miraweb Networks Limited provides customer the opportunity to Send & Receive Bitcoin,  exchange or trade giftcard
, digital cards, bitcoin to Naira, and Refill airtime, data, Electricity and other Uitlity Services. <br> <br>

Our goal is to make life easier for our fellow Nigerians, by making Exchange & Refill transactions in one click, wherby reducing the 
stress for exchanging Cards, Bitcoin and refilling in Nigeria. </p><br>
                <a href="{{url('/about')}}" class="button btnsecondary gradient-btn mb-sm-0 mb-4" type="submit">Learn More</a>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="images-current/exc.jpg"></div>
            </div>
        </div>
    </div>
</section>
<!--Some Feature ends-->

<!-- Counters -->
<section id="bg-counters" class="padding bg-counters parallax" style="background-image: url('images-current/counter-bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 71.8875px;">
    <div class="container">  
        <div class="row align-items-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor  top10 bottom10">
                    <h1>₦@include('includes.btc_price')</h1>
                </div>
                <h3 class="font-light whitecolor top20">BTC/NGN</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="whitecolor top20 bottom20 font-light title"></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor top10 bottom10">
                    <h1>$@include('includes.btc_price_2')</h1>
                </div>
                <h3 class="font-light whitecolor top20">BTC/USD</h3>
            </div>
        </div>
    </div>
</section>
<!-- Counters ends-->

<section id="our-services" class="padding bglight">
    <div class="container">
        <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2"><span class="font-weight-light">Our Service</span>
                <span class="divider-center"></span>
            </h2>
            <div class="col-md-8 offset-md-2">
                <p class="mb-n3 ps">We Provide 100% honesty and efficiency, simply sign up to access all of the cool amazing features.</p>
            </div>
        </div>
    
        <div id="services-measonry" class="cbp">
            <div class="cbp-item digital brand design">
                <div class="services-main">
                   
                    <div class="services-content brand text-center text-md-left"><br> <br>
                         <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="images-current/cards.png"></div>
                       
                    </div>
                        <h3 class="bottom10 darkcolor"><a href="{{url('/giftcard')}}">Exchange Gift & Digital Cards</a></h3>
                        <p class="bottom15 ps">Sell your Giftcards, Get paid in Cash instantly at the best rates.
                        </p>
                        <a href="{{url('/giftcard')}}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item digital graphics">
                <div class="services-main">
                    
                    <div class="services-content text-center text-md-left"><br>
                        <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="images-current/btc.png"></div>
                        
                    </div>
                        <h3 class="bottom10 darkcolor"><a href="{{url('/bitcoin')}}">Bitcoin Wallet</a></h3>
                        <p class="bottom15 ps"> Receive and Send Bitcoin, and also Exchange Bitcoin to Cash instantly.
                        </p>
                        <a href="{{url('/bitcoin')}}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item design">
                <div class="services-main">
                   
                    <div class="services-content text-center text-md-left"><br> <br>
                         <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="images-current/download.png"></div>
                       
                    </div>
                        <h3 class="bottom10 darkcolor"><a href="{{url('/refill')}}">Buy Airtime, Data & Refill </a></h3>
                        <p class="bottom15 ps">Buy & Refill airtime, data, electricity, and many more...
                        </p>
                        <a href="{{url('/refill')}}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            
           
           
        </div>
    </div>
</section>
<!-- Services us ends -->



<section class="bglight">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid bg-white tt">
        

        <div class="row align-items-center">

            <div class="col-md-6 col-sm-12 p-0 col-video">
                <div class="row mx-0">

                    <div class="col-md-10 offset-md-1 offset-sm-0 col-sm-12">

                        <div class="video-content-setting center-block text-center text-sm-left">
                            <h2 class="darkcolor font-normal text-capitalize mb-3">Virtual & Physical Card</h2>
                            <p class="darkcolor ps">Get your Miraweb virtual and physical card instantly with no stress, and make transactions anywhere instantly.

                                
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="col-md-6 col-sm-12 p-0 col-video video-bg">
                <div class="image split-blog-scale ">
                    <img alt="stats" src="images-current/cc.png" class="video-img-setting kj">
                    <style type="text/css">
                        .image .kj{
                            width: 70%;
                            height: auto;
                            margin: auto;
                           
                        }

                        @media (max-width: 767px){
.video-content-setting {
    padding: 0;
}
        }            </style>

                </div>
            </div>
        </div>
    </div>
</section>
<br> <br>

<!-- WOrk Process-->
<section id="our-process" class="padding bgdarks" >
    <style type="text/css">
        .bgdarks {
    background: url('images-current/banner-single-2c.jpg');
}
    </style>
    <div class="container" >
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                  
                    <h2 class="font-normal">Our Work Process </h2>
                </div>
            </div>
        </div>
        <div class="row" >
             <div class="col-md-2 col-sm-2 text-center"> </div>
            <ul class="process-wrapp" style="text-align: center;">
                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    <span class="pro-step bottom20">01</span>
                    <p class="fontbold bottom25">Register / Login in</p>
                   
                </li>
                 <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    
                   
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="fontbold bottom25">Select a Feature</p>
                   
                </li>
                  <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    
                   
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                    <span class="pro-step bottom20">03</span>
                    <p class="fontbold bottom25">Make a Transaction</p>
                   
                </li>
                  <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    
                   
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <p class="fontbold bottom25">Get paid instantly</p>
                    
                </li>
                  <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    
                   
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                    <span class="pro-step bottom20">05</span>
                    <p class="fontbold bottom25">Invite friends</p>
                    
                </li>
            </ul>
              <div class="col-md-3 col-sm-3 text-center"> </div>
        </div>
    </div>
</section>
<!--WOrk Process ends-->

<br> <br> <br>




<!--video part section-->
<!--<section class="bglight">
    <h2 class="d-none">heading</h2>

    <div class="container-fluid bg-white">
      
      <style>
          .ty img{
              border-radius: 9999px;
              border-color: #e8f7ff;
              border-style: solid;
              border-width: 1px;
              padding:20px;
          }
          .ty img:hover{
              background-color: #e8f7ff;
          }
      </style>

        <div class="row align-items-center">

            <div class="col-md-6 col-sm-12 p-0 col-video">
                <div class="row mx-0">
                    <div class="col-md-10 offset-md-1 offset-sm-0 col-sm-12">
                        <div class="video-content-setting center-block text-center text-sm-left">
                            <h2 class="darkcolor font-normal text-capitalize mb-3" style="font-size: 30px;">Miraweb Mobile App (Coming Soon)</h2>
                             <span class="divider-center"></span>
                            <p class="darkcolor ps">Experience the best of Miraweb as you download our mobile application to your phone or tablet. Available for iOS and Android operating systems. <b> (Coming Soon...) </b>
                            </p>
                          <div class="ty" style="display: inline;">
                                <img src="images-current/app-store.svg"  style="margin: 10px;">
                            <img src="images-current/play-store.svg" style="margin: 20px;">
                          </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="col-md-6 col-sm-12 p-0 col-video video-bg">
                <div class="image split-blog-scale transition-3">
                    <img alt="stats" src="images-current/bg-video-section.jpg" class="video-img-setting kj" style="margin-top: 20px;">
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--video part section end-->




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
               <!--         <li><a href="{{url('/rates')}}" style="color: black;">Rates</a></li>-->
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
                          <li><a href="{{url('/privacy_policy')}}">Privacy-Policy</a></li>
                        <li><a href="{{url('/terms_of_service')}}">Terms of Service</a></li>
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
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12533859;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12533859/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

</body>

</html>
