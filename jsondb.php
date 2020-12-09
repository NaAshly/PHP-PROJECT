<?php
function getData($sql){
	$db = mysqli_connect("localhost", "root", "", "forumdatabase");
	$result = $db->query($sql);

	$arr = array();

	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}

$uname = $_POST['fname'];
$pass = sha1($_POST['passwrd']);


$sql = "SELECT * FROM users";
$student_data = json_decode(getData($sql), true);


//to check if there is a match
$flag = false;

foreach ($student_data as $info) {
	if($info['user_name'] == $uname ){
		$_session[signal]=true;
		$flag = true;
		header("Location: index.php");	
	}
	echo "hoy nai";
}
if($flag){
	header("Location: index.php");
}else{
	
	("Location: login.php");
}


?>