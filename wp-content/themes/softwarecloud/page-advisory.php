<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include 'partials/carousel.php'; ?>
	
	<div class="cloud-intro">
		<div class="row">
			<div class="small-12 columns">
				<p>Yep. We said ‘in a nutshell’, and there was a picture of a nutshell. It’s not that clever. Do you know what *is* clever? The stuff we can do to make your business better and your life a more peaceful place.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="small-12 columns">
				<h3>Cloud</h3>
				<p>We might be wearing odd socks
					by accident, but we’re not called
					Software Cloud by accident.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="small-12 medium-6 columns">
				<h4>Design & Planning</h4>
				<p>Success is 100% preparation, 100% expertise.<br>And apparently 0% maths.</p>
			</div>
			<div class="small-12 medium-6 columns">
				<h4>Readiness Assessment</h4>
				<p>Weeding out the pitfalls and making<br> sure you’re clear for take-o.</p>
			</div>
			<div class="small-12 medium-6 columns">
				<h4>Proof of Concept</h4>
				<p>We’ve talked about it plenty. <br>Now see it in action.</p>
			</div>
			<div class="small-12 medium-6 columns">
				<h4>Design & Planning</h4>
				<p>Success is 100% preparation, 100% expertise.<br>And apparently 0% maths.</p>
			</div>
			<div class="small-12 medium-6 columns">
				<h4>Support</h4>
				<p>We haven’t just got good ideas,<br>we’ve got your back too.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="small-12 columns">
				<p>Video</p>
			</div>
		</div>
		
	</div>
	
	<div class="service-panel">
		<div class="row">
			<div class="small-12 medium-6 columns">
				<h4>Sanity as<br> a Service</h4>
				
				<p>Wouldn’t it be nice to have smart, self-sustaining services that look after themselves?</p>
				
				<p>You know, as if someone was doing all the tricky bits for you?</p>
				
				<p>...Hello!</p>
			</div>
			<div class="small-12 medium-6 columns">
				<p>Development<br>as a Service</p>
				<p>Disaster Recovery<br>as a Service</p>
				<p>Analytics & Reporting<br>as a Service</p>
				<p>Security<br>as a Service</p>
				<p>Backup<br>as a Service</p>
			</div>
		</div>
	</div>
	
	<div class="service-panel">
		<div class="row">
			<div class="small-12 medium-6 columns">
				<h3>Behind the curtain</h3>
				<p>A few of the tools we use to make the magic happen</p>
				
				<ul>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class=""></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class=""></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class=""></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class=""></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class=""></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="contact-form">
		<div class="row">
			<div class="small-12 columns">
				<p>We’re in our element with bespoke projects, making business
				cases, and delivering the solutions other people don’t think of.</p>
				<p>If you’ve got a project we can help with,
				call us on 0808 164 0000 or fill out the form below.</p>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
			</div>
		</div>
	</div>
	
	<?php include 'partials/page-intro.php'; ?>
	
	<?php include 'partials/two-col-alt.php'; ?>

	<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
