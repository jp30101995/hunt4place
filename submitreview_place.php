<?php
include 'connect.php';
if(isset($_REQUEST['Budget'])){
$Budget=$_REQUEST['Budget'];
}
else{$Budget=0;}
if(isset($_REQUEST['Entertainment'])){
$Entertainment=$_REQUEST['Entertainment'];
}
else{$Entertainment=0;}
if(isset($_REQUEST['atmosphere'])){
$atmosphere=$_REQUEST['atmosphere'];
}
else{$atmosphere=0;}
$pros=$_REQUEST['pros'];
$cons=$_REQUEST['cons'];
$email=$_COOKIE['user'];
$ID=$_GET['ID'];
mysqli_query($con,"insert into review_food(ID,Email,Budget,Entertainment,Atmosphere,Pros,Cons) values('".$ID."','".$email."','".$Budget."','".$Entertainment."','".$atmosphere."','".$pros."','".$cons."')") or die("<script>window.history.back();</script>");
echo "<script>
alert('Review listed successfully');
window.history.back();
</script>";
?>