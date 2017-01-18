<html>
<head>
</head>
<body>
<?php
include '../connect.php';
$count=0;
$score=0;
$email=$_COOKIE['user'];
if(isset($_POST['q4op1'])){
$foodie=$_POST['q4op1'];
mysqli_query($con,"update login set Mall='1' where Email='".$email."'");
}
else{
$foodie=0;
}
if(isset($_POST['q4op2'])){
$artist=$_POST['q4op2'];
mysqli_query($con,"update login set Museum='1' where Email='".$email."'");
}
else{
$artist=0;
}
if(isset($_POST['q4op3'])){
$shopaholic=$_POST['q4op3'];
mysqli_query($con,"update login set Mall='1' where Email='".$email."'");
}
else{
$shopaholic=0;
}
if(isset($_POST['q4op4'])){
$gamer=$_POST['q4op4'];
mysqli_query($con,"update login set Gamingzone='1' where Email='".$email."'");
}
else{
$gamer=0;
}
if(isset($_POST['q4op5'])){
$health=$_POST['q4op5'];
mysqli_query($con,"update login set Resort='1' where Email='".$email."'");
}
else{
$health=0;
}
if(isset($_POST['q4op6'])){
$social=$_POST['q4op6'];
mysqli_query($con,"update login set Sociable='1' where Email='".$email."'");
}
else{
$social=0;
}
if(isset($_POST['q4op7'])){
$movie=$_POST['q4op7'];
mysqli_query($con,"update login set Theatre='1' where Email='".$email."'");
}
else{
$movie=0;
}
if(isset($_POST['q4op8'])){
$nature=$_POST['q4op8'];
mysqli_query($con,"update login set Naturalscene='1' where Email='".$email."'");
}
else{
$nature=0;
}
if(isset($_POST['q4op9'])){
$entertainer=$_POST['q4op9'];
mysqli_query($con,"update login set Theatre='1',Gamingzone='1' where Email='".$email."'");
}
else{
$entertainer=0;
}
if(isset($_POST['q4op10'])){
$travelor=$_POST['q4op10'];
mysqli_query($con,"update login set Religiousplace='1',Naturalscene='1',Picnicspot='1',Educationtrip='1' where Email='".$email."'");
}
else{
$travelor=0;
}
if(isset($_POST['q4op11'])){
$adventurer=$_POST['q4op11'];
mysqli_query($con,"update login set Gamingzone='1' where Email='".$email."'");
}
else{
$adventurer=0;
}
if(isset($_POST['q4op12'])){
$music=$_POST['q4op12'];
mysqli_query($con,"update login set Music='1' where Email='".$email."'");
}
else{
$music=0;
}
if(isset($_POST['q4op13'])){
$book=$_POST['q4op13'];
mysqli_query($con,"update login set Readingspot='1' where Email='".$email."'");
}
else{
$book=0;
}
if(isset($_POST['q4op14'])){
$swimmer=$_POST['q4op14'];
mysqli_query($con,"update login set Swimmer='1' where Email='".$email."'");
}
else{
$swimmer=0;
}
if(isset($_POST['q4op15'])){
$rider=$_POST['q4op15'];
mysqli_query($con,"update login set Rider='1' where Email='".$email."'");
}
else{
$rider=0;
}
if(isset($_POST['q6op1'])){
$Cricket=$_POST['q6op1'];
mysqli_query($con,"update login set Cricket='1' where Email='".$email."'");
}
else{
$Cricket=0;
}
if(isset($_POST['q6op2'])){
$Football=$_POST['q6op2'];
mysqli_query($con,"update login set Football='1' where Email='".$email."'");
}
else{
$Football=0;
}
if(isset($_POST['q6op3'])){
$Basketball=$_POST['q6op3'];
mysqli_query($con,"update login set Basketball='1' where Email='".$email."'");
}
else{
$Basketball=0;
}
if(isset($_POST['q6op4'])){
$Kabaddi=$_POST['q6op4'];
mysqli_query($con,"update login set Kabaddi='1' where Email='".$email."'");
}
else{
$Kabaddi=0;
}
if(isset($_POST['q6op5'])){
$Hocky=$_POST['q6op5'];
mysqli_query($con,"update login set Hocky='1' where Email='".$email."'");
}
else{
$Hocky=0;
}
if(isset($_POST['q6op6'])){
$Tennis=$_POST['q6op6'];
mysqli_query($con,"update login set Tennis='1' where Email='".$email."'");
}
else{
$Tennis=0;
}
if(isset($_POST['q6op7'])){
$Badminton=$_POST['q6op7'];
mysqli_query($con,"update login set Badminton='1' where Email='".$email."'");
}
else{
$Badminton=0;
}
if(isset($_POST['q6op8'])){
$Athletes=$_POST['q6op8'];
mysqli_query($con,"update login set Athletes='1' where Email='".$email."'");
}
else{
$Athletes=0;
}
if(isset($_POST['q6op9'])){
$Tabletennis=$_POST['q6op9'];
mysqli_query($con,"update login set Tabletennis='1' where Email='".$email."'");
}
else{
$Tabletennis=0;
}
if(isset($_POST['q7op1'])){
$Action=$_POST['q7op1'];
mysqli_query($con,"update login set Action='1' where Email='".$email."'");
}
else{
$Action=0;
}
if(isset($_POST['q7op2'])){
$Thriller=$_POST['q7op2'];
mysqli_query($con,"update login set Thriller='1' where Email='".$email."'");
}
else{
$Thriller=0;
}
if(isset($_POST['q7op3'])){
$Drama=$_POST['q7op3'];
mysqli_query($con,"update login set Drama='1' where Email='".$email."'");
}
else{
$Drama=0;
}
if(isset($_POST['q7op4'])){
$Family=$_POST['q7op4'];
mysqli_query($con,"update login set Family='1' where Email='".$email."'");
}
else{
$Family=0;
}
if(isset($_POST['q7op5'])){
$Comedy=$_POST['q7op5'];
mysqli_query($con,"update login set Comedy='1' where Email='".$email."'");
}
else{
$Comedy=0;
}
if(isset($_POST['q7op6'])){
$Romance=$_POST['q7op6'];
mysqli_query($con,"update login set Romance='1' where Email='".$email."'");
}
else{
$Romance=0;
}
if(isset($_POST['q7op7'])){
$Horror=$_POST['q7op7'];
mysqli_query($con,"update login set Horror='1' where Email='".$email."'");
}
else{
$Horror=0;
}
if(isset($_POST['q7op8'])){
$Mystery=$_POST['q7op8'];
mysqli_query($con,"update login set Mystery='1' where Email='".$email."'");
}
else{
$Mystery=0;
}
if(isset($_POST['q7op9'])){
$Animation=$_POST['q7op9'];
mysqli_query($con,"update login set Animation='1' where Email='".$email."'");
}
else{
$Animation=0;
}
if(isset($_POST['q7op10'])){
$Biography=$_POST['q7op10'];
mysqli_query($con,"update login set Biography='1' where Email='".$email."'");
}
else{
$Biography=0;
}
if(isset($_POST['q7op11'])){
$Musical=$_POST['q7op11'];
mysqli_query($con,"update login set Musical='1' where Email='".$email."'");
}
else{
$Musical=0;
}
if(isset($_POST['q8op1'])){
$SouthIndian=$_POST['q8op1'];
mysqli_query($con,"update login set SouthIndian='1' where Email='".$email."'");
}
else{
$SouthIndian=0;
}
if(isset($_POST['q8op2'])){
$NorthIndian=$_POST['q8op2'];
mysqli_query($con,"update login set NorthIndian='1' where Email='".$email."'");
}
else{
$NorthIndian=0;
}
if(isset($_POST['q8op3'])){
$Gujarati=$_POST['q8op3'];
mysqli_query($con,"update login set Gujarati='1' where Email='".$email."'");
}
else{
$Gujarati=0;
}
if(isset($_POST['q8op4'])){
$Fastfood=$_POST['q8op4'];
mysqli_query($con,"update login set Fastfood='1' where Email='".$email."'");
}
else{
$Fastfood=0;
}
if(isset($_POST['q8op5'])){
$Continental=$_POST['q8op5'];
mysqli_query($con,"update login set Continental='1' where Email='".$email."'");
}
else{
$Continental=0;
}
if(isset($_POST['q8op6'])){
$Desserts=$_POST['q8op6'];
mysqli_query($con,"update login set Desserts='1' where Email='".$email."'");
}
else{
$Desserts=0;
}
if(isset($_POST['q8op7'])){
$Bakery=$_POST['q8op7'];
mysqli_query($con,"update login set Bakery='1' where Email='".$email."'");
}
else{
$Bakery=0;
}
if(isset($_POST['q8op8'])){
$Italian=$_POST['q8op8'];
mysqli_query($con,"update login set Italian='1',Pizza='1' where Email='".$email."'");
}
else{
$Italian=0;
}
if(isset($_POST['q8op9'])){
$Spanish=$_POST['q8op9'];
mysqli_query($con,"update login set Spanish='1' where Email='".$email."'");
}
else{
$Spanish=0;
}
if(isset($_POST['q8op10'])){
$Others=$_POST['q8op10'];
mysqli_query($con,"update login set Japanese='1',American='1',European='1',Seafood='1',Mughlai='1',Asian='1',Mediterranean='1',Thai='1',Mexican='1',Lucknowi='1' where Email='".$email."'");
}
else{
$Others=0;
}

/*
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
*/
if(!($foodie||$shopaholic||$artist||$gamer||$health||$social||$movie||$nature||$entertainer||$travelor||$adventurer||$music||$book||$swimmer||$music) && !($Action||$Thriller||$Drama||$Family||$Comedy||$Romance||$Horror||$Mystery||$Animation||$Biography||$Musical) && !($Cricket||$Football||$Basketball||$Kabaddi||$Hocky||$Tennis||$Badminton||$Athletes||$Tabletennis) && !($Others||$SouthIndian||$NorthIndian||$Gujarati||$Fastfood||$Continental||$Desserts||$Bakery||$Italian||$Spanish)){
//if( !($morning || $afternoon || $evening || $cuisine || $cuisine2 || $cuisine3 || $veg || $nonveg || $egg || $maharaja || $Range2 || $Affordable || $Economy || $Essential || $place || $purpose)){	
?>
<script>
if(window.confirm('Atleast one choice is compulsory')){
	window.history.back();
}
else{
	window.history.back();
}
</script>
<?php
}
else{
	echo "<script>window.top.location.href='../admin.php';</script>";
}
?>
</body>
</html>