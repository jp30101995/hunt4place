<!DOCTYPE html>
<?php
if(isset($_COOKIE["user"])){
	echo "<script>window.location.assign('admin.php')</script>";
}
?>

<html>


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

    <title>hunt4place</title>
    <style>
.grow img {
  height: 150px;
  width: 150px;
 
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
 
.grow img:hover {
  border: 7px solid #1A8176;
  border-radius: 50%;
  border-color:#1A8176;
}
.grow img:hover off{
	border:0px solid #000;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
}
body2 {
  background-color: #fff;
  color:#FFF;
  font-family: 'Nunito';
  font-size: 11px;
  height: 100%;
  overflow-x: hidden;
  width: 100%; }


	</style>

</head>


<body>

<div class="page-wrapper">
<?php
include 'header.php';
?>

            <div class="content">
                <div class="mt-80">
    <div class="hero-video">
        <img src="assets/img/background.jpg">

            <div class="container">
                <a href="#"><p style="font-size:63px">hunt4place</p></a>
				<div class="grow img">
                <a href="listing-submit.html" onMouseOver="content()" onMouseOut="down()" ><img onKeyUp="increase()" src="assets/img/tmp/agent-2.png" width="150" height="150"></a>
                <a href="listing-submit.html" onMouseOver="content2()" onMouseOut="down()" ><img onKeyUp="increase()" src="assets/img/tmp/agent-2.png" width="150" height="150"></a>
                <a href="listing-submit.html" onMouseOver="content3()" onMouseOut="down()" ><img onKeyUp="increase()" src="assets/img/tmp/agent-2.png" width="150" height="150"></a>
                </div>
            </div><!-- /.container -->
            
                    <div class="hero-image-form-wrapper">
            <div class="container">
                <div class="row">
                    <!--div class="col-sm-20 col-sm-offset-8 col-lg-4 col-lg-offset-8" >
                          <p>-Start Searching<br>-hotels<br>-cafe<br>-restaurant</p>







                    </div><!-- /.col-* -->
                    <div id="sectioninfo" style="position:absolute; top:-479px; left:527px; z-index:200">
                             <p></p>                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.hero-image-form-wrapper -->

</div><!-- /.hero-video -->

</div>












            </div><!-- /.content -->


</div><!-- /.page-wrapper -->

<script>
function loginMe(){
	var email=document.getElementById(email);
	var password=document.getElementById(password);
	window.location.assign("loginMe.php");
}
function down(){
	document.getElementById("sectioninfo").innerHTML="";
}
function content(){
	document.getElementById("sectioninfo").innerHTML="<h2>FOOD</h2><br><p>&#9830&nbspHotels<br>&#9830&nbspRestaurents<br>&#9830&nbspcafe<br<&#9830&nbspStreet food</p>";
}
function content2(){
	document.getElementById("sectioninfo").innerHTML="<h2>ENTERTAINMENT AND FUN</h2><br><p>&#9830&nbspMovies<br>&#9830&nbspGaming Zone<br>&#9830&nbspMalls<br>&#9830&nbspDate places<br>&#9830&nbspReading Place<br>&#9830&nbspPark</p>";
}
function content3(){
	document.getElementById("sectioninfo").innerHTML="<h2>TRAVEL AND LEISURE</h2><br><p>&#9830&nbspMuseum/art gallery<br>&#9830&nbspReligious places<br>&#9830&nbspHistorical places<br>&#9830&nbspEducational trip<br>&#9830&nbspResorts<br>&#9830&nbspNature scene<br>&#9830&nbspPicnic spot</p>";
}
function register(){
	window.location.assign("register.php");
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

<!-- Mirrored from preview.byaviators.com/template/superlist/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 16:58:48 GMT -->
</html>
