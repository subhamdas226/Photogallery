<?php
	include 'inc/header.php';
	include 'inc/slider.php';
	if($session!=NULL)
	{
		include 'inc/user-page.php';
	}
	if($session==NULL)
	{
		include 'inc/gallery-home.php';
		include 'inc/recent-uploads.php';
		include 'inc/top-uploaders.php';
	}
	include 'inc/footer.php';
?>