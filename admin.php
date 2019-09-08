<?php

	session_start();

	$adminSession = NULL; 

	if(isset($_SESSION['user']))
	{
		unset($_SESSION['user']);
	}

	if(isset($_SESSION['admin']))
	{
		$adminSession = $_SESSION['admin'];
		include 'functions.php';
	}

	else
	{
		$adminSession = NULL;
	}

	include 'inc/header.php';
	include 'inc/slider.php';

	if($adminSession==NULL)
	{
		include 'inc/admin-login-form.php';
	}

	else
	{
		include 'inc/admin-content.php';
	}

	include 'inc/footer.php';


?>