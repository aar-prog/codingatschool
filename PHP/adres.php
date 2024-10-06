<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Untitled</title>
</head>
<body>
  <font face="verdana" size="+2" color="indigo">
  	<h3 class="kop">Uw gegevens zijn:</h3>
  				<?php
                $naam=$_POST["naamVeld"];
                $leeftijd=$_POST["leeftijdVeld"];
  							$adres=$_POST["straatVeld"];
  							$plaats=$_POST["plaatsVeld"];
  							$postcode=$_POST["postcodeVeld"];
  							$telefoon=$_POST["telefoonVeld"];
  							$keus=$_POST["album"];
  										print("<br>$naam</br>\n");
  										print("<br>$leeftijd</br>\n");
  										print("<br>$adres</br>\n");
  										print("<br>$plaats</br>\n");
  										print("<br>$postcode</br>\n");
  										print("<br>$telefoon</br>\n");
								foreach ($keus as $key => $album)
									{			
											print ("<br>Een gekozen album: $key. $album.</br>\n");
									}
  				?>
	</font>
</body>
</html>
