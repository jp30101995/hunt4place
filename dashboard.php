<!DOCTYPE html>
<?php
session_start();
include 'connect.php';
if(isset($_SESSION["signup"]) || isset($_COOKIE["hunt4place_user"])){
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
    <link href="assets/css/superlist1.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>Admin Dashboard</title>
</head>
<style>
.sidebar-secondary-admin ul li a .icon {
    float: left;
    font-size: 21px;
    margin: 0px 0px 0px 0px;
    text-align: justify;
    width: 48px;
}
.sidebar-secondary-admin ul li a {
    color: #363636;
    display: block;
    height: 51px;
    padding: 18px 20px 0px 20px;
    transition: all .15s linear;
}
.sidebar-secondary-admin ul li a .subtitle {
    color: rgb(54, 54, 54);
    font-size: 12px;
    margin-top: 3px;
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
        <a href="#">Home <i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
            <li><a href="news.php">News</a></li>
            <li><a href="notification.php">Notification</a></li>
            <li><a href="Reco.php.html">Recommandations</a></li>
        </ul>
    </li>

    <li >
        <a href="#">Rate<i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
            <li><a href="listing-detail.html">Rate hotel</a></li>
            <li><a href="listing-map.html">Rate place</a></li>
        </ul>
    </li>

    <li >
        <a href="#">Review<i class="fa fa-chevron-down"></i></a>
        <ul class="sub-menu">
            <li><a href="listing-detail.html">Review hotel</a></li>
            <li><a href="listing-map.html">Review place</a></li>
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

</header><!-- /.header -->




    <div class="main">
        <div class="outer-admin">
            <div class="wrapper-admin">
                <div class="sidebar-secondary-admin">
                    <ul>
                        <li class="active">
                            <a href="admin-dashboard.html">
                                <span class="icon"><i class="fa fa-tachometer"></i></span>
                                <span class="title">Dashboard</span>
                                <span class="subtitle">Manage your website</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-forms.html">
                                <span class="icon">veg</span>
                                <span class="title">Forms <span class="notification">3</span> </span>
                                <span class="subtitle">View form styles</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-tables.html">
                                <span class="icon"><i class="fa fa-table"></i></span>
                                <span class="title">Tables</span>
                                <span class="subtitle">Default table style</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-grid.html">
                                <span class="icon"><i class="fa fa-th"></i></span>
                                <span class="title">Grid <span class="notification">2</span></span>
                                <span class="subtitle">Bootstrap Grid</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-notifications.html">
                                <span class="icon"><i class="fa fa-bell"></i></span>
                                <span class="title">Notifications</span>
                                <span class="subtitle">Alert messages</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.sidebar-secondary-admin -->

                <div class="content-admin">
                    <div class="content-admin-wrapper">
                        <div class="content-admin-main">
                            <div class="content-admin-main-inner">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12">



    <div class="row">
<iframe id="iframe" name="iframe" height="1920" width="100%" src="dashboard_suggestion.php" frameborder="0">
	<p>Please open another browser</p>
</iframe>
    </div><!-- /.row -->
</div><!-- /.col-* -->

                                    </div>
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-main-inner -->
                        </div><!-- /.content-admin-main -->

                        <div class="content-admin-footer">
                            <div class="container-fluid">
                            </div><!-- /.container-fluid -->
                        </div><!-- /.content-admin-footer  -->
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