<?php

session_start();
//is de waarden isset dan unset deze waarden ( disconnecten)
if(isset($_SESSION['user_id']))
{
//
	unset($_SESSION['user_id']);

}
// terug sturen naar local.php
header("Location: local.php");
die;