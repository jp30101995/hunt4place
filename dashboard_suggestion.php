<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/blog-standard-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
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

    <title>Suggestion</title>
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
    <h1>Events</h1>
</div><!-- /.page-title -->

<div class="posts">
 
<?php
include 'connect.php';
$result=mysqli_query($con,"select * from event order by Startdate DESC");

while($row=mysqli_fetch_assoc($result)){
$result2=mysqli_query($con,"select Name from login where Email='".$row["User_ID"]."'");
$row2=mysqli_fetch_assoc($result2);
echo "        <div class='post'>
            <div class='post-image'>
                <img src='assets/img/tmp/product-11.jpg' alt='".$row["Title"]."'>
                <a class='read-more' href='eventinfo.php?User_ID=".$row["User_ID"]."&Title=".$row["Title"]."'>View</a>
            </div><!-- /.post-image -->
            <div class='post-content'>
                <h2><a href='blog-detail.html'>".$row["Title"]."<a></h2>
                <p>".$row["Description"]."</p>
            </div><!-- /.post-content -->
            <div class='post-meta clearfix'>
                <div class='post-meta-author'>By "; echo $row2["Name"]; echo "</div><!-- /.post-meta-author -->
                <div class='post-meta-author'>Email: "; echo $row["Email"]; echo "</div><!-- /.post-meta-author -->
                <div class='post-meta-date'>".$row["Startdate"]."</div><!-- /.post-meta-date -->
                <!--div class='post-meta-categories'><i class='fa fa-tags'></i> <a href='blog-detail.html'>Restaurant</a></div--><!-- /.post-meta-categories -->
                <!--div class='post-meta-comments'><i class='fa fa-comments'></i> <a href='blog-detail.html'>3 comments</a></div--><!-- /.post-meta-comments -->
                <div class='post-meta-more'><a href='".$row["Website"]."' target='_blank'>Read More <i class='fa fa-chevron-right'></i></a></div><!-- /.post-meta-more -->
            </div><!-- /.post-meta -->
        </div><!-- /.post -->
";
}
?> 
    
    
</div><!-- /.posts -->




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

                            


                            <div class="widget">
    <h2 class="widgettitle">Categories</h2>

    <ul class="menu">
        <li><a href="catagory_suggestion.php?catagory=foodfest" target="_self">Food fest</a></li>
        <li><a href="catagory_suggestion.php?catagory=artexhibition">Art Exhibition</a></li>
        <li><a href="catagory_suggestion.php?catagory=golfevent">Golf Event</a></li>
        <li><a href="catagory_suggestion.php?catagory=themeparties">Theme Parties</a></li>
        <li><a href="catagory_suggestion.php?catagory=moviepromotion">Movie Promotion</a></li>
        <li><a href="catagory_suggestion.php?catagory=bookfair">Book Fair</a></li>
        <li><a href="catagory_suggestion.php?catagory=booklaunch">Book Launch</a></li>
        <li><a href="catagory_suggestion.php?catagory=blooddonation">Blood Donation</a></li>
        <li><a href="catagory_suggestion.php?catagory=fundraising">Fund Raising</a></li>
        <li><a href="catagory_suggestion.php?catagory=drama">Drama</a></li>
        <li><a href="catagory_suggestion.php?catagory=sale">Sale</a></li>
        <li><a href="catagory_suggestion.php?catagory=musicnight">Music Night</a></li>
        <li><a href="catagory_suggestion.php?catagory=oechestra">Orchestra</a></li>
        <li><a href="catagory_suggestion.php?catagory=tournament">Tournament</a></li>
        <li><a href="catagory_suggestion.php?catagory=matches">Match</a></li>
        <li><a href="catagory_suggestion.php?catagory=camp">Camp</a></li>
        <li><a href="catagory_suggestion.php?catagory=trip">Trip</a></li>
        <li><a href="catagory_suggestion.php?catagory=rally">Rally</a></li>
        <li><a href="catagory_suggestion.php?catagory=workshop">Workshop</a></li>
        <li><a href="catagory_suggestion.php?catagory=competition">Competition</a></li>
        <li><a href="catagory_suggestion.php?catagory=seminar">Seminar</a></li>
        <li><a href="catagory_suggestion.php?catagory=webinar">Webinar</a></li>
        <li><a href="catagory_suggestion.php?catagory=college">College</a></li>
    </ul><!-- /.menu -->
</div><!-- /.wifget -->


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

<!-- Mirrored from preview.byaviators.com/template/superlist/blog-standard-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 17:01:31 GMT -->
</html>
