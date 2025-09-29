<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database
*/
$host = getenv('PhpMyAdmin');
$username = getenv('namel9439');
$password = getenv('20adnamel9439');
$database = getenv('namel9439');
$db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
/* tilkobling til database-serveren utført */
?>