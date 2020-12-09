<?php
//signin.php
include 'connect.php';
include 'header.php';
session_start();
echo '<h3>Sign Out</h3>';
 
//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
   	 //echo "Sign Out Success";
     $_SESSION['signed_in'] = false;
     echo  "<br>";
     echo "Sign Out Success";
     
     //header("index.php");
     echo "<br>Go to the <a href='index.php'>Home Page</a>";
}
else 
{
	echo "You have to <a href='signin.php'>Sign In</a> first." ;
	//echo "Sign Out Success..." ;
	echo "<br>Go to the <a href='index.php'>Home Page</a>";
}

?>