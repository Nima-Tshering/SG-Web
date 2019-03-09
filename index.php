
<?php
include('header.php');
?>
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>SkkmGenuine's <span>HomeStay</span></h3>
						<p>Book Homestay in Sikkim</p>
						<a class="hvr-outline-out button2" href="homestay.php">Book Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>SkkmGenuine's <span>HomeStay</span></h3>
						<p>Book your room</p>
						<a class="hvr-outline-out button2" href="homestay.php">Book Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>SkkmGenuine's <span>Homestay</span></h3>
						<p>Book Homestay in Sikkim</p>
						<a class="hvr-outline-out button2" href="homestay.php">Book Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>SkkmGenuine's <span>HomeStay</span></h3>
						<p>Book your room</p>
						<a class="hvr-outline-out button2" href="homestay.php">Book Now </a>
					</div>
				</div>
			</div>
			<div class="item item5">
				<div class="container">
					<div class="carousel-caption">
						<h3>SkkmGenuine's <span>Homestay</span></h3>
						<p>Book Homestay in Sikkim</p>
						<a class="hvr-outline-out button2" href="homestay.php">Book Now </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div>
		



	<!-- /new_arrivals -->
		<div class="new_arrivals_agile_w3ls_info">
			<div class="container">
			    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>
					<div id="horizontalTab">
							<ul class="resp-tabs-list">
								<li> Homestays</li>
									<!-- <li> Resorts</li>-->
							<!--	<li> Packages</li> -->

							</ul>
						<div class="resp-tabs-container">
						<!--/tab_one-->
							<div class="tab1">
						<?php


$perpage = 8;

if(isset($_GET["page"])){
$page = intval($_GET["page"]);
}
else {
$page = 1;
}
$calc = $perpage * $page;
$start = $calc - $perpage;
$res = mysqli_query($conn, "select * from homestays Limit $start, $perpage");

               //  $query="SELECT * FROM `homestays` Orders LIMIT 8";
				//				 $result = $conn->query($query);
								 if ($res->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($res)) {
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
							<div class="tab3">
						<?php
								 $quey="SELECT * FROM `resorts` Orders LIMIT 8";
								 $rest = $conn->query($quey);
								 if ($rest->num_rows > 0) {
		// output data of each row
		while($ro = $rest->fetch_assoc()) {
?>
<div class="col-md-3 product-men">
	<div class="men-pro-item simpleCart_shelfItem">
		<div class="men-thumb-item">
			<img src="images/<?php echo $ro['img1'];?>" alt="" class="pro-image-front">
			<img src="images/<?php echo $ro['img1'];?>" alt="" class="pro-image-back">
				<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
						<a href="resortroom.php?id=<?php echo $ro['id']; ?>" class="link-product-add-cart">Quick View</a>
					</div>
				</div>
				<span class="product-new-top">New</span>

		</div>
		<div class="item-info-product ">
			<h4 style="color:#ff6666">	<a href="resortroom.php?id=<?php echo $ro['id']; ?>"></a><?php  echo $ro['rname'];?></a></h4>
			<div class="info-product-price">
				<span class="item_price">₹<?php echo $ro['sprice'];?></span>
				<del>₹<?php  echo $ro['dprice']; ?></del>
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
	<!--packages-->
							<div class="tab2">
								<?php
									$sqll="SELECT * FROM `pakage` Orders LIMIT 8 ";
									$res=$conn->query($sqll);
									if($res->num_rows >0)
									{
										while($roww=$res->fetch_assoc())
										{
											?>
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item">
														<img src="images/<?php echo $roww['img1']?>" alt="" class="pro-image-front">
														<img src="images/<?php echo $roww['img1']?>" alt="" class="pro-image-back">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="pack.php?id=<?php echo $roww['id']; ?>" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>

													</div>
													<div class="item-info-product ">
														<h4><a href="pack.php?id=<?php echo $roww['id']; ?>"><?php echo $roww['name'];?></a></h4>
														<div class="info-product-price">
															<span class="item_price">₹<?php echo $roww['price']?></span>
															<del>₹<?php echo $roww['dprice'];?></del>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

																			<a href="">		<input type="submit" name="submit" value="Book Now" class="button" /></a>

																		</div>

													</div>
												</div>
											</div>
											<?php
										}
									}
								?>

							<div class="clearfix"></div>
							</div>
<!--ends here-->




						</div>
					</div>
				</div>
				<br><br>
				
<table width="400" cellspacing="2" cellpadding="2" align="center">
<tbody>
<tr>
<td align="center">

<?php

if(isset($page))

{

$result = mysqli_query($conn,"select Count(*) As Total from homestays");

$rows = mysqli_num_rows($result);

if($rows)

{

$rs = mysqli_fetch_assoc($result);

$total = $rs["Total"];

}

$totalPages = ceil($total / $perpage);

if($page <=1 ){

echo "<span id='page_links' style='font-weight: bold;'>&laquo; Prev </span>";

}

else

{

$j = $page - 1;

echo "<span><a id='page_a_link' href='index.php?page=$j'>&laquo; Prev </a></span>";

}

for($i=1; $i <= $totalPages; $i++)

{

if($i<>$page)

{

echo "<span><a id='page_a_link' href='index.php?page=$i'>$i</a></span>";

}

else

{

echo "<span id='page_links' style='font-weight: bold;'>$i</span>";

}

}

if($page == $totalPages )

{

echo "<span id='page_links' style='font-weight: bold;'> Next &raquo;</span>";

}

else

{

$j = $page + 1;

echo "<span><a id='page_a_link' href='index.php?page=$j'> Next &raquo;</a></span>";

}

}

?></td>
<td></td>
</tr>
</tbody>
</table>


			</div>
		<!-- //new_arrivals -->
	
		

	<!-- //banner -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/bottom1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>H</span>omeStays</h3>
								<p>New Arrivals</p>
							</figcaption>
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/bottom2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>H</span>otels </h3>
								<p>New Arrivals</p>
							</figcaption>
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div>
		 </div>
    </div>
	<!-- schedule-bottom -->
	<div class="schedule-bottom">
		<div class="col-md-6 agileinfo_schedule_bottom_left">
			<img src="images/mid.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileits_schedule_bottom_right">
			<div class="w3ls_schedule_bottom_right_grid">
				<h3> <span>Home</span>Stays in Sikkim</h3>
				<p>In recent years social travel networks have become increasingly popular, largely thanks to a rising interest in experiential and responsible tourism. Travellers are looking for new ways to engage with local communities and delve into the heart of a country’s culture.

<br><br>One of the best ways to gain a genuine insight into your destination is to opt for a homestay. Offering something a night in a hotel can never provide, they give you a real experience of local life, connect you with like-minded people and can provide a vital source of revenue in struggling economies.</p>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Customers</h4>
					<h5 class="counter">200</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Events</h4>
					<h5 class="counter">20</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Awards</h4>
					<h5 class="counter">3</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending</span></h3>

		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="#">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="images/bb1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ukhim Limboo HomeStay </h3>
								<p>Tree House</p>
							</figcaption>
						</figure>
			    </div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
		      <a href="#">
		       <div class="bb-middle-agileits-w3layouts grid">
			           <figure class="effect-roxy">
							<img src="images/bottom3.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>M</span>alinggo HomeStay </h3>
								<p>Sikkim's Local Bamboo</p>
							</figcaption>
						</figure>
		        </div>
				</a>
				<a href="">
		      <div class="bb-middle-agileits-w3layouts forth grid">
						<figure class="effect-roxy">
							<img src="images/bottom4.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>Y</span>akchiri HomeStay </h3>
								<p>Sikkim's Food</p>
							</figcaption>
						</figure>
					</div>
					</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>
<!--/grids-->
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
				<img src="images/bot1.jpg" alt=" "><h4>Bayul Homstay <span></span></h4>

			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<img src="images/bot2.jpg" alt=" "><h4>Cherry HomeStay<span></span> </h4>
			</div>
			<div class="clearfix"></div>
	   </div>
<!--/grids-->

	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>10%</span> Discount</h6>

				<a class="hvr-outline-out button2" href="single.html">Book Now </a>
			</div>
		</div>
	<!-- //we-offer -->

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
<!-- //script for responsive tabs -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
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
