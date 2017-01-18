<html>
<head>
</head>
<body>
<?php
include '../connect.php';
$count=0;
$score=0;
if(isset($_POST['morning'])){
$morning=$_POST['morning'];
}
else{
$morning=0;
}
if(isset($_POST['afternoon'])){
$afternoon=$_POST['afternoon'];
}
else{
$afternoon=0;
}
if(isset($_POST['evening'])){
$evening=$_POST['evening'];
}
else{
$evening=0;
}
if(isset($_POST['veg'])){
$veg=$_POST['veg'];
}
else{
$veg=0;
}
if(isset($_POST['nonveg'])){
$nonveg=$_POST['nonveg'];
}
else{
$nonveg=0;
}
if(isset($_POST['egg'])){
$egg=$_POST['egg'];
}
else{
$egg=0;
}
if(isset($_POST['maharaja'])){
$maharaja=$_POST['maharaja'];
}
else{
$maharaja=0;
}
if(isset($_POST['Range2'])){
$Range2=$_POST['Range2'];
}
else{
$Range2=0;
}
if(isset($_POST['Affordable'])){
$Affordable=$_POST['Affordable'];
}
else{
$Affordable=0;
}
if(isset($_POST['Economy'])){
$Economy=$_POST['Economy'];
}
else{
$Economy=0;
}
if(isset($_POST['Essential'])){
$Essential=$_POST['Essential'];
}
else{
$Essential=0;
}
if(isset($_POST['cuisine'])){
$cuisine=$_POST['cuisine'];
}
else{
$cuisine=0;
}
if(isset($_POST['cuisine2'])){
$cuisine2=$_POST['cuisine2'];
}
else{
$cuisine2=0;
}
if(isset($_POST['cuisine3'])){
$cuisine3=$_POST['cuisine3'];
}
else{
$cuisine3=0;
}
if(isset($_POST['Places1'])){
$place=$_POST['Places1'];
}
else{
$place=0;
}
if(isset($_POST['purpose'])){
$purpose=$_POST['purpose'];
}
else{
$purpose=0;
}

echo "morning".$morning;
echo "<br>afternoon".$Affordable;
echo "<br>eve".$evening;
echo "<br>cui1".$cuisine;
echo "<br>cui2".$cuisine2;
echo "<br>cui3".$cuisine3;
echo "<br>>veg".$veg;
echo "<nr>nonveg".$nonveg;
echo "<br>egg".$egg;
echo "<br>maharaja".$maharaja;
echo "<br>range2".$Range2;
echo "<br>Aff".$Affordable;
echo "<br>Eco".$Economy;
echo "<br>Ess".$Essential;
echo "<br>place".$place;
echo "<br>pur".$purpose;
//if(!($veg || $nonveg || $egg) || !($morning || $afternoon || $evening) || !$prange || !($cuisine || $cuisine2 || $cuisine3)){
if( !($morning || $afternoon || $evening || $cuisine || $cuisine2 || $cuisine3 || $veg || $nonveg || $egg || $maharaja || $Range2 || $Affordable || $Economy || $Essential || $place || $purpose)){	
?>
<script>
if(window.confirm('Atleast one choice is compulsory')){
	window.location.assign('Entertainment.php');
}
else{
	window.location.assign('Entertainment.php');
}
</script>
<?php
}
else{
$cuisine2=rtrim($cuisine2,"2");
$cuisine3=rtrim($cuisine3,"3");
mysqli_query($con,"DELETE FROM food_temp3 WHERE 1");

if($veg){
	//mysqli_query($con,"INSERT INTO food_temp SELECT * FROM food WHERE veg='1'");
	$sql1="INSERT INTO food_temp SELECT * FROM food WHERE veg='1'";
	$count=1;
	if($nonveg){
		//mysqli_query($con,"INSERT INTO food_temp SELECT * FROM food WHERE Nonveg='1' OR veg='1'");
		$sql1="INSERT INTO food_temp SELECT * FROM food WHERE Nonveg='1' OR veg='1'";
		$count=2;
		if($egg){
			//mysqli_query($con,"INSERT INTO food_temp SELECT * FROM food WHERE Nonveg='1' OR veg='1' OR eggatarian='1'");
			$sql1="INSERT INTO food_temp SELECT * FROM food WHERE Nonveg='1' OR veg='1' OR eggatarian='1'";
			$count=3;
		}
	}
}
else if($nonveg){
	//mysqli_query($con,"INSERT INTO food_temp SELECT * FROM food WHERE Nonveg='1'");
	$sql1="INSERT INTO food_temp SELECT * FROM food WHERE Nonveg='1'";
	$count=4;
	if($egg){
		//mysqli_query($con,"INSERT INTO food_temp SELECT * FROM food WHERE Nonveg='1' OR eggatarian='1'");
		$sql1="INSERT INTO food_temp SELECT * FROM food WHERE Nonveg='1' OR eggatarian='1'";
		$count=5;
	}
}
else if($egg){
	//mysqli_query($con,"INSERT INTO food_temp SELECT * FROM food WHERE eggatarian='1'");
	$sql1="INSERT INTO food_temp SELECT * FROM food WHERE eggatarian='1'";
	$count=6;
}
else{
	//mysqli_query($con,"INSERT INTO food_temp SELECT * FROM food");
	$sql1="INSERT INTO food_temp SELECT * FROM food";
}
$result=mysqli_query($con,$sql1);
if($morning){
	//mysqli_query($con,"INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Morning='1'");
	$sql2="INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Morning='1'";
	$count=1;
	if($afternoon){
		//mysqli_query($con,"INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Afternoon='1' OR Morning='1'");
		$sql2="INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Afternoon='1' OR Morning='1'";
		$count=2;
		if($evening){
			//mysqli_query($con,"INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Afternoon='1' OR Morning='1' OR Evening='1'");
			$sql2="INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Afternoon='1' OR Morning='1' OR Evening='1'";
			$count=3;
		}
	}
}
else if($afternoon){
	//mysqli_query($con,"INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Afternoon='1'");
	$sql2="INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Afternoon='1'";
	$count=4;
	if($evening){
		//mysqli_query($con,"INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Afternoon='1' OR Evening='1'");
		$sql2="INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Afternoon='1' OR Evening='1'";
		$count=5;
	}
}
else if($evening){
	//mysqli_query($con,"INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Evening='1'");
	$sql2="INSERT INTO food_temp2 SELECT * FROM food_temp WHERE Evening='1'";
	$count=6;
}
else {
	//mysqli_query($con,"INSERT INTO food_temp2 SELECT * FROM food_temp");
	$sql2="INSERT INTO food_temp2 SELECT * FROM food_temp";
}
$result2=mysqli_query($con,$sql2);



if($maharaja){
	//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1'");
	$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1'";
	$count=1;
	if($Range2){
		//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1' OR Range2='1'");
		$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1' OR Range2='1'";
		$count=2;
		if($Affordable){
			//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1' OR Range2='1' OR Affordable='1'");
			$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1' OR Range2='1' OR Affordable='1'";
			$count=3;
			if($Economy){
				//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1' OR Range2='1' OR Affordable='1' OR Economy='1'");
				$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1' OR Range2='1' OR Affordable='1' OR Economy='1'";
				if($Essential){
					//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1' OR Range2='1' OR Affordable='1' OR Economy='1' OR Essential='1'");
					$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE maharaja='1' OR Range2='1' OR Affordable='1' OR Economy='1' OR Essential='1'";
				}
			}
		}
	}
}
else if($Range2){
		//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Range2='1'");
		$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Range2='1'";
		$count=2;
		if($Affordable){
			//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Range2='1' OR Affordable='1'");
			$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Range2='1' OR Affordable='1'";
			$count=3;
			if($Economy){
				//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Range2='1' OR Affordable='1' OR Economy='1'");
				$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Range2='1' OR Affordable='1' OR Economy='1'";
				if($Essential){
					//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Range2='1' OR Affordable='1' OR Economy='1' OR Essential='1'");
					$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Range2='1' OR Affordable='1' OR Economy='1' OR Essential='1'";
				}
			}
		}
}
else if($Affordable){
			//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Affordable='1'");
			$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Affordable='1'";
			$count=3;
			if($Economy){
				//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Affordable='1' OR Economy='1'");
				$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Affordable='1' OR Economy='1'";
				if($Essential){
					//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Affordable='1' OR Economy='1' OR Essential='1'");
					$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Affordable='1' OR Economy='1' OR Essential='1'";
				}
			}
}
else if($Economy){
	//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Economy='1'");
	$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Economy='1'";
		if($Essential){
		//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Economy='1' OR Essential='1'");
		$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Economy='1' OR Essential='1'";
	}
}
else if($Essential){
	//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Essential='1'");
	$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 WHERE Essential='1'";
}
else{
	//mysqli_query($con,"INSERT INTO food_temp3 SELECT * FROM food_temp2 ");
	$sql3="INSERT INTO food_temp3 SELECT * FROM food_temp2 ";
}
echo $count;
$result3=mysqli_query($con,$sql3);
echo $sql1;
echo $sql2;
echo $sql3;
//mysqli_query($con,"DELETE FROM food_temp2 WHERE 1");

$result4=mysqli_query($con,"SELECT * FROM food_temp3");

while($row=mysqli_fetch_assoc($result4)){
	if($cuisine){
		$score=$score+($row[$cuisine]*15);
	}
	if($cuisine2){
		$score=$score+($row[$cuisine2]*6);
	}
	if($cuisine3){
		$score=$score+($row[$cuisine3]*4);
	}
	if($place){
		$score=$score+($row[$place]*25);
	}
	if($purpose){
		$score=$score+($row[$purpose]*50);
	}
	
	//$score=($row[$cuisine]*15)+($row[$cuisine2]*6)+($row[$cuisine3]*4)+($row[$place]*25)+($row[$purpose]*50);
	//if($score){
	mysqli_query($con,"UPDATE food_temp3 SET score = '".$score."' WHERE H_ID='".$row['H_ID']."'");
	//}
	$score=0;
}





















mysqli_query($con,"DELETE FROM food_temp WHERE 1");
mysqli_query($con,"DELETE FROM food_temp2 WHERE 1");

//header('Location:HotelList.php?value=0');
}
?>
</body>
</html>