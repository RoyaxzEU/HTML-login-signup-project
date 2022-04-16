<?php 
//checken of de user is ingelogd 
//USER ID IN SESSION OM TE CHECKEN OF DE PERSOON IS IN GELOGD

session_start();

	include("connection.php");
	include("functions.php");

// als de request gelijk is aan de post was er gepost (opslaan in de data base)

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//(lezen)Account gegevens ophalen
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//informatie lezen van database
			//controleert of de username gelijk is als de username in de database
			$query = "select * from users where user_name = '$user_name' limit 1";
			//De result ocontroleren of dat klopt als het klopt dan heb je toegang tot index.php
			$result = mysqli_query($con, $query);

			if($result)
			{
		
			// als de results groter is dan 1 , dan word de $user_data naar $results gebracht
				if($result && mysqli_num_rows($result) > 0)
				{
			//$use_data versuurd naar $results
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
			//De session id is gelijk aan user_data 
						$_SESSION['user_id'] = $user_data['user_id'];
			// toegang tot index pagina
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "<h1>wrong username or password!</h1>";
		}else
		{
			echo "<h1>wrong username or password!</h1>";
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
		background-image: url('IMG/e06bcbd96982cb40457346471f711383.gif');
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
			<div style="font-size: 20px;margin: 10px;color: white;"><h1>Login in to get all acces</h1> </div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
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