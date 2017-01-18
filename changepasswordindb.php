<?php
include 'connect.php';
$opass=$password="";
   
$opass = $_POST["opass"];
$password = $_POST["password"];


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
echo $opass;
echo $password;
echo $_COOKIE["user"];
echo "jsdcjdicn";
$result=mysqli_query($con,"select Name from login where Email='".$_COOKIE["user"]."' and Password='".$opass."'");
echo mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
	//$row=mysqli_fetch_assoc($result);
	$sql="update login set Password='".$password."' where Email='".$_COOKIE["user"]."'";
	if ($con->query($sql) === TRUE) {
    	echo '<script language="javascript">';
		echo 'alert("password has changed successfully.")';
	//	echo 'window.location.assign("user-profile-edit.php")';
		echo '</script>';
	} else {
    	echo '<script language="javascript">';
		echo 'alert("There are some problems.<br>Please try again later..")';
		echo '</script>';
    	
	}
}
else{
    	echo '<script language="javascript">';
		echo 'alert("Please enter old password properly..")';
		echo '</script>';

}
?>