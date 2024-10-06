<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Untitled</title>
</head>
<body>
  <font face="times new roman" size="+2" color="red">
  	<h3 class="kop">Uw gegevens zijn:</h3>
  				<?php
                $naam=$_POST["naamVeld"];
                $dag=$_POST["dagVeld"];
  							$maand=$_POST["maandVeld"];
  							$jaar=$_POST["jaarVeld"];
  										print("<br>U heet <b>$naam.</b></br>\n");
  										print("<br>U bent geboren op <b>$dag $maand $jaar.</b></br>\n");	
  				?>
	</font>
</body>
</html>
