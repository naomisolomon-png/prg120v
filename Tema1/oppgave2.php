<?php
/* Programmet mottar fra et HTML-skjema et fornavn, et etternavn og alder ved POST-metoden
/* Programmet skriver ut en "god dag"-melding med personens navn og alder
*/
$fornavn=$_POST ["fornavn"];
$etternavn=$_POST ["etternavn"]; /
$alder=$_POST ["alder"]; / * variable gitt verdier fra feltene i HTML-skjemaet */
print ("God dag $fornavn $etternavn $alder år <br />"); /* resultat skrevet ut */
?>
