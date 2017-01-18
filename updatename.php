<?php
include 'connect.php';
$name=$_POST["username"];
$sql = "update login set Name='".$name."' where Email='".$_COOKIE["user"]."'";

if ($con->query($sql) === TRUE) {
    echo "<script>alert('Name is changed successfully...')</script>";
	echo "<script>window.location.assign('user-profile-edit.php');</script>";
} else {
    echo "<script>alert('There is a problem in updating, please try again later')</script>";
	echo "<script>window.location.assign('user-profile-edit.php');</script>";
}

?>