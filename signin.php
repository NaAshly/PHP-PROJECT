<?php
//signin.php
include 'connect.php';
include 'header.php';
session_start();
echo '<h3 align="center">Sign in</h3>';
 
//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
    echo 'You are already signed in, you can <a href="signout.php">sign out</a> if you want.';
}
else
{
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {
        /*the form hasn't been posted yet, display it
          note that the action="" will cause the form to post to the same page it is on */
        echo '<form method="post" action="jsondb.php">
		<div align="center">
        <label>Username : <input type = "text" name ="fname" required onfocusout ="check()"/> <span id="kmsg"></span><br><br>
        Password: <input type="password" name="passwrd" placeholder="give a password" required onfocusout ="check()"/> <span id="xmsg"></span><br><br>
        <input type="submit" value="Log In" /></label>
		</div>
     </form>';
}
        
    }

 

?>
<script>
function check ()
{
	A1=document.forms[0].fname.value;
	A6=document.forms[0].passwrd.value;
	
	if (A1="")
    {
	document.getElementById("kmsg").innerHTML="please fill up this field";
	flag=false;
	}
  
			else if (A6="")
			{
				document.getElementById("xmsg").innerHTML="Password is Empty ";
                flag=false;
			}
			
		
	
}

</script>