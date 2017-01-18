<?php
//include "connect.php";
if(file_exists("uploads".$COOKIE["user"])){
unlink("uploads".$_COOKIE["user"]);
}
$target_dir = "uploads/";
$target_file = $target_dir .$_COOKIE["user"];
$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	//$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
	//$name=$_POST["name"];
	//$pdf=basename( $_FILES["fileToUpload"]["name"]);
//$txt = $name."     ".$pdf."\n";
//fwrite($myfile, $txt);
//fclose($myfile);

    /*if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }*/
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size
if($check===false){
echo "file is not uploaded";
$uploadOk=0;
}
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
/*if($imageFileType != "jpeg") {
    echo "Sorry, only jpeg files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	//	echo $target_file;
	//	$img=file_get_contents($target_file);
	//	$size=getimagesize($target_file);
	//	echo mysqli_real_escape_string($con,$size['mime']);
	//	echo "<br>".$size[3];
	//	echo basename($_FILES['fileToUpload']['name']);
	/*	mysqli_query($con,"insert into profile(image_id,image_type,image,image_size,image_name) 
							values
							('".$_COOKIE['hunt4place_user_email']."','".mysqli_real_escape_string($con,$size['mime'])."','".mysqli_real_escape_string($con,$img)."','".$size[3]."','".basename($_FILES['fileToUpload']['name'])."')") or die($con->error);
  */  
  		echo "<script>window.location.assign('user-profile-edit.php');</script>";
  	} else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
