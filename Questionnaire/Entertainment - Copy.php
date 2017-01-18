<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Questionnaire</title>
	<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="ZmtKY1dSSnchGzsxOQg4IxcGEzQDCHwWXwEPUxUbEgQEXTgWLjwYKA==">
<link href="css/all-1446562932.css" rel="stylesheet">






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
<div class="site-index">


	<div class="body-content">
        
<div class="row">
    <div class="col-md-12">
        <h2>Too much steps</h2>
        <form id="wizard_example_5" action="#">
  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Types of Hotel:</legend>
          <label for="Veg"><img src="img/download.png"></label>&nbsp;&nbsp;
          <input type="checkbox" name="typesofhotel" id="Veg" value="Veg">
          <label for="Non-Veg"><img src="img/download (1).png"></label>
          <input type="checkbox" name="typesofhotel" id="Non-Veg" value="Non-Veg">
          <label for="Eggetarian"><img src="img/download (2).png"></label>
          <input type="checkbox" name="typesofhotel" id="Eggetarian" value="Eggetarian">
  </fieldset>
             <fieldset>
                <legend>Type of Food</legend>
					
                     <select class="form-control" name="Time">
                          <option value="1">Maharaja</option>
                          <option value="2">Economy</option>
                          <option value="3">Essential</option>
                     </select>
                    
            </fieldset>
           <fieldset>
                <legend>Price Range</legend>
                     <select class="form-control" name="Time">
                          <option value="1">Maharaja</option>
                          <option value="2">Economy</option>
                          <option value="3">Essential</option>
                     </select>

            </fieldset>
            <fieldset>
                <legend>Cuisine</legend>
                	<input type="checkbox" name="cuisine">South indias<br>
					<input type="checkbox" name="cuisine">South indias
            </fieldset>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <legend>Place</legend>
                     <select class="form-control" name="Time">
                          <option value="1">Maharaja</option>
                          <option value="2">Economy</option>
                          <option value="3">Essential</option>
                     </select>
    		</fieldset>
            <fieldset data-role="controlgroup" data-type="horizontal">
          <label for="red">Red</label>
          <input type="checkbox" name="favcolor" id="red" value="red">
          <label for="green">Green</label>
          <input type="checkbox" name="favcolor" id="green" value="green">
          <label for="blue">Blue</label>
          <input type="checkbox" name="favcolor" id="blue" value="blue">		
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
