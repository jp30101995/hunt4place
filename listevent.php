<?php
include 'connect.php';
$title=$_REQUEST["title"];
$desc=$_REQUEST["description"];
$address=$_REQUEST["address"];
$city=$_REQUEST["city"];
$phone=$_REQUEST["phone"];
$date=$_REQUEST["date"];
$duration=$_REQUEST["duration"];
$email=$_REQUEST["email"];
$url=$_REQUEST["url"];
$longitude=$_REQUEST["longitude"];
$latitude=$_REQUEST["latitude"];

//$photo=$_REQUEST["fileToUpload"];
$id=$_COOKIE["hunt4place_user_email"].$title;
mysqli_query($con,"insert into event(User_ID,Title,Description,Phone,Email,City,Address,Longitude,Latitude,Startdate,Duration,Website) values('".$_COOKIE['user']."','".$title."','".$desc."','".$phone."','".$email."','".$city."','".$address."','".$longitude."','".$latitude."','".$date."','".$duration."','".$url."')") or die("failed");
if(!empty($_POST['catagory'])) {
    foreach($_POST['catagory'] as $check) {
            mysqli_query($con,"update event set ".$check."=1 where Title='".$title."'");
			
			
			 //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
}

//mysqli_query($con,"insert into eventdisp(email,User_ID,Title) values('".$_COOKIE["hunt4place_user_email"]."','".$_COOKIE['hunt4place_user_email']."','".$title."')");
/*$target_dir = "uploads/";
$target_file = $target_dir . $_COOKIE["hunt4place_user_email"];
$uploadOk = 1;
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
}
if($check===false){
echo "image is not uploaded properly";
$uploadOk=0;
}
if ($_FILES["fileToUpload"]["size"] > 2000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  		echo "<script>
alert('Event listed successfully');
window.location.href='index.php';
</script>";
  	} else {
        echo "Sorry, there was an error while listing your event.Please try again";
		echo '<script>window.history.back();</script>';
    }
}
*/
		echo "<script>
alert('Event listed successfully');
window.reload();
</script>";


?>