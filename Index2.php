<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>index</title>

        <style type="text/css">
			a{
				text-underline-position: below;
			}
			
			a-hover{
				
			}
            
 body{ font: 14px sans-serif; text-align: center; }
           
            

        </style>
        <link href="css/Override.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
    </head>

    <body>
<div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a><br>


        <ul class="fly-in-text hidden"><a href="Apex World.lk.html" style="color:red;">

               <center><li>WELCOME</li>
            
		    <li>TO</li></center><br>
            <center><li>A</li>
            <li>P</li>
            <li>E</li>
            <li>X</li>
			<li> </li>
			<li>W</li>
			<li>O</li>
			<li>R</li>
			<li>L</li> 
		    <li>D</li></center>
	        <li>&nbsp;</li>
			<center><li>S</li>
			<li>T</li>
			<li>O</li>
			<li>R</li>
	        <li>E</li></center>
			<br></a>
    <center><a href="Apex World.lk.html" style="color:red;"><button type="button" style="color:red;" class="btn btn-link">Click to Continue</button></a></center>
</ul>

        

        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/Open.js"></script>

       

            

          
            

      



    </body>

</html>