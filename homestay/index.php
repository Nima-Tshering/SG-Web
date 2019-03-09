<?php
include('database/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>SkkmGenuine</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Referral Program form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900" rel="stylesheet"><!--online_fonts-->
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet"><!--online_fonts-->
</head>
<body>
<h1>Homestay Registration Form</h1>
<div class="w3ls-main">
<h2>Register Homestay</h2>
<p>Please the details below to get your Homestay live in our website</p>
<div class="w3ls-form">
<form action="ad.php" method="post">
<ul class="fields">
<div class="Refer_w3l">
<h3>Homestay details</h3>
	<li>
		<label class="w3ls-opt">Homestay name<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">
			<input type="text" name="name"  placeholder="Homestay name" required=" "/>
		</div>
	</li>

	<li>
		<label class="w3ls-opt">phone number<span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="text" name="number" placeholder="phone number" required=""/>
			</span>
	</li>
	</div>
	<div class="Refer_w3l">
	<h3>Charge Per Head</h3>
	<li>
		<label class="w3ls-opt">Price<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">
			<input type="text" name="price"  placeholder="charge per person" required=" "/>
		</div>
	</li>

	</div>
	<div class="input">
		<label class="w3ls-opt1">Full Address of Homestay</label>
		<span class="w3ls-input"><textarea name="address" placeholder="Address"></textarea></span>
	</div>
	<div class="input">
		<label class="w3ls-opt1">About Your Homestay</label>
		<span class="w3ls-input"><textarea name="about" placeholder="About your homestay"></textarea></span>
	</div>
	<div class="input">
		<label class="w3ls-opt1">Review from Owner</label>
		<span class="w3ls-input"><textarea name="review" placeholder="personal review from owner"></textarea></span>
	</div>
	<div class="input">
		<label class="w3ls-opt1">Activities</label>
		<span class="w3ls-input"><textarea name="activity" placeholder="Activities in homestay like trekking"></textarea></span>
	</div>
	<div class="input">
		<label class="w3ls-opt1">Additional Information</label>
		<span class="w3ls-input"><textarea name="info" placeholder="Rules of homestay or "></textarea></span>
	</div>
</ul>
<div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" name="submit" value="submit">
	</div>
</form>
</div>
</div>

</body>
</html>
