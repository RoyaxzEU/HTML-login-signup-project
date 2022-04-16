<?php

//Deze functie controleert of de user is ingelogd
function check_login($con)
{

 //kijkt of de user id echt is en in de database is
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

//lezen in de data base met con en query var
//query - vragen van data
		$result = mysqli_query($con,$query);

//krijgt de numers de sql rows van een results
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

//als er geen connectie kan worden gemaakt dan verstuur ik de user naar een login page

	header("Location: login.php");
	die;

}




//random getal functie
function random_num($length)
{

//text is gelijk aan leeg
	$text = "";

//als de lengte minder is dan 5 dan is lengte 5 zo is het altijd niet minder dan 5
	if($length < 5)
	{
		$length = 5;
	}

//for loop random num
	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}