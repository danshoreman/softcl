<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include 'partials/carousel.php'; ?>
	
	<?php include 'partials/page-intro.php'; ?>
	
	<?php include 'partials/two-col-alt.php'; ?>
	
	<?php include 'partials/two-col-img-txt.php'; ?>
	
	<div class="benefits-pane;">
		<div class="row">
			<div class="small-12 medium-6 columns">
				<h4>Benefits<br>
					aka good things for good people.</h4>
			</div>
			<div class="small-12 medium-6 columns">
				<p>Here are just some of the great things you’ll get as part of our team:</p>
				
				<ul>
					<li>Salary</li>
					<li>Company socials</li>
					<li>Dignity</li>
					<li>Apples</li>
					<li>Steak bake</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="contact-form">
		<div class="row">
			<div class="small-12 columns">
				<h3>If you’d like to find out more about joining Software Cloud, send your CV and a cover letter to jobs@softcl.com,
call 0808 164 0000 or fill out the form below.</h3>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
			</div>
		</div>
	</div>

	<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
