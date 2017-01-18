<?php
$noofuser=mysqli_num_rows(mysqli_query($con,"SELECT * FROM login"));
echo $noofuser;
$TotalRate=0;
$user=mysqli_query($con,"SELECT * FROM login WHERE User_ID=7");
while($record=mysqli_fetch_assoc($user)){
	for($i=1;$i<=10;$i++){
		if(!$record["place".$i]){
			$rating=mysqli_query($con,"SELECT avgRating FROM food_temp3 WHERE H_ID='".$record["place".$i]."'");
			if(mysqli_num_rows($rating)){
			$rowRate=mysqli_fetch_assoc($rating);
			$TotalRate=$rowRate["avgRating"];
			echo $TotalRate;
			}
			$score=((($noofuser-1)*$TotalRate)+$record["rate".$i]);
			$finalscore=$score*1000/$noofuser;
			mysqli_query($con,"UPDATE food_temp3 SET score='".$score."' WHERE H_ID='".$record["place".$i]."'");
		}
	}
}
?>