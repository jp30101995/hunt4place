<?php

include 'connect.php';
$email=$_COOKIE["hunt4place_user_email"];
$result=mysqli_query($con,"select H_Id,H_Name,maharaja,Range2,Affordable,Economy,Essential,Family,Friends,OfficeMeetings,Girlfriend,FormalMeet,Reunion,FamilyGettogether,KittyParty,Hangout,Date,CandleLightDinner,Seminar,NorthIndian,Mughlai,Italian,Mexican,Thai,Continental,Cafe,Fastfood,SouthIndian,Pizza,Streetfood,Gujarati,Chinese,Desserts,Icecream,Bakery from food_latest");
$count=0;
$record=array();
$record2=array();
$record3=array();
while($row=mysqli_fetch_assoc($result)){
	$string=$row["maharaja"].$row["Range2"].$row["Affordable"].$row["Economy"].$row["Essential"];
	array_push($record,$string);
	$string2=$row["Family"].$row["Friends"].$row["OfficeMeetings"].$row["Girlfriend"].$row["FormalMeet"].$row["Reunion"].$row["FamilyGettogether"].$row["KittyParty"].$row["Hangout"].$row["Date"].$row["CandleLightDinner"].$row["Seminar"];
	array_push($record2,$string2);
	$string3=$row["NorthIndian"].$row["Mughlai"].$row["Italian"].$row["Mexican"].$row["Thai"].$row["Continental"].$row["Cafe"].$row["Fastfood"].$row["SouthIndian"].$row["Pizza"].$row["Streetfood"].$row["Gujarati"].$row["Chinese"].$row["Desserts"].$row["Icecream"].$row["Bakery"];
	array_push($record3,$string3);
}
print_r($record);
//print_r($record2);
//print_r($record3);
$result2=mysqli_query($con,"select H_Id,maharaja,Range2,Affordable,Economy,Essential,Family,Friends,OfficeMeetings,Girlfriend,FormalMeet,Reunion,FamilyGettogether,KittyParty,Hangout,Date,CandleLightDinner,Seminar,NorthIndian,Mughlai,Italian,Mexican,Thai,Continental,Cafe,Fastfood,SouthIndian,Pizza,Streetfood,Gujarati,Chinese,Desserts,Icecream,Bakery from food_latest where H_Id in (select ID from user_rating where name='".$email."')");
$urecord=array();
$urecord2=array();
$urecord3=array();
while($row2=mysqli_fetch_assoc($result2)){
	$ustring=$row2["maharaja"].$row2["Range2"].$row2["Affordable"].$row2["Economy"].$row2["Essential"];
	array_push($urecord,$ustring);
	$ustring2=$row2["Family"].$row2["Friends"].$row2["OfficeMeetings"].$row2["Girlfriend"].$row2["FormalMeet"].$row2["Reunion"].$row2["FamilyGettogether"].$row2["KittyParty"].$row2["Hangout"].$row2["Date"].$row2["CandleLightDinner"].$row2["Seminar"];
	array_push($urecord2,$ustring2);
	$ustring3=$row2["NorthIndian"].$row2["Mughlai"].$row2["Italian"].$row2["Mexican"].$row2["Thai"].$row2["Continental"].$row2["Cafe"].$row2["Fastfood"].$row2["SouthIndian"].$row2["Pizza"].$row2["Streetfood"].$row2["Gujarati"].$row2["Chinese"].$row2["Desserts"].$row2["Icecream"].$row2["Bakery"];
	array_push($urecord3,$ustring3);
}
print_r($urecord);
print_r($urecord2);
//print_r($urecord3);
$matching=array();
$perarray=array();
$score=array();
$finalsimilarity=array();

echo mysqli_num_rows($result2);
echo mysqli_num_rows($result);

for($i=0;$i<mysqli_num_rows($result);$i++){
	$similarityarray=array();
	for($j=0;$j<mysqli_num_rows($result2);$j++){
		$match="";
		for($p=0;$p<5;$p++){
			if($record[$i][$p]==1 && $urecord[$j][$p]==1){
				$match=$match."1";
			}
			else{
				$match=$match."0";
			}
		}
		
		for($q=0,$count=0;$q<5;$q++){
			if($match[$q]==1){
				$count++;
			}
		}
		$per=($count/5)*0.33;
		//echo "<br>";
		//print_r($match);
		unset($match);
		$match="";
		for($p=0;$p<11;$p++){
			if($record2[$i][$p]==1 && $urecord2[$j][$p]==1){
				$match=$match."1";
			}
			else{
				$match=$match."0";
			}
		}
		for($q=0,$count=0;$q<11;$q++){
			if($match[$q]==1){
				$count++;
			}
		}
		$per2=($count/5)*0.33;
		unset($match);
		$match="";
		for($p=0;$p<16;$p++){
			if($record3[$i][$p]==1 && $urecord3[$j][$p]==1){
				$match.=1;
			}
			else{
				$match.=0;
			}
		}
		for($q=0,$count=0;$q<16;$q++){
			if($match[$q]==1){
				$count++;
			}
		}
		$per3=($count/5)*0.33;
		unset($match);
		$similarity=$per+$per2+$per3;//per2+per3
		
		array_push($similarityarray,$similarity);
	}
	echo "<br>similarity array :";
	print_r($similarityarray);
array_push($finalsimilarity,$similarityarray);	
unset($similarityarray);
	
}
print_r($finalsimilarity);
echo "<br>";
echo $finalsimilarity[0][1];
for($p=0;$p<mysqli_num_rows($result);$p++){
	for($q=0,$sum=0;$q<mysqli_num_rows($result2);$q++){
		$sum=$sum+$finalsimilarity[$p][$q];
	}
	array_push($score,$sum);
}
?>
<?php
echo "<br>";
print_r($score);
for($p=0;$p<10;$p++){
	$max=array_keys($score,max($score));
	echo "<br>";
	print_r($max);
	echo "<br>";
	array_splice($score,$max[0],1);
	print_r($score);
}
//print_r($matching);
?>