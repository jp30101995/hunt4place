<?php
$cookie_name = "user";
$cookie_value = $_POST["email"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
include 'connect.php';
$result=mysqli_query($con,"select Name from login where Email='".$_POST["email"]."' and Password='".$_POST["password"]."'");//confirmed=1 left.
$row=mysqli_fetch_assoc($result);
$name=$row["Name"];
if(mysqli_num_rows($result)>0){
echo "<script>window.location.assign('admin.php');</script>";
}
else{
echo "<script>window.location.assign('login1.php');</script>";
}
?>

</body>
</html>