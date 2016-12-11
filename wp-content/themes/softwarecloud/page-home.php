<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include 'partials/carousel.php'; ?>

<?php include 'partials/page-intro.php'; ?>

<section class="about-us">
	
	<?php 
	$counter = 0;
	if( have_rows('we_are_block') ): ?>

	<div class="row">

	<?php while( have_rows('we_are_block') ): the_row(); 
		
		$title = get_sub_field('we_are_title'); 
		$imgcol = wp_get_attachment_image_src(get_sub_field('were_left_col'), 'image');
		$rcol = get_sub_field('were_right_col');
		$class = get_sub_field('class_field'); ?>
		
		<div class="<?php echo $class; ?>-block">
			<h3><?php echo $title; ?></h3>
	
			<div class="row">
				<?php if ($counter % 2 === 0) :?>
					<div class="small-12 medium-6 columns img-col os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
		
						<img src="<?php echo $imgcol[0]; ?>" alt="" class="">
		
					</div>
					<div class="small-12 medium-6 columns os-animation os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
		
						<?php echo $rcol; ?>
		
					</div>
				<?php else : ?>
					<div class="small-12 medium-6 medium-push-6 columns img-col os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
	
						<img src="<?php echo $imgcol[0]; ?>" alt="" class="">
	
					</div>
					<div class="small-12 medium-6 medium-pull-6 columns os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
		
						<?php echo $rcol; ?>
		
					</div>
				<?php endif; ?>
			</div>
		</div>

	<?php $counter++;
		endwhile; ?>

	</div>

<?php endif; ?>

</section>

<section class="raring">
	<div class="row">
		<div class="small-12 large-6 columns">
			<?php the_field('contact_form_copy'); ?>
		</div>
		<div class="small-12 large-6 columns">
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
		</div>
	</div>
	
	<div class="partner-wrap">
		<div class="row">
			<div class="small-12 columns">
				<h3><?php echo get_field('partner_title'); ?></h3>
				
				<?php if( have_rows('partner') ): ?>

					<div class="partner-panel">
				
					<?php while( have_rows('partner') ): the_row(); 
						
						$link = get_sub_field('link');
						$imgcol = wp_get_attachment_image_src(get_sub_field('logo'), 'landscape_thumbnail'); ?>
				
						<div class="partner">
				
							<?php if( $link ): ?>
								<a href="<?php echo $link; ?>">
							<?php endif; ?>
				
								<img src="<?php echo $imgcol[0]; ?>" alt="" />
				
							<?php if( $link ): ?>
								</a>
							<?php endif; ?>
						</div>
				
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="trust-panel">
	<div class="row">
		<div class="small-12 columns">
			<h4><?php echo get_field('tools_title'); ?></h4>
			
			<?php if( have_rows('tool') ): ?>

					<div class="tools-panel">
				
					<?php while( have_rows('tool') ): the_row(); 
						
						$copy = get_sub_field('tools_copy');
						$imgcol = wp_get_attachment_image_src(get_sub_field('tools_logo'), 'landscape_thumbnail');
						$tools_link = get_sub_field('tools_link'); ?>
				
						<div class="tool">
				
							<img src="<?php echo $imgcol[0]; ?>" alt="" />
							
							<p><?php echo $copy; ?></p>
							<?php if( $tools_link ): ?>
								<a class="btn btn-more" href="<?php echo $tools_link; ?>">Read More</a>
							<?php endif; ?>
				
						</div>
				
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
			
			
				<!--
			<div class="tools-panel">
				<div class="tool">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
				<div class="tool">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
				<div class="tool">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
				<div class="tool">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
				<div class="tool">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
			</div>
-->
		</div>
	</div>
	
</section>

<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
