<?php 

	$picid = $_POST['id'];
	include 'inc/db.inc.php';
	//$approved = 1;

	$query = "delete from pics where pid='$picid'";
	$query_run = mysql_query($query);

	if($query_run)
	{
		echo 'deleted';
	}

	else
	{
		echo 'oops';
	}
 ?>