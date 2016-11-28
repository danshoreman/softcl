<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include 'partials/carousel.php'; ?>
	
	<?php include 'partials/page-intro.php'; ?>
	
	<div class="what-you-get-panel">
		<div class="row">
			<div class="small-12 columns">
				
				<h2><?php the_field('cloud_offered_title'); ?></h2>
				
				<?php if( have_rows('cloud_tools') ): ?>

					<ul class="what-you-get">
				
					<?php while( have_rows('cloud_tools') ): the_row(); 
				
						$item = get_sub_field('item'); ?>
				
						<li class="wyg-item">
							<?php echo $item; ?>
						</li>
				
					<?php endwhile; ?>
				
					</ul>
				
				<?php endif; ?>
				
			</div>
		</div>
	</div>
	
	<?php include 'partials/two-col-alt.php'; ?>
	
	<?php include 'partials/contact-form.php'; ?>

	<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
