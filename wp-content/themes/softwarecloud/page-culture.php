<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include 'partials/carousel.php'; ?>
	
	<?php include 'partials/page-intro.php'; ?>
	
	<?php include 'partials/two-col-alt.php'; ?>
	
	<div class="graduates-panel">
		<div class="row">
			<div class="small-12 medium-6 columns">
				
				<?php $gradimg = wp_get_attachment_image_src(get_field('graduates_image'), 'full'); ?>
				<img src="<?php echo $gradimg[0]; ?>" class="gradlogo" alt="Calling all graduates">
				
			</div>
			<div class="small-12 medium-6 columns">
				<?php the_field('graduates_text'); ?>
			</div>
		</div>
	</div>
	
	<?php include 'partials/two-col-img-txt.php'; ?>
	
	<div class="graduates-panel">
		<div class="row">
			<div class="small-12 medium-6 columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/culture/people-we-need.png" alt="" class="">
			</div>
			<div class="small-12 medium-6 columns">
				<p>It’s not just the next generation of brilliant consultants and devs we’re looking for. We’re also currently on the lookout for:</p>
			</div>
			<div class="small-12 columns">
				<h3>Experienced VisualFiles developers and consultants<br>
					Got a few years under your belt helping clients build and maintain VisualFiles case management systems? If so, we’d love to hear from you.</h3>
			</div>
		</div>
	</div>
	
	<div class="benefits-panel">
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
	
	<?php include 'partials/contact-form.php'; ?>

	<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
