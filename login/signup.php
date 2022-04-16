<?php 

//checken of de user is ingelogd 
//USER ID IN SESSION OM TE CHECKEN OF DE PERSOON IS IN GELOGD
session_start();

	include("connection.php");
	include("functions.php");

// als de request gelijk is aan de post was er gepost (opslaan in de data base)
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
 //var van de account gegevens
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
 //als post is empty dan of een getal als user name dan echo fout melding
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

//save to database user id word een random getal tot 20 
			$user_id = random_num(20);
 // insert in de data base (voeg toe)
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);
// stuur de user naar login als die gene zich heeft opgegeven
			header("Location: login.php");
			die;
		}else
// echo fout melding
		{
			echo "Please enter some valid information!";
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="1styles.css">
</head>
<body>

	<style type="text/css">
	
	 {
		color: black;
		background-color: red;
		margin: 10%;
		text-align; center;
	}
	html{
		background-image: url('IMG/');
		background-repeat: no-repeat;
		text-align: center;
  background-size: 100% 100%;
	}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 60%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{
		background-image: url('IMG/amazing.gif');
		background-position: center;

		margin: auto;
		width: 500px;
	
	}

	</style>

	
	
<div class="HEAD">

<!--MENU-->
<div class="menu">
	<div class="pages">

		<div class="menubar">
			<!--De pages met links-->
			<div class="links">
			<a href="http://localhost/login/local.php">Home</a>
			</div>

			<div class="links">
			<a href="http://localhost/login/2page.php">Hacking tools</a>
			</div>
	   
			<div class="links">
			<a href="http://localhost/login/3page.php">ISO disks</a>
			</div>
			
			<div class="links">
			<a href="http://localhost/login/4page.php">VB download</a>
			</div>
	 
	 
		</div>



		<div class="rechter-kant">
			<div class="name">
			   <div>HACKTHON</div>  
			   
	
			</div>
		</div>
</div>

</div>




	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;"><h1> Sign up to get all acces</h1> </div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="signup"><br><br>

			<a href="login.php">Click to login</a><br><br>
		</form>
	</div>

	<h1> Login to get access </h1>




<!--FOOT-->
<div class="FOOT">

	<div class="item-wrapperfoot">
	<div class="h1">
	<h1>EDUCATIONAL PORPUSE ONLY !!!</h1>
	</div>

</div>







</body>
</html>

</body>
</html>