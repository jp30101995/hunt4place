<html>
<body>
<?php
include 'connect.php';
$name=$_COOKIE['hunt4place_user_name'];  
echo $name;  
$email=$_COOKIE['hunt4place_user_email'];          
$userRow=mysqli_fetch_assoc(mysqli_query($con,"select Morning,Afternoon,Evening,veg,Nonveg,eggetarian from login where Email='".$_COOKIE['hunt4place_user_email']."'"));
$tablename="tablev3"+$email;
$idarray=array();


mysqli_query($con,"create temporary table tablev3 as select H_Id as a1,maharaja as a2,Range2 as a3,Affordable as a4,Economy as a5,Essential as a6,Family as a7,Friends as a8,OfficeMeetings as a9,Girlfriend as a10,FormalMeet as a11,Reunion as a12,FamilyGettogether as a13,KittyParty as a14,Hangout as a15,Date as a16,CandleLightDinner as a17,Seminar as a18,NorthIndian as a19,Mughlai as a20,Italian as a21,Mexican as a22,Thai as a23,Continental as a24,Cafe as a25,Fastfood as a26,SouthIndian as a27,Pizza as a28,Streetfood as a29,Gujarati as a30,Chinese as a31,Desserts as a32,Icecream as a33,Bakery as a34 from food_suggestion where H_Id in (select ID from user_rating where name='".$email."')");

//mysqli_query($con,"create table `tablev4` as select H_Id as a1,maharaja as a2,Range2 as a3,Affordable as a4,Economy as a5,Essential as a6,Family as a7,Friends as a8,OfficeMeetings as a9,Girlfriend as a10,FormalMeet as a11,Reunion as a12,FamilyGettogether as a13,KittyParty as a14,Hangout as a15,Date as a16,CandleLightDinner as a17,Seminar as a18,NorthIndian as a19,Mughlai as a20,Italian as a21,Mexican as a22,Thai as a23,Continental as a24,Cafe as a25,Fastfood as a26,SouthIndian as a27,Pizza as a28,Streetfood as a29,Gujarati as a30,Chinese as a31,Desserts as a32,Icecream as a33,Bakery as a34 from food_suggestion where H_Id in (select H_Id from food_suggestion where veg='".$userRow['veg']."' and Nonveg='".$userRow['Nonveg']."' and eggetarian='".$userRow['eggetarian']."' and Morning='".$userRow['Morning']."' and Afternoon='".$userRow['Afternoon']."' and Evening='".$userRow['Evening']."')");


mysqli_query($con,"create temporary table `tablev4` as select H_Id as a1,maharaja as a2,Range2 as a3,Affordable as a4,Economy as a5,Essential as a6,Family as a7,Friends as a8,OfficeMeetings as a9,Girlfriend as a10,FormalMeet as a11,Reunion as a12,FamilyGettogether as a13,KittyParty as a14,Hangout as a15,Date as a16,CandleLightDinner as a17,Seminar as a18,NorthIndian as a19,Mughlai as a20,Italian as a21,Mexican as a22,Thai as a23,Continental as a24,Cafe as a25,Fastfood as a26,SouthIndian as a27,Pizza as a28,Streetfood as a29,Gujarati as a30,Chinese as a31,Desserts as a32,Icecream as a33,Bakery as a34 from food_suggestion where H_Id in (11,12,13,14,15,16,17,18,19,20,21)");

//$row1=mysqli_fetch_assoc($result1);
//$row2=mysqli_fetch_assoc($result2);
//$row3=mysqli_fetch_assoc($result3);
$result1=mysqli_query($con,"select * from tablev3");
$result2=mysqli_query($con,"select * from tablev4");


//$result3=mysqli_query($con,"select * from tablev5");
echo mysqli_num_rows($result1);
echo mysqli_num_rows($result2);
/*
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `H_Id` `1` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `maharaja` `2` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Range2` `3` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Affordable` `4` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Economy` `5` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Essential` `6` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Family` `7` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Friends` `8` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `OfficeMeetings` `9` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Girlfriend` `10` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `FormalMeet` `11` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Reunion` `12` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `FamilyGettogether` `13` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `KittyParty` `14` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Hangout` `15` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Date` `16` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `CandleLightDinner` `17` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Seminar` `18` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `NorthIndian` `19` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Mughlai` `20` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Italian` `21` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Mexican` `22` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Thai` `23` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Continental` `24` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Cafe` `25` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Fastfood` `26` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `SouthIndian` `27` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Pizza` `28` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Streetfood` `29` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Gujarati` `30` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Chinese` `31` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Desserts` `32` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Icecream` `33` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev3` CHANGE `Bakery` `34` INT(3) NOT NULL DEFAULT '0'");

mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `H_Id` `1` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `maharaja` `2` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Range2` `3` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Affordable` `4` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Economy` `5` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Essential` `6` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Family` `7` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Friends` `8` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `OfficeMeetings` `9` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Girlfriend` `10` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `FormalMeet` `11` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Reunion` `12` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `FamilyGettogether` `13` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `KittyParty` `14` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Hangout` `15` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Date` `16` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `CandleLightDinner` `17` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Seminar` `18` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `NorthIndian` `19` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Mughlai` `20` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Italian` `21` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Mexican` `22` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Thai` `23` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Continental` `24` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Cafe` `25` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Fastfood` `26` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `SouthIndian` `27` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Pizza` `28` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Streetfood` `29` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Gujarati` `30` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Chinese` `31` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Desserts` `32` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Icecream` `33` INT(3) NOT NULL DEFAULT '0'");
mysqli_query($con,"ALTER TABLE `tablev4` CHANGE `Bakery` `34` INT(3) NOT NULL DEFAULT '0'");
*/
error_reporting(0);
mysqli_query($con,"create temporary table tablev5 as select H_Id,maharaja,Range2,Affordable,Economy,Essential,Family,Friends,OfficeMeetings,Girlfriend,FormalMeet,Reunion,FamilyGettogether,KittyParty,Hangout,Date,CandleLightDinner,Seminar,NorthIndian,Mughlai,Italian,Mexican,Thai,Continental,Cafe,Fastfood,SouthIndian,Pizza,Streetfood,Gujarati,Chinese,Desserts,Icecream,Bakery from food_suggestion where H_Id in (select ID from user_rating where name='".$email."')");

$row1=mysqli_fetch_assoc($result1);
$similarityarray = array();
while($row2=mysqli_fetch_array($result2)){
	mysqli_data_seek($result1,0);
	while($row1=mysqli_fetch_assoc($result1)){
		for($i=2;$i<=34;$i++){
			//echo $row2[$i];
			//echo "<br>row1".$row1['a'.$i]."row2".$row2['a'.$i]." i=".$i;
			if($row2['a'.$i]==1 && $row1['a'.$i]==1){
				//echo "in if";
				if($i===2){
					mysqli_query($con,"update tablev5 set maharaja='1' where H_Id='".$row1['a1']."'");
					//echo "in column 2";
				}
				else if($i===3){
					mysqli_query($con,"update tablev5 set Range2='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===4){
					mysqli_query($con,"update tablev5 set Affordable='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===5){
					mysqli_query($con,"update tablev5 set Economy='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===6){
					mysqli_query($con,"update tablev5 set Essential='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===7){
					mysqli_query($con,"update tablev5 set Family='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===8){
					mysqli_query($con,"update tablev5 set Friends='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===9){
					mysqli_query($con,"update tablev5 set OfficeMeetings='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===10){
					mysqli_query($con,"update tablev5 set Girlfriend='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===11){
					mysqli_query($con,"update tablev5 set FormalMeet='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===12){
					mysqli_query($con,"update tablev5 set Reunion='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===13){
					mysqli_query($con,"update tablev5 set FamilyGettogether='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===14){
					mysqli_query($con,"update tablev5 set KittyParty='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===15){
					mysqli_query($con,"update tablev5 set Hangout='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===16){
					mysqli_query($con,"update tablev5 set Date='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===17){
					mysqli_query($con,"update tablev5 set CandleLightDinner='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===18){
					mysqli_query($con,"update tablev5 set Seminar='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===19){
					mysqli_query($con,"update tablev5 set NorthIndian='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===20){
					mysqli_query($con,"update tablev5 set Mughlai='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===21){
					mysqli_query($con,"update tablev5 set Italian='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===22){
					mysqli_query($con,"update tablev5 set Mexican='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===23){
					mysqli_query($con,"update tablev5 set Thai='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===24){
					mysqli_query($con,"update tablev5 set Continental='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===25){
					mysqli_query($con,"update tablev5 set Cafe='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===26){
					mysqli_query($con,"update tablev5 set Fastfood='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===27){
					mysqli_query($con,"update tablev5 set SouthIndian='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===28){
					mysqli_query($con,"update tablev5 set Pizza='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===29){
					mysqli_query($con,"update tablev5 set Streetfood='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===30){
					mysqli_query($con,"update tablev5 set Gujarati='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===31){
					mysqli_query($con,"update tablev5 set Chinese='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===32){
					mysqli_query($con,"update tablev5 set Desserts='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===33){
					mysqli_query($con,"update tablev5 set Icecream='1' where H_Id='".$row1['a1']."'");
				}
				else if($i===34){
					mysqli_query($con,"update tablev5 set Bakery='1' where H_Id='".$row1['a1']."'");
				}
			}
			else{
				if($i==2){
					mysqli_query($con,"update tablev5 set maharaja='0' where H_Id='".$row1['a1']."'");
					//echo "in column 2 of else";
				}
				else if($i==3){
					mysqli_query($con,"update tablev5 set Range2='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==4){
					mysqli_query($con,"update tablev5 set Affordable='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==5){
					mysqli_query($con,"update tablev5 set Economy='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==6){
					mysqli_query($con,"update tablev5 set Essential='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==7){
					mysqli_query($con,"update tablev5 set Family='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==8){
					mysqli_query($con,"update tablev5 set Friends='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==9){
					mysqli_query($con,"update tablev5 set OfficeMeetings='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==10){
					mysqli_query($con,"update tablev5 set Girlfriend='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==11){
					mysqli_query($con,"update tablev5 set FormalMeet='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==12){
					mysqli_query($con,"update tablev5 set Reunion='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==13){
					mysqli_query($con,"update tablev5 set FamilyGettogether='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==14){
					mysqli_query($con,"update tablev5 set KittyParty='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==15){
					mysqli_query($con,"update tablev5 set Hangout='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==16){
					mysqli_query($con,"update tablev5 set Date='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==17){
					mysqli_query($con,"update tablev5 set CandleLightDinner='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==18){
					mysqli_query($con,"update tablev5 set Seminar='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==19){
					mysqli_query($con,"update tablev5 set NorthIndian='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==20){
					mysqli_query($con,"update tablev5 set Mughlai='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==21){
					mysqli_query($con,"update tablev5 set Italian='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==22){
					mysqli_query($con,"update tablev5 set Mexican='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==23){
					mysqli_query($con,"update tablev5 set Thai='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==24){
					mysqli_query($con,"update tablev5 set Continental='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==25){
					mysqli_query($con,"update tablev5 set Cafe='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==26){
					mysqli_query($con,"update tablev5 set Fastfood='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==27){
					mysqli_query($con,"update tablev5 set SouthIndian='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==28){
					mysqli_query($con,"update tablev5 set Pizza='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==29){
					mysqli_query($con,"update tablev5 set Streetfood='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==30){
					mysqli_query($con,"update tablev5 set Gujarati='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==31){
					mysqli_query($con,"update tablev5 set Chinese='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==32){
					mysqli_query($con,"update tablev5 set Desserts='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==33){
					mysqli_query($con,"update tablev5 set Icecream='0' where H_Id='".$row1['a1']."'");
				}
				else if($i==34){
					mysqli_query($con,"update tablev5 set Bakery='0' where H_Id='".$row1['a1']."'");
				}
			}
		}

	}
	$result4=mysqli_query($con,"SELECT sum(maharaja) as '1',sum(Range2) as '2',sum(Affordable) as '3',sum(Economy) as '4',sum(Essential) as '5',sum(Family) as '6',sum(Friends) as '7',sum(OfficeMeetings) as '8',sum(Girlfriend) as '9',sum(FormalMeet) as '10',sum(Reunion) as '11',sum(FamilyGettogether) as '12',sum(KittyParty) as '13',sum(Hangout) as '14',sum(Date) as '15',sum(CandleLightDinner) as '16',sum(Seminar) as '17',sum(NorthIndian) as '18',sum(Mughlai) as '19',sum(Italian) as '20',sum(Mexican) as '21',sum(Thai) as '22',sum(Continental) as '23',sum(Cafe) as '24',sum(Fastfood) as '25',sum(SouthIndian) as '26',sum(Pizza) as '27',sum(Streetfood) as '28',sum(Gujarati) as '29',sum(Chinese) as '30',sum(Desserts) as '31',sum(Icecream) as '32',sum(Bakery) as '33' FROM `tablev5`");





	$row4=mysqli_fetch_assoc($result4);
	$sum1=array($row4[1],$row4[2],$row4[3],$row4[4],$row4[5]);
	$sum2=array($row4[6],$row4[7],$row4[8],$row4[9],$row4[10],$row4[11],$row4[12],$row4[13],$row4[14],$row4[15],$row4[16],$row4[17]);
	$sum3=array($row4[18],$row4[19],$row4[20],$row4[21],$row4[22],$row4[23],$row4[24],$row4[25],$row4[26],$row4[27],$row4[28],$row4[29],$row4[30],$row4[31],$row4[32],$row4[33]);
	for($i=0;$i<5;$i++){
		$sum1[$i]=($sum1[$i]/mysqli_num_rows($result1))*0.33;
	}
	for($i=0;$i<12;$i++){
		$sum2[$i]=($sum2[$i]/mysqli_num_rows($result1))*0.17;
	}
	for($i=0;$i<16;$i++){
		$sum3[$i]=($sum3[$i]/mysqli_num_rows($result1))*0.17;
	}
	//echo"<br>Sum1";
	//print_r($sum1);
	//print_r($sum2);
	//print_r($sum3);
	echo "<br>";
	rsort($sum1);
	//echo $sum1[0];
	rsort($sum2);
	//echo $sum2[0];
	rsort($sum3);
	
	
	$similarity = $sum1[0]+$sum2[0]+$sum3[0];
	echo $similarity;
	array_push($similarityarray,$similarity);
echo "executing...................................";	
}
echo "<br>Similarity<br>";
print_r($similarityarray);

$result3=mysqli_query($con,"select * from tablev4");
while($row3=mysqli_fetch_assoc($result3)){
	array_push($idarray,$row3['a1']);
}

print_r($idarray);

mysqli_query($con,"insert into suggestions(ID,hotel1,hotel2,hotel3,hotel4,hotel5,hotel6,hotel7,hotel8,hotel9,hotel10) values('".$email."','".$similarityarray[0]."','".$similarityarray[1]."','".$similarityarray[2]."','".$similarityarray[3]."','".$similarityarray[4]."','".$similarityarray[5]."','".$similarityarray[6]."','".$similarityarray[7]."','".$similarityarray[8]."','".$similarityarray[9]."')");
//mysqli_query($con,"insert into suggestions(ID,hotel1) values('".$email."','".$similarityarray[0]."')");

?>
</body>

</html>