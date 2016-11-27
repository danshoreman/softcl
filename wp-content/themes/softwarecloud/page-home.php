<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include 'partials/carousel.php'; ?>

<?php include 'partials/page-intro.php'; ?>

<section class="about-us">
	
	<?php 
	$counter = 0;
	if( have_rows('we_are_block') ): ?>

	<div class="Row">

	<?php while( have_rows('we_are_block') ): the_row(); 
		
		$title = get_sub_field('we_are_title'); 
		$imgcol = wp_get_attachment_image_src(get_sub_field('were_left_col'), 'image');
		$rcol = get_sub_field('were_right_col');
		$class = get_sub_field('class_field'); ?>
		
		<div class="<?php echo $class; ?>-block">
			<h3><?php echo $title; ?></h3>
	
			<div class="row">
				<?php if ($counter % 2 === 0) :?>
					<div class="small-12 medium-6 columns img-col">
		
						<img src="<?php echo $imgcol[0]; ?>" alt="" class="">
		
					</div>
					<div class="small-12 medium-6 columns">
		
						<?php echo $rcol; ?>
		
					</div>
				<?php else : ?>
					<div class="small-12 medium-6 medium-push-6 columns img-col">
	
						<img src="<?php echo $imgcol[0]; ?>" alt="" class="">
	
					</div>
					<div class="small-12 medium-6 medium-pull-6 columns">
		
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
			<h3>We're raring to go.</h3>
			
			<p>You won’t find out everything you need to know about us from reading a web page.</p>
			
			<p>This information is for every Tom, Dick and Harry.</p>
			
			<p class="lg-text">We want to talk about you.</p>
			
			<p>Specifically how we can do some great stuff for your business.</p>
			
			<p class="call-us">Call us on 0808 164 0000 and see what we can do.</p>
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
			<h4>Stuff we trust. Because it works.</h4>
			
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
		</div>
	</div>
	
</section>

			

	<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
