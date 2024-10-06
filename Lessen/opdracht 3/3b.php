<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Untitled</title>
</head>
<body>
  <font face="Montserrat" size="+4" color="orange">
    	<h2 class="kop"><i>Resultaten</i></h3>
    				<?php
                  $getal1=$_POST["getal1Veld"];
									$getal2=$_POST["getal2Veld"];
									$kwadraat1 = $getal1 * $getal1;
									$kwadraat2 = $getal2 * $getal2;
									$som = $kwadraat1 + $kwadraat2;
									    print("<p>Uw getallen zijn: <b>$getal1</b> en <b>$getal2</b></p>");
											print("<p>Getal 1 gekwadrateerd: <b>$kwadraat1</b></p>");
											print("<p>Getal 2 gekwadrateerd: <b>$kwadraat2</b></p>");
											print("<p>Kwadraten opgeteld: <b>$som</b></p>");
    				?>
</body>
</html>
