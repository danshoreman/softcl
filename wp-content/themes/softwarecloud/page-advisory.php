<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include 'partials/carousel.php'; ?>
	
	<?php include 'partials/page-intro.php'; ?>
	
	<div class="cloud-intro">
		
		<div class="row">
			<div class="small-12 columns cloud-title">
				<?php the_field('cloud_title'); ?>
			</div>
		</div>
		
		<?php if( have_rows('cloud_panels') ): ?>

			<div class="row">
		
			<?php while( have_rows('cloud_panels') ): the_row(); 
		
				$cloudimg = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail');
				$cloudtitle = get_sub_field('title');
				$cloudcopy = get_sub_field('copy');
		
				?>
		
				<div class="small-12 medium-6 end columns cloud-info os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
	
					<img src="<?php echo $cloudimg[0]; ?>" alt="">
					<h4><?php echo $cloudtitle; ?></h4>
					<p><?php echo $cloudcopy; ?></p>
	
				</div>
		
				<?php endwhile; ?>
		
			</div>
		
		<?php endif; ?>
		
	</div>
	
	<div class="testimonial-video">
		<div class="row">
			<div class="small-12 columns">
				<div class="videoWrapper">
					<?php the_field('testimonial_video'); ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="service-panel">
		<div class="row">
			<div class="small-12 medium-6 columns">
				<?php the_field('service_title'); ?>
			</div>
			<div class="small-12 medium-6 columns">
				<?php the_field('service_list'); ?>
			</div>
		</div>
	</div>
	
	<div class="tools-used-panel">
		<div class="row">
			<div class="small-12 columns">
				<?php the_field('tools_used_intro'); ?>
				
				<?php if( have_rows('tools_used_logos') ): ?>

					<ul>
				
					<?php while( have_rows('tools_used_logos') ): the_row(); 
				
						$toolsimg = wp_get_attachment_image_src(get_sub_field('tools_logo'), 'full');
						$link = get_sub_field('tool_link');
						
						?>
				
						<li>
							<?php if( $link ): ?>
								<a href="<?php echo $link; ?>" target="_blank">
							<?php endif; ?>
							
							<img src="<?php echo $toolsimg[0]; ?>" alt="">
							
							<?php if( $link ): ?>
								</a>
							<?php endif; ?>
						</li>
			
						<?php endwhile; ?>
				
					</ul>
				
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<?php include 'partials/contact-form.php'; ?>
	
	
	<?php include 'partials/two-col-alt.php'; ?>

	<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
