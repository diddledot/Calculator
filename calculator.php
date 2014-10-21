<?php
$form = 0;
if(isset($_POST['submit1'])){
  
  // Get carpet value(price)
  $carpet = stripslashes($_POST['carpet']);
  $carpet = mysqli_real_escape_string($carpet);
  
  $rooms =  stripslashes($_POST['rooms']);
  $rooms = mysqli_real_escape_string($rooms);
  
  $stairs = stripslashes($_POST['stairs']);
  $stairs = mysqli_real_escape_string($stairs);
  
  $i = 0; 
  while($i < $rooms){
    $form .= "<label for=''>Room $i</label><input id='' name='' type='text'/><br/>";  
    
  }
  
  if($stairs == 'Yes'){
    $form .= "<label for=''>Width of stairway</label><input id='' name='' type='text'/><br/>";
  }      
} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carpet Calculator</title>
<style type="text/css">
.carpet-choice > label{ /* LABELS */
	color: black;
}

.carpet-choice input[type=radio] { /* Radio button styles */
	visibility: hidden;
	position: absolute;
}

.carpet-choice label img{ /* IMAGE STYLES */
	cursor:pointer;
	border:3px solid transparent;
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
  echo $form;
?>
</body>
</html>
