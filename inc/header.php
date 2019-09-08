<?php

	@session_start();
	
	if(isset($_SESSION['user']))
	{
		$session = $_SESSION['user'];
	}
	else
	{
		$session = null;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/simpletextrotator.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<a href="#" class="logo pull-left bold">Photo<span class="primary">G</span>allery</a>
				<nav class="pull-right right">
					<button type="button" class="btn" data-toggle="collapse" data-target="#menu">
						<i class="fa fa-navicon"></i>
					</button>
					<div class="collapse" id="menu">
						<ul class="center">
							<li><a href="">Home</a></li>
							<li><a href="">Gallery</a></li>
							<li><a href="">About</a></li>
							<li><a href="">Contact</a></li>
							<?php
								if($session==null)
								{
							?>
								<li class="login"><a href="" class="blue-bg">Login</a></li>
								<li class="register"><a href="" class="primary-bg">Register</a></li>
							<?php
								}
								else
								{
							?>
								<li class="logout"><a href="" class="primary-bg">Logout</a></li>
							<?php
								}
							?>
							
							
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>