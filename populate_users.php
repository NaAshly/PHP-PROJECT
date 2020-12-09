<?php

	//this file works in the background and write all the users info in a file in JSON format

    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","forumdatabase") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from users";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array	    
	$response = array();
	$users = array();
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)) 
	{ 
		$user_id=$row['user_id']; 
		$user_name=$row['user_name']; 
		$user_pass=sha1($row['user_pass']); 
		$user_email=$row['user_email']; 
		$user_date=$row['user_date']; 
		$user_level=$row['user_level']; 
		

		$users[] = array(
							'user_id'=> $user_id, 
							'user_name'=> $user_name,
							'user_pass'=> $user_pass,
							'user_email'=> $user_email,
							'user_date'=> $user_date,
							'user_level'=> $user_level
							
							);

	} 

	$response['users'] = $users;

	$fp = fopen('users_info.json', 'w');
	fwrite($fp, json_encode($response));
	fclose($fp);

    //close the db connection
    mysqli_close($connection);
?>