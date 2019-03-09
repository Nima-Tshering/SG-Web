<?php
include('database/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>SkkmGenuine Online Homestays and Hotels Booking| Home :: SkkmGenuine</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link rel="shortcut icon" href="images/favicon.ico" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">

<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<style>

page_links
 {
  font-family: arial, verdana;
  font-size: 12px;
  border:1px #92c01f solid;
  padding: 6px;
  
  background-color: #92c01f;
	text-decoration: none;
	margin: 0 4px;
	border-radius: 5px;
 }
 #page_a_link
 {
  font-family: arial, verdana;
  font-size: 12px;
  border:1px #92c01f solid;
	color: #ffffff;
	border-radius: 5px;
	margin: 0 4px;
  background-color: #92c01f;
  padding: 6px;
  
  text-decoration: none;
 }


 <!-- //booknowpage-->


 

</style>
</head>
<body oncontextmenu="return false">
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Register Homestay </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:8133060588">Call : +91 8133060588</a></li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">skkmgenuine@gmail.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">

		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>S</span>kkmGenuine </a></h1>
			</div>
        <!-- header-bot -->
	<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					
					<li class=" menu__item"><a class="menu__link" href="homestay.php">Homestays</a></li>
					<li class=" menu__item"><a class="menu__link" href="resort.php">Resort</a></li>
					<li class=" menu__item"><a class="menu__link" href="package.php">Packages</a></li>
					
					<li class=" menu__item"><a class="menu__link" href="about.php">About Us</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact Us</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Username" required="">
								<label>Username</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="Password" required="">
								<label>Password</label>
								<span></span>
							</div>
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Register  <span>Now</span></h3>


														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">



																				<a href="homestay/index.php">	<input type="submit" name="submit" value="Register Now" class="button" /></a>


																		</div>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/logo.jpg" alt=" "/>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
