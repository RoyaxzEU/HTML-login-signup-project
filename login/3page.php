<?php 
session_start();

	include("connection.php");
	include("functions.php");
	


	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="3styles.css">
    <title>Project</title>   

</head>
<body>


<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>





    <div class="HEAD">

        <!--MENU-->
        <div class="menu">
            <div class="pages">
    
                <div class="menubar">
                    <!--De pages met links-->
                    <div class="links">
                    <a href="http://localhost/login/index.php">Home</a>
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



 
        <!--BODY-->
        <div class="BODY">

            <div class="portfolio">
                <div class="text">
                    <div class="img">
                        <img src="images/HAck.jpg" alt="foto" style="height: 300px; width: 400px;">
                    </div>
                    <div class="con">
                        <h1>Hello!</h1><p>My name is levano. I am 16 years old. I live in the Netherlands. I programmed this website with HTML and CSS.
                            I theme goes about Hacking. I want to inform that this is for educational porpuse only. I am not responsible for your action.
                        </p>
                </div>
            </div>
                <div class="googlemaps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504542.7851164727!2d3.036894261491082!3d52.19173437918456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2sNederland!5e0!3m2!1snl!2snl!4v1603808125979!5m2!1snl!2snl" width="600px" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>



        <!--FOOT-->
        <div class="FOOT">

            <div class="item-wrapperfoot">
            <div class="h1">
            <h1>EDUCATIONAL PORPUSE ONLY !!!</h1>
            </div>
    
            <div class="h2"><h2>page 3.</h2></div>   
            </div>
        </div>

        </div>


</body>
</html>
