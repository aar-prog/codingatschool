<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Untitled</title>
</head>
<body>
  <font face="verdana" size="+2" color="indigo">
  	<h3 class="kop">Uw gegevens zijn:</h3>
  				<?php
  							$keus=$_POST["geslacht"];
									if($keus == "man"){
  										print("<br>Hallo Meneer</br>\n");
											}
									else{
											print("<br>Hallo Mevrouw</br>\n");
											}
  				?>
	</font>
</body>
</html>
