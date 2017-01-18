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
include 'connect.php';
	$result3=mysqli_query($con,"select * from entertainment where Categories in (select Categories from entertainment where SRNo in (select ID from user_rating where name='".$_COOKIE["user"]."')) order by Name");
	while($row3=mysqli_fetch_assoc($result3)){
	$result4=mysqli_query($con,"select avgRating from rating_place where SRNo='".$row3["SRNo"]."'");
	$row4=mysqli_fetch_assoc($result4);
	//print_r($max);
	//echo "<br>";
	//array_splice($score,$max[0],1);
	//print_r($score);
?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-1.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html"><?php echo $row3["Name"] ?></a></h2>
                            <div class="card-simple-rating">
                                <?php
								for($i=0;$i<$row4["avgRating"];$i++){
								 echo "<i class='fa fa-star'></i>";
								}
								?>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a id="star" onClick="changeclass()" class="fa fa-bookmark-o"></a>
                                <a href="info_place.php?name=<?php echo $row3["Name"] ?>" target="_blank" class="fa fa-search"></a>
                                <a id="heart" onClick="changeheart()" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label"><?php echo $row3["Categories"]; ?></div>
                        
                            <div class="card-simple-price"><?php echo $row3["PhoneNo"] ?></div>
                        
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
