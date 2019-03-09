<?php
include('database/connection.php');
?>
<?php
include('header.php');
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>HomeStay <span>Page </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>HomeStay Page</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">

			<select name="destination" onchange="change_country(this.value)" style="width:300px;height:50px">
			<option value="Default">Select Destination</option>			
			<option value="Gangtok">Gangtok</option>
						<option value="Pelling">Pelling</option> 
						<option value="Lachung">Lachung</option>
						<option value="Dzongu">Dzongu</option>
						<option value="Mangan">Mangan</option>	
						<option value="Ravangla">Ravangla</option>
						<option value="Okhrey">Okehrey</option>		
						<option value="Rangpo">Rangpo</option>
						<option value="Temi">Temi</option>					
					</select>
				
					<input type="submit" value=" " name="submit">
				<div class="clearfix"></div>
			</form>
		</div>
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

 <?php
  if(isset($_POST['submit']))
  {
	  
	?>
	
			<div class="single-pro">
	 <?php
	
			$destination=$_POST['destination'];
			
			$result=mysqli_query($conn,"select * from homestays where destination LIKE '$destination'");
	
	   
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
	<?php
	  }
	 
	 

  else{
 ?>
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />

		<div class="single-pro">

 
 <?php
 include("pagination/function.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
		$limit = 8; //if you want to dispaly 10 records per page then you have to change here
		$startpoint = ($page * $limit) - $limit;
		$statement = "homestays"; //you have to pass your query over here

		$result=mysqli_query($conn,"select * from {$statement} LIMIT {$startpoint} , {$limit}");

   
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
 <?php
	 
	 echo "<div id='pagingg' >";
	 echo pagination($statement,$limit,$page);
	 echo "</div>";
	 
	 ?>
</div>
<?php
  }
 
 ?>
	
			
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
