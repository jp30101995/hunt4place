<!DOCTYPE html>
<html>
<?php 
session_start();

include 'connect.php';
$result=mysqli_query($con,"select * from login where Email='".$_COOKIE["user"]."'");
$row=mysqli_fetch_assoc($result);

?>

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

    <title>User Profile Edit</title>
</head>


<body>

<div class="page-wrapper">
    
    <header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index-2.html">
                        <img src="assets/img/logo.png" alt="Logo">
                        <span>hunt4place</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-bottom">
                        <div class="header-action">
                        </div><!-- /.header-action -->

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li >
        <a href="http://www.hunt4place.in/hunt4place/admin.php">Home <i class="fa fa-chevron-down"></i></a>
    </li>


</ul>

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->
<?php

$path="uploads/".$_COOKIE["user"];
if(file_exists($path)){
	$src=$path;
}
else{
	$src="assets/img/tmp/agent-2.jpg";
}

?>



    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-lg-3">
                        <div class="sidebar">
                            <div class="widget">
    <div class="user-photo">
        <a href="#">
            <img src="<?php echo $src; ?>" alt="User Photo">
            
        </a>
    </div><!-- /.user-photo -->
</div><!-- /.widget -->


                            <div class="widget">

    <ul class="menu-advanced">
        <li class="active"><a href="#"><i class="fa fa-user"></i> Edit Profile </a></li>
        <li><a href="changepassword.php"><i class="fa fa-key"></i> Password</a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
</div><!-- /.widget -->

                        </div><!-- /.sidebar -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <div class="page-title">
    <h1>Edit Profile</h1>
</div><!-- /.page-title -->

<div class="background-white p20 mb30">
	<form action="updatename.php" method="post">
    <h3 class="page-title">
        Contact Information

        <input type="submit" value="save" class="btn btn-primary btn-xs pull-right">
    </h3>

    <div class="row">
        <div class="form-group col-sm-6">
            <label>Name</label>
            <input type="text" name="username" class="form-control" value="<?php echo $row["Name"] ?>">
      
            </form>
        </div><!-- /.form-group -->

    </div><!-- /.row -->
</div>
<div class="background-white p20 mb30">
    <div class="row">
        <div class="form-group col-sm-6">
        <form id="uploadimg" method="post" action="uploadprofile.php" enctype="multipart/form-data">
            <label>Change Profile Photo</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
        </form>
        </div><!-- /.form-group -->
    </div><!-- /.row -->
</div>



                        </div><!-- /.content -->
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

<!-- Mirrored from preview.byaviators.com/template/superlist/user-profile-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
</html>
