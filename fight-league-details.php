<?php
include 'php/dbconfig.php';

$fight_id=$_GET['fight_id'];

$stmt = $DB_con->prepare("SELECT * FROM fight_league where fight_id=$fight_id");
$stmt->execute();
$data=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $DB_con->prepare("SELECT * FROM league_image where fight_id=$fight_id");
$stmt->execute();
$data1=$stmt->fetchAll();
?>
<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<title>Bidang MMA & Fitness Gym || Bidang Fight League Details</title>
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
<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
<link rel="stylesheet" href="css/color.css" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

<link rel="stylesheet" href="css/ms-fullscreen.css" type="text/css">

</head> 
<body id="page-top" class="" data-offset="90" data-target=".navigation" data-spy="scroll">
	<div class="wrapper hide-main-content"> 
		<section  class="page page-category">
			<!--Menu Mobile-->
			<div class="menu-wrap">
				<div class="main-menu">
					<h4 class="title-menu">Main menu</h4>
					<button class="close-button" id="close-button"><i class="fa fa-times"></i></button>
				</div>
				<ul class="nav-menu">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li class="">
						<a href="about.php">About</a>
					</li>

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
					
					<li class="dropdown">
						<a href="#" data-toggle="dropdown">Our Legacy<i class="icon-arrow"></i></a>
						<ul class="child-nav dropdown-nav">
							<li class=""><a href="club-war.php">Bidang Club War</a></li>
							<li class=""><a href="fight-league.php">Bidang Fight League</a></li>
						</ul>
					</li>
					<li class="selected active">
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
										<li class="">
											<a href="index.php">Home</a>
										</li>
										<li class="">
											<a href="about.php">About</a>
										</li>
										<li class="">
											<a href="#">Branches</a>
											<ul class="child-nav">
												<li><a href="bidang-sundarpur.php">Bidang MMA Sundarpur</a></li>
												<li class=""><a href="bidang-bharalumukh.php">Bidang MMA Bharalumukh</a></li>
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
										
										<li class="selected active">
											<a href="#">Our Legacy</a>
                                            <ul class="child-nav">
                                            	<li class=""><a href="club-war.php">Bidang Club War</a></li>
                                                <li class="selected active"><a href="fight-league.php">Bidang Fight League</a></li>
                                                
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
				<!--Banner-->
				<section class="page-heading">
					<div class="title-slide">
						<div class="container">
							<div class="banner-content slide-container">									
								<div class="page-title">
									<h3>Bidang Fight League Details</h3>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--End Banner-->
				<div class="page-content">					
					<!-- Breadcrumbs -->
					<div class="breadcrumbs">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<ul>
										<li class="home"><a href="inhex.php"><i class="fa fa-home"></i> Home</a></li>
										<li><span>//</span></li>
										<li class="category-1"><a href="fight-league.php">Bidang Fight League</a></li>
										<li><span>//</span></li>
										<li class="category-2">Bidang Fight League details</li>								
									</ul>
								</div>
							</div>	
						</div>
					</div>
					<!-- End Breadcrumbs -->
					<!-- Main Content -->
					<div class="main-content our-blog">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">	
									<div class="event-listing">	
										<div class="event-content">
											<div class="img-event">
												<img src="bidang-admin/images/league-banner/<?php echo $data['photo'] ?>" alt=""/>
											</div>
											<div class="news-item-inner">
												<div class="news-date">
													<div class="news-day"><?php echo date("j", strtotime($data['league_date'])); ?></div>
													<div class="news-month"><?php echo date("M", strtotime($data['league_date'])); ?></div>
													<div class="news-month"><?php echo date("Y", strtotime($data['league_date'])); ?></div>
												</div>
												<div class="news-info">
													<div class="news-title">
														<?php echo $data['event_name']; ?>
													</div>
													<div class="news-time">
														<p class="open-time">

															<?php if ($data['event_start_date'] && $data['event_start_date']== 'NULL' ) { ?> NOT YET DECLARED
																	<?php } else { ?>


															<?php if($data['event_start_date']==$data['event_end_date']) { ?>
																<strong>EVENT DATE:</strong> <?php echo date("jS F,Y", strtotime($data['event_start_date'])); ?>
															<?php } else { ?>
																<strong>EVENT DATE:</strong> <?php echo date("jS F,Y", strtotime($data['event_start_date'])); ?> to <?php echo date("jS F,Y", strtotime($data['event_end_date'])); ?> 
																<?php } } ?>
															</p>
															<p class="event-text"><?php echo $data['venue']; ?></p>				
													</div>
													
												</div>
											</div>
											<div class="event-detail">
												<p class="event-desc">
													<?php echo $data['event_detail']; ?> 
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Main Content -->
				</div>
			</div>
		</section>

		<section id="classes" class="classes">
			<div class="classes-content">
				<div class="class-our">	
					<div class="classes-athlete">
						<div class="classes-inner">
							<div id="filtering-demo">	
								<section id="our-class-main" class="isotope">
									<?php foreach ($data1 as $row1) { ?>
										<div class="mix sport boxing element-item col-xs-12 col-sm-6 col-md-3" data-category="sport" style="padding-right: 0px; padding-left: 0px;">
											<div class="box-inner">
												<a class="example-image-link" href="bidang-admin/images/league-fight/<?php echo $row1['event_photo'] ?>" data-lightbox="example-set" data-title="">
													<img src="bidang-admin/images/league-fight/<?php echo $row1['event_photo'] ?>" alt=""/>
												</a>
											</div>
										</div>
									<?php } ?>
								</section>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</section>


		
		
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
	<script type="text/javascript" src="js/shortcode-frontend.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/home.map.js"></script>	
	<script type="text/javascript" src="js/waypoints.js"></script>	
	<script type="text/javascript" src="js/template.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
	<script type="text/javascript" src="js/dropdown.js"></script>	
	<script type="text/javascript" src="js/main.js"></script>



	<script type="text/javascript" src="js/masterslider.min.js"></script>	
	<script type="text/javascript" src="js/banner.js"></script>	


	<script type="text/javascript" src="js/parallax/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/parallax/jquery.transform2d.js"></script>
    <script type="text/javascript" src="js/parallax/script.js"></script>
    <script type="text/javascript" src="js/parallax/parallax.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>

	<script type="text/javascript" src="js/filtering.js"></script>	
	<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
           
</body>
</html>