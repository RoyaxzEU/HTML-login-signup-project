<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "databasecreated";

// Soms kan hij geen connectie maken dus heb ik een if ! gebruikt
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
// als het niet kan connecten die !
	die("failed to connect!");
}
