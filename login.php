<!DOCTYPE html>
<?php
$cookie_name="hunt4place_user";
$cookie_value=$_POST["email"];
	setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
	//setcookie("hunt4place_user_name",$_POST["password"],time()+(86400*30),"/");
	//setcookie("hunt4place_user_email",$_POST["email"],time()+(86400*30),'/');
?>
<html>
<body>

<?php
if(isset($_COOKIE[$cookie_name])){
echo "hasssssssssssssss";
}
else{
echo "shitttttttttttt";
}
include 'connect.php';
$emailerr = $passworderr = "";
$password = $email = "";
$count = 0; 
$wrongPass = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["password"])){
		echo "<script>
if(window.confirm('password is mendatory')){
	window.location.assign('index.php');
}
else{
	window.location.assign('index.php');
}
</script>
";
	}
	else{
		$password=test_input($_REQUEST["password"]);
		$count++;
	}
	if(empty($_POST["email"])){
		echo "<script>
if(window.confirm('email is mendatory')){
	window.location.assign('index.php');
}
else{
	window.location.assign('index.php');
}
</script>
";
	}
	else{
		if (filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL) === false) {
  			echo "<script>
if(window.confirm('plz enter correct email')){
	window.location.assign('index.php');
}
else{
	window.location.assign('index.php');
}
</script>
";
		}
		else{
			$email=test_input($_REQUEST["email"]);
			$count++;
		}
	}

}
if($count==2){
$sql= "SELECT * FROM login WHERE Email='".$email."' AND Password='".$password."'";

$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
	
} else {
    $wrongPass = "Please check your email or Password ";
}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

</body>
</html>