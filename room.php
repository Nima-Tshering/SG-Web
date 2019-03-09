<?php
include('database/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>HomeStay Page</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->
<link rel="shortcut icon" href="images/favicon.ico" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body oncanplay="return false">
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
				<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:7701937644">Call : +91 8133060588 </a></li>
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
					<h1><a href="index.html"><span>S</span>kkm Genuine </a></h1>
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
					<li class=" menu__item"><a class="menu__link" href="about.php">About Us</a></li>
					<li class=" menu__item"><a class="menu__link" href="homestay.php">Homestays</a></li>
					<li class=" menu__item"><a class="menu__link" href="resort.php">Resort</a></li>
					<li class=" menu__item"><a class="menu__link" href="package.php">Packages</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact Us</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="#" method="post" class="last">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>

						</div>
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
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>Email</label>
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
						<h3 class="agileinfo_sign">Register <span>Now</span></h3>

														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">



																				<a href="homestay/index.php">	<input type="submit" name="submit" value="Register Now" class="button" /></a>


																		</div>

						</div>

						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
			 <?php
			 	$id=$_GET['id'];
     $sql="SELECT * FROM `homestays` WHERE `id`='$id'";
		 $result=$conn->query($sql);

// output data of each row
$row = $result->fetch_assoc()




			 ?>
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3><?php  echo $row['hname'];?> <span>Page </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home  </a><i>|</i></li>
								<li><?php  echo $row['hname']; ?> Page</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">

					<ul class="slides">
						<li data-thumb="images/<?php  echo $row['img1'];?>">
							<div class="thumb-image"> <img src="images/<?php echo $row['img1']?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php echo $row['img2']?>">
							<div class="thumb-image"> <img src="images/<?php echo $row['img2']?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php echo $row['img3']?>">
							<div class="thumb-image"> <img src="images/<?php echo $row['img3']?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php echo $row['img4']?>">
							<div class="thumb-image"> <img src="images/<?php echo $row['img4']?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php echo $row['img5']?>">
							<div class="thumb-image"> <img src="images/<?php echo $row['img5']?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $row['hname'];?></h3>
					<p><span class="item_price">₹<?php echo $row['sprice']?></span> <del>- ₹<?php echo $row['dprice'];?></del></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h4><?php echo $row['about'];?></h4>
					</div>
					<div class="color-quality">

					</div>
					<div class="occasional">
						<h5>Includes:</h5>
						<div class="colr ert">
							<label class="radio"><i></i>Lodging</label>
						</div>
						<div class="colr">
							<label class="radio"><i></i>Fooding </label>
						</div>
						<div class="colr">
							<label class="radio"><i></i>Service</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

																<a href="http://skkmgenuine.com/Hotel/">	<input type="submit" name="submit" value="Book Now" class="button"></a>

														</div>

					</div>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						                                   <li class="share">Share On : </li>
																							 <!—- ShareThis BEGIN -—>
<div class="sharethis-inline-share-buttons"></div><script async src="//platform-api.sharethis.com/js/sharethis.js#property=5c7ebcbc4c495400114fe6a6&product="inline-share-buttons"></script>
<!—- ShareThis END -—>
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

		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals -->
	<div class="responsive_tabs_agileits">
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							<li>Reviews</li>
							<li>Information</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>Desciption of Homestay</h6>

							   <p class="w3ls_para"><?php echo $row['activity']?></p>
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">

							<div class="single_page_agile_its_w3ls">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/<?php echo $row['ownerimage'];?>" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Owner</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
											</ul>
											<p><?php echo $row['reviews']?></p>
										</div>
										<div class="clearfix"> </div>
						             </div>
									 <div class="add-review">


									</div>
								 </div>

							 </div>
						 </div>
						   <div class="tab3">

							<div class="single_page_agile_its_w3ls">
							  <h6>Information</h6>

							   <p class="w3ls_para"><?php echo $row['information'];?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!-- //new_arrivals -->

	<!--/slider_owl-->
	
	<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Other Homestays <span>Near By</span></h3>	
					 <?php
					 $destination=$row['destination'];

					 $result=mysqli_query($conn,"select * from homestays where destination LIKE '$destination' and id!='$id'");
	
	   
			  if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
	?>
	<div class="col-md-3 product-men">
	 <div class="men-pro-item simpleCart_shelfItem">
		 <div class="men-thumb-item">
			 <img src="images/<?php echo $row['img1'];?>" alt="" class="pro-image-front">
			 <img src="images/<?php echo $row['img1'];?>" alt="" class="pro-image-back">
				 <div class="men-cart-pro">
					 <div class="inner-men-cart-pro">
						 <a href="room.php?id=<?php echo $row['id']; ?>" class="link-product-add-cart">Quick View</a>
					 </div>
				 </div>
				 <span class="product-new-top">New</span>
	
		 </div>
		 <div class="item-info-product ">
			 <h4 style="color:#ff6666">	<a href="room.php?id=<?php echo $row['id']; ?>"></a><?php  echo $row['hname'];?></a></h4>
			 <div class="info-product-price">
				 <span class="item_price">₹<?php echo $row['sprice'];?></span>
				 <del>₹<?php  echo $row['dprice']; ?></del>
			 </div>
			 <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
	
	
	
									 <a href="room.php?id=<?php echo $row['id']; ?>">	<input type="submit" name="submit" value="View Homestay" class="button" /></a>
	
	
							 </div>
	
		 </div>
	 </div>
	 
	</div>
	<?php
	
			 }
				 }
			 ?>
	
							 </div>
							 
	
		 </div>
	 </div>
	
	</div>
					 
						
					  
							<div class="clearfix"> </div>
					<!--//slider_owl-->


		         </div>
	        </div>
 </div>
<!--//single_page-->
<?php

include('footer.php');
?>
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links -->
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js -->
	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>



<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c7ebd7f1700c03f"></script>

</body>
</html>
