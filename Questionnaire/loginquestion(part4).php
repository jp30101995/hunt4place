<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Questionnaire</title>

	<link rel="stylesheet" href="css/font.css">
	<meta name="csrf-param" content="_csrf">
<link href="css/all-1446562932.css" rel="stylesheet">






<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/jquery.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



<!--     .html    -->



</head>
<body>
















	<div class="container">
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
        <form id="wizard_example_5" action="updatePersonality.php" method="post">
  <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Describe you(Select Multiple what you like)</legend>
        <label for="q4op1">Foodie</label>
        <input type="checkbox" name="q4op1" id="q4op1" value="q4op1">
        <label for="q4op2">Artist</label>
        <input type="checkbox" name="q4op2" id="q4op2" value="q4op2">
        <label for="q4op3">Shopaholic</label>
        <input type="checkbox" name="q4op3" id="q4op3" value="q4op3">
        <label for="q4op4">Gamer</label>
        <input type="checkbox" name="q4op4" id="q4op4" value="q4op4">
        <label for="q4op5">Health Conscious(fitness freak)</label>
        <input type="checkbox" name="q4op5" id="q4op5" value="q4op5">
        <label for="q4op6">Social Worker/donor</label>
        <input type="checkbox" name="q4op6" id="q4op6" value="q4op6">
        <label for="q4op7">Movie Buff</label>
        <input type="checkbox" name="q4op7" id="q4op7" value="q4op7">
        <label for="q4op8">Natural Lover</label>
        <input type="checkbox" name="q4op8" id="q4op8" value="q4op8">
        <label for="q4op9">Entertainer</label>
        <input type="checkbox" name="q4op9" id="q4op9" value="q4op9">
        <label for="q4op10">Travelor</label>
        <input type="checkbox" name="q4op10" id="q4op10" value="q4op10">
        <label for="q4op11">Adventurer</label>
        <input type="checkbox" name="q4op11" id="q4op11" value="q4op11">
        <label for="q4op12">Music Lover</label>
        <input type="checkbox" name="q4op12" id="q4op12" value="q4op12">
        <label for="q4op13">Book Lover</label>
        <input type="checkbox" name="q4op13" id="q4op13" value="q4op13">
        <label for="q4op14">Swimmer</label>
        <input type="checkbox" name="q4op14" id="q4op14" value="q4op14">
        <label for="q4op15">Rider</label>
        <input type="checkbox" name="q4op15" id="q4op15" value="q4op15">
		
  </fieldset>
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Sports you like</legend>
        <label for="q6op1">Cricket</label>
        <input type="checkbox" name="q6op1" id="q6op1" value="q6op1">
        <label for="q6op2">Football</label>
        <input type="checkbox" name="q6op2" id="q6op2" value="q6op2">
        <label for="q6op3">Basketball</label>
        <input type="checkbox" name="q6op3" id="q6op3" value="q6op3">
        <label for="q6op4">Kabaddi</label>
        <input type="checkbox" name="q6op4" id="q6op4" value="q6op4">
        <label for="q6op5">Hocky</label>
        <input type="checkbox" name="q6op5" id="q6op5" value="q6op5">
        <label for="q6op6">Tennis</label>
        <input type="checkbox" name="q6op6" id="q6op6" value="q6op6">
        <label for="q6op7">Badminton</label>
        <input type="checkbox" name="q6op7" id="q6op7" value="q6op7">
        <label for="q6op8">Athletes</label>
        <input type="checkbox" name="q6op8" id="q6op8" value="q6op8">
        <label for="q6op9">Table-tennis</label>
        <input type="checkbox" name="q6op9" id="q6op9" value="q6op9">
		
  </fieldset>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Movie genre you like(select multiple)</legend>
        <label for="q7op1">Action</label>
        <input type="checkbox" name="q7op1" id="q7op1" value="q7op1">
        <label for="q7op2">Thriller</label>
        <input type="checkbox" name="q7op2" id="q7op2" value="q7op2">
        <label for="q7op3">Drama</label>
        <input type="checkbox" name="q7op3" id="q7op3" value="q7op3">
        <label for="q7op4">Family</label>
        <input type="checkbox" name="q7op4" id="q7op4" value="q7op4">
        <label for="q7op5">Comedy</label>
        <input type="checkbox" name="q7op5" id="q7op5" value="q7op5">
        <label for="q7op6">Romance</label>
        <input type="checkbox" name="q7op6" id="q7op6" value="q7op6">
        <label for="q7op7">Horror</label>
        <input type="checkbox" name="q7op7" id="q7op7" value="q7op7">
        <label for="q7op8">Mystery</label>
        <input type="checkbox" name="q7op8" id="q7op8" value="q7op8">
        <label for="q7op9">Animation</label>
        <input type="checkbox" name="q7op9" id="q7op9" value="q7op9">
        <label for="q7op10">Biography</label>
        <input type="checkbox" name="q7op10" id="q7op10" value="q7op10">
        <label for="q7op11">Musical</label>
        <input type="checkbox" name="q7op11" id="q7op11" value="q7op11">
 </fieldset>
    <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Favourite Cuisine</legend>
        <label for="q8op1">SouthIndian</label>
        <input type="checkbox" name="q8op1" id="q8op1" value="q8op1">
        <label for="q8op2">NorthIndian</label>
        <input type="checkbox" name="q8op2" id="q8op2" value="q8op2">
        <label for="q8op3">Gujarati</label>
        <input type="checkbox" name="q8op3" id="q8op3" value="q8op3">
        <label for="q8op4">Fastfood</label>
        <input type="checkbox" name="q8op4" id="q8op4" value="q8op4">
        <label for="q8op5">Continental</label>
        <input type="checkbox" name="q8op5" id="q8op5" value="q8op5">
        <label for="q8op6">Desserts</label>
        <input type="checkbox" name="q8op6" id="q8op6" value="q8op6">
        <label for="q8op7">Bakery</label>
        <input type="checkbox" name="q8op7" id="q8op7" value="q8op7">
        <label for="q8op8">Italian</label>
        <input type="checkbox" name="q8op8" id="q8op8" value="q8op8">
        <label for="q8op9">Spanish</label>
        <input type="checkbox" name="q8op9" id="q8op9" value="q8op9">
        <label for="q8op10">Others</label>
        <input type="checkbox" name="q8op10" id="q8op10" value="q8op10">
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
