<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include 'partials/carousel.php'; ?>
	
	<?php include 'partials/page-intro.php'; ?>
	
	<?php include 'partials/two-col-alt.php'; ?>
	
	<div class="two-col-panel">
		<div class="row">
			<div class="small-12 medium-6 columns os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
				
				<?php $gradimg = wp_get_attachment_image_src(get_field('graduates_image'), 'full'); ?>
				<img src="<?php echo $gradimg[0]; ?>" class="two-col-img" alt="Calling all graduates">
				
			</div>
			<div class="small-12 medium-6 columns os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
				<?php the_field('graduates_text'); ?>
			</div>
		</div>
	</div>
	
	<?php include 'partials/two-col-img-txt.php'; ?>
	
	<div class="two-col-panel">
		<div class="row">
			<div class="small-12 medium-6 columns">
				<?php $needimg = wp_get_attachment_image_src(get_field('we_need_image'), 'full'); ?>
				<img src="<?php echo $needimg[0]; ?>" class="two-col-img" alt="Calling all graduates">
			</div>
			<div class="small-12 medium-6 columns">
				<?php the_field('we_need_text'); ?>
			</div>
		</div>
	</div>
	
	<div class="two-col-panel two-col-imgalt benefits-panel">
		<div class="row">
			<div class="small-12 medium-6 columns os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
				<?php the_field('benefits_title'); ?>
			</div>
			<div class="small-12 medium-6 columns os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
				<?php the_field('benefits_text'); ?>
			</div>
		</div>
	</div>
	
	<?php include 'partials/contact-form.php'; ?>

	<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
