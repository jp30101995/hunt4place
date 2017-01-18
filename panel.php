<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="jquery.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
$(document).ready2(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #panel2 , #flip, #flip2 {
    padding: 5px;
    text-align: center;
    background-color:#C9F;
    border: solid 1px #c3c3c3;
}

#panel, #panel2 {
    padding: 50px;
    display: none;
}
</style>
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

</head>
<body>

<div id="flip">
<input type="button" class="button button5" onClick="ready()" value="cuisine">
</div>
<div id="flip2">
<input type="button" onClick="ready2()" value="cuisine2">
</div>
<div id="panel">
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
</fieldset>
  

</div>
<div id="panel2">
  <fieldset data-role="controlgroup" data-type="horizontal">
      <legend>Time of Day</legend>
        <label for="Morning"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="morning" id="Morning" value="Morning">
        <label for="Afternoon"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="afternoon" id="Afternoon" value="Afternoon">
        <label for="evening"><img src="../assets/img/tmp/agent-2.png" width="200" height="200"></label>
        <input type="checkbox" name="evening" id="evening" value="evening">
  </fieldset>
  

</div>

</body>
</html>