<?php 
session_start();

	include("connection.php");
	include("functions.php");
	


	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="2styles.css">
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
                    <div class="links">
                        <div class="spec">
                        <button style="		padding: 10px;
		width: 100px;
		color: white;
		border: none;">
                    <a href="http://localhost/login/logout.php">Log out</a>
                    </button>    
                </div>
                    </div>

                      </div>
                </div>
        </div>

    </div>




<!--BODY-->
<div class="block">
    

<!--BLOCK 1-->
    <div class="block1">


<!--IMAGE-->     
             <div class="image">
                 <img src="images/linux.png" style="width: 100%; height: 200px;">
             </div>
 
<!--TITEL / TEXT-->
        <div class="text">
            <h1>HOW TO INSTALL LINUX WITH VIRTUAL BOX</h1>
            <p> Step 1: Download Kali Linux ISO Image (Link below)<br>Step 2: Create Kali Linux VirtualBox Container(With the OS disk)<br>Step 3: Configure Virtual Machine Settings<br> Step 4: Installing and Setting Up Kali Linux</p>
        </div>

<!--TITLE LINKS-->            
        <div class="linktext"><h1>LINKS / TUTORIAL</h1></div>

<!--LINKS-->
        <div class="link">
            <div class="link1">
            <button> <a href="https://www.virtualbox.org/">VirtualBox</a></button>
            </div>
            <div class="link2">
            <button> <a href="https://www.kali.org/">Kali Linux Os Disk</a></button>
            </div>
        </div>
<!--VIDEO-->
        <div class="video">
            <video width="100%" height="240px" controls>
                <source src="Videos/vm.mp4" type="video/mp4">
             </video>
             </div>
    </div>



<!--BLOCK 2-->
<div class="block1">


    <!--IMAGE-->     
                 <div class="image">
                     <img src="images/hacker-laptop-text.jpg" style="width: 100%; height: 200px;">
                 </div>
     
    <!--TITEL / TEXT-->
            <div class="text">
                <h1>LINUX PHISHING TOOL HIDDEN EYE</h1>
                <p>Step 1: Install the link and clone the repo $ git clone https://github.com/DarkSecDevelopers/HiddenEye.git<br>Step 2: Install requirements: $ cd HiddenEye
                    $ sudo pip3 install -r requirements.txt <br>Step 3: Run with $ python3 HiddenEye.py or $ ./HiddenEye.py"    </p>
            </div>
    
    <!--TITLE LINKS-->            
            <div class="linktext"><h1>LINKS / TUTORIAL</h1></div>
    
    <!--LINKS-->
            <div class="link">
                <div class="link1">
                <button> <a href="https://github.com/DarkSecDevelopers/HiddenEye-Legacy">github code </a></button>
                </div>
                <div class="link2">
                <button> <a href="https://www.youtube.com/watch?v=I9UFzTLik20">How to use hidden eye</a></button>
                </div>
            </div>
    <!--VIDEO-->
            <div class="video">
                <video width="100%" height="240px" controls>
                    <source src="Videos/social.mp4" type="video/mp4">
                 </video>
                 </div>
        </div>
    
    

<!--BLOCK 3-->
<div class="block1">


    <!--IMAGE-->     
                 <div class="image">
                     <img src="images/Pasword.jpg" style="width: 100%; height: 200px;">
                 </div>
     
    <!--TITEL / TEXT-->
            <div class="text">
                <h1>CYBER SECURITY</h1>
                <p>The most used Linux security tools in this category are as follows: <p><br>1: Wireshark: Wireshark (formerly known as Ethereal) is a very powerful packet analyzer for system administrators.</p> <p><br>2: NMAP: Another Linux-based tool for security is NMAP, a must-have security scanner.</p><br>3: Malware, antivirus scanners. </p>
            </div>
    
    <!--TITLE LINKS-->            
            <div class="linktext"><h1>LINKS / TUTORIAL</h1></div>
    
    <!--LINKS-->
            <div class="link">
                <div class="link1">
                <button> <a href="https://www.youtube.com/watch?v=M48naKSLvNs">Cyber security with linux</a></button>
                </div>
                <div class="link2">
                <button> <a href="https://www.youtube.com/watch?v=-ni_PWxrsNo">How to protect your self</a></button>
                </div>
            </div>
    <!--VIDEO-->
            <div class="video">
                <video width="100%" height="240px" controls>
                    <source src="Videos/cyber.mp4" type="video/mp4">
                 </video>
                 </div>
        </div>
    
    

<!--BLOCK 4-->
<div class="block1">


    <!--IMAGE-->     
                 <div class="image">
                     <img src="images/paswords.jpg" style="width: 100%; height: 200px;">
                 </div>
     
    <!--TITEL / TEXT-->
            <div class="text">
                <h1>BRUTAL FORCE ATACK </h1>
                <p>Step 1: Install $ sudo apt-get install john -y<br>Step 2:$ sudo apt update  $ sudo apt install snapd  $ sudo snap install john-the-ripper <br>Step 3; Run $john passwd <br> Step 4: Watch the tutorial </p>
            </div>
    
    <!--TITLE LINKS-->            
            <div class="linktext"><h1>LINKS / TUTORIAL</h1></div>
    
    <!--LINKS-->
            <div class="link">
                <div class="link1">
                <button> <a href="https://github.com/openwall/john">Github John</a></button>
                </div>
                <div class="link2">
                <button> <a href="https://www.youtube.com/watch?v=KK2bNgX1mRA">How to use John</a></button>
                </div>
            </div>
    <!--VIDEO-->
            <div class="video">
                <video width="100%" height="240px" controls>
                    <source src="Videos/brute.mp4" type="video/mp4">
                 </video>
                 </div>
        </div>
    
    <!--BLOCK 5-->
    <div class="block1">


        <!--IMAGE-->     
                     <div class="image">
                         <img src="images/rat.jpg" style="width: 100%; height: 200px;">
                     </div>
         
        <!--TITEL / TEXT-->
                <div class="text">
                    <h1>RATS AND SQL</h1>
                    <p>Injection attacks refer to a broad class of attack vectors. In an injection attack, an attacker supplies untrusted input to a program. This input gets processed by an interpreter as part of a command or query. ... Injections are amongst the oldest and most dangerous attacks aimed at web applications</p>
                </div>
        
        <!--TITLE LINKS-->            
                <div class="linktext"><h1>LINKS / TUTORIAL</h1></div>
        
        <!--LINKS-->
                <div class="link">
                    <div class="link1">
                    <button> <a href="https://www.youtube.com/watch?v=q4Lyu8mdT4s">Linux Rat </a></button>
                    </div>
                    <div class="link2">
                    <button> <a href="https://www.youtube.com/watch?v=clczL7x1T4Y">SQL</a></button>
                    </div>
                </div>
        <!--VIDEO-->
                <div class="video">
                    <video width="100%" height="240px" controls>
                        <source src="Videos/sql.mp4" type="video/mp4">
                     </video>
                     </div>
            </div>
        
        

<!--BLOCK 6-->
<div class="block1">


    <!--IMAGE-->     
                 <div class="image">
                     <img src="images/hh.jpg" style="width: 100%; height: 200px;">
                 </div>
     
    <!--TITEL / TEXT-->
            <div class="text">
                <h1>DATA CAPTURING</h1>
                <p>Wireshark is a network protocol analyzer, or an application that captures packets from a network connection, such as from your computer to your home office or the internet. Packet is the name given to a discrete unit of data in a typical Ethernet network. Wireshark is the most often-used packet sniffer in the world.</p>
                <p>Wireshark. Wireshark is an open-source, free network packet analyzer, used to capture and analyze network traffic in real-time. It's considered one of the most essential network security tools by ethical hackers.  </p>
            </div>
    
    <!--TITLE LINKS-->            
            <div class="linktext"><h1>LINKS / TUTORIAL</h1></div>
    
    <!--LINKS-->
            <div class="link">
                <div class="link1">
                <button> <a href="https://www.wireshark.org/">Wireshark download </a></button>
                </div>
                <div class="link2">
                <button> <a href="https://www.youtube.com/watch?v=TkCSr30UojM&t=15s">How to use wireshark</a></button>
                </div>
            </div>
    <!--VIDEO-->
            <div class="video">
                <video width="100%" height="240px" controls>
                    <source src="Videos/data.mp4" type="video/mp4">
                 </video>
                 </div> 
        </div>
  
        

        
</div>    





    











        <!--FOOT-->
        <div class="FOOT">

            <div class="item-wrapperfoot">
            <div class="h1">
            <h1>EDUCATIONAL PORPUSE ONLY !!!</h1>
            </div>
    
            <div class="h2"><h2>page 2.</h2></div>   
            </div>
        </div>

        </div>

</body>
</html>
