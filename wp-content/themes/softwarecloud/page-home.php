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
	<!--
	<div class="row">
		<div class="small-12 columns">
			<div class="experts-block">
				<h3>We're Experts</h3>
				
				<div class="row">
					<div class="small-12 medium-6 columns img-col">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/staff.png" alt="" class="">
					</div>
					<div class="small-12 medium-6 columns">
						<p>Talk to us about:</p>
						<ul class="experts-list">
							<li>Microsoft Cloud migration Strategy and execution</li>
							<li>Keeping your data safe and compliant</li>
							<li>Replacing old hardware with virtual desktops</li>
							<li>Special projects advisory, delivery & support</li>
							<li>Making your IT support work better and making you happier</li>
						</ul>
					</div>
				</div>	
			</div>		
		</div>
	</div>
	
	<div class="row">
		<div class="small-12 columns">
			<div class="friendly-block">
				<h3>We're Friendly</h3>
			
				<div class="row">
					<div class="small-12 medium-6 medium-push-6 columns img-col img-alt">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/staff.png" alt="" class="">
					</div>
					<div class="small-12 medium-6 medium-pull-6 columns">
						<p>It might be our decades of experience in IT efficiency that gets us to the table, but it's our personality that keeps us there.</p>
	
						<p>If you don’t succeed, we don’t.</p>
	
						<p>We're not guns for hire, we're part of your team.</p>
						
					</div>
				</div>
			</div>			
		</div>
	</div>
	
	<div class="row">
		<div class="small-12 columns">
			<div class="legal-block">
				<h3>We're Legal Eagles</h3>
			
				<div class="row">
					<div class="small-12 medium-6 columns img-col">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/staff.png" alt="" class="">
					</div>
					<div class="small-12 medium-6 columns">
						<p>Extensive experience with some of the UK's biggest law firms makes us the place to turn for data compliance, case management, and Visualfiles development.</p>
						
						<p>It also makes us the first door you should be knocking on.</p>
					</div>
				</div>		
			</div>	
		</div>
	</div>-->
</section>

<?php // include 'partials/contact-form.php'; ?>

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
			
			
		</div>
	</div>
	
	<div class="partner-wrap">
		<div class="row">
			<div class="small-12 columns">
				<h3>Some of the brilliant clients we're lucky enough to work with.</h3>
				
				<div class="partner-panel">
				
					<div class="partner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					</div>
					<div class="partner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					</div>
					<div class="partner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					</div>
					<div class="partner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					</div>
					<div class="partner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					</div>
					<div class="partner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					</div>
					<div class="partner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					</div>
					
				</div>
				
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
