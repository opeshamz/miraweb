@extends('layouts.sub-front')
@section('content')

    <div class="gradient-bg title-wrap">
        <div class="row">
            <div class="col-lg-12 col-md-12 whitecolor">
                <h3 class="float-left"> Cards</h3>
                <ul class="breadcrumb top10 bottom10 float-right">
                    <li class="breadcrumb-item hover-light"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item hover-light">cards</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </section>
    <!--Page Header ends -->
    <!-- About us -->
    <section id="aboutus" class="padding_top ">
        <div class="container aboutus">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 padding_bottom_half">
                    <div class="image"><img alt="SEO" src="images-current/cc.png"></div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6  text-center text-md-left">
                    <h2 class="darkcolor font-normal bottom30">Miraweb Cards</h2>
                    <p class="bottom35 ps"> Miraweb cards are unique credit card numbers that allow you to transact on
                        your
                        main credit card account and pay for services online without using — or exposing — your main
                        credit card account number.
                    </p>

                </div>
            </div>
        </div>
    </section>


    <section id="aboutus" class="">
        <div class="container aboutus">
            <div class="row align-items-center">

                <div class="col-lg-12  col-md-12 padding_bottom_half  ">
                    <h2 class="darkcolor font-normal bottom30 text-center">Benefits of Miraweb Cards</h2>
                    <p class="bottom35 ps"> Looking for a trusted virtual and Physical Card provider in Nigeria, Miraweb
                        offers you the most trusted and secured Credit Cards.</p>
                    <p class="bottom35 ps"> Benefits of our Cards <br>
                        1. <b>Security.</b> You have a much lower risk of being a victim of fraud if you use a virtual
                        card: it can not be stolen, and to peep the card number and its PIN is impossible as well. <br>
                        <br> <br>
                        2. <b>Relative anonymity.</b> More and more people are being concerned with safety of their
                        personal data left on Internet. The virtual debit card is perfect for those who do not want to
                        provide information about their plastic bank cards.<br> <br><br>
                        3. <b>Cost.</b> Typically, the cost of a virtual debit card is much lower comparing to the bank
                        one. Besides, you do not have to pay for delivery of the card: virtual debit cards are sent via
                        the Internet. <br><br> <br>
                        4. <b>No need to go to the bank</b> in order to open a bank account, to provide the documents
                        and to wait for approval. Virtual card can be ordered through Miraweb. <br> <br> <br>
                        5. <b>Time-saving</b>. Getting a virtual debit card takes far less time. <br> <br> <br>
                        6. <b>Mobility </b>. You can pay for the goods anywhere. The only thing you need is the Internet
                        access. You will not face a situation where you forget the card at home and you have to return
                        to take it. <br>


                    </p>

                </div>


            </div>


        </div>
    </section>



    <!-- WOrk Process-->
    <section id="our-process" class="padding bgdarks">
        <style type="text/css">
            .bgdarks {
                background: url("{{asset('images-current/banner-single-2c.jpg')}}");
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">

                        <h2 class="font-normal">How to get the Card </h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <style>
                    @media screen and (min-width: 800px) {
                        .bb {
                            margin-left: 100px;
                        }
                    }
                </style>

                <ul class="process-wrapp" style="text-align: center;">
                    <div class="bb"></div>
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                        <span class="pro-step bottom20">01</span>
                        <p class="fontbold bottom25">Register / Login in</p>

                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">


                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                        <span class="pro-step bottom20">02</span>
                        <p class="fontbold bottom25">Select a Card type</p>

                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">


                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                        <span class="pro-step bottom20">03</span>
                        <p class="fontbold bottom25"> Request Physical card delivery.</p>

                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">


                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                        <span class="pro-step bottom20">04</span>
                        <p class="fontbold bottom25">Activate your Cards</p>

                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="300ms">


                    </li>
                    <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                        <span class="pro-step bottom20">05</span>
                        <p class="fontbold bottom25">Happy Transaction</p>

                    </li>
                </ul>

            </div>
        </div>
    </section>
    <!--WOrk Process ends-->

    <br> <br>



@endsection
