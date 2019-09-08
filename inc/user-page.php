<?php 
	include 'functions.php';
?>

<section class="user-profile">
	<div class="section-header center">
		<h1>Welcome <?php echo ucfirst($session);?></h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 avatar">
				<h2>Avatar</h2>
				<?php get_avatar_image($session);?>
				<div class="upload-avatar">
					<input type="file" name="user-avatar-upload" id="user-avatar-upload">
				</div>
			</div>
			<div class="col-md-8 profile">
				<h2>Profile Information</h2>
				<div class="profile-information">
					<?php get_profile_info($session);?>
				</div>
				
				<h6><a href="#">Change Profile Information</a></h6>
			</div>
		</div>
	</div>
</section>
<section class="upload-image">
	<div class="section-header center">
	<h2>Upload New Image</h2>
	</div>
	<form method="post" enctype="multipart/form-data" name="upload-image">
		<input type="file" name="new-image" id="new-image">
	</form>
</section>
<section class="user-gallery">
	<div class="section-header center">
		<h2>Your Uploaded Images</h2>
	</div>

	<div class="container">
		<div class="row">
			<div id="user-uploaded-pics">
			<?php get_user_uploaded_pics($session); ?>
			</div>
		</div>
	</div>
</section>