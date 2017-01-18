<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/superlist.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <title>hunt4place - Registration</title>
</head>
<style>
.custom {
    width: 200px !important;
}
</style>

<body>
<?php
include 'connect.php';
session_start();
$result=mysqli_query($con,"SELECT * FROM entertainment LIMIT 50 ");
$row2=mysqli_fetch_assoc(mysqli_query($con,"select * from user_rating where name='".$_COOKIE['user']."'"));
if(mysqli_num_rows($result)>50){
$page=mysqli_num_rows($result)/50;
for($flag=1;$flag<=50;$flag++){
	$row=mysqli_fetch_assoc($result);
	if($row['SRNo']){
		$name=$row["Name"];
		if(strlen($row["Name"])>20){
		$name=substr($row["Name"],0,17)."...";
		}
		else{
		$name=$row["H_Name"];
		}
	echo '                <div class="col-sm-3">
                    <div class="statusbox">
                        <div class="statusbox-content">
							<img src="assets/img/tmp/agent-2.jpg" height="200" width="200">
                            <strong>'.$name.'</strong>
                        </div><!-- /.statusbox-content -->
<form method="post" action="updateRate2.php?id='.$row['SRNo'].'">';
$row2=mysqli_fetch_assoc(mysqli_query($con,"select rate from user_rating where name='".$_COOKIE['user']."' and ID='".$row['SRNo']."'"));

echo'
      <input type="range" name="points" id="points" value="'.$row2['rate'].'" min="0" max="10">
	  <input type="submit" value="submit" onClick="refresh()">
</form>

                        <div class="statusbox-actions">
                        </div><!-- /.statusbox-actions -->
                    </div><!-- /.statusbox -->
                </div>
';
}
}
}
else{
for($flag=1;$flag<=mysqli_num_rows($result);$flag++){
	$row=mysqli_fetch_assoc($result);
	if($row['SRNo']){
		if(strlen($row["Name"])>20){
		$name=substr($row["Name"],0,17)."...";
		}
		else{
		$name=$row["Name"];
		}

	echo '                <div class="col-sm-3">
                    <div class="statusbox">
                        <div class="statusbox-content">
                            <strong>'.$name.'</strong>
                        </div><!-- /.statusbox-content -->
<form method="post" action="updateRate2.php?id='.$row['SRNo'].'">';
$row2=mysqli_fetch_assoc(mysqli_query($con,"select rate from user_rating where name='".$_COOKIE['user']."' and ID='".$row['SRNo']."'"));

echo'
      <input type="range" name="points" id="points" value="'.$row2['rate'].'" min="0" max="10">
	  <input type="submit" value="submit" onClick="refresh()">
</form>

                        <div class="statusbox-actions">
                        </div><!-- /.statusbox-actions -->
                    </div><!-- /.statusbox -->
                </div>
';
}
}
}
?>
<script>
function refresh(){
	window.top.location.reload();
}
</script>
<script>
/*function update(name,userID) {
    var rating=document.getElementById(points);
	//document.getElementById(text).innerHTML = rating;
	window.location.assign("index.php");
	if (rating == 0) {
		window.location.assign("index.php");
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?rating="+str+"&name="+name+"&userID="+userID,true);
        xmlhttp.send();
    }
}

function update2(Name,user){
	if(user==3){
		window.location.assign("index.php");
	}
}
*/
</script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</body>
</html>