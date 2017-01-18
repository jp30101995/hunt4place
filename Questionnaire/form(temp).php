<html>
<head>
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
</head>
<body>

<div data-role="page"  id="pageone" data-theme="a">

  <div data-role="header">
    <h1>HUNT YOUR FOOD</h1>
  </div>

  <button class="button button5" value="hunt4place" name="hunt4place" onClick="index()">hunt4place</button>
  <br><br><br>
<form action="getHotel.php" method="post">
  <div class="ui-field-contain">

  <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Time of Day:</legend>
        <label for="Morning"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="morning" id="Morning" value="Morning">
        <label for="Afternoon"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="afternoon" id="Afternoon" value="Afternoon">
        <label for="evening"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="evening" id="evening" value="evening">
  </fieldset>
  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Types of Hotel:</legend>
          <label for="Veg"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
          <input type="checkbox" name="veg" id="Veg" value="Veg">
          <label for="Non-Veg"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
          <input type="checkbox" name="nonveg" id="Non-Veg" value="Non-Veg">
          <label for="Eggetarian"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
          <input type="checkbox" name="egg" id="Eggetarian" value="Eggetarian">
  </fieldset>
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Price Range:</legend>
        <label for="maharaja"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="radio" name="prange" id="maharaja" value="maharaja">
        <label for="Affordable"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="radio" name="prange" id="Affordable" value="Affordable">
        <label for="Economy"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="radio" name="prange" id="Economy" value="Economy">
        <label for="Essential"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="radio" name="prange" id="Essential" value="Essential">
  </fieldset>
  <br><br><br><br>
  <div id="cuisine1">
  <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Cuisine:Priority</legend>
        <label for="southindian">South Indian</label>
        <input type="radio" name="cuisine" id="southindian" value="southindian">
        <label for="seafood">sea food</label>
        <input type="radio" name="cuisine" id="seafood" value="seafood">
        <label for="northindian">north indian</label>
        <input type="radio" name="cuisine" id="northindian" value="northindian">
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
  </div><br><br>
  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Cusine:Priority 2</legend>
        <label for="southindian2">South Indian</label>
        <input type="radio" name="cuisine2" id="southindian2" value="southindian2">
        <label for="seafood2">sea food</label>
        <input type="radio" name="cuisine2" id="seafood2" value="seafood2">
        <label for="northindian2">north indian</label>
        <input type="radio" name="cuisine2" id="northindian2" value="northindian2">
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
        <label for="northindian3">north indian</label>
        <input type="radio" name="cuisine3" id="northindian3" value="northindian3">
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

</div>
  <input type="submit" value="submit">
  </form>    
  

            

  
</div>
<script>
function index(){
	window.location.assign("../index.php");
}
</script>
</body>
</html>
