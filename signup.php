<?php
//signup.php
include 'connect.php';
include 'header.php';
 
echo '<h3 align="center">Sign up</h3><br>';
 
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    /*the form hasn't been posted yet, display it
      note that the action="" will cause the form to post to the same page it is on */
    echo '<form method="post" action="">
		<div align="center">
        <label>Username :<input type = "text" name ="fname" size="30" placeholder="user name" required onfocusout ="check()"/> <span id="kmsg"></span><br><br>
        <label>Password: <input type="password" name="passwrd" size="30" placeholder="give a password" /></br></br>
		<label>Confirm Password:<input type="password" name="Cpass" size="30" placeholder="input same password again" required onfocusout ="check()"/><span id="xmsg"></span></br></br>
		<label>Email id:</label><input type="email" name="email" size="30" placeholder="input your email"   required onfocusout ="check()"/><span id="mmsg"></span><br><br>
		

		<input type="submit" value="Sign up" />
		</label>
		</div>
     </form>';
}

    else
    {
        //the form has been posted without, so save it
        //notice the use of mysql_real_escape_string, keep everything safe!
        //also notice the sha1 function which hashes the password
        $sql = "INSERT INTO
                    users(user_name, user_pass, user_email ,user_date, user_level)
                VALUES('" . mysql_real_escape_string($_POST['fname']) . "',
                       '" . sha1($_POST['passwrd']) . "',
                       '" . mysql_real_escape_string($_POST['email']) . "',
                        NOW(),
                        0)";
                         
        $result = mysql_query($sql);
        if(!$result)
        {
            //something went wrong, display the error
            echo 'Something went wrong while registering. Please try again later.';
            //echo mysql_error(); //debugging purposes, uncomment when needed
        }
        else
        {
            echo 'Successfully registered. You can now <a href="signin.php">sign in</a> and start posting! :-)';
        }
    }

 
?>
<script>
function check ()
{
	A1=document.forms[0].fname.value;
	A4=document.forms[0].email.value;
	c=A4.indexOf("@");
	A5=document.forms[0].Cpass.value;
	A6=document.forms[0].passwrd.value;
	
	if (A1="")
    {
	document.getElementById("kmsg").innerHTML="please fill up this field";
	flag=false;
	}
    else if (c==-1)
			{
				document.getElementById("mmsg").innerHTML="Invalid Email";
    
	        }
			else if (A5!=A6)
			{
				document.getElementById("xmsg").innerHTML="Password doesn't match ";
                flag=false;
			}
			
		
	
}

</script>
     