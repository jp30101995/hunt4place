<?php
$cookie_name = "user";
$cookie_value = $_GET["email"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<html>
<body>
<?php
include 'connect.php';
$sql="update login set confirmed=1 where Email='".$_GET["email"]."'";
	if($con->query($sql) === TRUE){
		echo "<script>window.location.assign('login(part2).php')</script>";
	}
	else{
		echo '<script type="text/javascript">alert("Your Email have not confirmed yet..<br>Please try again later..");</script>';
		echo "<script>window.location.assign('index.php');</script>";
	}

?>
<script>
window.location.assign('admin.php');
</script>
</body>
</html>