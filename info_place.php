<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/listing-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 16:59:42 GMT -->
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

    <title>Details</title>
</head>

<?php
include 'connect.php';
if(!isset($_GET["name"])){
	$name="InOrbit";
}
else{
	$name = $_REQUEST["name"];
}
$sql = "SELECT * FROM entertainment WHERE Name='".$name."'";
$result = $con->query($sql);
$H_Id = 0;
$H_Name = $H_Address = $Phone_NO = $H_Latitude = $H_Longitude = $morning = $afternoon = $evening = $veg = $nonveg = $egg = $maharaja = $range2 = $affordable = $economy = $essential = $mughlai = $asian = $italian = $spanish = $mediterranean = $mexican = $thai = $continental = $tibetan = $cafe = $southindian = $pizza = $streetfood = $gujarati = $lucknowi = $rajasthani = $chinese = $dessert = $european = $icecream = $bakery = $american = $japanese = $seafood = "";
if($result->num_rows >0){
while($row = mysqli_fetch_assoc($result)){
	$H_Id=$row["SRNo"];
	$Name = $row["Name"];
	$H_Address = $row["Address"];
	$Phone_NO = $row["PhoneNo"];
//	$H_Latitude = $row["H_Latitude"];
//	$H_Longitude = $row["H_Longitude"];
}
}
$result2=mysqli_query($con,"select * from rating_place where SRNo='".$H_Id."'");
$row2=mysqli_fetch_assoc($result2);
$rating=intval($row2["avgRating"]);
$NoofUserRated=$row2["NoofUserRated"];

$result3=mysqli_query($con,"select * from review_place where ID='".$H_Id."'");


?>   

<body>

<div class="page-wrapper">
    
    <header class="header header-minimal">
    <div class="header-wrapper">
        <div class="container-fluid">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index-2.html">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-bottom">
                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li >
        <a href="dashboard.php">Home</a>
    </li>

    <li >
        <a href="#">Rate<i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
            <li><a href="login(part2).php">Rate hotel</a></li>
            <li><a href="login(part3).php">Rate place</a></li>
        </ul>
    </li>

    <li >
        <a href="#">Review<i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
            <li><a href="search.php">Review hotel</a></li>
            <li><a href="search.php">Review place</a></li>
        </ul>
    </li>




</ul>

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>


                        <div class="header-nav-user">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <div class="user-image">
                <img src="assets/img/tmp/agent-2.jpg">
            </div><!-- /.user-image -->

            <span class="header-nav-user-name"><?php echo $_COOKIE["hunt4place_user_name"]; ?></span> <i class="fa fa-chevron-down"></i>
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="user-profile-edit.php">Edit Profile</a></li>
            <li><a href="change-password.php">Change Password</a></li>
        </ul>
    </div><!-- /.dropdown -->
</div><!-- /.header-nav-user -->

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->

    <div class="header-statusbar">
        <div class="header-statusbar-inner">
        </div><!-- /.header-statusbar-inner -->
    </div><!-- /.header-statusbar -->
</header><!-- /.header -->




    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-80 mb80">
    <div class="detail-banner" style="background-image: url(assets/img/tmp/detail-banner-1.jpg);">
    <div class="container">
        <div class="detail-banner-left">

            <h2 class="detail-title">
                <?php echo $name;?>
            </h2>

            <div class="detail-banner-address">
                <i class="fa fa-map-o"></i> <?php echo $H_Address; ?>
            </div><!-- /.detail-banner-address -->

            <div class="detail-banner-rating">
            <?php 
				for($i=0;$i<$rating;$i++){
					echo "<i class='fa fa-star'></i>";
				}
			?>
            </div><!-- /.detail-banner-rating -->

            <div class="detail-banner-btn bookmark">
                <i class="fa fa-bookmark-o"></i> <span data-toggle="Bookmarked">Bookmark</span>
            </div><!-- /.detail-claim -->

            <div class="detail-banner-btn heart">
                <i class="fa fa-heart-o"></i> <span data-toggle="I Love It">Give Heart</span>
            </div><!-- /.detail-claim -->

        </div><!-- /.detail-banner-left -->
    </div><!-- /.container -->
</div><!-- /.detail-banner -->

</div>

<div class="container">
    <div class="row detail-content">
    <?php
	if($H_Latitude && $H_Longitude){
	?>
    <div class="col-sm-7">

        <div class="background-white p20">

            <!-- Nav tabs -->
            <ul id="listing-detail-location" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#simple-map-panel" aria-controls="simple-map-panel" role="tab" data-toggle="tab">
                        <i class="fa fa-map"></i>Map
                    </a>
                </li>
                <?php
					$address="https://www.google.com/maps/dir//".$H_Latitude.",".$H_Longitude."/@".$H_Latitude.",".$H_Longitude.",17z/data=!3m1!4b1";

				?>
                <li role="presentation">
                    <a href="<?php echo $address;?>" >
                        <i class="fa fa-level-down"></i>Direction
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="simple-map-panel">
                    <div class="detail-map">
                        <div class="map-position">
                            <div id="listing-detail-map"
                                 data-transparent-marker-image="assets/img/transparent-marker-image.png"
                                 data-styles='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"labels.text.fill","stylers":[{"color":"#b43b3b"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"lightness":"8"},{"color":"#bcbec0"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5b5b5b"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7cb3c9"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#abb9c0"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"color":"#fff1f1"},{"visibility":"off"}]}]'
                                 data-zoom="15"
                                 data-latitude="<?php echo $H_Latitude ?>"
                                 data-longitude="<?php echo $H_Longitude ?>"
                                 data-icon="fa fa-coffee">
                            </div><!-- /#map-property -->
                        </div><!-- /.map-property -->
                    </div><!-- /.detail-map -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="street-view-panel">
                    <div id="listing-detail-street-view"
                            data-latitude="<?php echo $H_Latitude ?>"
                            data-longitude="<?php echo $H_Longitude ?>"
                            data-heading="225"
                            data-pitch="0"
                            data-zoom="1">
                    </div>
                </div>
            </div>
        </div>
		<?php
			}
		?>

        <h2 id="reviews">All Reviews</h2>
        <div class="reviews">
<?php
while($row3=mysqli_fetch_assoc($result3)){
$result4=mysqli_query($con,"select Email,Name from login where Email='".$row3['Email']."'");
$row4=mysqli_fetch_assoc($result4);
$totalscore=($row3["Budget"]+$row3["Entertainment"]+$row3["Atmosphere"])/3;
echo "    <div class='review'>
        <div class='review-image'>
            <img src='".$row4["Email"]."' alt=''>
        </div><!-- /.review-image -->
        <div class='review-inner'>
            <div class='review-title'>
                <h2>".$row4['Name']."</h2>
                <div class='review-overall-rating'>
                    <span class='overall-rating-title'>Total Score:</span>";
				
				for($i=0;$i<$totalscore;$i++){
					echo "<i class='fa fa-star'></i>";
				}
				
echo                "</div><!-- /.review-rating -->
            </div><!-- /.review-title -->

            <div class='review-content-wrapper'>
                <div class='review-content'>
                    <div class='review-pros'>
                        <p>".$row3['Pros']."</p>
                    </div><!-- /.pros -->
                    <div class='review-cons'>
                        <p>".$row3['Cons']."</p>
                    </div><!-- /.cons -->
                </div><!-- /.review-content -->

                <div class='review-rating'>
                    <dl>
                        <dt>Food</dt>
                        <dd>";
				for($i=0;$i<$row3['Budget'];$i++){
					echo "<i class='fa fa-star'></i>";
				}
echo"                        </dd>
                        <dt>Staff</dt>
                        <dd>";
				for($i=0;$i<$row3['Entertainment'];$i++){
					echo "<i class='fa fa-star'></i>";
				}
echo"                        </dd>";
echo"                        <dt>Atmosphere</dt>
                        <dd>";
				for($i=0;$i<$row3['Atmosphere'];$i++){
					echo "<i class='fa fa-star'></i>";
				}
echo"                        </dd>
                    </dl>
                </div><!-- /.review-rating -->
            </div><!-- /.review-content-wrapper -->

        </div><!-- /.review-inner -->
    </div><!-- /.review -->


";
}


?>
</div><!-- /.reviews -->

    </div><!-- /.col-sm-7 -->


    <div class="col-sm-5">

        <div class="background-white p20">
            <div class="detail-overview-hearts">
                <i class="fa fa-heart"></i> <strong><?php echo $NoofUserRated; ?> </strong>people love it
            </div>
            <div class="detail-overview-rating">
                <i class="fa fa-star"></i> <strong><?php echo $rating; ?>/10 </strong>from <a href="#reviews"><?php echo $NoofUserRated; ?> reviews</a>
            </div>

        </div>

        <div class="widget">
    <h2 class="widgettitle">Working Hours</h2>

</div><!-- /.widget -->


        <!--h2>Amenities</h2>

        <div class="background-white p20">
            <ul class="detail-amenities">
                <li class="yes">WiFi</li>
                <li class="yes">Parking</li>
                <li class="no">Vine</li>
                <li class="yes">Terrace</li>
                <li class="no">Bar</li>
                <li class="yes">Take Away Coffee</li>
                <li class="no">Catering</li>
                <li class="yes">Raw Food</li>
                <li class="no">Delivery</li>
                <li class="yes">No-smoking room</li>
                <li class="no">Reservations</li>
            </ul>
        </div><!-- /.detail-amenities -->



    </div><!-- /.col-sm-5 -->

    <div class="col-sm-12">
        <h2>Submit a Review</h2>

        <form class="background-white p20 add-review" method="post" action="submitreview_place.php?ID=<?php echo $H_Id; ?>">

            <div class="row">
                <div class="form-group input-rating col-sm-3">

                    <div class="rating-title">Budget</div>

                    <input type="radio" value="1" name="food" id="rating-food-1">
                    <label for="rating-food-1"></label>
                    <input type="radio" value="2" name="food" id="rating-food-2">
                    <label for="rating-food-2"></label>
                    <input type="radio" value="3" name="food" id="rating-food-3">
                    <label for="rating-food-3"></label>
                    <input type="radio" value="4" name="food" id="rating-food-4">
                    <label for="rating-food-4"></label>
                    <input type="radio" value="5" name="food" id="rating-food-5">
                    <label for="rating-food-5"></label>

                </div><!-- /.col-sm-3 -->
                <div class="form-group input-rating col-sm-3">

                    <div class="rating-title">Entertainment</div>

                    <input type="radio" value="1" name="staff" id="rating-staff-1">
                    <label for="rating-staff-1"></label>
                    <input type="radio" value="2" name="staff" id="rating-staff-2">
                    <label for="rating-staff-2"></label>
                    <input type="radio" value="3" name="staff" id="rating-staff-3">
                    <label for="rating-staff-3"></label>
                    <input type="radio" value="4" name="staff" id="rating-staff-4">
                    <label for="rating-staff-4"></label>
                    <input type="radio" value="5" name="staff" id="rating-staff-5">
                    <label for="rating-staff-5"></label>

                </div><!-- /.col-sm-3 -->
                <div class="form-group input-rating col-sm-3">

                    <div class="rating-title">Atmosphere</div>

                    <input type="radio" value="1" name="atmosphere" id="rating-atmosphere-1">
                    <label for="rating-atmosphere-1"></label>
                    <input type="radio" value="2" name="atmosphere" id="rating-atmosphere-2">
                    <label for="rating-atmosphere-2"></label>
                    <input type="radio" value="3" name="atmosphere" id="rating-atmosphere-3">
                    <label for="rating-atmosphere-3"></label>
                    <input type="radio" value="4" name="atmosphere" id="rating-atmosphere-4">
                    <label for="rating-atmosphere-4"></label>
                    <input type="radio" value="5" name="atmosphere" id="rating-atmosphere-5">
                    <label for="rating-atmosphere-5"></label>

                </div><!-- /.col-sm-3 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="">Pros <span class="required">*</span></label>
                    <textarea class="form-control" name="pros" rows="5" id="pros" required></textarea>
                </div><!-- /.col-sm-6 -->
                <div class="form-group col-sm-6">
                    <label for="">Cons <span class="required">*</span></label>
                    <textarea class="form-control" name="cons" rows="5" id="cons" required></textarea>
                </div><!-- /.col-sm-6 -->

                <div class="col-sm-8">
                    <p>Required fields are marked <span class="required">*</span></p>
                </div><!-- /.col-sm-8 -->
                <div class="col-sm-4">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-star"></i>Submit Review</button>
                </div><!-- /.col-sm-4 -->
            </div><!-- /.row -->
        </form>
    </div><!-- /.col-* -->
</div><!-- /.row -->

</div><!-- /.container -->

            </div><!-- /.content -->
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

<!-- Mirrored from preview.byaviators.com/template/superlist/listing-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:20 GMT -->
</html>
