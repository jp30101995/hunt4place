<?php
$cookie_name = "user";
$cookie_value = $_POST["email"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
include 'connect.php';
$result=mysqli_query($con,"select * from login where Email='".$_POST["email"]."'");
if(mysqli_num_rows($result)==0){
	$sql="INSERT INTO login (Name, Email, Password)
	VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."')";
	if($con->query($sql) === TRUE){
		echo "<script>window.location.assign('email.php?email=".$_POST['email']."')</script>";
	}
	else{
		echo "<script>window.history.back();</script>";
	}
}
else{
	echo '<script type="text/javascript">alert("You have an account on this email id");</script>';
	echo "<script>window.location.assign('delcookie.php')</script>";
}
?>

</body>
</html>