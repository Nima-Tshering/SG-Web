<?php
include('database/connection.php');
?>
<?php
if(isset($_POST['submit']))
{

	$name=$_POST['name'];
	$phone=$_POST['number'];
	$price=$_POST['price'];
	$add=$_POST['address'];
	$about=$_POST['about'];
	$review=$_POST['review'];
	$activity=$_POST['activity'];
	$info=$_POST['info'];
	$sprice=$price+300;
	$dprice=$price+600;


	$sql="INSERT INTO `homestays`(`hname`, `faddress`, `sprice`, `dprice`, `reviews`, `about`, `contact`, `information`, `activity`)VALUES ('$name','$add','$sprice','$dprice','$review','$about','$phone','$info','$activity')";

  if(mysqli_query($conn,$sql))
	{

		?>
		<script>
		alert("Successfully Submitted!");
		location('./index.php');
		</script>
		<?php
	}
	else {
    echo mysqli_error($conn);
	}
}
?>
