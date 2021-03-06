<?php
//create_cat.php
include 'connect.php';
include 'header.php';
 
//first select the category based on $_GET['cat_id']
$sql = "SELECT
    		topic_id,
    		topic_subject
		FROM
    		topics
		WHERE
    		topics.topic_id = " . mysql_real_escape_string($_GET['id']);
 
$result = mysql_query($sql);
 
if(!$result)
{
    echo 'The topic could not be displayed, please try again later.' . mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'This topic does not exist.';
    }
    else
    {
        //display category data
        while($row = mysql_fetch_assoc($result))
        {
            echo '<h2>Posts in  '.$row['topic_subject'].'  topic</h2>';
        }
     
        //do a query for the topics
        $sql = "SELECT
        			posts.post_id,
        			posts.post_topic,
				    posts.post_content,
				    posts.post_date,
				    posts.post_by,
				    users.user_id,
				    users.user_name
				FROM
				    posts
				LEFT JOIN
				    users
				ON
				    posts.post_by = users.user_id
				WHERE
				    posts.post_topic = " . mysql_real_escape_string($_GET['id']);
         
        $result = mysql_query($sql);
         
        if(!$result)
        {
            echo 'The posts could not be displayed, please try again later.';
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                echo 'There are no posts in this topic yet.';
            }
            else
            {
                //prepare the table
                echo '<table border="1">
                      <tr>
                        <th>Post</th>
                        <th>Created at</th>
                      </tr>'; 
                     
                while($row = mysql_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td class="leftpart">';
                        	echo '<h3>User : ' . $row['user_name'] . ' </h3>';
                            echo '<h3><a href="topic.php?id=' . $row['post_id'] . '">' . $row['post_content'] . '</a><h3>';
                        echo '</td>';
                        echo '<td class="rightpart">';
                            echo date('d-m-Y', strtotime($row['post_date']));
                        echo '</td>';
                    echo '</tr>';
                }
               echo ' <form method="post" action="reply.php?id= '.$_GET['id'].' ">
   				 <textarea name="reply-content"></textarea>
    				<input type="submit" value="Submit reply" />
				</form>';
            }
        }
    }
}
 
include 'footer.php';
?>