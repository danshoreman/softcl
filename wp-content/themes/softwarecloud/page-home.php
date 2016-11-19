<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="carousel">
	
	<?php if ( has_post_thumbnail()) : ?>
						
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumbnail">
		
			<?php the_post_thumbnail(); ?>
		
		</a>
	
	<?php endif; ?>
	
	<div class="row">
		<div class="small-12 columns">
			<h1>
				<span class="">Things we love #39867:</span><br>
				Making your<br>big IT ideas work.
			</h1>
		</div>
	</div>
</section>


<section class="introduction">
	<div class="row">
		<div class="small-12 columns">
			<h2>We're obsessed with making your business run better, faster and cheaper.</h2>
	
			<p>IT's just the way we happen to do it. 
			And the Cloud is where we do it.</p>
			
			<p>(Well... the Cloud and Leeds.)</p>
			
			<p>Why you’ve come to the right place</p>
		</div>
	</div>
</section>


<section class="about-us">
	
	<div class="row">
		<div class="small-12 columns">
			
			<h3>We're Experts</h3>
			
			<div class="row">
				<div class="small-12 columns">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/staff.png" alt="" class="">
				</div>
				<div class="small-12 columns">
					<p>Talk to us about:</p>
					<ul>
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
	
	
	<div class="row">
		<div class="small-12 columns">
			
			<h3>We're Friendly</h3>
			
			<div class="row">
				<div class="small-12 columns">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/staff.png" alt="" class="">
				</div>
				<div class="small-12 columns">
					<p>It might be our decades of experience in IT efficiency that gets us to the table, but it's our personality that keeps us there.</p>

					<p>If you don’t succeed, we don’t.</p>

					<p>We're not guns for hire, we're part of your team.</p>
				</div>
			</div>			
		</div>
	</div>
	
	<div class="row">
		<div class="small-12 columns">
			
			<h3>We're Legal Eagles</h3>
			
			<div class="row">
				<div class="small-12 columns">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/staff.png" alt="" class="">
				</div>
				<div class="small-12 columns">
					<p>Extensive experience with some of the UK's biggest law firms makes us the place to turn for data compliance, case management, and Visualfiles development.</p>
					
					<p>It also makes us the first door you should be knocking on.</p>
				</div>
			</div>			
		</div>
	</div>
</section>

<section class="raring">
	<div class="row">
		<div class="small-12 columns">
			<h3>We're raring to go.</h3>
			
			<p>You won’t find out everything you need to know about us from reading a web page.</p>
			
			<p>This information is for every Tom, Dick and Harry.</p>
			
			<p>We want to talk about you.</p>
			
			<p>Specifically how we can do some great stuff for your business.</p>
			
			<p>Call us on 0808 164 0000 and see what we can do.</p>
		</div>
	</div>
</section>

<section class="trust-panel">
	<div class="row">
		<div class="small-12 columns">
			<h4>Stuff we trust. Because it works.</h4>
			
			<div class="row">
				<div class="small-12 large-fifth columns partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
				<div class="small-12 large-fifth columns partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
				<div class="small-12 large-fifth columns partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
				<div class="small-12 large-fifth columns partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
				<div class="small-12 large-fifth columns partner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/home/microsoft-partner.png" alt="" class="">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris pharetra, sollicitudin erat non, posuere lectus. Cras laoreet risus enim.</p>
					<button class="btn btn-more">Read More</button>
				</div>
			</div>
		</div>
	</div>
	
</section>


	<div class="row">
	
		<div class="small-12 columns" role="main">

			

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
				
				<header class="article-header">

					<h1 itemprop="headline"><?php the_title(); ?></h1>

				</header>

				<section class="entry-content" itemprop="articleBody">
					
					<?php the_content(); ?>

				</section>

				<?php comments_template(); ?>

			</article>

			<?php endwhile; else : ?>

			<article class="post-not-found">
			
				<header class="not-found-header">
					
					<h2><?php _e( 'Nothing Found!' ); ?></h2>
				
				</header>
				
				<section class="not-found-content">
					
					<p><?php _e( 'Please check what you are looking for.' ); ?></p>
				
				</section>
			
			</article>

			<?php endif; ?>

		</div>

	</div>

<?php get_footer(); ?>