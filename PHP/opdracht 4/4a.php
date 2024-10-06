<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Untitled</title>
</head>
<body>
  <font face="verdana" size="+2" color="indigo">
    	<h2 class="kop"><i>Uw invoer vergeleken:</i></h3>
    				<?php
                  $getal1=$_POST["getal1Veld"];
									$getal2=$_POST["getal2Veld"];
									
  									if($getal1 > $getal2){
  									    print("<p>Getal a: <b>$getal1</b> is groter dan getal b: <b>$getal2</b></p>");
										}
										if($getal2 > $getal1){
  											print("<p>Getal b: <b>$getal2</b> is groter dan getal a: <b>$getal1</b></p>");
										}
										if($getal1 == $getal2){
  									    print("<p>Getal a: <b>$getal1</b> is even groot als getal b: <b>$getal2</b></p>");
										}
      				?>
</body>
</html>
