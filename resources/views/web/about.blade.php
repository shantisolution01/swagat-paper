@extends('web.layouts.app')

@section('content')
<div class="page-title">
    <div class="title-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="h1-title">ABOUT US</h1>
                    </div><!-- /.page-title-heading -->
                    {{-- <ul class="breadcrumbs">
                        <li><a href="#" title="">Home</a></li>
                        <li class="dot">/</li>
                        <li>About</li>
                    </ul><!-- /.breadcrumbs --> --}}
                    {{-- <div class="elementor-divider">

                        <span class="elementor-divider-separator">
                            <div class="elementor-icon elementor-divider__element">

                            </div>
                        </span>
                    </div> --}}

                    <div class="elementor-divider">
                     <h2><span><img class="logo-img" src="{{url('public/web/assets/images/swagat.png')}}" alt="logo" /></span></h2>
                    </div>

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.title-heading -->
</div><!-- /.page-title -->

<section class="flat-recent-market">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-recent-text">
                    <h2 class="title">ABOUT OUR COMPANY</h2>
                    <div class="content-text">
                        <p style="font-size: 18px;">Swagat Paper Industries LLP was incorporated in the year of 2019 and has started it’s production in the year of 2020. The Company Adapts an eco-friendly system and works towards goal of converting waste in to wealth. Since it’s inception, the company has adapted a 100% paper recycling strategy which aims to the minimize the cutting trees or use of wood pulp to produce paper. Keeping in mind, the government’s initiative for using renewable sources and recycling of materials, we at Swagat Paper Industries LLP have developed green field project.</p>
                        <p style="font-size: 18px;">We are one of the top Kraft Paper (Brown) & Duplex Board manufacturer in India. We manufacture Premium Grade Kraft Paper – Testliner (single wire) & Multilayer Testliner (triple wire) with GSM range of 80 – 300 & BF range of 18 – 35 & Duplex Board with GSM range of 230 – 450 of Grey back & White Back. Our all products are 100% recycled. </p>
                        {{-- <a href="#" class="read-more" title="">GET STARTED</a> --}}
                    </div>
                </div>
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="single-image center">
                    <img src="{{url('public/web/assets/images/about_us.png')}}" alt="">
                </div>
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-recent-market -->

<section class="flat-why-choose bg-browse">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h1 style="color:black">KNOW ABOUT OUR DREAM</h1>
                    <div class="elementor-divider">
                        <h2><span><img class="logo-img" src="{{ url('public/web/assets/images/swagat.png') }}"
                                    alt="logo" /></span></h2>
                    </div>
                </div>
                {{-- <div class="team-boxed">
                    <div class="container">

                        <div class="row people">
                            <div class="col-md-6 col-lg-6 item smooth-offset-box-shadow">
                                <div class="box"><img class="rounded-circle" src="{{url('public/web/assets/images/vision.png')}}">


                                    <p class="description">we are providing best in class Duplex boards and kraft linear paper product to our client. we have a vast experince in paper industry .everyday we are enhance our quality of paper by using our research and development team and using new technology so we can provide best in class duplex boards and kraft linear paper to our client for their everyday need.</p>

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 item smooth-offset-box-shadow">
                                <div class="box"><img class="rounded-circle" src="{{url('public/web/assets/images/mission.png')}}">
                                    <p class="description">we are providing best in class Duplex boards and kraft linear paper product to our client. we have a vast experince in paper industry .everyday we are enhance our quality of paper by using our research and development team and using new technology so we can provide best in class duplex boards and kraft linear paper to our client for their everyday need.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> --}}

                <div class="outer-box">
                    <div class="row">
                        <div class="services-block-two col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="icon"><span class="fas fa-eye"></span></div>
                                <h4>Vision</h4>
                                <div class="text">We are expanding our company constantly through innovation and by giving quality product to our client . We have a vision to establish our company as india's first number company in paper product . We have strong faith in our work though we become leading distributor in duplex boards and kraft liner paper distributor in next few year.</div>
                                {{-- <div class="read-more-btn"><a href="#" class="theme-btn">Read More</a></div> --}}
                            </div>
                        </div>

                        <div class="services-block-two col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="icon"><span class="fas fa-dot-circle"></span></div>
                                <h4>Mission</h4>
                                <div class="text">We are providing best in class Duplex boards and kraft liner paper product to our client. We have a vast experience in paper industry .everyday we are enhance our quality of paper by using our research and development team and using new technology so we can provide best in class duplex boards and kraft liner paper to our client for their everyday need.</div>
                                {{-- <div class="read-more-btn"><a href="#" class="theme-btn">Read More</a></div> --}}
                            </div>
                        </div>

                        <div class="services-block-two col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="icon"><span class="fas fa-dumbbell"></span></div>
                                <h4>Strength</h4>
                                <div class="text">We equipped with modern machines for better product. We are distributing our product in all over india and also in outer country. We have more then 500 people in our company. We also serve in 6 country and we have more then 600 dealers. We have 50 plus product range.we are making our product every better with our strength.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div>
</section>

@endsection
