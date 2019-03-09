<?php
include('database/connection.php');
?>
<?php
include('header.php');
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Resort <span>Page </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>Resort Page</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
 <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
</div>
		<div class="col-md-8 products-right">
	<div class="men-wear-top">
	</div>
			<div class="men-wear-bottom">		</div>
	</div>
		<div class="single-pro">
			<?php
       $sql="SELECT * FROM `resorts` ";
			 $result=$conn->query($sql);
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
						<a href="resortroom.php?id=<?php echo $row['id']; ?>" class="link-product-add-cart">Quick View</a>
					</div>
				</div>
				<span class="product-new-top">New</span>

		</div>
		<div class="item-info-product ">
			<h4 style="color:#ff6666">	<a href="resortroom.php?id=<?php echo $row['id']; ?>"></a><?php  echo $row['rname'];?></a></h4>
			<div class="info-product-price">
				<span class="item_price">₹<?php echo $row['sprice'];?></span>
				<del>₹<?php  echo $row['dprice']; ?></del>
			</div>
			<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">



									<a href="http://skkmgenuine.com/Hotel/">	<input type="submit" name="submit" value="Book Now" class="button" /></a>


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
<!-- //mens -->
<?php
include('footer.php');
?>
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
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
	<!---->
							<script type='text/javascript'>//<![CDATA[
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>

							</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
					 <!---->
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
</body>
</html>
