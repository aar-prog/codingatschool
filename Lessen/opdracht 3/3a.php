<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Untitled</title>
</head>
<body>
  <font face="verdana" size="+2" color="indigo">
    	<h2 class="kop"><i>Uw invoer opgeteld</i></h3>
    				<?php
                  $getal1=$_POST["getal1Veld"];
									$getal2=$_POST["getal2Veld"];
									$som = $getal1 + $getal2;
									    print("<p>Uw getallen zijn: <b>$getal1</b> en <b>$getal2</b></p>");
											print("<p>Getallen opgeteld: <b>$som</b></p>");
    				?>
</body>
</html>
