<!DOCTYPE html>
<?php
if(isset($_COOKIE['hunt4place_user'])){
	header("Location : dashboard.php");
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
  height: 300px;
  width: 300px;
 
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
	</style>

</head>


<body>

<div class="page-wrapper">
    
    <header class="header">
    <div class="header-wrapper">
    <br><br><br>
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="Logo" height="50" width="50">
                        <span>Hunt4place</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">

                    <div class="header-bottom">

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li >
        <a href="index.php">Home <i></i></a>
    </li>
    <li >
        <a href="Questionnaire/Hotel.php">Hotel<i></i></a>
    </li>
    <li >
        <a href="Questionnaire/Entertainment.php">Entertainment<i></i></a>
    </li>
    <li >
        <a href="login(part1).php">Register<i></i></a>
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




    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-150">
    <div class="hero-image">
    <br><br><br><br>
    <div class="hero-image-inner" style="background-image: url('assets/img/tmp/slider-large-3.jpg');">
        <div class="hero-image-content">
            <div class="container">
                <p>Create your own directory website by using Superlist template <br> incorporating all features of modern directory website.</p>

                <a href="listing-submit.html" ><img src="assets/img/tmp/agent-2.png" width="140" height="140"></a>
                <a href="listing-submit.html" ><img src="assets/img/tmp/agent-2.png" width="140" height="140"></a>
                <a href="listing-submit.html" ><img src="assets/img/tmp/agent-2.png" width="140" height="140"></a>
                
            </div><!-- /.container -->
        </div><!-- /.hero-image-content -->

        <div class="hero-image-form-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8 col-lg-4 col-lg-offset-7">
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.hero-image-form-wrapper -->
    </div><!-- /.hero-image-inner -->
</div><!-- /.hero-image -->

</div>











<div class="container">
    <div class="block background-white fullwidth pt0 pb0">

    </div>





    <div class="block background-black-light fullwidth">
        <div class="row">
    <div class="col-sm-4">
        <div class="box" >
        	<div class="grow img">      
                   <a href="Questionnaire/Hotel.php"> <img id="hotelIcon" onKeyUp="increase()" src="assets/img/tmp/agent-2.png" alt="Hotel" width="300" height="300"></a>
			</div>	

        </div>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
        <div class="box">
        	<div class="grow img">      
                   <a href="Questionnaire/Hotel.php"> <img id="hotelIcon" onKeyUp="increase()" src="assets/img/tmp/agent-2.png" alt="Hotel" width="300" height="300"></a>
			</div>	
        </div>

    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
        <div class="box">
        	<div class="grow img">      
                   <a href="Questionnaire/Hotel.php"> <img id="hotelIcon" onKeyUp="increase()" src="assets/img/tmp/agent-2.png" alt="Hotel" width="300" height="300"></a>
			</div>	
        </div>
    </div><!-- /.col-sm-4 -->

    </div><!-- /.row -->

    </div><!-- /.block -->










    <div class="page-header">
    <h1>Most Recent Places &amp; Events</h1>
    <p>List of most recent interesting places and events in our directory submitted <br>by our users. Check whats going on in the city now.</p>
</div><!-- /.page-header -->





















<div class="cards-simple-wrapper">
    <div class="row">
        

        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-2.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Tasty Brazil Coffee</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Coffee</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-3.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Healthy Breakfast</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Food</div>
                        
                            <div class="card-simple-price">$12 / person</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-4.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Restaurant</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-5.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Boat Trip</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Vacation</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-6.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Italian Restaurant</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Restaurant</div>
                        
                            <div class="card-simple-price">$28 / person</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-7.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Best Brazil Coffee</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Pub</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-8.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Retro Shop</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Shop</div>
                        
                            <div class="card-simple-price">$3 / cup</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-9.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Wine Tasting</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Event</div>
                        
                            <div class="card-simple-price">$13 / ticket</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
    </div><!-- /.row -->
</div><!-- /.cards-simple-wrapper -->
    

<br><br>







</div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

    <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Hunt4place</h2>

                    <p>Hunting is illegal in our country, but not if you do it with us. Hunt4place
is a virtual place that helps you hunt for real places. Hunting is so easy
NOW!</p>
<p>
Don’t you often waste most of your time deciding place for an evening
outing? You will unless you aren’t human!</p>
<p align="center">Watch or shop,</p>
<p align="center">Eat or meet;</p>
<p align="center">Choices are many,</p>
<p align="center">And all of us try to be canny!!</p>
<p>It isn’t an easy task to come down to limited number of choices. Most of
us are struck in a dilemma, when we decide to try something new. Each
person is unique. What may be luring to one, may not be reasonable to
other. There are infinite options and most of us don’t know where to
start.<p></p> Our recommender engine works to close down your alternatives so
that you keep on creating memories and leave your next hunt4place to
us.</p>
<p align="center" style="font-size:14px"><b>Hunt for places of food, entertainment, travel and leisure
in your city.</b></p>
<p>Make memories, leave decisions for us. Welcome to hunt4place.in!</p>
<p align="center" style="font-size:18px"><b>HUNTING IS LEGAL HERE!!</b></p>


                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Our Story</h2>

                    <p>While on a Himalayan mountaineering camp, we got separated
from the group. We lost our way. There was no way of
contacting the base camp. We were suddenly met by the fear
of man-eaters. We kept walking, trying to find a way out.
After miles of walking down the hill, we found a hutment. We
knocked at the door to meet a huge brown-bearded guy. He
looked enormous and frightening at first. His words,”Youh
boyz outta ‘ere hunting?” was friendly.</p><p>He offered each of us
a drink. Later, he helped us locate our base camps. We found
out on our way back that he was a hunter and knew the entire
jungle. When he left us at the base camp, we offered him
some money. He said, “ever lost ‘ur way, remember this
hunter!”</p><p align="center" style="font-size:16px"><b>We created this digital hunter to help people similarly. People
can hunt 4 places here.</b></p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Like Us On</h2>

                    <ul class="social-links nav nav-pills">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul><!-- /.header-nav-social -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

</footer><!-- /.footer -->

</div><!-- /.page-wrapper -->

<script>
function goToRegister(){
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
