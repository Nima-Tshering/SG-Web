
<?php
include('database/connection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Blog | SkkmGenuine.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SkkmGenuine online Homestay booking in Sikkim" />
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
							<a href="index.html"><h1>Blog | Skkmgenuine.com</h1></a><br><br>
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
<div class="banner1">

</div>
<!-- technology -->
<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="tech-no">
      <?php
      $sql="Select * from blog";
      $result=$conn->query($sql);
      if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc())
          {
            ?>
            <!-- technology-top -->
      			<div class="soci">
      				<ul>
      					<li><a href="#" class="facebook-1"> </a></li>
      					<li><a href="#" class="facebook-1 twitter"> </a></li>
      					<li><a href="#" class="facebook-1 chrome"> </a></li>
      					<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
      					<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
      					<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
      				</ul>
      			</div>
      			 <div class="tc-ch">

      					<div class="tch-img">
      						<a href="blog.php?id=<?php echo $row['id'];?>""><img src="images/<?php echo $row['image'];?>" class="img-responsive" alt=""/></a>
      					</div>
      					<a class="blog blue" href="blog.php?id=<?php echo $row['id'];?>"><?php echo $row['type'];?></a>
      					<h3><a href="blog.php?id=<?php echo $row['id'];?>"><?php echo $row['topic'];?></a></h3>
      						<p><?php echo $row['head'];?></p>

      						<div class="blog-poast-info">
      							<ul>
      								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> <?php echo $row['author'];?> </a></li>
      								<li><i class="glyphicon glyphicon-calendar"> </i><?php echo $row['date'];?></li>

      							</ul>
      						</div>
      			</div>

      			<!-- technology-top -->
            <?php
          }
      }
      ?>

	<div class="clearfix"></div>

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
