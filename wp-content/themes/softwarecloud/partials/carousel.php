
<div class="carousel-wrap">
		<?php $video_content = false;
		  if (have_rows('hero_content')) {
		    while (have_rows('hero_content')) {
		      the_row();
		      if (get_row_layout() == 'video_background_layout') {
		        $video_content = true;
		      }
		    }
		  }
		
	  if ( $video_content ) : ?>
	    <section class="video-header">
	  <?php else : ?>
	    <section class="carousel">
	  <?php endif; ?>

		<?php if( have_rows('hero_content') ) : ?>
    <?php while ( have_rows('hero_content') ) : the_row(); ?>

        <?php if( get_row_layout() == 'video_background_layout' ) : 
	      ?>
	        
					<div class="video-slide">
						<div class="video-wrap">

						</div>
					</div>
	        
					
				<?php elseif( get_row_layout() == 'image_background_layout' ) : 
	        
	        $bgimage = wp_get_attachment_image_src(get_sub_field('background_image'), 'hero'); ?>

					<div class="carousel-slide">
						<div class="carousel-inner scroll-img" <?php if($bgimage) : ?> style="background-image: url(<?php echo $bgimage[0]; ?>);" <?php endif; ?>>
							<div class="row">
								<div class="small-12 columns">
									<div class="carousel-text-block scroll-text"><?php the_sub_field('image_overlay_text'); ?></div>
								</div>
							</div>
						</div>
					</div>
					

				<?php elseif( get_row_layout() == 'logo_on_colour' ) : 
					
					$logo = wp_get_attachment_image_src(get_sub_field('logo'), 'full'); 
					$bgcol = get_sub_field('background_colour'); ?>
				
					<div class="carousel-slide">
						<div class="carousel-inner carousel-logo" <?php if($bgcol) : ?> style="background-color: <?php echo $bgcol; ?>" <?php endif; ?>>
							<div class="row">
								<div class="small-12 columns">
									<?php the_sub_field('background_video'); ?>
									<img src="<?php echo $logo[0]; ?>" alt="" class="">
								</div>
							</div>
						</div>
					</div>

        <?php endif; ?>

   <?php endwhile; ?>
   
  </section>
   
<?php endif; ?>
</div>
<div class="main-content">




