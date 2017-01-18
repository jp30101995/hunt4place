<!DOCTYPE html>
<?php
if(isset($_COOKIE["user"])){
	include'connect.php';
?>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/listing-submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 16:59:11 GMT -->
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

    <title>List your event</title>
</head>


<body>

<div class="page-wrapper">
    



    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    


                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <div class="page-title">
    <h1>List your event on hunt4place</h1>
</div>
<form id="listevent" method="post" action="listevent.php">
<div class="background-white p30 mb30">
    <h3 class="page-title">Description</h3>
    <div class="form-group">
        <input class="form-control" type="text" name="title" placeholder="Title" required>
    </div><!-- /.form-group -->

    <div class="form-group">
        <textarea class="form-control" name="description" placeholder="Event Description" rows="8" required></textarea>
    </div><!-- /.form-group -->
</div><!-- /.box -->

<div class="background-white p30 mb30">
    <h3 class="page-title">Event info</h3>

    <div class="row">

        <div class="col-sm-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                <input class="form-control" name="address" type="text" placeholder="Address" required>
            </div><!-- /.form-group -->

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                <input class="form-control" name="city" type="text" placeholder="City" required>
            </div><!-- /.form-group -->

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input class="form-control" name="phone" type="number" placeholder="Phone" required>
            </div><!-- /.form-group -->
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-table"></i></span>
                <input class="form-control" name="date" type="date" placeholder="Start date" required>
            </div><!-- /.form-group -->

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-table"></i></span>
                <input class="form-control" name="duration" type="number" placeholder="Duration(days)" required>
            </div><!-- /.form-group -->
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                <input class="form-control" name="email" type="email" placeholder="E-mail" required>
            </div><!-- /.form-group -->
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                <input class="form-control" name="url" type="url" placeholder="Website">
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.box -->

<div class="row">
    <div class="col-sm-12">

        <div class="background-white p30 mb30">
            <h3 class="page-title">Map Position</h2>

            <input id="pac-input" class="controls form-control mb30" type="text" placeholder="Enter a location">

            <div id="map-canvas"></div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input class="form-control" type="text" name="latitude" placeholder="Latitude" id="input-latitude">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input class="form-control" type="text" name="longitude" placeholder="Lontgitude" id="input-longitude">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.box -->
    </div>

    <div class="col-sm-12">
        <div class="background-white p30 mb30">            
            <h3 class="page-title">Upload photo(only one photo)</h2>
            <input type="file" name="photo" id="input-file">
        </div><!-- /.box -->
    </div>
</div><!-- /.row -->
<div class="background-white p30 mb30">
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


<div class="center">
    <button type="submit" class="btn btn-primary btn-xl">Submit Listing</button>
</div><!-- /.center -->
</form>

                        </div><!-- /.content -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-4 col-lg-3">
                        <div class="sidebar">

                            <div class="widget">
    <h2 class="widgettitle">Recent Listings</h2>
<?php

$result3=mysqli_query($con,"select * from event");
$count=0;
while($row3=mysqli_fetch_assoc($result3)){
	if($count<5){
echo "        <div class='cards-small'>
            <div class='card-small'>
                <div class='card-small-image'>
                    <a href='eventinfo.php?User_ID=".$row3["User_ID"]."&Title=".$row3["Title"]."'>
                        <img src='assets/img/tmp/product-2.jpg'>
                    </a>
                </div><!-- /.card-small-image -->

                <div class='card-small-content'>
                    <h3><a href='eventinfo.php?User_ID=".$row3["User_ID"]."&Title=".$row3["Title"]."'>".$row3["Title"]."</a></h3>
                    <h4><a href='".$row3["Website"]."'>".$row3["Website"]."</a></h4>

                    <div class='card-small-price'>".$row3["Email"]."</div>
                </div><!-- /.card-small-content -->
            </div><!-- /.card-small -->
        </div><!-- /.cards-small -->
";
}
$count++;
}
?>
    

    
        


        
    
</div><!-- /.widget -->
                            



                        </div><!-- /.sidebar -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
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

<!-- Mirrored from preview.byaviators.com/template/superlist/listing-submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 16:59:12 GMT -->
</html>
<?php
}
else{
echo "<script>window.location.assign('login1.php')</script>";
}
?>