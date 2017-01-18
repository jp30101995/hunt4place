<html>
<head>
<title>Questionnaire</title>
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
</head>
<body>
<button class="button button5" onClick="index()">hunt4place</button>
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
            <fieldset data-role="controlgroup" data-type="horizontal">
            <legend>Place</legend>
          <label for="red">Red</label>
          <input type="checkbox" name="favcolor" id="red" value="red">
          <label for="green">Green</label>
          <input type="checkbox" name="favcolor" id="green" value="green">
          <label for="blue">Blue</label>
          <input type="checkbox" name="favcolor" id="blue" value="blue">		
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
                <button class="button button5"><img src="../assets/img/tmp/agent-2.png"></button>
                <button class="button button5"><img src="../assets/img/tmp/agent-2.png"></button>	
            </fieldset>

        </form>
