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


    <title>hunt4place - Dashboard</title>
</head>

<body>

<div class="page-wrapper">
    
    <header class="header header-minimal">
    <div class="header-wrapper">
        <div class="container-fluid">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-bottom">
                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li >
        <a href="index.php">Home <i></i></a>
    </li>
    <li >
        <a href="Questionnaire/Hotel.php">Hotel<i class="fa fa-chevron-down"></i></a>
    </li>
    <li class="has-mega-menu ">
        <a href="Questionnaire/Entertainment.php">Entertainment<i class="fa fa-chevron-down"></i></a>
    </li>
</ul>



                        <div class="header-nav-user">
    <div class="dropdown">

            <span class="header-nav-user-name"><?php echo $_SESSION["name"] ?></span> <i class="fa fa-chevron-down"></i>

    </div><!-- /.dropdown -->
</div><!-- /.header-nav-user -->

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->

    <div class="header-statusbar">
        <div class="header-statusbar-inner">
            <div class="header-statusbar-left">
                <a href="admin-dashboard.php"><h1>Dashboard</h1></a>

                <div class="display-inline-block">
                    <div class="hidden-xs visible-lg">
                        <div class="header-statusbar-search">
                        </div><!-- /.header-search -->
                    </div>
                </div>
            </div><!-- /.header-statusbar-left -->
            <div class="header-statusbar-right">
                <div class="hidden-xs visible-lg">
                    Navigations:
                    <ul class="breadcrumb">
                        <li><a href="login(part2).php">Rate Hotels</a></li>
                        <li><a href="login(part3).php">Rate Places</a></li>
                        <li><a href="login(part4).php">Personality</a></li>
                    </ul>
                    
                </div>
            </div><!-- /.header-statusbar-right -->

        </div><!-- /.header-statusbar-inner -->
    </div><!-- /.header-statusbar -->
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

            <div class="row">

<iframe id="iframe" name="iframe" src="Questionnaire/loginquestion(part5).php" height="1920" width="100%" scrolling="auto">
  <p>Your browser does not support iframes.</p>
</iframe>


    </div><!-- /.row -->

    
</div><!-- /.col-* -->
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-main-inner -->
                        </div><!-- /.content-admin-main -->

                    </div><!-- /.content-admin-wrapper -->
                </div><!-- /.content-admin -->
            </div><!-- /.wrapper-admin -->
        </div><!-- /.outer-admin -->
    </div><!-- /.main -->
    
    
</div><!-- /.page-wrapper -->

</body>

<!-- Mirrored from preview.byaviators.com/template/superlist/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:37 GMT -->
</html>
<?php
}
else{
header("Location:index.php");
}
?>

