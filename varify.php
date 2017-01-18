<?php
if(isset($_REQUEST["password"])){
$password=$_POST["password"];
if($password=="hunt4placeuser"){
echo "<script>window.location.assign('index.php')</script>";
	
}
}
else{
echo "<script>window.location.assign('Entersite.php')</script>";
}
?>