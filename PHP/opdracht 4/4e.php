<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--
Opdracht 4.e
Maak een soortgelijke opgave als de vorige maar nu voor drie getallen.
Laat op het scherm afdrukken wel getal het kleinst en welk getal het grootst is.
De drie in te voeren getallen moeten verschillend zijn. Als dat niet zo is maak daar dan melding
van. Maak gebruik van de AND operator!
De getallen hoeven niet in volgorde geprint te worden. Allen grootste en kleinste is voldoende.
TIP
Schrijf eerst eens op papier, met drie getallen a, b en c hoe je dat gaat aan pakken.
-->
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
									$getal3=$_POST["getal3Veld"]; 
									$ongeldiginvoer=false;
									//validating input
										if(!is_numeric($getal1)){
											  print("<p>Getal a is ongeldig invoer, voer de volgende keer valide getallen in</p>");
												$ongeldiginvoer=true;
										}
										if(!is_numeric($getal2)){
											  print("<p>Getal b is ongeldig invoer, voer de volgende keer valide getallen in</p>");
												$ongeldiginvoer=true;
										}
										if(!is_numeric($getal3)){
											  print("<p>Getal c is ongeldig invoer, voer de volgende keer valide getallen in</p>");
												$ongeldiginvoer=true;
										}
										if($getal1 == $getal2 OR $getal1 == $getal3 OR $getal2 == $getal3){
    										print("<p>Ongeldig invoer, voer de volgende keer 3 verschillende getallen in</p>");
												$ongeldiginvoer=true;
  									}
									//comparing numbers
										if(!$ongeldiginvoer){
    									if($getal1 > $getal2 && $getal2 > $getal3){
    									    print("<p>Getal a: <b>$getal1</b> is het grootst en getal c: <b>$getal3</b> het kleinst</p>");
  										}						
  										elseif($getal1 > $getal3 && $getal3 > $getal2){
    											print("<p>Getal a: <b>$getal1</b> is het grootst en getal b: <b>$getal2</b> het kleinst</p>");
  										}
  										elseif($getal2 > $getal1 && $getal1 > $getal3){
    											print("<p>Getal b: <b>$getal2</b> is het grootst en getal c: <b>$getal3</b> het kleinst</p>");
  										}
  										elseif($getal2 > $getal3 && $getal3 > $getal1){
    									    print("<p>Getal b: <b>$getal2</b> is het grootst en getal a: <b>$getal1</b> het kleinst</p>");
  										}
  										elseif($getal3 > $getal2 && $getal2 > $getal1){
    									    print("<p>Getal c: <b>$getal3</b> is het grootst en getal a: <b>$getal1</b> het kleinst</p>");
  										}
  										else{
    									    print("<p>Getal c: <b>$getal3</b> is het grootst en getal b: <b>$getal2</b> het kleinst</p>");
  										}
										}
      				?>
</body>
</html>
