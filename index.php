
<?php
//create_cat.php
//index.php actually
// i version
include 'connect.php';
include 'header.php';
include 'populate_users.php';

session_start();
if(!isset($_SESSION['signed_in']))
{
	 $_SESSION['signed_in'] = false ;
}

if($_SESSION['signed_in']==false )
{
	echo "Please <a href='signin.php'>Sign In</a>" ;
	echo "<br>";
	echo "You may <a href='signup.php'>Sign Up</a> if you are a new User." ;
	
}
else 
{
	echo "You are signed in" ;
	echo "<br>";
	echo "You may <a href='signout.php'>Sign Out</a>" ;
}






//mysqli_query()
$con=mysqli_connect("localhost","root","","forumdatabase");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else 
{
	//echo"<br> MYSQLi connection success";
}

//mysql_query()
$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories";
 
$result = mysql_query($sql);
$result_i = mysqli_query($con,$sql);

 
if(!$result_i)
{
    echo 'The categories could not be displayed, please try again later.';
}
else
{
    if(mysqli_num_rows($result_i) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
     	//$_SESSION['signed_in'] = false ;
        //prepare the table
        echo '<table border="1">
              <tr>
                <th>Category</th>
                <th>Last topic</th>
              </tr>'; 
        $rows = array() ;
        while($row = mysqli_fetch_assoc($result_i))
        {
        	//$rows[] = $row ;
        	echo '<tr>';
                echo '<td class="leftpart">';
                   echo '<h3><a href="category.php?id='.$row['cat_id'].'">  ' . $row['cat_name'] . ' </a></h3>'; 
                   echo $row['cat_description'] ;
                
                
                echo '</td>';
                echo '<td class="rightpart">';
                            echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
                echo '</td>';
            echo '</tr>';
        }
        //print json_encode($rows) ;
    }
}
 
?>
