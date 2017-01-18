<!DOCTYPE html>
<?php
session_start();

include 'connect.php';
if(isset($_SESSION["signup"])){
	
?>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:37 GMT -->
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="300">

    <title>hunt4place - Dashboard</title>
<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color:#C9F;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}
</style>
	
	
	
</head>
<style>
.myIframe {
position: relative;
padding-bottom: 65.25%;
padding-top: 30px;
height: 0;
overflow: auto; 
-webkit-overflow-scrolling:touch; //<<--- THIS IS THE KEY 
border:solid hidden 1px;
} 
.myIframe iframe {
position: relative;
top: 0;
left: 0;
width: 100%;
height:1920px;
}
</style>
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
        <a href="#">Major types<i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
                        <li>
                            <a href="getHotel.php?value=0&catagory=veg" target="iframe">
                                <span class="title">veg</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Nonveg" target="iframe">
                                <span class="title">Non-veg</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=eggetarian" target="iframe">
                                <span class="title">Eggetarian</span>
                            </a>
                        </li>
		
        </ul>        
    </li>

    <li >
        <a href="#">Listing <i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
                        <li>
                            <a href="getHotel.php?value=0&catagory=maharaja" target="iframe">
                                <span class="title">Maharaja</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Range2" target="iframe">
                                <span class="title">Range2</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Affordable" target="iframe">
                                <span class="title">Affordable</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Economy" target="iframe">
                                <span class="title">Economy</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Essential" target="iframe">
                                <span class="title">Essential</span>
                            </a>
                        </li>
        </ul>
    </li>
    <li class="has-mega-menu ">
        <a href="#">Pages <i class="fa fa-chevron-down"></i></a>

        <ul class="mega-menu">
            <li>
                <a href="#">General</a>

                <ul>
                        <li>
                            <a href="getHotel.php?value=0&catagory=NorthIndian" target="iframe">
                                <span class="title">NorthIndian</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Mughlai" target="iframe">
                                <span class="title">Mughlai</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Asian" target="iframe">
                                <span class="title">Asian</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Italian" target="iframe">
                                <span class="title">Italian</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Spanish" target="iframe">
                                <span class="title">Spanish</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Mediterranean" target="iframe">
                                <span class="title">Mediterranean</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Mexican" target="iframe">
                                <span class="title">Mexican</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Thai" target="iframe">
                                <span class="title">Thai</span>
                            </a>
                        </li>
                </ul>
            </li>

            <li>
                <a href="#">Favourite</a>

                <ul>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Continental" target="iframe">
                                <span class="title">Continental</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Cafe" target="iframe">
                                <span class="title">Cafe</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Healthyfood" target="iframe">
                                <span class="title">Healthyfood</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Fastfood" target="iframe">
                                <span class="title">Fastfood</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=SouthIndian" target="iframe">
                                <span class="title">SouthIndian</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Pizza" target="iframe">
                                <span class="title">Pizza</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Streetfood" target="iframe">
                                <span class="title">Streetfood</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Gujarati" target="iframe">
                                <span class="title">Gujarati</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Lucknowi" target="iframe">
                                <span class="title">Lucknowi</span>
                            </a>
                        </li>
                </ul>
            </li>

            <li>
                <a href="#">Miscellaneous</a>

                <ul>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Rajasthani" target="iframe">
                                <span class="title">Rajasthani</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Chinese" target="iframe">
                                <span class="title">Chinese</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Desserts" target="iframe">
                                <span class="title">Dessert</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=European" target="iframe">
                                <span class="title">European</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Icecream" target="iframe">
                                <span class="title">IceCream</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Bakery" target="iframe">
                                <span class="title">Bakery</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=American" target="iframe">
                                <span class="title">American</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Japanese" target="iframe">
                                <span class="title">Japanese</span>
                            </a>
                        </li>
                        <li>
                            <a href="getHotel.php?value=0&catagory=Seafood" target="iframe">
                                <span class="title">SeaFood</span>
                            </a>
                        </li>
                </ul>
            </li>

            </li>
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
                <div class="notification"></div><!-- /.notification-->
            </div><!-- /.user-image -->

            <span class="header-nav-user-name"><?php echo $_SESSION["name"]; ?></span> <i class="fa fa-chevron-down"></i>
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

</header><!-- /.header -->




    <div class="main">
        <div class="outer-admin">
            <div class="wrapper-admin">

                <div class="content-admin">
                    <div class="content-admin-wrapper">
                        <div class="content-admin-main">
                            <div class="content-admin-main-inner">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">
    <div class="row">
        <div>
            <h3>Rate atleast 10 Hotels</h3>
<?php

$email=$_COOKIE['hunt4place_user_email'];
$row=mysqli_fetch_assoc(mysqli_query($con,"select Rate_count from login where Email='".$email."'"));
echo "<h3>".$row['Rate_count']." Hotels Rated...</h3>";
?>

            <div class="row">
<div>
<iframe id="iframe" name="iframe" src="getHotel.php" height="1920" width="100%" scrolling="auto">
  <p>Your browser does not support iframes.</p>
</iframe>
</div>
    </div><!-- /.row -->

    
</div><!-- /.col-* -->

                                    </div>
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-main-inner -->
                        </div><!-- /.content-admin-main -->

                    </div><!-- /.content-admin-wrapper -->
                </div><!-- /.content-admin -->
            </div><!-- /.wrapper-admin -->
        </div><!-- /.outer-admin -->
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

<!-- Mirrored from preview.byaviators.com/template/superlist/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:37 GMT -->
</html>
<?php
}
else{
header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>