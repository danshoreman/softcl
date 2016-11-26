<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include 'partials/carousel.php'; ?>
	
	<?php include 'partials/page-intro.php'; ?>
	
	<div class="graduates-panel">
		<div class="row">
			<div class="small-12 medium-6 columns">
				<h2>You get a lot.</h2>
				
				<div class="row">
					<div class="small-12 medium-6 large-3 columns">
						<p>Office 365 <br>included</p>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<p>8x8 <br>Gartner-leading<br> telephony</p>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<p>Choose<br>the apps<br> you want</p>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<p>128 bit<br>encryption</p>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<p>40GB* <br>user storage</p>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<p>Back-end<br>finally ditch that old<br>below-desk server</p>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<p>Anti-malware<br>keep users<br>out of trouble</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php include 'partials/two-col-alt.php'; ?>
	
	<?php include 'partials/contact-form.php'; ?>

	<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
