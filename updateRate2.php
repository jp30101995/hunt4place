<html>
<body>
<?php
session_start();
include 'connect.php';
$hotelID=intval($_GET['id']);
$userID=$_COOKIE["user"];
$rating=$_REQUEST["points"];
$flag=0;



$result=mysqli_query($con,"select * from user_rating where ID='".$hotelID."' and name='".$userID."'");
$row=mysqli_fetch_assoc($result);
$result2=mysqli_query($con,"select * from rating_place where SRNo='".$hotelID."'");
$row2=mysqli_fetch_assoc($result2);
$result3=mysqli_query($con,"select Rate_count_place from login where Email='".$userID."'");
$row3=mysqli_fetch_assoc($result3);


//echo "<br>";

$TotalRate=$row2["TotalRate"];
$NoofUserRated=$row2["NoofUserRated"];
$Rate_count=$row3["Rate_count_place"];
//echo "<br>";
mysqli_num_rows($result);
mysqli_num_rows($result2);
mysqli_num_rows($result3);

//echo "11111";

if(mysqli_num_rows($result)===0){
//	echo "22222<br>";
$updateHotelRate=$TotalRate+$rating;
$updateNoofUser=$NoofUserRated+1;
$avgRating=$updateHotelRate/$updateNoofUser;
$updateRatecount=$Rate_count+1;


mysqli_query($con,"insert into user_rating (name,ID,rate) values ('".$userID."','".$hotelID."','".$rating."')");
mysqli_query($con,"update rating_place set avgRating='".$avgRating."',TotalRate='".$updateHotelRate."',NoofUserRated='".$updateNoofUser."' where SRNo='".$hotelID."'");
mysqli_query($con,"update login set Rate_count_place='".$updateRatecount."' where Email='".$userID."'");
}

else {
//	echo "3333";
$updateHotelRate2=$TotalRate-$row["rate"]+$rating;
if($NoofUserRated!=0){
$avgRating2=$updateHotelRate2/$NoofUserRated;
}
else {
$avgRating2=$updateHotelRate2;
}
mysqli_query($con,"update user_rating set rate='".$rating."' where ID='".$hotelID."' and name='".$userID."'");
mysqli_query($con,"update rating_place set TotalRate='".$updateHotelRate2."',avgRating='".$avgRating2."' where SRNo='".$hotelID."'");
}
















/*$result=mysqli_query($con,"SELECT Rate_count FROM login WHERE Email='".$userID."'");
$result2=mysqli_query($con,"SELECT * FROM login WHERE Email='".$userID."'");
$result3=mysqli_query($con,"SELECT NoofUserRated,TotalRate FROM rating WHERE H_ID='".$hotelID."'");


$row=mysqli_fetch_assoc($result);
$row3=mysqli_fetch_assoc($result3);

$column=$row["Rate_count"]+1;
$NoofUser=$row3["NoofUserRated"]+1;
$totalRate=$row3["TotalRate"];
$updatedRate=$totalRate+$rating;
$previousRate=0;
*/

/*while($row2=mysqli_fetch_assoc($result2)){
//	echo $row2["H_ID"];
	for($i=1;$i<=3;$i++){
		if($row2['place'.$i]==$hotelID){
			
			//mysqli_query($con,"UPDATE login SET rate".$i."='".$rating."' WHERE Email='".$userID."'");
			mysqli_query($con,"UPDATE rating SET TotalRate='".$updatedRate-$row2['rate'.$i]."' WHERE H_ID='".$hotelID."'");

			$flag=1;
		}
	}
}*/
/*mysqli_query($con,"UPDATE rating SET TotalRate='".$updatedRate-$row2['rate'.$i]."' WHERE H_ID='".$hotelID."'");

if($flag==0){
//mysqli_query($con,"UPDATE login SET place".$column."='".$value."',rate".$column."='".$rating."' WHERE Email='".$userID."'");
//mysqli_query($con,"UPDATE login SET Rate_count='".$column."' WHERE Email='".$userID."'");
mysqli_query($con,"UPDATE rating SET NoofUserRated='".$NoofUser."',TotalRate='".$updatedRate."' WHERE H_ID='".$hotelID."'");
}
$result3=mysqli_query($con,"SELECT avgRating,NoofUserRated,TotalRate FROM rating WHERE H_ID='".$hotelID."'");
$row4=mysqli_fetch_assoc($result3);
$NoofUser2=$row3["NoofUserRated"];
$totalRate2=$row3["TotalRate"];
$avgRating=0;
if($NoofUser2){
$avgRating=$totalRate2/$NoofUser2;
}
mysqli_query($con,"UPDATE rating SET avgRating='".$avgRating."' WHERE H_ID='".$hotelID."'");



*/
//echo "successfully rated...";
//header("Refresh:0; url=login(part2).php");
?>
<script>
window.replace("login(part3).php");
</script>
</body>
</html>