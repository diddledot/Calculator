<?php
$form = "";
$results = "";
if(!isset($_POST['submit1'])){
  $form = "";
}
else{
  if(isset($_POST['carpet']) && isset($_POST['submit1'])){
  
    // Get carpet value(price)
    $carpet = stripslashes($_POST['carpet']); 
    $rooms =  stripslashes($_POST['rooms']);  
    $stairs = stripslashes($_POST['stairs']);
    
    // echo form
    $form .= "<tr><th></th><th colspan='2'>Width</th><th colspan='2'>Length</th></tr>";
    $form .= "<tr><th></th><th>Feet</th><th>Inches</th><th>Feet</th><th>Inches</th></tr>";
        
    $i = 1; 
    while($i < $rooms+1){ 
      $form .= "<tr>";     
      $form .= "<td><label>Space $i:</label></td>";
      $form .= "<td><input name='wf$i' type='number' value='10' min='1' max='40'/></td>"; // wf$i = width-feet#
      $form .= "<td><input name='wi$i' type='number' value='0' min='0' max='11'/></td>"; // wi$i = width-inches#
      $form .= "<td><input name='lf$i' type='number' value='10' min='1' max='40'/></td>"; // lf$i = length-feet#
      $form .= "<td><input name='li$i' type='number' value='0' min='0' max='11'/></td>"; // li$i = length-inches#
      $form .= "</tr>";  
      $i++;
    }
    
    if($stairs == 'Yes'){
      $form .= "<label for='widthStairs'>Width of stairway:</label><input id='widthStairs' name='widthStairs' type='text'/><br/>";
      $form .= "<label for='numberStairs'>Number of stairs:</label><input id='numberStairs' name='numberStairs' type='number' value='1' min='1' max='30'/><br/>";    
    } 
         
  }
  else{
   $form .= "<p>Please choose a carpet.</p>";  
  }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carpet Calculator</title>
<style type="text/css">

/* =============================RESET============================= */

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video{
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section{
	display: block;
}

/* ============================COMMON============================ */
body {
  font-family: Helvetica,Arial,sans-serif;
  background-color: #0F3982;
  font-size: 18px;
  
}

h1 {
  font-size: 52px;
  font-weight:bold;  
}
h2 {
  font-size: 34px;
  font-weight:bold;  
}
h3 {
  font-size: 24px;
  font-weight:bold;  
}

/* ============================LAYOUT============================ */
#logo1{
  text-align: center;
  color: #fff;  
} 

#logo2{
  text-align: center;
  color: #fff;  
  margin: 0px 0px 20px 0px; 
}

#bg{
  background: radial-gradient(#8CBACB, #0F3982 99%); /* Standard syntax */
  position: absolute;
  min-height: 100%; 
  width: 100%; 
}

#center-wrap{
  width: 960px;
  margin: 0px auto;
  position: relative;  
}

.column{
  width: 45%;
  display: inline-table; 
  background-color: #ddd;
  height: 450px;
  padding: 10px;
  margin: 10px;
  border-radius: 5px;  
}

#left-side{}
#right-side{}

table, th, td{
  border: 1px solid #bbb;
  width: 100%; 
}


/* =============================FORM============================= */

.carpet-choice{
  width: 130px;
  margin: 0px 5px 0px 5px;
  float: left;
}

.carpet-choice p{
  background-color: #333;
  font-size: 12px;
  color: #fff;
  position:absolute;
  width: 124px;
  margin: 4px 0px 0px 4px;
  padding: 2px 0px 2px 6px;
}

.carpet-choice input[type=radio]{ /* Radio button styles */
	visibility: hidden;
	position: absolute;
}

.carpet-choice label img{ /* IMAGE STYLES */
	cursor:pointer;
	border:4px solid transparent;
  width: 100%;
}

.carpet-choice input[type="radio"]:checked + label img{
	border: 4px solid #f00;
}

#select-carpet{
  
}

#select-rooms{
  clear: left; 
}
</style>
</head>
<body>
<div id="bg">
<div id="center-wrap">
  <h1 id="logo1">Flowe's</h1>
  <h2 id="logo2">Carpet Calculator</h2>
  
  <div id="left-side" class="column">    
    <form method="POST" action="carpet1.php">
      <div id="select-carpet">
      
        <h3>Choose Carpet:</h3><hr/>     
        <div class="carpet-choice">
          <p>Brown Carpet $3.99</p>
          <input id="brown" type="radio" name="carpet" value="2.99" />
          <label for="brown"><img src="brown.jpg" alt=""/></label>
        </div>      
        <div class="carpet-choice">
          <p>Dark Carpet $3.99</p>
          <input id="dark" type="radio" name="carpet" value="3.99" />
          <label for="dark"><img src="darkgrey.jpg" alt=""/></label>	
        </div>        
        <div class="carpet-choice">
          <p>Grey Carpet $1.99</p>
          <input id="grey" type="radio" name="carpet" value="1.99" />
          <label for="grey"><img src="grey.jpg" alt=""/></label>	
        </div>      
        <div class="carpet-choice">
          <p>Purple Carpet $4.99</p>
          <input id="purple" type="radio" name="carpet" value="4.99" />
          <label for="purple"><img src="purple.jpg" alt=""/></label>
        </div>      
        <div class="carpet-choice">
          <p>Red Carpet $3.99</p>
          <input id="red" type="radio" name="carpet" value="3.99" />
          <label for="red"><img src="red.jpg" alt=""/></label>
        </div>      
        <div class="carpet-choice">
          <p>White Carpet $2.50</p>
          <input id="white" type="radio" name="carpet" value="2.50" />
          <label for="white"><img src="white.jpg" alt=""/></label>
        </div>
        
      </div><!-- #select-carpet -->
      
      <div id="select-rooms">
        <hr/>
        <label for="rooms">How many rooms will be carpeted?</label>
        <input id="rooms" name="rooms" type="number" value="1" min="1" max="10"/><br/>
        
        <label for="stairs">Carpeting a stairway?</label>
        <select id="stairs" name="stairs">
          <option>No</option>
          <option>Yes</option>
        </select><br/>
        <input type="submit" name="submit1" value="Continue">
      </div><!-- #select-rooms -->
    </form>

  </div><!-- #left-side -->
  
  <div id="right-side" class="column">
    <h3>Calculate Spaces:</h3><hr/>
    <table>
    <?php
      echo $form;
    ?>
    </table>
       
  </div><!-- #right-side -->
  <?php
   // echo $results;
  ?>
</div><!-- #center-wrap -->
</div><!-- #bg -->
</body>
</html>
