<!DOCTYPE html>
<?php
session_start();

include 'connect.php';
if(isset($_COOKIE["user"])){
	
?>

<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
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

    <title>hunt4place - register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<style> 


#panel {
    padding: 50px;
    display: none;
}
</style>
</head>

<body>
<div class="page-wrapper">
<?php
include 'header(food).php';
?>
<div class="background-white p30 mb30" id="panel">
    <h3 class="page-title">Catagory</h3>

    <ul class="amenities">
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="foodfest" id="amenity-1"> <label for="amenity-1">Food fest</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="artexhibition" id="amenity-2"> <label for="amenity-2">Art Exhibition</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="golfevent" id="amenity-3"> <label for="amenity-3">Golf event</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="themeparties" id="amenity-4"> <label for="amenity-4">Theme parties</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="moviepromotion" id="amenity-5"> <label for="amenity-5">Movie Release</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="bookfair" id="amenity-6"> <label for="amenity-6">Book Fest</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="booklaunch" id="amenity-7"> <label for="amenity-7">Book Release</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="blooddonation" id="amenity-8"> <label for="amenity-8">Blood Donation</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="fundraising" id="amenity-9"> <label for="amenity-9">Fund Raising</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="drama" id="amenity-10"> <label for="amenity-10">Drama</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="sale" id="amenity-11"> <label for="amenity-11">Sale</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="musicnight" id="amenity-12"> <label for="amenity-12">Music Night</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="orchestra" id="amenity-13"> <label for="amenity-13">Orchestra</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="concert" id="amenity-14"> <label for="amenity-14">Concerts</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="tournament" id="amenity-15"> <label for="amenity-15">Tournament</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="matches" id="amenity-16"> <label for="amenity-16">Match/Leagues</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="camp" id="amenity-17"> <label for="amenity-17">Camps</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="trip" id="amenity-18"> <label for="amenity-18">Trips</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="rally" id="amenity-19"> <label for="amenity-19">Race/Rally</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="workshop" id="amenity-20"> <label for="amenity-20">Workshop</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="competition" id="amenity-21"> <label for="amenity-21">Competitonsz</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="seminar" id="amenity-22"> <label for="amenity-22">Seminars</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="webinar" id="amenity-22"> <label for="amenity-22">Webinars</label></li>
        <li class="checkbox"><input type="checkbox" name="catagory[]" value="college" id="amenity-23"> <label for="amenity-23">College Eventns</label></li>
    </ul>
</div>
    




    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    


<div class="cards-simple-wrapper">
    <h4>Rate atleast 10 Hotels    </h4>

<?php

$email=$_COOKIE['user'];
$row=mysqli_fetch_assoc(mysqli_query($con,"select Rate_count from login where Email='".$email."'"));
echo "<h3>".$row['Rate_count']." Hotels Rated...</h3>";
?>
<iframe id="iframe" name="iframe" src="getHotel.php" height="1920" width="100%" frameborder="0" scrolling="auto">
  <p>Your browser does not support iframes.</p>
</iframe>
      
       </div><!-- /.cards-simple-wrapper -->




                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

</div><!-- /.page-wrapper -->

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

<!-- Mirrored from preview.byaviators.com/template/superlist/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
</html>
<?php
}
else{
	
	echo"<script type='text/javascript'>window.location.href = 'index.php';</script>";
}
?>
