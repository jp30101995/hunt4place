<!DOCTYPE html>
<?php
session_start();
?>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/superlist.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>hunt4place - Register</title>
</head>


<body>
<?php
include 'connect.php';
$retypeerr = $nameerr = $emailerr = $passworderr = "";
$retype = $name = $password = $email = "";
$count = 0;
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$nameerr="Name is required";
	}
	else{
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$name)) {
  			$nameerr = "Only letters and white space allowed"; 
		}
		else{
			$name=test_input($_REQUEST["name"]);
			$count++;
		}
	}
	if(empty($_POST["retype"])){
		$retypeerr="Password must match";
	}
	else{
		if($_POST["retype"]==$_POST["password"]){
			$retype=test_input($_REQUEST["retype"]);
			$count++;
		}
		else{
			$retypeerr="Password must match";
		}
	}

	if(empty($_POST["password"])){
		$passworderr="Password is required";
	}
	else{
		$password=test_input($_REQUEST["password"]);
		$count++;
	}

	if(empty($_POST["email"])){
		$emailerr="Email is required";
	}
	else{
		$email=test_input($_REQUEST["email"]);
		$count++;
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emailerr = "Invalid email format"; 
		}
	}

}
if($count==4){
$sql="INSERT INTO login (Name, Email, Password)
VALUES ('$name','$email','$password')";
//$result=mysqli_query($con,$sql);
//header('Location: admin-dashboard.php');
//if ($con->query($sql) == TRUE) {
//}
//else {
//	echo "variable not set...";
//}

$sql2="SELECT * FROM login WHERE Email='".$email."'";
$result=mysqli_query($con,$sql2);
if ($con->query($sql) === TRUE) {
    $_SESSION["signup"]=$signup;
	$_SESSION["name"]=$name;
	$_SESSION["email"]=$email;
	
	echo "<script type='text/javascript'>window.location.href = 'login(part2).php';</script>";
} else {
    if(mysqli_num_rows($result) >0){
		echo "You have already account on this Email ID";
	}else{
		echo "There is some problem so please try after some time...";
	}
}

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

<div class="page-wrapper">
    
    <header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="Logo">
                        <span>hunt4place</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
					<div class="header-top">
                    	
                        <ul class="header-nav-secondary nav nav-pills">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
  
                    
                    </div>
                    <div class="header-bottom">

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li >
        <a href="index.php">Home <i></i></a>
    </li>
    <li >
        <a href="Questionnaire/Hotel.php">Hotel<i></i></a>
    </li>
    <li>
        <a href="Questionnaire/Entertainment.php">Entertainment <i></i></a>
    </li>

</ul>

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->




    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    


                    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="page-title">
            <h1>Register</h1>
        </div><!-- /.page-title html -->

        <form method="post" action="sample.php">
            <div class="form-group">
                <label for="login-form-email">E-mail</label>
                <input type="email" class="form-control" name="email" id="login-form-email" required>
            </div><!-- /.form-group -->

            <div class="form-group">
                <label for="login-form-first-name">Name</label>
                <input type="text" class="form-control" name="name" id="login-form-first-name" required>
            </div><!-- /.form-group -->

            <div class="form-group">
                <label for="login-form-password">Password</label>
                <input type="password" class="form-control" name="password" id="login-form-password" required>
            </div><!-- /.form-group -->


            <button type="submit" class="btn btn-primary pull-right">Register</button>
        </form>
    </div><!-- /.col-sm-4 -->
</div><!-- /.row -->

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

</div><!-- /.page-wrapper -->

<script src="assets/js/jquery.js" type="text/javascript"></script>
<script src="assets/js/map.js" type="text/javascript"></script>

<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;sensor=false" type="text/javascript"></script>

<script type="text/javascript" src="assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="assets/js/superlist.js" type="text/javascript"></script>

</body>

<!-- Mirrored from preview.byaviators.com/template/superlist/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
</html>
