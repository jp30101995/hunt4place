<?php
include 'connect.php';
if(isset($_REQUEST['food'])){
$food=$_REQUEST['food'];
}
else{$food=0;}
if(isset($_REQUEST['staff'])){
$staff=$_REQUEST['staff'];
}
else{$staff=0;}
if(isset($_REQUEST['value'])){
$value=$_REQUEST['value'];
}
else{$value=0;}
if(isset($_REQUEST['atmosphere'])){
$atmosphere=$_REQUEST['atmosphere'];
}
else{$atmosphere=0;}
$pros=$_REQUEST['pros'];
$cons=$_REQUEST['cons'];
$email=$_COOKIE['user'];
$ID=$_GET['ID'];
mysqli_query($con,"insert into review_food(ID,Email,Food,Staff,Value,Atmosphere,Pros,Cons) values('".$ID."','".$email."','".$food."','".$staff."','".$value."','".$atmosphere."','".$pros."','".$cons."')") or die("<script>window.history.back();</script>");
echo "<script>
alert('Review listed successfully');
window.history.back();
</script>";
?>