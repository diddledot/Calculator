<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carpet Calculator</title>
<style type="text/css">
.carpet-choice > input{ /* HIDE RADIO */

}
.carpet-choice > label{ /* LABELS */
color: white;
}
.carpet-choice input[type=radio] {
	visibility: hidden;
}
.carpet-choice > input + img{ /* IMAGE STYLES */
cursor:pointer;
border:3px solid transparent;
}
.carpet-choice > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
border:2px solid #f00;
}
.carpet-choice input[type="radio"]:checked + label img {
border: 3px solid red;
}
</style>
</head>
<body>
<h1>Carpet Calculator</h1>
<form id="multiPhase" onSubmit="return false">
	<h3>Choose Carpet:</h3>
	<div class="carpet-choice">
		<input id="brown" type="radio" name="carpet" value="2.99" />
		<label for="brown">
			Brown Carpet $2.99
			<img src="brown.jpg" alt=""/>
		</label>
	</div>
	<div class="carpet-choice">
		<input id="darkgrey" type="radio" name="carpet" value="3.99" />
		<label for="darkgrey">
			Dark Grey Carpet $3.99
			<img src="darkgrey.jpg" alt=""/>
		</label>	
	</div>	
	<div class="carpet-choice">
		<input id="grey" type="radio" name="carpet" value="1.99" />
		<label for="grey">
			Light Grey Carpet $1.99
			<img src="grey.jpg" alt=""/>
		</label>	
	</div>
	<div class="carpet-choice">
		<input id="purple" type="radio" name="carpet" value="4.99" />
		<label for="purple">
			Purple Carpet $4.99
			<img src="purple.jpg" alt=""/>
		</label>
	</div>
	<div class="carpet-choice">
		<input id="red" type="radio" name="carpet" value="3.99" />
		<label for="red">
			Red Carpet $3.99
			<img src="red.jpg" alt=""/>
		</label>
	</div>
	<div class="carpet-choice">
		<input id="white" type="radio" name="carpet" value="2.50" />
		<label for="white">
			White Carpet $2.50
			<img src="white.jpg" alt=""/>
		</label>
	</div>
	
	<label for="rooms">How many rooms will be carpeted?</label>
	<input id="rooms" name="rooms" type="number" value="1" min="1" max="10"/><br/>
	<label for="stairs">Carpeting a stairway?</label>
	<select id="stairs" name="stairs">
		<option>No</option>
		<option>Yes</option>
	</select><br/>
	<input type="submit" name="submit1" value="Continue">
</form>
<?php
if(isset($_POST['submit1'])){
  $carpet = stripslashes($_POST['carpet']);
  if($_POST['stairs'] == 'Yes'){
  }
    
} 
?>
</body>
</html>
