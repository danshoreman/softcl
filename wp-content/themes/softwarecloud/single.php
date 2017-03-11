<?php get_header(); ?>
	
	<?php while (have_posts()) : the_post(); 
				
			$image_id = get_post_thumbnail_id(); 
			$image_url = wp_get_attachment_image_src($image_id,'full'); 
		?>
	
	<div class="single-header" <?php if($image_url) : ?> style="background-image: url(<?php echo $image_url[0]; ?>);" <?php endif; ?>>
	</div>
	<div class="row">
	
		<div class="small-12 large-8 columns" role="main">
				<header>
					<h1 class="single-title"><?php the_title(); ?></h1>
				</header>
					
					<?php the_content();

/*
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
*/
				
					endwhile; ?>
	
		</div>
	
		<div class="small-12 large-4 columns">
		
			<?php get_sidebar(); ?>
			
		</div>

	</div>

<?php get_footer();
