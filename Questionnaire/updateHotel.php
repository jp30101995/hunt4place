<html>
<head>
</head>
<body>
<?php
include '../connect.php';
//session_start();
$count=0;
$score=0;
$email=$_COOKIE["user"];
$morning=0;
$afternoon=0;
$evening=0;
$veg=0;
$nonveg=0;
$egg=0;
$maharaja=0;
$prange=0;
$cuisine=0;
$cuisine2=0;
$cuisine3=0;
if(isset($_POST['morning'])){
	$morning="morning";
mysqli_query($con,"UPDATE login SET Morning='1' WHERE Email='".$email."'");
}
if(isset($_POST['afternoon'])){
	$afternoon="afternoon";
mysqli_query($con,"UPDATE login SET Afternoon='1' WHERE Email='".$email."'");
}
if(isset($_POST['evening'])){
	$evening="evening";
mysqli_query($con,"UPDATE login SET Evening='1' WHERE Email='".$email."'");
}
if(isset($_POST['veg'])){
	$veg="veg";
mysqli_query($con,"UPDATE login SET veg='1' WHERE Email='".$email."'");
}
if(isset($_POST['nonveg'])){
	$nonveg="nonveg";
mysqli_query($con,"UPDATE login SET Non-veg='1' WHERE Email='".$email."'");
}
if(isset($_POST['egg'])){
	$egg="egg";
mysqli_query($con,"UPDATE login SET eggetarian='1' WHERE Email='".$email."'");
}
if(isset($_POST['maharaja'])){
	$prange="maharaja";
mysqli_query($con,"UPDATE login SET maharaja='1' WHERE Email='".$email."'");
}
if(isset($_POST['Range2'])){
	$prange="Range2";
mysqli_query($con,"UPDATE login SET Range2='1' WHERE Email='".$email."'");
}
if(isset($_POST['Affordable'])){
	$prange="Affordable";
mysqli_query($con,"UPDATE login SET Affordable='1' WHERE Email='".$email."'");
}
if(isset($_POST['Economy'])){
	$prange="Economy";
mysqli_query($con,"UPDATE login SET Economy='1' WHERE Email='".$email."'");
}
if(isset($_POST['Essential'])){
	$prange="Essential";
mysqli_query($con,"UPDATE login SET Essential='1' WHERE Email='".$email."'");
}
if(isset($_POST['cuisine'])){
$cuisine=$_POST['cuisine'];
mysqli_query($con,"UPDATE login SET ".$cuisine."='1' WHERE Email='".$email."'");
}
else{
$cuisine=0;
}
if(isset($_POST['cuisine2'])){
$cuisine2=$_POST['cuisine2'];
$cuisine2=rtrim($cuisine2,"2");
mysqli_query($con,"UPDATE login SET ".$cuisine2."='1' WHERE Email='".$email."'");
}
else{
$cuisine2=0;
}
if(isset($_POST['cuisine3'])){
$cuisine3=$_POST['cuisine3'];
$cuisine3=rtrim($cuisine3,"3");
mysqli_query($con,"UPDATE login SET ".$cuisine3."='1' WHERE Email='".$email."'");
}
else{
$cuisine3=0;
}
/*if(isset($_POST['Places1'])){
$place=$_POST['Places1'];
mysqli_query($con,"UPDATE login SET ".$place."='1' WHERE Email='".$email."'");
}
else{
$place=0;
}
if(isset($_POST['purpose'])){
$purpose=$_POST['purpose'];
mysqli_query($con,"UPDATE login SET ".$purpose."='1' WHERE Email='".$email."'");
}
else{
$purpose=0;
}*/

echo "morning".$morning;
echo "<br>afternoon".$affordable;
echo "<br>eve".$evening;
echo "<br>cui1".$cuisine;
echo "<br>cui2".$cuisine2;
echo "<br>cui3".$cuisine3;
echo "<br>>veg".$veg;
echo "<nr>nonveg".$nonveg;
echo "<br>egg".$egg;
echo "<br>prange".$prange;
/*
echo "<br>maharaja".$maharaja;
echo "<br>range2".$Range2;
echo "<br>Aff".$Affordable;
echo "<br>Eco".$Economy;
echo "<br>Ess".$Essential;
echo "<br>place".$place;
echo "<br>pur".$purpose;*/
if(!($veg || $nonveg || $egg) || !($morning || $afternoon || $evening) || !$prange || !($cuisine || $cuisine2 || $cuisine3)){
//if( !($morning || $afternoon || $evening || $cuisine || $cuisine2 || $cuisine3 || $veg || $nonveg || $egg || $maharaja || $Range2 || $Affordable || $Economy || $Essential || $place || $purpose)){	
?>
<script>
if(window.confirm('Atleast one choice is compulsory')){
	window.location.assign('javascript:history.back()');
}
else{
	window.location.assign('javascript:history.back()');
}
</script>
<?php
}
else{
//$cuisine2=rtrim($cuisine2,"2");
//$cuisine3=rtrim($cuisine3,"3");
	echo "<script>window.location.assign('admin.php');</script>";

}
?>
</body>
</html>>