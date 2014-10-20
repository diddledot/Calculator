<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carpet Calculator</title>
<style type="text/css">
.carpet-choice > input{ /* HIDE RADIO */
  visibility: hidden;
  position: absolute;
}
.carpet-choice > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
.carpet-choice > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}
</style>
</head>

<body>
<h1>Carpet Calculator</h1>

<form id="multiPhase" onSubmit="return false">
<h3>Choose Carpet:</h3>
  <div class="carpet-choice">
    <label for="brown">Brown Carpet $2.99</label>
    <input type="radio" name="brown" value="2.99" />
    <img src="brown.jpg" alt=""/>
  </div>
  <div class="carpet-choice">
  <label for="darkgrey">Dark Grey Carpet $3.99</label>
    <input type="radio" name="darkgrey" value="3.99" />
    <img src="darkgrey.jpg" alt=""/>
  </div>
  <div class="carpet-choice">
    <label for="grey">Light Grey Carpet $1.99</label>
    <input type="radio" name="grey" value="1.99" />
    <img src="grey.jpg" alt=""/>
  </div>
  <div class="carpet-choice">
    <label for="purple">Purple Carpet $4.99</label>
    <input type="radio" name="purple" value="4.99" />
    <img src="purple.jpg" alt=""/>
  </div>
  <div class="carpet-choice">
   <label for="red">Red Carpet $3.99</label>
    <input type="radio" name="red" value="3.99" />
    <img src="red.jpg" alt=""/>
  </div>
  <div class="carpet-choice">
    <label for="white">White Carpet $2.50</label>
    <input type="radio" name="white" value="2.50" />
    <img src="white.jpg" alt=""/>
  </div>
       
<label for="rooms">How many rooms will be carpeted?</label>
<input id="rooms" name="rooms" type="number" value="1" min="1" max="10"/><br/>
  
<label for="stairs">Carpeting a stairway?</label>
<select id="stairs" name="stairs">
  <option value="No">No</option>
  <option value="Yes">Yes</option>
</select><br/>          
<input type="submit" name="submit1" value="Continue">
</form>   

<?php
 
?>   


</body>
</html>
