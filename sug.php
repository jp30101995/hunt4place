<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/listing-row.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
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
    <link href="assets/css/superlist1.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>Hotel-suggestion</title>
</head>
<?php

include 'connect.php';
$email=$_COOKIE["user"];
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
//print_r($record);
//print_r($record2);
//print_r($record3);
$result2=mysqli_query($con,"select H_Id,H_Name,maharaja,Range2,Affordable,Economy,Essential,Family,Friends,OfficeMeetings,Girlfriend,FormalMeet,Reunion,FamilyGettogether,KittyParty,Hangout,Date,CandleLightDinner,Seminar,NorthIndian,Mughlai,Italian,Mexican,Thai,Continental,Cafe,Fastfood,SouthIndian,Pizza,Streetfood,Gujarati,Chinese,Desserts,Icecream,Bakery from food_latest where H_Id in (select ID from user_rating where name='".$email."')");
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
//print_r($urecord);
//print_r($urecord2);
//print_r($urecord3);
$matching=array();
$perarray=array();
$score=array();
$finalsimilarity=array();

//echo mysqli_num_rows($result2);
//echo mysqli_num_rows($result);

for($i=0;$i<mysqli_num_rows($result);$i++){
	$similarityarray=array();
	for($j=0;$j<mysqli_num_rows($result2);$j++){
		$match="";
		for($p=0;$p<5;$p++){
			if($record[$i][$p]==$urecord[$j][$p]){
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
			if($record2[$i][$p]==$urecord2[$j][$p]){
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
	//echo "<br>similarity array :";
	//print_r($similarityarray);
array_push($finalsimilarity,$similarityarray);	
unset($similarityarray);
	
}
//print_r($finalsimilarity);
//echo "<br>";
//echo $finalsimilarity[0][1];
for($p=0;$p<mysqli_num_rows($result);$p++){
	for($q=0,$sum=0;$q<mysqli_num_rows($result2);$q++){
		$sum=$sum+$finalsimilarity[$p][$q];
	}
	array_push($score,$sum);
}
?>
<body>
<div class="page-wrapper">

    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
<div class="cards-row">

<?php
//echo "<br>";
//print_r($score);

for($p=0;$p<10;$p++){
	$max=array_keys($score,max($score));
	$result3=mysqli_query($con,"select * from food_latest where H_Id='".$max[0]."'");
	$row3=mysqli_fetch_assoc($result3);
	$result4=mysqli_query($con,"select avgRating from rating where H_Id='".$max[0]."'");
	$row4=mysqli_fetch_assoc($result4);
	//print_r($max);
	//echo "<br>";
	array_splice($score,$max[0],1);
	//print_r($score);
?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-1.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html"><?php echo $row3["H_Name"] ?></a></h2>
                            <div class="card-simple-rating">
                                <?php
								for($i=0;$i<$row4["avgRating"];$i++){
								 echo "<i class='fa fa-star'></i>";
								}
								?>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a id="star" onClick="changeclass()" class="fa fa-bookmark-o"></a>
                                <a href="info.php?name=<?php echo $row3["H_Name"] ?>" target="_blank" class="fa fa-search"></a>
                                <a id="heart" onClick="changeheart()" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">vacation</div>
                        
                            <div class="card-simple-price"><?php if($row3["maharaja"]) echo "1300/couple";
													  if($row3["Range2"]) echo "900/couple";
													  if($row3["Affordable"]) echo "600/couple";
													  if($row3["Economy"]) echo "400/couple";
													  if($row3["Essential"]) echo "300/couple"; ?></div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        





<?php
}
?>

    
    
</div><!-- /.cards-row -->



                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

 
</div><!-- /.page-wrapper -->
<script>
function changeclass(){
    var NAME = document.getElementById("star");
    var currentClass = NAME.className;
    if (currentClass == "fa fa-bookmark-o") { // Check the current class name
        NAME.className = "fa fa-bookmark";   // Set other class name
    } else {
        NAME.className = "fa fa-bookmark-o";  // Otherwise, use `second_name`
    }
}
function changeheart(){
    var NAME = document.getElementById("heart");
    var currentClass = NAME.className;
    if (currentClass == "fa fa-heart-o") { // Check the current class name
        NAME.className = "fa fa-heart";   // Set other class name
    } else {
        NAME.className = "fa fa-heart-o";  // Otherwise, use `second_name`
    }
}
</script>


<script src="assets/js/jquery.js" type="text/javascript"></script>
<script src="assets/js/map.js" type="text/javascript"></script>

<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;sensor=false" type="text/javascript"></script>

<script type="text/javascript" src="assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="assets/js/superlist.js" type="text/javascript"></script>

</body>

<!-- Mirrored from preview.byaviators.com/template/superlist/listing-row.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
</html>
