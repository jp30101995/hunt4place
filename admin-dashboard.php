<!DOCTYPE html>
<?php
session_start();
include 'connect.php';
if(!$_SESSION["login"]){
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
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<style>
/* Custom indentations are needed because the length of custom labels differs from
   the length of the standard labels */
.custom-size-flipswitch.ui-flipswitch .ui-btn.ui-flipswitch-on {
    text-indent: -4em;
}
.custom-size-flipswitch.ui-flipswitch .ui-flipswitch-off {
    text-indent: 2em;
}
/* Custom widths are needed because the length of custom labels differs from
   the length of the standard labels */
.custom-size-flipswitch.ui-flipswitch {
    width: 8.875em;
}
.custom-size-flipswitch.ui-flipswitch.ui-flipswitch-active {
    padding-left: 7em;
    width: 1.875em;
}
</style>


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

            <span class="header-nav-user-name"><?php //echo "Hello  ".$_SESSION["name"] ?>Jimmy</span> <i class="fa fa-chevron-down"></i>

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
                <h1>Dashboard</h1>

                <div class="display-inline-block">
                </div>
            </div><!-- /.header-statusbar-left -->

        </div><!-- /.header-statusbar-inner -->
    </div><!-- /.header-statusbar -->
</header><!-- /.header -->




    <div class="main">
        <div class="outer-admin">
            <div class="wrapper-admin">

                <div class="sidebar-secondary-admin">
                    <ul>
                        <li>
                            <a href="admin-dashboard.html">
                                <span class="icon"><i class="fa fa-tachometer"></i></span>
                                <span class="title">Recommendations</span>
                                <span class="subtitle">Find your Hotels</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-forms.html">
                                <span class="icon"><i class="fa fa-i-cursor"></i></span>
                                <span class="title">Hotel </span>
                                <span class="subtitle">View further hunting for Hotels</span>
                            </a>
                        </li>

                        <li >
                            <a href="admin-tables.html">
                                <span class="icon"><i class="fa fa-table"></i></span>
                                <span class="title">Entertainment</span>
                                <span class="subtitle">further hunt for entertainment</span>
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
        <div class="col-sm-12">
            <div class="message">
                <h1>View your recommandations</h1>

            </div><!-- /.message -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
    

<form id="form1" action="setRegisterPart1.php" method="post">
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Price Range</legend>
        <label for="maharaja"><img src="" width="200" height="200"></label>
        <input type="checkbox" name="maharaja" id="maharaja" value="maharaja">
        <label for="Range2"><img src="" width="200" height="200"></label>
        <input type="checkbox" name="Range2" id="Range2" value="Range2">
        <label for="Affordable"><img src="" width="200" height="200"></label>
        <input type="checkbox" name="Affordable" id="Affordable" value="Affordable">
        <label for="Economy"><img src="" width="200" height="200"></label>
        <input type="checkbox" name="Economy" id="Economy" value="Economy">
        <label for="Essential"><img src="" width="200" height="200"></label>
        <input type="checkbox" name="Essential" id="Essential" value="Essential">
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Hotel Preference</legend>
          <label for="Veg"><img src="" width="200" height="200"></label>
          <input type="checkbox" name="veg" id="Veg" value="Veg">
          <label for="Non-Veg"><img src="" width="200" height="200"></label>
          <input type="checkbox" name="nonveg" id="Non-Veg" value="Non-Veg">
          <label for="Eggetarian"><img src="" width="200" height="200"></label>
          <input type="checkbox" name="egg" id="Eggetarian" value="Eggetarian">
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Cuisine:Priority 1</legend>
        <label for="southindian">South Indian</label>
        <input type="radio" name="cuisine" id="southindian" value="southindian">
        <label for="seafood">sea food</label>
        <input type="radio" name="cuisine" id="seafood" value="seafood">
        <label for="mughlai">Mughlai</label>
        <input type="radio" name="cuisine" id="mughlai" value="mughlai">
        <label for="asian">Asian</label>
        <input type="radio" name="cuisine" id="asian" value="asian">
        <label for="italian">Italian</label>
        <input type="radio" name="cuisine" id="italian" value="italian">
        <label for="spanish">Spanish</label>
        <input type="radio" name="cuisine" id="spanish" value="spanish">
        <label for="mediterranean">Mediterranean</label>
        <input type="radio" name="cuisine" id="mediterranean" value="mediterranean">
        <label for="mexicon">Mexican</label>
        <input type="radio" name="cuisine" id="mexicon" value="mexicon">
        <label for="thai">Thai</label>
        <input type="radio" name="cuisine" id="thai" value="thai">
        <label for="continental">Continental</label>
        <input type="radio" name="cuisine" id="continental" value="continental">
        <label for="fastfood">Fastfood</label>
        <input type="radio" name="cuisine" id="fastfood" value="fastfood">
        <label for="gujarati">Gujarati</label>
        <input type="radio" name="cuisine" id="gujarati" value="gujarati">
        <label for="lucknowi">Lucknowi</label>
        <input type="radio" name="cuisine" id="lucknowi" value="lucknowi">
        <label for="rajasthani">Rajasthani</label>
        <input type="radio" name="cuisine" id="rajasthani" value="rajasthani">
        <label for="dessert">Dessert</label>
        <input type="radio" name="cuisine" id="dessert" value="dessert">
        <label for="european">European</label>
        <input type="radio" name="cuisine" id="european" value="european">
        <label for="bakery">Bakery</label>
        <input type="radio" name="cuisine" id="bakery" value="bakery">
        <label for="american">American</label>
        <input type="radio" name="cuisine" id="american" value="american">
        <label for="japanese">Japanese</label>
        <input type="radio" name="cuisine" id="japanese" value="japanese">
		
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Cusine:Priority 2</legend>
        <label for="southindian2">South Indian</label>
        <input type="radio" name="cuisine2" id="southindian2" value="southindian2">
        <label for="seafood2">sea food</label>
        <input type="radio" name="cuisine2" id="seafood2" value="seafood2">
        <label for="mughlai2">Mughlai</label>
        <input type="radio" name="cuisine2" id="mughlai2" value="mughlai2">
        <label for="asian2">Asian</label>
        <input type="radio" name="cuisine2" id="asian2" value="asian2">
        <label for="italian2">Italian</label>
        <input type="radio" name="cuisine2" id="italian2" value="italian2">
        <label for="spanish2">Spanish</label>
        <input type="radio" name="cuisine2" id="spanish2" value="spanish2">
        <label for="mediterranean2">Mediterranean</label>
        <input type="radio" name="cuisine2" id="mediterranean2" value="mediterranean2">
        <label for="mexicon2">Mexican</label>
        <input type="radio" name="cuisine2" id="mexicon2" value="mexicon2">
        <label for="thai2">Thai</label>
        <input type="radio" name="cuisine2" id="thai2" value="thai2">
        <label for="continental2">Continental</label>
        <input type="radio" name="cuisine2" id="continental2" value="continental2">
        <label for="pizza2">Fastfood</label>
        <input type="radio" name="cuisine2" id="pizza2" value="pizza2">
        <label for="gujarati2">Gujarati</label>
        <input type="radio" name="cuisine2" id="gujarati2" value="gujarati2">
        <label for="lucknowi2">Lucknowi</label>
        <input type="radio" name="cuisine2" id="lucknowi2" value="lucknowi2">
        <label for="rajasthani2">Rajasthani</label>
        <input type="radio" name="cuisine2" id="rajasthani2" value="rajasthani2">
        <label for="dessert2">Dessert</label>
        <input type="radio" name="cuisine2" id="dessert2" value="dessert2">
        <label for="european2">European</label>
        <input type="radio" name="cuisine2" id="european2" value="european2">
        <label for="bakery2">Bakery</label>
        <input type="radio" name="cuisine2" id="bakery2" value="bakery2">
        <label for="american2">American</label>
        <input type="radio" name="cuisine2" id="american2" value="american2">
        <label for="japanese2">Japanese</label>
        <input type="radio" name="cuisine2" id="japanese2" value="japanese2">
 
  </fieldset>
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Cuisine:Priority 3</legend>
        <label for="southindian3">South Indian</label>
        <input type="radio" name="cuisine3" id="southindian3" value="southindian3">
        <label for="seafood3">sea food</label>
        <input type="radio" name="cuisine3" id="seafood3" value="seafood3">
        <label for="mughlai3">Mughlai</label>
        <input type="radio" name="cuisine3" id="mughlai3" value="mughlai3">
        <label for="asian3">Asian</label>
        <input type="radio" name="cuisine3" id="asian3" value="asian3">
        <label for="italian3">Italian</label>
        <input type="radio" name="cuisine3" id="italian3" value="italian3">
        <label for="spanish3">Spanish</label>
        <input type="radio" name="cuisine3" id="spanish3" value="spanish3">
        <label for="mediterranean3">Mediterranean</label>
        <input type="radio" name="cuisine3" id="mediterranean3" value="mediterranean3">
        <label for="mexicon3">Mexican</label>
        <input type="radio" name="cuisine3" id="mexicon3" value="mexicon3">
        <label for="thai3">Thai</label>
        <input type="radio" name="cuisine3" id="thai3" value="thai3">
        <label for="continental3">Continental</label>
        <input type="radio" name="cuisine3" id="continental3" value="continental3">
        <label for="fastfood3">Fastfood</label>
        <input type="radio" name="cuisine3" id="fastfood3" value="fastfood3">
        <label for="gujarati3">Gujarati</label>
        <input type="radio" name="cuisine3" id="gujarati3" value="gujarati3">
        <label for="lucknowi3">Lucknowi</label>
        <input type="radio" name="cuisine3" id="lucknowi3" value="lucknowi3">
        <label for="rajasthani3">Rajasthani</label>
        <input type="radio" name="cuisine3" id="rajasthani3" value="rajasthani3">
        <label for="dessert3">Dessert</label>
        <input type="radio" name="cuisine3" id="dessert3" value="dessert3">
        <label for="european3">European</label>
        <input type="radio" name="cuisine3" id="european3" value="european3">
        <label for="bakery3">Bakery</label>
        <input type="radio" name="cuisine3" id="bakery3" value="bakery3">
        <label for="american3">American</label>
        <input type="radio" name="cuisine3" id="american3" value="american3">
        <label for="japanese3">Japanese</label>
        <input type="radio" name="cuisine3" id="japanese3" value="japanese3">
		
  </fieldset>
  <br><br><br><br>
  <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Cuisine you don't like:Priority 1</legend>
        <label for="dsouthindian">South Indian</label>
        <input type="radio" name="dcuisine" id="dsouthindian" value="dsouthindian">
        <label for="dseafood">sea food</label>
        <input type="radio" name="dcuisine" id="dseafood" value="dseafood">
        <label for="dmughlai">Mughlai</label>
        <input type="radio" name="dcuisine" id="dmughlai" value="dmughlai">
        <label for="dasian">Asian</label>
        <input type="radio" name="dcuisine" id="dasian" value="dasian">
        <label for="ditalian">Italian</label>
        <input type="radio" name="dcuisine" id="ditalian" value="ditalian">
        <label for="dspanish">Spanish</label>
        <input type="radio" name="dcuisine" id="dspanish" value="dspanish">
        <label for="dmediterranean">Mediterranean</label>
        <input type="radio" name="dcuisine" id="dmediterranean" value="dmediterranean">
        <label for="dmexicon">Mexican</label>
        <input type="radio" name="dcuisine" id="dmexicon" value="dmexicon">
        <label for="dthai">Thai</label>
        <input type="radio" name="dcuisine" id="dthai" value="dthai">
        <label for="dcontinental">Continental</label>
        <input type="radio" name="dcuisine" id="dcontinental" value="dcontinental">
        <label for="dfastfood">Fastfood</label>
        <input type="radio" name="dcuisine" id="dfastfood" value="dfastfood">
        <label for="dgujarati">Gujarati</label>
        <input type="radio" name="dcuisine" id="dgujarati" value="dgujarati">
        <label for="dlucknowi">Lucknowi</label>
        <input type="radio" name="dcuisine" id="dlucknowi" value="dlucknowi">
        <label for="drajasthani">Rajasthani</label>
        <input type="radio" name="dcuisine" id="drajasthani" value="drajasthani">
        <label for="ddessert">Dessert</label>
        <input type="radio" name="dcuisine" id="ddessert" value="ddessert">
        <label for="deuropean">European</label>
        <input type="radio" name="dcuisine" id="deuropean" value="deuropean">
        <label for="dbakery">Bakery</label>
        <input type="radio" name="dcuisine" id="dbakery" value="dbakery">
        <label for="damerican">American</label>
        <input type="radio" name="dcuisine" id="damerican" value="damerican">
        <label for="djapanese">Japanese</label>
        <input type="radio" name="dcuisine" id="djapanese" value="djapanese">
		
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Cusine you don't like:Priority 2</legend>
        <label for="dsouthindian2">South Indian</label>
        <input type="radio" name="dcuisine2" id="dsouthindian2" value="dsouthindian2">
        <label for="dseafood2">sea food</label>
        <input type="radio" name="dcuisine2" id="dseafood2" value="dseafood2">
        <label for="dmughlai2">Mughlai</label>
        <input type="radio" name="dcuisine2" id="dmughlai2" value="dmughlai2">
        <label for="dasian2">Asian</label>
        <input type="radio" name="dcuisine2" id="dasian2" value="dasian2">
        <label for="ditalian2">Italian</label>
        <input type="radio" name="dcuisine2" id="ditalian2" value="ditalian2">
        <label for="dspanish2">Spanish</label>
        <input type="radio" name="dcuisine2" id="dspanish2" value="dspanish2">
        <label for="dmediterranean2">Mediterranean</label>
        <input type="radio" name="dcuisine2" id="dmediterranean2" value="dmediterranean2">
        <label for="dmexicon2">Mexican</label>
        <input type="radio" name="dcuisine2" id="dmexicon2" value="dmexicon2">
        <label for="dthai2">Thai</label>
        <input type="radio" name="dcuisine2" id="dthai2" value="dthai2">
        <label for="dcontinental2">Continental</label>
        <input type="radio" name="dcuisine2" id="dcontinental2" value="dcontinental2">
        <label for="dpizza2">Fastfood</label>
        <input type="radio" name="dcuisine2" id="dpizza2" value="dpizza2">
        <label for="dgujarati2">Gujarati</label>
        <input type="radio" name="dcuisine2" id="dgujarati2" value="dgujarati2">
        <label for="dlucknowi2">Lucknowi</label>
        <input type="radio" name="dcuisine2" id="dlucknowi2" value="dlucknowi2">
        <label for="drajasthani2">Rajasthani</label>
        <input type="radio" name="dcuisine2" id="drajasthani2" value="drajasthani2">
        <label for="ddessert2">Dessert</label>
        <input type="radio" name="dcuisine2" id="ddessert2" value="ddessert2">
        <label for="deuropean2">European</label>
        <input type="radio" name="dcuisine2" id="deuropean2" value="deuropean2">
        <label for="dbakery2">Bakery</label>
        <input type="radio" name="dcuisine2" id="dbakery2" value="dbakery2">
        <label for="damerican2">American</label>
        <input type="radio" name="dcuisine2" id="damerican2" value="damerican2">
        <label for="djapanese2">Japanese</label>
        <input type="radio" name="dcuisine2" id="djapanese2" value="djapanese2">
 
  </fieldset>
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Cuisine:Priority 3</legend>
        <label for="dsouthindian3">South Indian</label>
        <input type="radio" name="dcuisine3" id="dsouthindian3" value="dsouthindian3">
        <label for="dseafood3">sea food</label>
        <input type="radio" name="dcuisine3" id="dseafood3" value="dseafood3">
        <label for="dmughlai3">Mughlai</label>
        <input type="radio" name="dcuisine3" id="dmughlai3" value="dmughlai3">
        <label for="dasian3">Asian</label>
        <input type="radio" name="dcuisine3" id="dasian3" value="dasian3">
        <label for="ditalian3">Italian</label>
        <input type="radio" name="dcuisine3" id="ditalian3" value="ditalian3">
        <label for="dspanish3">Spanish</label>
        <input type="radio" name="dcuisine3" id="dspanish3" value="dspanish3">
        <label for="dmediterranean3">Mediterranean</label>
        <input type="radio" name="dcuisine3" id="dmediterranean3" value="dmediterranean3">
        <label for="dmexicon3">Mexican</label>
        <input type="radio" name="dcuisine3" id="dmexicon3" value="dmexicon3">
        <label for="dthai3">Thai</label>
        <input type="radio" name="dcuisine3" id="dthai3" value="dthai3">
        <label for="dcontinental3">Continental</label>
        <input type="radio" name="dcuisine3" id="dcontinental3" value="dcontinental3">
        <label for="dfastfood3">Fastfood</label>
        <input type="radio" name="dcuisine3" id="dfastfood3" value="dfastfood3">
        <label for="dgujarati3">Gujarati</label>
        <input type="radio" name="dcuisine3" id="dgujarati3" value="dgujarati3">
        <label for="dlucknowi3">Lucknowi</label>
        <input type="radio" name="dcuisine3" id="dlucknowi3" value="dlucknowi3">
        <label for="drajasthani3">Rajasthani</label>
        <input type="radio" name="dcuisine3" id="drajasthani3" value="drajasthani3">
        <label for="ddessert3">Dessert</label>
        <input type="radio" name="dcuisine3" id="ddessert3" value="ddessert3">
        <label for="deuropean3">European</label>
        <input type="radio" name="dcuisine3" id="deuropean3" value="deuropean3">
        <label for="dbakery3">Bakery</label>
        <input type="radio" name="dcuisine3" id="dbakery3" value="dbakery3">
        <label for="damerican3">American</label>
        <input type="radio" name="dcuisine3" id="damerican3" value="damerican3">
        <label for="djapanese3">Japanese</label>
        <input type="radio" name="dcuisine3" id="djapanese3" value="djapanese3">
		
  </fieldset>
  <br><br><br>
<input type="submit" value="Submit">  
</form>
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
