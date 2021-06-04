<?php
include 'php/dbconfig.php';
$stmt = $DB_con->prepare("SELECT * FROM news order by news_date desc limit 3");
$stmt->execute();
$data=$stmt->fetchAll();
?>
<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<title>Bidang MMA & Fitness Gym - 1st Mixed Martial Arts & Fitness Gym in Guwahati</title>
<!--meta info-->
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<!--[if !IE 9]><!-->
<link rel="stylesheet" href="css/effect.css" type="text/css">
<link rel="stylesheet" href="css/animation.css" type="text/css">
<!--<![endif]-->
<link rel="stylesheet" href="css/masterslider.css" type="text/css">
<link rel="stylesheet" href="css/ms-fullscreen.css" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css"> 
<link rel="stylesheet" href="css/color.css" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>




<style>
        /* use navbar-wrapper to wrap navigation bar, the purpose is to overlay navigation bar above slider */
        .navbar-wrapper {
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            height: 51px;
        }
        .navbar-wrapper > .container {
            padding: 0;
        }

        @media all and (max-width: 768px ){
            .navbar-wrapper {
                position: relative;
                top: 0px;
            }
        }
    </style>
</head> 
<body id="page-top" class="" data-offset="90" data-target=".navigation" data-spy="scroll">
	<div class="wrapper hide-main-content"> 
		<section  class="page cms-home header-option">
			<!--Menu Mobile-->
			<div class="menu-wrap">
				<div class="main-menu">
					<h4 class="title-menu">Main menu</h4>
					<button class="close-button" id="close-button"><i class="fa fa-times"></i></button>
				</div>
				<ul class="nav-menu">
					<li class="selected active">
						<a href="index.php">Home</a>
					</li>
					<li><a href="about.php">About</a></li>

					<li class="dropdown">
						<a href="#" data-toggle="dropdown">Branches<i class="icon-arrow"></i></a>
						<ul class="child-nav dropdown-nav">
							<li><a href="bidang-sundarpur.php">Bidang MMA Sundarpur</a></li>
							<li><a href="bidang-bharalumukh.php">Bidang MMA Bharalumukh</a></li>
							<li><a href="bidang-sarab-bhatti.php">Bidang MMA Sarab Bhatti</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown">Programs<i class="icon-arrow"></i></a>
						<ul class="child-nav dropdown-nav">
							<li class="selected active"><a href="mma.php">Mixed Martial Arts (MMA)</a></li>
							<li class=""><a href="fitness.php">Fitness</a></li>
							<li class=""><a href="weight-management.php">Weight Management</a></li>
							<li class=""><a href="self-defense.php">Self Defense</a></li>
						</ul>
					</li>
					<li class="">
						<a href="facilities.php">Facilities</a>
					</li>
					<li class="">
						<a href="coaches.php">Coaches</a>
					</li>
					
					<li class="dropdown">
						<a href="#" data-toggle="dropdown">Our Legacy<i class="icon-arrow"></i></a>
						<ul class="child-nav dropdown-nav">
							<li class=""><a href="club-war.php">Bidang Club War</a></li>
							<li class=""><a href="fight-league.php">Bidang Fight League</a></li>
							
						</ul>
					</li>
					<li class="">
						<a href="updates.php">Updates</a>
					</li>
					<li><a href="contact.php">Contact us</a></li>
				</ul>
			</div>
			<!--Menu Mobile-->
			<div class="content-wrapper">
				<!--Header-->
				<header id="header" class="header header-container header-container-2 alt reveal">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 logo">
								<a href="index.php"><img style="max-width: 250%;" src="images/logo.png" alt=""/></a>
							</div>
							<div class="col-md-9 nav-container">
								<nav class="megamenu collapse navbar-collapse bs-navbar-collapse navbar-right mainnav col-md-10" role="navigation">
									<ul class="nav-menu">
										<li class="selected active">
											<a href="index.php">Home</a>
										</li>
										<li class="">
											<a href="about.php">About</a>
										</li>
										<li>
											<a href="#">Branches</a>
											<ul class="child-nav">
												<li><a href="bidang-sundarpur.php">Bidang MMA Sundarpur</a></li>
												<li><a href="bidang-bharalumukh.php">Bidang MMA Bharalumukh</a></li>
												<li><a href="bidang-sarab-bhatti.php">Bidang MMA Sarab Bhatti</a></li>
											</ul>
										</li>
										<li class="">
											<a href="#">Programs</a>
											<ul class="child-nav">
												<li class=""><a href="mma.php">Mixed Martial Arts (MMA)</a></li>
												<li class=""><a href="fitness.php">Fitness</a></li>
												<li class=""><a href="weight-management.php">Weight Management</a></li>
												<li class=""><a href="self-defense.php">Self Defense</a></li>
											</ul>
										</li>
										<li class="">
											<a href="facilities.php">Facilities</a>
										</li>
										<li class="">
											<a href="coaches.php">Coaches</a>
										</li>
										
										<li class="">
											<a href="#">Our Legacy</a>
											<ul class="child-nav">
												<li class=""><a href="club-war.php">Bidang Club War</a></li>
												<li class=""><a href="fight-league.php">Bidang Fight League</a></li>
											</ul>
										</li>
										
										<li class="">
											<a href="updates.php">Updates</a>
										</li>
										<li><a href="contact.php">Contact us</a></li>
									</ul>
								</nav>							
							</div>							
							<button class="menu-button" id="open-button"></button>
						</div>
					</div>
				</header>
				<!--End Header-->

				
				
				<!--End Banner-->				
				<div class="page-content">		

					<div style="min-height: 50px; margin-top: 82px;">
        <!-- Jssor Slider Begin -->
        
        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }
        </style>
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>

            <!-- Slides Container -->
            <div  data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 600px; overflow: hidden;">
                <div class="ms-slide slide-1" >
                    <img  data-u="image" src="images/mma4.jpg" />
                    			<h3 >
									BIDANG MMA & FITNESS GYM
								</h3>																												
								<h3 class="ms-layer hps-title1" style="left: 130px; top: 157px;"
									data-type="text"
									data-ease="easeOutExpo"
									data-delay="1500"
									data-duration="1400"
									data-effect="skewleft(30,80)"
								>
									BIDANG MMA & FITNESS GYM
								</h3>																												
								<h3 class="ms-layer hps-title3" style="left: 130px; top: 245px; text-align:center; font-size: 55px;"
									data-type="text"
									data-delay="2900"
									data-duration="2400"
									data-effect="rotate3dtop(-100,0,0,40,t)"
									data-ease="easeOutExpo"
								>
									Empower yourself with Fitness
								</h3>
								
								<h3 class="ms-layer hps-title4" style="left: 130px; top: 330px;"
									data-type="text"
									data-delay="4500"
									data-duration="2800"
									data-effect="rotate3dtop(-100,0,0,18,t)"
									data-ease="easeOutExpo"
								>
									Get a trial Class*
								</h3>
                </div>
                <div  class="ms-slide slide-1" >
                    <img data-u="image" src="images/mma5.jpg" />

                    			<h3 >
									BIDANG MMA & FITNESS GYM
								</h3>																												
								<h3 class="ms-layer hps-title1" style="left: 130px; top: 157px;"
									data-type="text"
									data-ease="easeOutExpo"
									data-delay="1500"
									data-duration="1400"
									data-effect="skewleft(30,80)"
								>
									BIDANG MMA & FITNESS GYM
								</h3>																												
								<h3 class="ms-layer hps-title3" style="left: 130px; top: 245px; text-align:center;"
									data-type="text"
									data-delay="2900"
									data-duration="2400"
									data-effect="rotate3dtop(-100,0,0,40,t)"
									data-ease="easeOutExpo"
								>
									make yourself fit
								</h3>
								
								<h3 class="ms-layer hps-title4" style="left: 130px; top: 330px;"
									data-type="text"
									data-delay="4500"
									data-duration="2800"
									data-effect="rotate3dtop(-100,0,0,18,t)"
									data-ease="easeOutExpo"
								>
									Get a trial Class*
								</h3>
                </div>
                <div class="ms-slide slide-1" >
                    <img data-u="image" src="images/mma6.jpg" />

                    			<h3 >
									BIDANG MMA & FITNESS GYM
								</h3>																												
								<h3 class="ms-layer hps-title1" style="left: 130px; top: 157px;"
									data-type="text"
									data-ease="easeOutExpo"
									data-delay="1500"
									data-duration="1400"
									data-effect="skewleft(30,80)"
								>
									BIDANG MMA & FITNESS GYM
								</h3>																												
								<h3 class="ms-layer hps-title3" style="left: 130px; top: 245px; text-align:center;"
									data-type="text"
									data-delay="2900"
									data-duration="2400"
									data-effect="rotate3dtop(-100,0,0,40,t)"
									data-ease="easeOutExpo"
								>
									Make You Be The Fighter
								</h3>
								
								<h3 class="ms-layer hps-title4" style="left: 130px; top: 330px;"
									data-type="text"
									data-delay="4500"
									data-duration="2800"
									data-effect="rotate3dtop(-100,0,0,18,t)"
									data-ease="easeOutExpo"
								>
									Get a trial Class*
								</h3>
                </div>
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
            <style>
                .jssorb031 {position:absolute;}
                .jssorb031 .i {position:absolute;cursor:pointer;}
                .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
                .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
                .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
                .jssorb031 .i.idn {opacity:.3;}
            </style>
            <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
        
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
            <style>
                .jssora051 {display:block;position:absolute;cursor:pointer;}
                .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                .jssora051:hover {opacity:.8;}
                .jssora051.jssora051dn {opacity:.5;}
                .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
            </style>
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
            <!--#endregion Arrow Navigator Skin End -->
        </div>
        <!-- Jssor Slider End -->
    </div>

    <!-- Our Team -->
					<section id="our-team" class="our-team-page">				
						<div class="our-team">
							<div class="our-team-content">
								<div class="our-team-inner">							
									<div class="custom">
										<div class="our-team-tabs our-team-bottom our-team-fit  content-our-team" data-active="1">
											<div class="our-team-panes">
												<div class="our-team-pane our-team-clear">
													<div class="our-team-img col-md-4 col-sm-4 col-xs-12">
														<img src="images/img_tabBlock4.jpg" alt="" data-mce-src="images/img_tabBlock4.jpg"/>
													</div>
													<div class="detail-our-team col-md-8 col-sm-8 col-xs-12">
														<div class="detail-our-team-inner">
															<div class="detail-our-team-desc">
																Hello, I'm Bhabajeet Choudhury, Welcome you all to BIDANG MMA & FITNESS GYM based in 
																Guwahati. Here we train Mixed Martial Arts fighters and also help individuals to 
																stay fit and healthy.
															</div>
															<div class="detail-our-team-user">Bhabajeet Choudhury</div>
															<div class="detail-our-team-pos">
																Founder & Head Coach of Bidang MMA & Fitness Gym<br>
																Indian MMA fighter from Assam<br>
																SFL(Super Fight League) World Ranking 4th Fighter<br>
																Asia's Best Fight Finish Award 2013 Winner<br>
																Former International Wushu and Kick Boxing Medalist
															</div>
														</div>
													</div>
													
												</div>
												
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>					
					</section>
					<!-- End Our Team -->
					

					<section class="new-product scroll-to">
							<div class="container">
								<div class="row">
									<div class="title-name">
										<h4>Our Programs</h4>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image">
													<a href="mma.php"><img alt="" src="images/newproducts/product-1.jpg"></a>
												</div>
												<div class="info-products">
													<div class="product-name" >
														<a href="mma.php"> Mixed Martial Arts (MMA)</a>
														<div class="product-bottom"></div>
													</div>
												</div>
											</div>										
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image">
													<a href="crassfit.php"><img alt="" src="images/newproducts/product-3.jpg"></a>
												</div>
												<div class="info-products">
													<div class="product-name" >
														<a href="fitness.php"> Fitness</a>
														<div class="product-bottom"></div>
													</div>
												</div>
											</div>										
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image">
													<a href="weight-management.php"><img alt="" src="images/newproducts/product-2.jpg"></a>
												</div>
												<div class="info-products">
													<div class="product-name" >
														<a href="weight-management.php"> Weight Management</a>
														<div class="product-bottom"></div>
													</div>
												</div>
											</div>										
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image">
													<a href="self-defense.php"><img alt="" src="images/newproducts/product-4.jpg"></a>
												</div>
												<div class="info-products">
													<div class="product-name" >
														<a href="self-defense.php"> Self Defense</a>
														<div class="product-bottom"></div>
													</div>
												</div>
											</div>										
										</div>
									</div>							
								</div>						
							</div>
						</section>
					<!--Class Man-Girl-->
					<section class="man-girl">
						<div class="container">
							<div class="row">								
								<div class="content-main content-main-left col-md-6 col-sm-6 col-xs-12">
									<div class="img-class img-class-left">
										<img src="images/image-1.png" alt="">
									</div>
									<div class="class-content class-content-left">
										<div class="title">
											<h3 class="title-men">Group Training</h3>
										</div>
										<div class="class-content-text">
											<p class="desc-content ">Get started with Group Training. Team workouts will increase your effectiveness by providing accountability, and you’ll find yourself pushing harder in an energy-filled atmosphere.</p>
											<div class="join"><a href="contact.php">Join Us Now</a></div>
										</div>
									</div>
								</div>
								<div class="content-main content-main-right col-md-6 col-sm-6 col-xs-12 ">
									<div class="img-class img-class-right">
										<img src="images/image-2.png" alt="">
									</div>
									<div class="class-content class-content-right">
										<div class="title">
											<h3 class="title-men">Personal Training</h3>
										</div>
										<div class="class-content-text">
											<p class="desc-content ">Start your training with our certified Personal Training professionals who will develop a personalized training plan that fits your body and lifestyle.</p>
											<div class="join"><a href="contact.php">Join Us Now</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--End Class Man-Girl-->
					<!--  Fit & Strong  -->
					<section class="fit-strong">
						<div class="container">
							<div class="row">
								<center><h2 class="fit-strong-text" style="padding-top:20px;">Our Branches</h2></center>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="fit-strong-left">												
										<div class="fit-strong-top">
											<!-- <h3 class="fit-strong-text">Bidang MMA<br>Sundarpur</h3> -->
											<!-- <h2 class="fit-strong-text">Bidang MMA<br>Sundarpur</h2> -->
										</div>
										<div class="fit-strong-bottom">
											<div class="fit-background"></div>
											<div class="carousel-image">
												<div id="carousel-image" class="owl-carousel" data-plugin-options='{"singleItem":true,"autoPlay":false,"autoHeight":true, "mouseDrag": false}'>
													<div class="caroussel-slide">
														 <img src="images/onepage/fit-2.jpg" alt="">
													</div>
												</div>												
											</div>
											<div class="carousel-text">
												<div id="carousel-text" class="owl-carousel" data-plugin-options='{"singleItem":true,"autoPlay":false,"autoHeight":true, "mouseDrag": false}' data-pager='owl-page'>
													<div class="slide-caption">
														<h4 class="caption-title"><a class="link1" href="bidang-sundarpur.php"><b style="color:#ec3642; font-size: 17px">Bidang MMA Sundarpur</b></a></h4>
														<p class="caption-slide">Our Sundarpur Branch was established in 27th April, 2014 by Founder and Head Coach Bhabajeet Choudhury. If you are looking for MMA Training.....<br><a class="link1" href="bidang-sundarpur.php">Read More >></a> </p>
													</div>											
												</div>												
											</div>												
										</div>							
									</div>							
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="fit-strong-left">												
										<div class="fit-strong-top">
											<!-- <h2 class="fit-strong-text">Bidang MMA</h2> -->
										</div>
										<div class="fit-strong-bottom">
											<div class="fit-background"></div>
											<div class="carousel-image">
												<div id="carousel-image" class="owl-carousel" data-plugin-options='{"singleItem":true,"autoPlay":false,"autoHeight":true, "mouseDrag": false}'>
													<div class="caroussel-slide">
														 <img src="images/onepage/fit-1.jpg" alt="">
													</div>
												</div>												
											</div>
											<div class="carousel-text">
												<div id="carousel-text" class="owl-carousel" data-plugin-options='{"singleItem":true,"autoPlay":false,"autoHeight":true, "mouseDrag": false}' data-pager='owl-page'>
													<div class="slide-caption">
														<h4 class="caption-title"><a class="link1" href="bidang-bharalumukh.php"><b style="color:#ec3642; font-size: 17px">Bidang MMA Bharalumukh</b></a></h4>
														<p class="caption-slide">Our Bharalumukh Branch was established in 28th February, 2016 by Founder and Head Coach Bhabajeet Choudhury. Here we offer.....<br><a class="link1" href="bidang-bharalumukh.php">Read More >></a> </p>
													</div>											
												</div>												
											</div>												
										</div>							
									</div>							
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="fit-strong-left">												
										<div class="fit-strong-top">
											<!-- <h2 class="fit-strong-text">Bidang MMA</h2> -->
										</div>
										<div class="fit-strong-bottom">
											<div class="fit-background"></div>
											<div class="carousel-image">
												<div id="carousel-image" class="owl-carousel" data-plugin-options='{"singleItem":true,"autoPlay":false,"autoHeight":true, "mouseDrag": false}'>
													<div class="caroussel-slide">
														 <img src="images/onepage/fit-3.jpg" alt="">
													</div>
												</div>												
											</div>
											<div class="carousel-text">
												<div id="carousel-text" class="owl-carousel" data-plugin-options='{"singleItem":true,"autoPlay":false,"autoHeight":true, "mouseDrag": false}' data-pager='owl-page'>
													<div class="slide-caption">
														<h4 class="caption-title"><a class="link1" href="bidang-sarab-bhatti.php"><b style="color:#ec3642; font-size: 17px">Bidang MMA Sarab Bhatti</b></a></h4>
														<p class="caption-slide">Our Sarab Bhatti Branch was established in 9th February, 2019 by Founder and Head Coach Bhabajeet Choudhury. This is our new branch where you will get....<br><a class="link1" href="bidang-sarab-bhatti.php">Read More >></a> </p>
													</div>												
												</div>												
											</div>												
										</div>							
									</div>							
								</div>

							</div>
						</div>
					</section>
					<!--  End Fit & Strong  -->
					<!--Introdution-->
					<!-- <section class="introduction">
						<div class="container">
							<div class="row">
								<div class="title-page title-about">
											<h3>About BIDING MMA & FITNESS GYM</h3>
											<p>Working from home meant we could vary snack and coffee breaks, change our desks or view, goof off, drink on the job, even spend the day in pajamas, and often meet to gossip or share ideas</p>
										</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="intro-content">
										<div class="icon-img">
											<img src="images/boxing-icon.png" alt=""/>
										</div>
										<h4 class="intro-title">Programs</h4>
										<p class="intro-text">Fusce gravida tortor felis.  Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="intro-content">
										<div class="icon-img">
											<img src="images/fitness-icon.png" alt=""/>
										</div>
										<h4 class="intro-title">Coaches</h4>
										<p class="intro-text">Fusce gravida tortor felis.  Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="intro-content">
										<div class="icon-img">
											<img src="images/weight-icon.png" alt=""/>
										</div>
										<h4 class="intro-title">Braches</h4>
										<p class="intro-text">Fusce gravida tortor felis.  Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
									</div>
								</div>
							</div>
						</div>
					</section> -->				
					<!--End Introdution-->
					<!--About-->
					<!-- <section class="about scroll-to">
						<div class="about-top">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="title-page title-about">
											<h3>About BIDING MMA & FITNESS GYM</h3>
											<p>Working from home meant we could vary snack and coffee breaks, change our desks or view, goof off, drink on the job, even spend the day in pajamas, and often meet to gossip or share ideas</p>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="box-left">
											<div class="icon">
												<i class="fa fa-bolt"></i>
											</div>
											<div class="content-about">
												<h4 class="about-title">Responsive & Retina Ready</h4>
												<p>Fusce gravida tortor felis. Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
											</div>
										</div>
										<div class="box-left">
											<div class="icon">
												<i class="fa fa-rocket"></i>
											</div>
											<div class="content-about">
												<h4 class="about-title">Calander And Event Manager</h4>
												<p>Fusce gravida tortor felis. Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
											</div>
										</div>
										<div class="box-left">
											<div class="icon">
												<i class="fa fa-globe"></i>
											</div>
											<div class="content-about">
												<h4 class="about-title">Parallax Video Background</h4>
												<p>Fusce gravida tortor felis. Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="box-right">
											<div class="icon">
												<i class="fa fa-play-circle-o"></i>
											</div>
											<div class="content-about">
												<h4 class="about-title">Video &amp; Images background</h4>
												<p>Fusce gravida tortor felis. Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
											</div>
										</div>
										<div class="box-right">
											<div class="icon">
												<i class="fa fa-magic"></i>
											</div>
											<div class="content-about">
												<h4 class="about-title">Unlimited Colors Support</h4>
												<p>Fusce gravida tortor felis. Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
											</div>
										</div>
										<div class="box-right">
											<div class="icon">
												<i class="fa fa-cog"></i>
											</div>
											<div class="content-about">
												<h4 class="about-title">Powerful Theme Option</h4>
												<p>Fusce gravida tortor felis. Ac dictum risus sagittis id morbi posu justo eleifend libero ultricies asunt </p>
											</div>
										</div>
									</div>						
								</div>
							</div>
						</div>
						
					</section> -->
					<!--End About-->
					
					
					
					<!--Training-->
					<section class="training scroll-to">
						<!-- PARALLAX WINDOWS -->
						<div class="parallax-block-wrap-module auto-width">
							<div class="parallax-block bt-advance-parallax" id="parallax-block">
								
								<!-- PARALLAX CONTENT -->
								<div class="control-button">
									<div class="nav-wrap hidden">
										<div class="nav-wrap-in next">
											<span class="nav-next"></span>
										</div>
										<div class="nav-wrap-in prev">
											<span class="nav-prev"></span>
										</div>
									</div>
									<div style="display: none;" class="button-wrap">
										<span class="button close-btn"></span>
									</div>
								</div>
								<div class="parallax-background">
									<!--Textured and color-->
									<div class="parallax-background-overlay"></div>
									<img alt="" src="images/bg-position-3.1.jpg">										
								</div>
								
								<div class="parallax-block-content default-pos parallax-text parallax-v2">									
									
										<p class="strart-your">Start Your</p>
										<h1 class="training-title">Training Today</h1>
										<a href="contact.php" class="button" style="padding-left:30px; padding-right:30px;">Click here for Enquiry</a>
									
								</div>
								
								<div class="overlay-loading"><span class="loading"><img src="images/loading-black.gif" alt=""/></span></div>    

								<!-- POPUP CONTENT -->
								<div  class="parallax-content-wrap">
									<div class="parallax-content hidden">
										<div class="parallax-content-in">
										</div>
										<div class="content-show-large">
											<div class="item-contain">
												<div class="video-inner">
													<!-- VIDEO TAG OR EMBED CODE -->
													<video data-fill-mode="fill" data-loop="true" data-autopause="false" loop>
														<source type="video/mp4" src="images/video/demo.mp4" />									
													</video> 	
												</div>
											</div>
											<div class="loading"><img src="images/loading-black.gif" alt=""/></div>
										</div>
									</div>
								</div>
								<!-- end POPUP CONTENT -->
													  
							</div>
						</div>	
					</section>
					<!--End Training-->
					

					<div class="main-content">
						<div class="container">
							<div class="row">
								<div id="our-listing-grid" class="our-trainers event-listing-grid">
									<div class="title-page title-about" style="padding-top:5px;">
											<h3>latest updates</h3>
											
										</div>
									<?php foreach ($data as $row) { ?>
									<div class="listing-grid col-md-4 col-sm-6 col-xs-12">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a href="update-details.php?news_id=<?php echo $row['news_id'];?>"><img alt="" src="bidang-admin/images/news-banner/<?php echo $row['photo'] ?>"></a>
												</div>
												<a href="update-details.php?news_id=<?php echo $row['news_id'];?>">
													<div class="info-products">
														<!-- <div class="img-trainers">
															<div class="news-date">
																<div class="news-day">4</div>
																<div class="news-month">FEB</div>
															</div>
														</div> -->
														<p style="padding-top:15px;">
															<?php echo $row['news_name']; ?>
															<div class="product-bottom"></div>
														</p>
														<div class="product-info">																										
															<div class="icon-time">
																<span><i class="fa fa-calendar-o"></i><?php echo date("jS F,Y", strtotime($row['news_date'])); ?></span>
															</div>
														</div>												
														
													</div>
												</a>												
											</div>	
										</div>
									</div>
								<?php } ?>
								
									
									<center><a href="updates.php">See More >>></a></center>																																																			
								</div>								
							</div>
						</div>
					</div>

					<div class="main-content" style="background-color:#ec3642;">
						<div class="container">
							<div class="row">
								<div id="our-listing-grid" class="our-trainers event-listing-grid">
									<div class="title-page title-about" style="padding-top:5px;">
											<h3>Testimonials</h3>
											
										</div>
									<div class="listing-grid col-md-3 col-sm-6 col-xs-12" style="padding-right:5px; padding-left:5px;">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a class="example-image-link" href="#">
														<img alt="" src="images/testimonial/1.jpg">
													</a>
												</div>											
											</div>																																											
										</div>																																											
									</div>
									<div class="listing-grid col-md-3 col-sm-6 col-xs-12" style="padding-right:5px; padding-left:5px;">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a class="example-image-link" href="#">
														<img alt="" src="images/testimonial/2.jpg">
													</a>
												</div>											
											</div>																																											
										</div>																																											
									</div>
									<div class="listing-grid col-md-3 col-sm-6 col-xs-12" style="padding-right:5px; padding-left:5px;">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a class="example-image-link" href="#">
														<img alt="" src="images/testimonial/3.jpg">
													</a>
												</div>											
											</div>																																											
										</div>																																											
									</div>
									<div class="listing-grid col-md-3 col-sm-6 col-xs-12" style="padding-right:5px; padding-left:5px;">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a class="example-image-link" href="#">
														<img alt="" src="images/testimonial/4.jpg">
													</a>
												</div>											
											</div>																																											
										</div>																																											
									</div>
									<div class="listing-grid col-md-3 col-sm-6 col-xs-12" style="padding-right:5px; padding-left:5px;">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a class="example-image-link" href="#">
														<img alt="" src="images/testimonial/5.jpg">
													</a>
												</div>											
											</div>																																											
										</div>																																											
									</div>
									<div class="listing-grid col-md-3 col-sm-6 col-xs-12" style="padding-right:5px; padding-left:5px;">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a class="example-image-link" href="#">
														<img alt="" src="images/testimonial/6.jpg">
													</a>
												</div>											
											</div>																																											
										</div>																																											
									</div>
									<div class="listing-grid col-md-3 col-sm-6 col-xs-12" style="padding-right:5px; padding-left:5px;">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a class="example-image-link" href="#">
														<img alt="" src="images/testimonial/7.jpg">
													</a>
												</div>											
											</div>																																											
										</div>																																											
									</div>
									<div class="listing-grid col-md-3 col-sm-6 col-xs-12" style="padding-right:5px; padding-left:5px;">
										<div class="product-image-wrapper">
											<div class="product-content">
												<div class="product-image product-trainer">
													<a class="example-image-link" href="#">
														<img alt="" src="images/testimonial/8.jpg">
													</a>
												</div>											
											</div>																																											
										</div>																																											
									</div>
									<center><a href="testimonials.php">See More >>></a></center>																																																			
								</div>

							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</section >
		
		<!--Footer-->
		<footer class="page-footer">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 home">
							<div class="copy-right">
								<div class="logo">
									<a href="index.html"><img src="images/store/logo-store.png" alt=""/></a>
								</div>
								<div class="footer-right">
									<div class="line2">1st Mixed Martial Arts & Fitness Gym in Guwahati. We have the best qualified trainers who will help you achieve your targets.<br><br></div>
									
									
								</div>
							</div>
							
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 links-our-product">							
							<div class="footer-title">
								<h4>Quick Links</h4>			
							</div>
							<div class="links-footer">
								<ul class="links-left">
									<li>
										<a href="programs.php">Programs</a>
									</li>
									<li>
										<a href="career.php">Career</a>
									</li>
									<li>
										<a href="facilities.php">Facilities</a>
									</li>
									<li>
										<a href="contact.php">Contact Us</a>
									</li>
									<li>
										<a href="testimonials.php">Testimonials</a>
									</li>
									<li>
										<a href="franchisee.php">Own a Franchisee</a>
									</li>
									
								</ul>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 links-our-product">                         
                            <div class="footer-title">
                                <h4>Our Branches</h4>           
                            </div>
                            <div class="links-footer">
                                <ul class="links-left">
                                    <li>
                                        <a href="bidang-sundarpur.php">Bidang MMA Sundarpur</a>
                                    </li>
                                    <li>
                                        <a href="bidang-bharalumukh.php">Bidang MMA Bharalumukh</a>
                                    </li>
                                    <li>
                                        <a href="bidang-sarab-bhatti.php">Bidang MMA Sarab Bhatti</a>
                                    </li>

                                    
                                </ul>
                                
                            </div>
                            <div class="footer-title">
                                <h4>Our Legacy</h4>           
                            </div>
                            <div class="links-footer">
                                <ul class="links-left">
                                    <li>
                                        <a href="club-war.php">Bidang CLub War</a>
                                    </li>
                                    <li>
                                        <a href="fight-league.php">Bidang Fight League</a>
                                    </li>

                                    
                                </ul>
                                
                            </div>
                        </div>
						<!-- <div class="col-md-4 col-sm-4 col-xs-12 location">							
							<div class="footer-title">
								<h4>Our Branches</h4>			
							</div>
							<div class="address">
								<a>DD Complex 2, Second Floor, Sundarpur,<br>RG Baruah Road Gauhati</a>
								<a>Jkon Building, Opp. Sonaram School,<br>Bharalumukh, Guwahati</a>
								<a>Gym Khanna, Sarab Bhatti Chariali,<br>Guwahati</a>
							</div>
						</div> -->
						<div class="col-md-3 col-sm-6 col-xs-12 location">							
							<div class="footer-title">
								<h4>Contact Details</h4>			
							</div>
							<div class="address">
								<p><i class="fa fa-phone"></i> Phone : +91 70860 41370 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 94019 24863<br><i class="fa fa-envelope"></i> Email : c.bhabajeet@gmail.com</p>
							</div>
							<div class="social_icon">
                                <a href="https://www.facebook.com/bidangmma/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/bidangmmaandfitnessgym/" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCyyCcqax-pEzPG01hZFjshg" target="_blank"><i class="fa fa-youtube"></i></a>
                            </div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 home">
							<div class="footer-right">
									<center>
									<div class="line1">Designed &amp; Maintained by <a href="http://www.probittechnologies.com" target="_blank">Probit Technologies</a></div>
									</center>
								</div>
							
						</div>						
					</div>
				</div>
			</section>
		</footer>
		<!--End Footer-->
		<!--To Top-->
		<div id="copyright">
			<div class="container">

				<div class="back-to-top"><a title="BACK_TO_TOP" href="#top"><i class="fa fa-chevron-up"></i></a></div>

				<div class="clrDiv"></div>
			</div>
		</div>
		<!--End To Top-->
	</div>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/parallax/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/parallax/jquery.transform2d.js"></script>
    <script type="text/javascript" src="js/parallax/script.js"></script>
    <script type="text/javascript" src="js/parallax/parallax.js"></script>
	<script type="text/javascript" src="js/masterslider.min.js"></script>
	<script type="text/javascript" src="js/banner.js"></script>
	<script type="text/javascript" src="js/home.map.js"></script>
	<script type="text/javascript" src="js/waypoints.js"></script>
	<script type="text/javascript" src="js/template.js"></script>
	<script type="text/javascript" src="js/dropdown.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/main.js"></script>	



	<script type="text/javascript" src="js/shortcode-frontend.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>

	<script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: 1,                                       //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $Idle: 4000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: 1,   			                //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                $SlideEasing: $Jease$.$OutQuint,                    //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $Orientation: 1                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                 //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    
</body>
</html>
