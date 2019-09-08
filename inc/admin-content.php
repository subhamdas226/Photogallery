<section class="review">
	<div class="section-header center">
		<h1>Welcome <?php echo ucfirst($adminSession);?></h1>
	</div>
	<div class="container">
		<div class="row">
			<div id="unapproved_pics">
				<?php get_unapproved_pics(); ?>
			</div>
		</div>
	</div>
</section>