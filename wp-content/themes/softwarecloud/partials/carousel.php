<?php 

	$image_id = get_post_thumbnail_id(); 
	$image_url = wp_get_attachment_image_src($image_id,'hero');

?>


<section class="carousel">
	<div class="carousel-slide">
		<div class="carousel-inner" <?php if($image_url) : ?> style="background-image: url(<?php echo $image_url[0]; ?>);" <?php endif; ?>>
			<div class="row">
				<div class="small-12 columns">
					<h1>
						<span class="disclaimer">Things we love #39867:</span><br>
						Making your <br>big IT ideas work.
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel-slide">
		<div class="carousel-inner" <?php if($image_url) : ?> style="background-image: url(<?php echo $image_url[0]; ?>);" <?php endif; ?>>
			<div class="row">
				<div class="small-12 columns">
					<h1>
						<span class="disclaimer">Things we love #39867:</span><br>
						Making your <br>big IT ideas work.
					</h1>
				</div>
			</div>
		</div>
	</div>
</section>


<?php /*if( have_rows('carousel') ): ?>

	<section class="carousel">

	<?php  while ( have_rows('carousel') ) : the_row(); ?>
		
		<div class="">

		<?php if( get_row_layout() == 'background_image' ): ?>

        <?php $bg_image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
				<div class="carousel-inner" <?php if($bg_image) : ?> style="background-image: url(<?php echo $bg_image[0]; ?>);" <?php endif; ?>>
					<div class="row">
						<div class="small-12 columns">
							<?php echo get_sub_field('overlay_text'); ?>
						</div>
					</div>
				</div>
				
				<?php elseif( get_row_layout() == 'background_video' ): ?>

        <?php	//$vid = get_sub_field('video'); 
	        
	        $hero_video			= get_sub_field('video'); 
					$hero_poster 		= wp_get_attachment_image_src(get_sub_field('video_poster'), 'full')
	        
	        
        ?>
				<div class="carousel-inner" >
					
					
					<div class="hero-wrap video-panel">
					  <div class="video-contain">
						  <video autoplay="true" loop="true" muted poster="<?php echo $hero_poster[0]; ?>" id="video-bg">
							  <source src="<?php echo $hero_video; ?>" type="video/mp4">
						  </video>
					  </div>
					</div>
    
    
					<div class="row">
						<div class="small-12 columns">
							<?php echo $vid ?>
							<?php echo get_sub_field('video_text'); ?>
						</div>
					</div>
				</div>
    
    <?php endif; ?>
       
		</div>

	<?php endwhile; ?>

	</section>

<?php endif; */ ?>
