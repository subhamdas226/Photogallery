<?php 

	$picid = $_POST['id'];
	include 'inc/db.inc.php';
	$approved = 1;

	$query = "UPDATE pics SET approved='$approved' where pid='$picid'";

	$query1 = "select * from users where username=(select username from pics where pid='$picid')";
	$query_run = mysql_query($query);

	if($query_run)
	{
		echo 'approved<br>';

		$query_run1 = mysql_query($query1);
		while($row=mysql_fetch_assoc($query_run1))
		{
			$new_upload = $row['uploads'] + 1;
			$query2 = "UPDATE users SET uploads='$new_upload' where username=(select username from pics where pid='$picid')";
			$query_run2 = mysql_query($query2);
			if($query_run2)
			{
				echo 'yo yo';
			}
		}
	}

	else
	{
		echo 'oops';
	}
 ?>