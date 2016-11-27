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
		
				<div class="small-12 medium-6 end columns cloud-info">
	
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
<!--
				<h4>Sanity as<br> a Service</h4>
				
				<p>Wouldn’t it be nice to have smart, self-sustaining services that look after themselves?</p>
				
				<p>You know, as if someone was doing all the tricky bits for you?</p>
				
				<p>...Hello!</p>
-->
			</div>
			<div class="small-12 medium-6 columns">
				<?php the_field('service_list'); ?>
<!--
				<p>Development<br>as a Service</p>
				<p>Disaster Recovery<br>as a Service</p>
				<p>Analytics & Reporting<br>as a Service</p>
				<p>Security<br>as a Service</p>
				<p>Backup<br>as a Service</p>
-->
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
						
						?>
				
						<li>
							<img src="<?php echo $toolsimg[0]; ?>" alt="">
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
