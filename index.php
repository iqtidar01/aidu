<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta property="og:title" content="AIDU Place" />
    <meta property="og:description" content="High Rise Luxury Commercial and Residential Buildings." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://aidu.herokuapp.com/" />
    <meta property="og:image" content="http://aidu.herokuapp.com/images/aidu_place_crafting_tomorrow.jpg" />

    <title>AIDU Place</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/icomoon-fonts.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="css/zerogrid.css">
    <link rel="stylesheet" type="text/css" href="css/jPushMenu.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400%7COpen+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/onepage.css">
    <link rel="stylesheet" type="text/css" href="css/one-color.css">
    <link rel="stylesheet" type="text/css" href="css/custom1.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <!--<link rel="shortcut icon" href="images/favicon.png">-->
</head>

<body id="page-top" data-spy="scroll" data-target="#fixed-collapse-navbar" data-offset="120">

<div class="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>



<!-- Main-Navigation -->
<header id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="top-right text-right">
                        <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#." class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
                    </ul>

                    <nav class="navbar navbar-default">
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="true">
                                <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand logo" href="">
                                <h3>AIDU<span>.</span></h3>
                            </a>
                        </div>

                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                                <li class="active"><a href="#main-slider" class="page-scroll">Home</a></li>
                                <li><a class="page-scroll" href="#about">About</a></li>
                                <li><a href="#project" class="page-scroll">Work</a></li>
                                <li><a href="#contact" class="page-scroll">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


<section id="main-slider">

    <div class="tp-banner-container">
        <div class="fullscreenbanner tp-banner">
            <ul>	<!-- SLIDE  -->

                <!-- SLIDE  -->
                <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">
                    <!-- MAIN IMAGE -->
                    <?php
                    $posterImage = 'video/thumb.jpg';
                    if(preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])){
                        $posterImage = 'video/video_thumb.jpg';
                    }
                    ?>

                    <img src="<?=$posterImage?>"  alt="video slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-fade fadeout fullscreenvideo"
                         data-x="0"
                         data-y="0"
                         data-speed="1000"
                         data-start="1000"
                         data-easing="Power4.easeOut"
                         data-endspeed="1500"
                         data-endeasing="Power4.easeIn"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true"
                         data-forceCover="1"
                         data-dottedoverlay="twoxtwo"
                         data-aspectratio="16:9"
                         data-forcerewind="on"
                         style="z-index: 2">


                        <video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"
                               poster='<?=$posterImage?>' data-setup="{}">
                            <source src='video/home.mp4' type='video/mp4' />
                        </video>

                    </div>


                    <p class="hide tp-caption sft tp-resizeme"
                       data-x="center"
                       data-y="200"
                       data-speed="500"
                       data-start="1000"
                       data-easing="Power3.easeInOut"
                       data-elementdelay="0.1"
                       data-endelementdelay="0.1"
                       style="z-index: 5;">
                    </p>
                    <!-- LAYER NR. 2 -->
                    <h2 class="tp-caption sft tp-resizeme text-center"
                        data-x="center"
                        data-y="230"
                        data-speed="500"
                        data-start="1500"
                        data-easing="Power3.easeInOut"
                        data-elementdelay="0.05"
                        data-endelementdelay="0.1"
                        style="z-index: 9;">
                        WELCOME TO <br>AIDU PLACE
                    </h2>
                    <!-- LAYER NR. 3 -->
                    <p class="tp-caption sft tp-resizeme"
                       data-x="center"
                       data-y="370"
                       data-speed="500"
                       data-start="2000"
                       data-easing="Power3.easeInOut"
                       data-elementdelay="0.1"
                       data-endelementdelay="0.1"
                       style="z-index: 5;">High Rise Luxury Commercial and Residential Buildings.
                    </p>

                </li>

            </ul>
        </div>
    </div>
</section>

<!--What We Offer-->
<section class="section-padding" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
                <p class="title">Our Valued Services</p>
                <h2 class="heading">What we Offer</h2>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                <span class="text-center"><i class="fa fa-cutlery color6"></i></span>
                <h4 class="color6">Restaurants and cafes</h4>
                <p class="hide">Keep away from people who try to belittle your ambitions. Small people always do that but the really great.</p>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="500ms">
                <span class="text-center"><i class="fa fa-shopping-cart color1"></i></span>
                <h4 class="color1">Multiple Retails</h4>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="700ms">
                <span class="text-center"><i class="fa fa-bus color6"></i></span>
                <h4 class="color6">Transportation</h4>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
                <span class="text-center"><i class="fa fa-medkit  color1"></i></span>
                <h4 class="color1">Gym & Fitness</h4>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1100ms">
                <span class="text-center"><i class="fa fa-hotel color6"></i></span>
                <h4 class="color6">Spa Facilities</h4>
            </div>
            <div class="col-md-4 col-sm-4 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
                <span class="text-center"><i class="fa fa-cubes color1"></i></span>
                <h4 class="color1">Organic Grocery</h4>
            </div>
        </div>
    </div>
</section>

<!-- Paralax Effect Section -->
<div style="position:relative;" class="top-padding">
    <section id="bg-paralax" style="background-size: cover;background: url('images/22.jpg') fixed center center;width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="font16">Best luxurious residential and commercial buildings with breathtaking views</p>
                    <h2 class="magin30">Looking For Exclusive Insights?</h2>
                    <a class="btn-green btn-common bounce-top page-scroll" href="#contact">Let's Talk</a>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Responsive image with left -->
<section id="responsive" class="top-padding">
    <div class="container-fluid">
        <div class="row responsive-pic">
            <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="600ms">
                <img src="images/aidu_place_crafting_tomorrow.jpg" alt="fully responsive" class="img-responsive">
            </div>
            <div class="container wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="row">
                    <div class="col-md-6 col-sm-6 r-test">
                        <h3 class="magin30">AIDU Place - Crafting Tomorrow</h3>
                        <p>The Aidu place will be 6 units of 34-story, commercial and residential development at the center of Segok Dong, in between Gangnam and Techno valley in south Korea. This property will have 2,800 residential units (109,872 sf).</p>
                        <p>For this building, the first half of the building (the bottom half of the 20 floors) are guest rooms for hotel visitors and an auditorium. The second half are fully serviced luxury residential permanent properties</p>
                        <p>This convergence of industrial focuses will create a dynamic “must be seen” that will be very lucrative to the restaurateurs and retail shop, target retail establishments on the 1st,2nd, and basement floors: High end massage and therapy shops, pet shops, custom tailors, psychologist shops, coffee shops, bakeries, organic grocery stores, international food restaurants of all kinds - Italian, Mexican, Belgian, and high end barber shops).</p>
                        <h4>Features</h4>
                        <ul class="r-feature">
                            <li>1 Bedroom Apartments</li>
                            <li>2 Bedroom Apatments</li>
                            <li>3 Bedroom Apartments</li>
                            <li>4 Bedroom Apartments</li>
                            <li>Commercial Units</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Counter-->
<section id="facts" class="top-padding">
    <h3 class="hidden">hidden</h3>
    <div class="container-fluid">
        <div class="row number-counters">
            <!-- first count item -->
            <div class="col-md-3 col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="counters-item green row">
                    <i class="fa fa-bars"></i>
                    <h2><strong data-to="34">0</strong></h2>
                    <p>Story</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                <div class="counters-item dark_gray row">
                    <i class="fa fa-building-o"></i>
                    <h2><strong data-to="7">0</strong></h2>
                    <p>Commercial Buildings</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="counters-item blue row">
                    <i class="fa fa-home"></i>
                    <h2><strong data-to="2800">0</strong></h2>
                    <p>Residential Buildings</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
                <div class="counters-item green row">
                    <i class="fa fa-cube"></i>
                    <h2><strong data-to="109872">0</strong></h2>
                    <p>109,872 sf</p>
                </div>
            </div>
            <!-- end first count item -->
        </div>
    </div>
</section>



<!-- Skills With Round Pattern -->
<section id="experties" class="hide padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="title">Some of Our skills</p>
                <h2 class="heading">our expertise</h2>
            </div>
            <div class="col-md-12">
                <div class="some clearfix text-center">
                    <div class="myStat2" data-text="86%" data-width="10" data-fontsize="14" data-percent="86" data-fgcolor="#07aaa5" data-bgcolor="#eee" data-bordersize="15">
                        <p>Web Development</p>
                    </div>
                    <div class="myStat2" data-text="90%"  data-width="30" data-fontsize="14" data-percent="90" data-fgcolor="#82b440" data-bgcolor="#eee" data-bordersize="15">
                        <p>Development</p>
                    </div>
                    <div class="myStat2"  data-text="75%"  data-width="30" data-fontsize="14" data-percent="75" data-fgcolor="#07aaa5" data-bgcolor="#eee" data-bordersize="15">
                        <p>App development</p>
                    </div>
                    <div class="myStat2"  data-text="79%"  data-width="30" data-fontsize="14" data-percent="79" data-fgcolor="#82b440" data-bgcolor="#eee" data-bordersize="15">
                        <p> performence</p>
                    </div>
                    <div class="myStat2"  data-text="92%" data-width="30" data-fontsize="14" data-percent="92" data-fgcolor="#07aaa5" data-bgcolor="#eee" data-bordersize="15">
                        <p> usability</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="we-do bg-grey padding hide">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <p class="title">Our Service Keeps you Happy</p>
                <h2 class="heading">what we do</h2>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="do-wrap text-center">
                    <div class="dark_gray top"></div>
                    <span class="dark_gray"><i class="icon-icons9"></i></span>
                    <h4>Hot Design</h4>
                    <p>Keep away from people who try to belittle your ambitions. Small people always do that.</p>
                    <a href="#." class="readmore">READ MORE</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                <div class="do-wrap text-center">
                    <div class="green top"></div>
                    <span class="green"><i class="icon-icons96"></i></span>
                    <h4>Hot Design</h4>
                    <p>Keep away from people who try to belittle your ambitions. Small people always do that.</p>
                    <a href="#." class="readmore">READ MORE</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="do-wrap text-center">
                    <div class="dark_gray top"></div>
                    <span class="dark_gray"> <i class="icon-icons42"></i></span>
                    <h4>Hot Design</h4>
                    <p>Keep away from people who try to belittle your ambitions. Small people always do that.</p>
                    <a href="#." class=" readmore">READ MORE</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">
                <div class="do-wrap text-center">
                    <div class="green top"></div>
                    <span class="green"><i class="icon-icons9"></i></span>
                    <h4>Hot Design</h4>
                    <p>Keep away from people who try to belittle your ambitions. Small people always do that.</p>
                    <a href="#." class="readmore">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Crteative Thinker -->
<section id="thinkers" class="section-padding padding-botom hide">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 wow fadeIn">
                <p class="title">Passionate about perfection</p>
                <h2 class="heading">Creative thinkers</h2>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="thinker-wrap">
                    <div class="thinker-image">
                        <img src="images/thinker.jpg" alt="Richard" class="img-responsive">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <ul class="social-link">
                                    <li><a href="#." class="text-center"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="icon-instagram"></i><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3>John Doe</h3>
                    <small>Ceo</small>
                    <p>Keep away from people who try to belittle your ambitions. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="600ms">
                <div class="thinker-wrap">
                    <div class="thinker-image">
                        <img src="images/thinker2.jpg" alt="Richard" class="img-responsive">
                        <div class="overlay green">
                            <div class="overlay-inner">
                                <ul class="social-link">
                                    <li><a href="#." class="text-center"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="icon-instagram"></i><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3>Mary Jane</h3>
                    <small>Co-Founder</small>
                    <p>Keep away from people who try to belittle your ambitions. Small people always do that.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp zoomIn" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="thinker-wrap">
                    <div class="thinker-image">
                        <img src="images/thinker3.jpg" alt="Richard" class="img-responsive">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <ul class="social-link">
                                    <li><a href="#." class="text-center"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a href="#." class="text-center"><i class="icon-instagram"></i><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3>Josh Clark</h3>
                    <small>Sales Head</small>
                    <p>Keep away from people who try to belittle your ambitions. Small people always do that.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Work Project GALLERY -->
<section id="project" class="wow fadeInUp section-padding" data-wow-duration="500ms" data-wow-delay="900ms">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="title">what we do</p>
                <h2 class="heading">All about our plans</h2>
                <div class="work-filter hide">
                    <ul class="text-center">
                        <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                        <li><a href="javascript:;" data-filter=".overview" class="filter">Overview</a></li>
                        <li><a href="javascript:;" data-filter=".apartment" class="filter">Apartments</a></li>
                        <li><a href="javascript:;" data-filter=".floor" class="filter">Floor</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid project-wrapper">
        <div class="zerogrid">
            <div class="wrap-container clearfix">
                <div class="row wrap-content">
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item overview">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/all_siteplan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Overview</h4>
                                            <div class="line"></div>
                                            <p>Site Plan</p>
                                        </div>
                                    </a>
                                    <img src="images/all_siteplan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item overview">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/siteplan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Site Plan</h4>
                                        </div>
                                    </a>
                                    <img src="images/siteplan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item apartment">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/1_bedroom_plan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Apartment Plan</h4>
                                            <div class="line"></div>
                                            <p>1 Bedroom</p>
                                        </div>
                                    </a>
                                    <img src="images/1_bedroom_plan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item apartment">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/2_bedroom_plan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Apartment Plan</h4>
                                            <div class="line"></div>
                                            <p>2 Bedroom</p>
                                        </div>
                                    </a>
                                    <img src="images/2_bedroom_plan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item apartment">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/3_bedroom_plan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Apartment Plan</h4>
                                            <div class="line"></div>
                                            <p>3 Bedroom</p>
                                        </div>
                                    </a>
                                    <img src="images/3_bedroom_plan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item apartment">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/4_bedroom_plan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Apartment Plan</h4>
                                            <div class="line"></div>
                                            <p>4 Bedroom</p>
                                        </div>
                                    </a>
                                    <img src="images/4_bedroom_plan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item floor">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/groud_floor_plan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Ground Floor Plan</h4>
                                        </div>
                                    </a>
                                    <img src="images/groud_floor_plan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item floor">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/general_floor_plan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">General Floor Plan</h4>
                                        </div>
                                    </a>
                                    <img src="images/general_floor_plan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item floor">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/auditorium_ground_floor_plan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Auditorium Ground Floor Plan</h4>
                                        </div>
                                    </a>
                                    <img src="images/auditorium_ground_floor_plan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2 plan">
                        <div class="col-full mix work-item floor">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <a class="fancybox overlay text-center" data-fancybox-group="gallery" href="images/auditorium_first_floor_plan.jpg">
                                        <div class="overlay-inner">
                                            <h4 class="base">Auditorium First Floor Plan</h4>
                                        </div>
                                    </a>
                                    <img src="images/auditorium_first_floor_plan.jpg" alt="work"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testinomials -->
<div style="position:relative;">
    <section id="testinomial" class="hide padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="title">People Love Our Work</p>
                    <h2 class="heading">our happy clients</h2>
                    <div id="testinomial-slider" class="owl-carousel">
                        <div class="item">
                            <p>We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry. </p>
                            <h5>ohn smith - upwork, client</h5>
                            <img src="images/stars.png" alt="star rating"> </div>
                        <div class="item">
                            <p>We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry. </p>
                            <h5>ohn smith - upwork, client</h5>
                            <img src="images/stars.png" alt="star rating"> </div>
                        <div class="item">
                            <p>We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry. </p>
                            <h5>ohn smith - upwork, client</h5>
                            <img src="images/stars.png" alt="star rating"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<section id="slogan" class="wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="hidden">hiddens</h5>
                <p class="pull-left" style="font-size: 26px;">Have any question ? Or want to share your thoughts ?</p>
                <a class="pull-right bounce-top page-scroll" href="#contact">get in touch</a> </div>
        </div>
    </div>
</section>


<!-- Contact Us -->
<section class="info-section" id="contact">
    <div class="row">
        <div class="col-md-6 block text-center wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="center">
                <p class="title">Open for you</p>
                <h2>We're here</h2>
                <p class="margen">Keep away from people who try to belittle your ambitions Small people always do that but the really great Friendly.</p>
                <p><strong>Postal Adress:</strong> 198 West Segok Dong, South Korea</p>
                <p><strong>Phone:</strong> (654) 332-112-222</p>
                <p><strong>Email:</strong> <a href="#.">support@aidu.com</a></p>
                <ul class="social-link">
                    <li><a href="#." class="text-center"><i class="fa fa-facebook"></i><span></span></a></li>
                    <li><a href="#." class="text-center"><i class="fa fa-twitter"></i><span></span></a></li>
                    <li><a href="#." class="text-center"><i class="fa fa-dribbble"></i><span></span></a></li>
                    <li><a href="#." class="text-center"><i class="fa fa-flickr"></i><span></span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 block light text-center wow fadeInRightBig" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="center">
                <p class="title">With propositions</p>
                <h2>Contact Us</h2>
                <form class="form-inline" id="contact-form" onSubmit="return false">
                    <div class="row">
                        <div class="col-md-12 center"><div id="result"></div> </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control"  placeholder="Your Name" name="name" id="name" required>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="email" class="form-control"  placeholder="E-mail Address" name="email" id="email" required>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <textarea placeholder="Message..." class="form-control" name="message" id="message"></textarea>
                            <button type="submit" class="btn-black btn-blue bounce-green" id="btn_submit"> Send Message </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class=" wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="breadcrumb">
                    <li><a href="" class="page-scroll">Home</a></li>
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#project" class="page-scroll">Work</a></li>
                    <li><a href="#contact" class="page-scroll">Contact Us</a></li>
                </ul>
                <p>Copyright &copy; 2018 AIDU. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<a href="#." class="go-top text-center"><i class="fa fa-angle-double-up"></i></a>

<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.circliful.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.fancybox-thumbs.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jPushMenu.js"></script>
<script src="js/functions.js"></script>


</body>
</html>
