<?php
include 'connect.php';
$sql = "SELECT image FROM profile WHERE image_id=2";
$result = mysqli_query($con,$sql);
echo "afvfiv";
header("Content-type:image/jpeg");
$row=mysqli_fetch_array($con,$result);
$image=$row['image'];
echo $row['image'];
echo "<img src='".$image."' height='200' width='200'>";
echo "hiiiiiii";
?>