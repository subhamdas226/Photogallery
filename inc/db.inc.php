<?php 
	$host="localhost";
	$user="root";
	$password="";
	$conn = @mysql_connect($host,$user,$password);
	$db= @mysql_select_db('photogallery');
 ?>