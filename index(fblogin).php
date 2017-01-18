<!DOCTYPE html>
<?php
if(!isset($_COOKIE["hunt4place_user"])){
	header("Location:dashboard.php");
}
?>

<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
<meta property="og:type" content="article" />
<meta property="og:title" content="When Great Minds Don’t Think Alike" />
<meta property="og:description" content="How much does culture influence creative thinking?" />
<meta property="og:image" content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
<meta http-equiv="http://www.facebook.com/dialog/send?
  app_id=779224635517410
  &amp;link=http%3A%2F%2Fwww.nytimes.com%2F2011%2F06%2F15%2Farts%2Fpeople-argue-just-to-win-scholars-assert.html
 &amp;redirect_uri=https%3A%2F%2Fwww.bancsabadell.com%2Fcs%2FSatellite%2FSabAtl%2F" />
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
  height: 200px;
  width: 200px;
 
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
    padding: 10px 32px;
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


	</style>

</head>


<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '779224635517410',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>
FB.ui({
  method: 'send',
  link: 'http%3A%2F%2Fwww.nytimes.com%2F2011%2F06%2F15%2Farts%2Fpeople-argue-just-to-win-scholars-assert.html',
});
</script>

<div class="page-wrapper">
    
    <header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index-2.html">
                        <img src="assets/img/logo.png" alt="Logo">
                        <span>Superlist</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-top">
                    <form id="loginform" method="post" action="login.php">
                        <div class="header-search">
							<button type="submit" class="button button1" >Login</button>
                        </div><!-- /.header-search -->
                        <br>
                        <div class="header-search">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div><!-- /.header-search -->
                        <div class="header-search">
                            <input type="text" name="email" class="form-control" placeholder="Emain-ID">
                        </div><!-- /.header-search -->
					</form>	
                    </div><!-- /.header-top -->

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
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
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
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '{your-app-id}',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->




            <div class="content">
                <div class="mt-150">
    <div class="hero-image">
    <div class="hero-image-inner" style="background-image: url(assets/img/background.jpg)">
        <div class="hero-image-content">
            <div class="container">
                <p>Create your own directory website by using Superlist template <br> incorporating all features of modern directory website.</p>
                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

				<div class="grow img">
                <a href="listing-submit.html" ><img onKeyUp="increase()" src="assets/img/tmp/agent-2.png" width="200" height="200"></a>
                <a href="listing-submit.html" ><img onKeyUp="increase()" src="assets/img/tmp/agent-2.png" width="200" height="200"></a>
                <a href="listing-submit.html" ><img onKeyUp="increase()" src="assets/img/tmp/agent-2.png" width="200" height="200"></a>
                </div>
            </div><!-- /.container -->
        </div><!-- /.hero-image-content -->

        <div class="hero-image-form-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-20 col-sm-offset-8 col-lg-4 col-lg-offset-7" >

                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.hero-image-form-wrapper -->
        
    </div><!-- /.hero-image-inner -->
</div><!-- /.hero-image -->

</div>












            </div><!-- /.content -->

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
function loginMe(){
	var email=document.getElementById(email);
	var password=document.getElementById(password);
	window.location.assign("loginMe.php");
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
