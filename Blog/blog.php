
<?php
include('database/connection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Blog | SkkmGenuine.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business_Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
	<!--start-main-->
           <div class="header">
		        <div class="header-top">
			        <div class="container">
						<div class="logo">
							<a href="index.html"><h1>Blog | SkkmGenuine.com</h1></a>
						</div>


						<div class="clearfix"></div>
					</div>
				</div>

<!--head-bottom-->
<div class="head-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
<!--head-bottom-->
</div>
<!-- banner -->
<div class="banner1">

</div>
<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
      	<div class="business">
      <?php
      $id=$_GET['id'];
      $sl="SELECT * FROM `blog` WHERE `id`='$id'";
      $rlt=$conn->query($sl);
      $r=$rlt->fetch_assoc();
      ?>
      <div class=" blog-grid2">
        <img src="images/<?php echo $r['image'];?>" class="img-responsive" alt="">
        <div class="blog-text">
          <h5><?php echo $r['topic'];?></h5>
          <p><?php echo $r['start'];?> </p>

          <p><?php echo $r['mid'];?></p>
          <p><?php echo $r['end']?></p>
        </div>
      </div>
	     <div class="comment-top">
						<h2>Comment</h2>
						<div class="media-left">
						  <a href="#">
							<img src="images/si.png" alt="">
						  </a>
						</div>
            <?php
            $st="select * from blogcomment";
            $rl=$conn->query($st);
            if($rl->num_rows>0)
            {
              while($roww=$rl->fetch_assoc())
              {
                ?>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $roww['name']?></h4>
                    <p><?php echo $roww['comment'];?></p>
                  <!-- Nested media object -->

                <!-- Nested media object -->

                </div>
                <?php
              }
            }
            ?>

				</div>
				<div class="comment">
					<h3>Leave a Comment</h3>
					<div class=" comment-bottom">
						<form action="#" method="post">
							<input type="text" name="name" placeholder="Name">
	             <textarea placeholder="Message" name="comment" required=""></textarea>
							<input type="submit" name="submit" value="Send">
						</form>
            <?php
            if(isset($_POST['submit']))
            {
              $name=$_POST['name'];
              $comment=$_POST['comment'];
              $s="INSERT INTO `blogcomment`(`name`, `comment`) VALUES ('$name','$comment')";
              $re=$conn->query($s);

            }
            ?>
					</div>
				</div>
			</div>


		</div>
    <!-- technology-right -->
		<div class="col-md-3 technology-right">
				<div class="blo-top">
					<div class="tech-btm">
					<img src="images/head.jpg" class="img-responsive" alt=""/>
					</div>
				</div>
				<div class="blo-top">
					<div class="tech-btm">
					<h4>Facebook Page</h4>
					<p>Like our facebook page to get more post related to homestays in Sikkim</p>
							<div class="fb-page" data-href="https://www.facebook.com/Skkm-Genuine-149729439025049/" data-tabs="timeline" data-width="500" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Skkm-Genuine-149729439025049/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Skkm-Genuine-149729439025049/">Skkm Genuine</a></blockquote></div>
						<div class="button">
							<form>
								<input type="submit" value="Subscribe">
							</form>
						</div>
							<div class="clearfix"> </div>
					</div>
				</div>
				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Top stories of the week </h4>
          <?php
            $s="select * from blog";
            $re=$conn->query($s);
            if($re->num_rows>0)
            {
              while($ro=$re->fetch_assoc())
              {
                ?>
                <div class="blog-grids">
    							<div class="blog-grid-left">
    								<a href="blog.php?id=<?php echo $ro['id'];?>"><img src="images/<?php echo $ro['simage']?>" class="img-responsive" alt=""/></a>
    							</div>
    							<div class="blog-grid-right">

    								<h5><a href="blog.php?id=<?php echo $ro['id'];?>"><?php echo $ro['topic'];?></a> </h5>
    							</div>
    							<div class="clearfix"> </div>
    						</div>

                <?php
              }
            }
          ?>

					</div>
				</div>

		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->



</body>
</html>
