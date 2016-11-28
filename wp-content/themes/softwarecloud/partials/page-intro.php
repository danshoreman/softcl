<?php if (is_page('home')) : ?>

<section class="introduction home-intro">
	
<?php else : ?>
	
<section class="introduction <?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>-intro">
	
<?php endif; ?>

	<div class="row">
		<div class="small-12 columns">
			<div class="intro-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>