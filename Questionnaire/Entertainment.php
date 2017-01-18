<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Questionnaire</title>
<link rel="stylesheet" href="../jquery.css">

	<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="ZmtKY1dSSnchGzsxOQg4IxcGEzQDCHwWXwEPUxUbEgQEXTgWLjwYKA==">
<link href="css/all-1446562932.css" rel="stylesheet">






<meta name="viewport" content="width=device-width, initial-scale=1">
<!--link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"-->
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



<!--     .html    -->



</head>
<body>

<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	alignment-adjust:middle;
}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}
</style>














<button class="button button5" onClick="index()">hunt4place</button>

	<div class="container">
				<span id="theme_name" style="display: none;">circle</span>
<span id="trans_name" style="display: none;">slide</span>
<span id="rtl" style="display: none;">0</span>
<style>
    .theme-changer {
        position: fixed;
        z-index: 9999;
        top: 25px;;
        right: 0;;
    }
    .theme-changer .theme-inner {
        overflow: hidden;
    }
    .theme-changer .headtext {
        font-size: 14px;
        font-weight: 700;
        color: #959595;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 20px 5px 15px 0;
        text-align: center;;
        background: rgba(255,255,255,0.5);
        margin-top: 30px;
        border-radius: 10px;
    }
    .theme-changer .btn-group-vertical {
        margin: 0 auto;
        display: block;
        width: 82px;
    }
    .theme-changer .settings {
        position: absolute;
        left: -45px;
        background: rgba(255, 255, 255, 0.8);
        top: 40px;
        padding: 5px;
        border-radius: 100%;
        cursor: pointer;
    }
    @media all and (max-width: 992px) {
        .theme-changer {
            right: -110px;
        }
    }
</style>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
</style>

<div class="site-index">


	<div class="body-content">
        
<div class="row">
    <div class="col-md-12">
        <h2>Hunt your food</h2>
        <form id="wizard_example_5" action="getHotel.php" method="post">
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Price Range</legend>
        <label for="maharaja"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="maharaja" id="maharaja" value="maharaja">
        <label for="Range2"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="Range2" id="Range2" value="Range2">
        <label for="Affordable"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="Affordable" id="Affordable" value="Affordable">
        <label for="Economy"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="Economy" id="Economy" value="Economy">
        <label for="Essential"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="Essential" id="Essential" value="Essential">
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Time of Day</legend>
        <label for="Morning"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="morning" id="Morning" value="Morning">
        <label for="Afternoon"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="afternoon" id="Afternoon" value="Afternoon">
        <label for="evening"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="evening" id="evening" value="evening">
  </fieldset>
  
  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Types of Hotel</legend>
          <label for="Veg"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
          <input type="checkbox" name="veg" id="Veg" value="Veg">
          <label for="Non-Veg"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
          <input type="checkbox" name="nonveg" id="Non-Veg" value="Non-Veg">
          <label for="Eggetarian"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
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
  <br><br>
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
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Places : Priority 1</legend>
          <label for="COL 31">Racecource Road</label>
          <input type="radio" name="Places1" id="COL 31" value="COL 31">
          <label for="COL 32">Alkapuri</label>
          <input type="radio" name="Places1" id="COL 32" value="COL 32">
          <label for="COL 33">Fatehgunj</label>
          <input type="radio" name="Places1" id="COL 33" value="COL 33">
          <label for="COL 34">Karelibaug</label>
          <input type="radio" name="Places1" id="COL 34" value="COL 34">
          <label for="COL 35">Mandvi</label>
          <input type="radio" name="Places1" id="COL 35" value="COL 35">
          <label for="COL 36">OP Road</label>
          <input type="radio" name="Places1" id="COL 36" value="COL 36">
          <label for="COL 37">Subhanpura</label>
          <input type="radio" name="Places1" id="COL 37" value="COL 37">
          <label for="COL 38">Sayajigunj</label>
          <input type="radio" name="Places1" id="COL 38" value="COL 38">
          <label for="COL 39">Akota</label>
          <input type="radio" name="Places1" id="COL 39" value="COL 39">
          <label for="COL 40">Gotri</label>
          <input type="radio" name="Places1" id="COL 40" value="COL 40">
          <label for="COL 41">Manjalpur</label>
          <input type="radio" name="Places1" id="COL 41" value="COL 41">
          <label for="COL 42">Sama Savli Road</label>
          <input type="radio" name="Places1" id="COL 42" value="COL 42">
          <label for="COL 43">Nizampura</label>
          <input type="radio" name="Places1" id="COL 43" value="COL 43">
          <label for="COL 44">Gorwa</label>
          <input type="radio" name="Places1" id="COL 44" value="COL 44">
          <label for="COL 45">Ellorapark</label>
          <input type="radio" name="Places1" id="COL 45" value="COL 45">
          <label for="COL 46">VP Road</label>
          <input type="radio" name="Places1" id="COL 46" value="COL 46">
          <label for="COL 47">Vasna Road</label>
          <input type="radio" name="Places1" id="COL 47" value="COL 47">
          <label for="COL 48">Fatehpura</label>
          <input type="radio" name="Places1" id="COL 48" value="COL 48">
          <label for="COL 49">Panchvati</label>
          <input type="radio" name="Places1" id="COL 49" value="COL 49">
          <label for="COL 50">Waghodia Road</label>
          <input type="radio" name="Places1" id="COL 50" value="COL 50">
  </fieldset>
    <!--fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Places : Priority 1</legend>
          <label for="COL 31">Racecource Road</label>
          <input type="radio" name="Places1" id="COL 31" value="COL 31">
          <label for="COL 32">Alkapuri</label>
          <input type="radio" name="Places1" id="COL 32" value="COL 32">
          <label for="COL 33">Fatehgunj</label>
          <input type="radio" name="Places1" id="COL 33" value="COL 33">
          <label for="COL 34">Karelibaug</label>
          <input type="radio" name="Places1" id="COL 34" value="COL 34">
          <label for="COL 35">Mandvi</label>
          <input type="radio" name="Places1" id="COL 35" value="COL 35">
          <label for="COL 36">OP Road</label>
          <input type="radio" name="Places1" id="COL 36" value="COL 36">
          <label for="COL 37">Subhanpura</label>
          <input type="radio" name="Places1" id="COL 37" value="COL 37">
          <label for="COL 38">Sayajigunj</label>
          <input type="radio" name="Places1" id="COL 38" value="COL 38">
          <label for="COL 39">Akota</label>
          <input type="radio" name="Places1" id="COL 39" value="COL 39">
          <label for="COL 40">Gotri</label>
          <input type="radio" name="Places1" id="COL 40" value="COL 40">
          <label for="COL 41">Manjalpur</label>
          <input type="radio" name="Places1" id="COL 41" value="COL 41">
          <label for="COL 42">Sama Savli Road</label>
          <input type="radio" name="Places1" id="COL 42" value="COL 42">
          <label for="COL 43">Nizampura</label>
          <input type="radio" name="Places1" id="COL 43" value="COL 43">
          <label for="COL 44">Gorwa</label>
          <input type="radio" name="Places1" id="COL 44" value="COL 44">
          <label for="COL 45">Ellorapark</label>
          <input type="radio" name="Places1" id="COL 45" value="COL 45">
          <label for="COL 46">VP Road</label>
          <input type="radio" name="Places1" id="COL 46" value="COL 46">
          <label for="COL 47">Vasna Road</label>
          <input type="radio" name="Places1" id="COL 47" value="COL 47">
          <label for="COL 48">Fatehpura</label>
          <input type="radio" name="Places1" id="COL 48" value="COL 48">
          <label for="COL 49">Panchvati</label>
          <input type="radio" name="Places1" id="COL 49" value="COL 49">
          <label for="COL 50">Waghodia Road</label>
          <input type="radio" name="Places1" id="COL 50" value="COL 50">
  </fieldset>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Places : Priority 1</legend>
          <label for="COL 31">Racecource Road</label>
          <input type="radio" name="Places1" id="COL 31" value="COL 31">
          <label for="COL 32">Alkapuri</label>
          <input type="radio" name="Places1" id="COL 32" value="COL 32">
          <label for="COL 33">Fatehgunj</label>
          <input type="radio" name="Places1" id="COL 33" value="COL 33">
          <label for="COL 34">Karelibaug</label>
          <input type="radio" name="Places1" id="COL 34" value="COL 34">
          <label for="COL 35">Mandvi</label>
          <input type="radio" name="Places1" id="COL 35" value="COL 35">
          <label for="COL 36">OP Road</label>
          <input type="radio" name="Places1" id="COL 36" value="COL 36">
          <label for="COL 37">Subhanpura</label>
          <input type="radio" name="Places1" id="COL 37" value="COL 37">
          <label for="COL 38">Sayajigunj</label>
          <input type="radio" name="Places1" id="COL 38" value="COL 38">
          <label for="COL 39">Akota</label>
          <input type="radio" name="Places1" id="COL 39" value="COL 39">
          <label for="COL 40">Gotri</label>
          <input type="radio" name="Places1" id="COL 40" value="COL 40">
          <label for="COL 41">Manjalpur</label>
          <input type="radio" name="Places1" id="COL 41" value="COL 41">
          <label for="COL 42">Sama Savli Road</label>
          <input type="radio" name="Places1" id="COL 42" value="COL 42">
          <label for="COL 43">Nizampura</label>
          <input type="radio" name="Places1" id="COL 43" value="COL 43">
          <label for="COL 44">Gorwa</label>
          <input type="radio" name="Places1" id="COL 44" value="COL 44">
          <label for="COL 45">Ellorapark</label>
          <input type="radio" name="Places1" id="COL 45" value="COL 45">
          <label for="COL 46">VP Road</label>
          <input type="radio" name="Places1" id="COL 46" value="COL 46">
          <label for="COL 47">Vasna Road</label>
          <input type="radio" name="Places1" id="COL 47" value="COL 47">
          <label for="COL 48">Fatehpura</label>
          <input type="radio" name="Places1" id="COL 48" value="COL 48">
          <label for="COL 49">Panchvati</label>
          <input type="radio" name="Places1" id="COL 49" value="COL 49">
          <label for="COL 50">Waghodia Road</label>
          <input type="radio" name="Places1" id="COL 50" value="COL 50">
  </fieldset-->

  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Purpose and People</legend>
          <label for="COL 19">Family</label>
          <input type="radio" name="purpose" id="COL 19" value="COL 19">
          <label for="COL 20">Friends</label>
          <input type="radio" name="purpose" id="COL 20" value="COL 20">
          <label for="COL 21">Office-meetings</label>
          <input type="radio" name="purpose" id="COL 21" value="COL 21">
          <label for="COL 22">Girlfriend/Boyfriend</label>
          <input type="radio" name="purpose" id="COL 22" value="COL 22">
          <label for="COL 23">Formalmeet</label>
          <input type="radio" name="purpose" id="COL 23" value="COL 23">
          <label for="COL 24">Reunion</label>
          <input type="radio" name="purpose" id="COL 24" value="COL 24">
          <label for="COL 25">Family gettogather</label>
          <input type="radio" name="purpose" id="COL 25" value="COL 25">
          <label for="COL 26">Kitty Party</label>
          <input type="radio" name="purpose" id="COL 26" value="COL 26">
          <label for="COL 27">Hangout</label>
          <input type="radio" name="purpose" id="COL 27" value="COL 27">
          <label for="COL 28">Date</label>
          <input type="radio" name="purpose" id="COL 28" value="COL 28">
          <label for="COL 29">Candlelight Dinner</label>
          <input type="radio" name="purpose" id="COL 29" value="COL 29">
          <label for="COL 30">Seminar</label>
          <input type="radio" name="purpose" id="COL 30" value="COL 30">
  </fieldset>

        </form>
    </div>
</div>

        


        
</div>
	</div>



















<script>
function index(){
	window.location.assign("../index.php");
}
</script>





<script src="js/all-1446562932.js"></script>
<script src="assets/2c3c441f/js/bootstrap.js"></script></body>

<!-- Mirrored from ajoke.cz/wizard2/examples?t=circle&e=slide&r=0 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jan 2016 19:25:05 GMT -->
</html>
