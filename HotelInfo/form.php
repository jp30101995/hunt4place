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
</head>
<body>

<div data-role="page"  id="pageone" data-theme="b">
<div data-role="panel" id="myPanel" data-theme="b"> 
    <h2>Panel Header</h2>
    <p>I am a themed panel!</p>
    <p> You can close me by clicking outside of me, pressing the Esc key or by swiping.</p>
  </div> 
  <div data-role="header">
    <h1>HUNT YOUR FOOD</h1>
  </div>
  <br><br><br>
  <div class="ui-field-contain">
  <fieldset data-role="controlgroup">
      <legend>Time of Day:</legend>
        <label for="Morning">Morning</label>
        <input type="radio" name="timeofday" id="Morning" value="Morning">
        <label for="Afternoon">Afternoon</label>
        <input type="radio" name="timeofday" id="Afternoon" value="Afternoon">
        <label for="Night">Night</label>
        <input type="radio" name="timeofday" id="Night" value="Night">
  </fieldset>
  <br><br><br>
  </div>
  <div class="ui-field-contain">
  <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Types of Hotel:</legend>
          <label for="Veg"><img src="img/team-2.png"></label>
          <input type="checkbox" name="typesofhotel" id="Veg" value="Veg">
          <label for="Non-Veg"><img src="img/team-1.png"></label>
          <input type="checkbox" name="typesofhotel" id="Non-Veg" value="Non-Veg">
          <label for="Eggetarian"><img src="img/team-1.png"></label>
          <input type="checkbox" name="typesofhotel" id="Eggetarian" value="Eggetarian">
  </fieldset>
  <br><br><br>
  </div>
  <div class="ui-field-contain">
    <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Price Range:</legend>
        <label for="maharaja">Maharaja</label>
        <input type="radio" name="prange" id="maharaja" value="maharaja">
        <label for="Affordable">Affordable</label>
        <input type="radio" name="prange" id="Affordable" value="Affordable">
        <label for="Economy">Economy</label>
        <input type="radio" name="prange" id="Economy" value="Economy">
        <label for="Essential">Essential</label>
        <input type="radio" name="prange" id="Essential" value="Essential">
  </fieldset>
  </div>
  <div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-b ui-btn-inline ui-corner-all">Info about Price Range</a>
    <div data-role="popup" id="myPopup" class="ui-content" data-theme="b">
      <a href="#" data-rel="back" class="ui-btn ui-btn-a ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
      <p><b>Tip:</b> Prize Range about .</p>
    </div>
  </div>



  <div data-role="main" class="ui-content">
      <label for="points">Age:</label>
      <input type="range" name="points" data-popup-enabled="true" data-highlight="true" id="points" value="30" min="0" max="100">
  </div>
  <div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-b ui-btn-inline ui-corner-all">Info about age</a>
    <div data-role="popup" id="myPopup" class="ui-content" data-theme="b">
      <a href="#" data-rel="back" class="ui-btn ui-btn-a ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
      <p><b>Tip:</b> Age of eldest person of group is recommanded for best hunt .</p>
    </div>
  </div>


  <fieldset class="ui-field-contain">
        <label for="ppl">People to go with:</label>
        <select name="ppltogowith" id="ppltogowith" data-native-menu="false">
          <option value="fam">Family</option>
          <option value="fri">Friends</option>
          <option value="off">Office Meeting</option>
          <option value="gir">Girlfriend</option>
        </select>
  </fieldset>
  <fieldset class="ui-field-contain">
        <label for="pur">Purpose:</label>
        <select name="purpose" id="purpose" data-native-menu="false">
          <option value="for">Formal Meets</option>
          <option value="reu">Reunions</option>
          <option value="fam">Family Get to Gather</option>
          <option value="kit">Kitty Parties</option>
          <option value="han">Hangout</option>
          <option value="dat">Date</option>
          <option value="can">Candlelight Dinner</option>
          <option value="din">Dinner with DJ</option>
          <option value="sem">Seminars</option>
        </select>
  </fieldset>
      
      
  

            

  
</div>
</body>
</html>
