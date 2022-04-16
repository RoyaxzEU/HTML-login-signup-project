<?php 
session_start();

	include("connection.php");
	include("functions.php");
	


	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="4styles.css">
    <title>Project</title>   

</head>
<body>



<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>



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


</div>
<h1>Installing a virtual machine</h1>
<a>To use Kalilinux, black arch or other linux distros, you need to use a virtual machine.<br> this could be VirtualBox(open source) or VMware( closed source).<br> We will use Virtualbox </a>






        <!--FOOT-->
        <div class="FOOT">

            <div class="item-wrapperfoot">
            <div class="h1">
            <h1>EDUCATIONAL PORPUSE ONLY !!!</h1>
            </div>
    
            <div class="h2"><h2>page 4.</h2></div>   
            </div>
        </div>



        
        


</body>
</html>
