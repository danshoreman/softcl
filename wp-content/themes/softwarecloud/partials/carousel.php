<?php if( have_rows('hero_content') ) : ?>

  <section class="carousel" >
     
    <?php while ( have_rows('hero_content') ) : the_row(); ?>

        <?php if( get_row_layout() == 'image_background_layout' ) : 
	        
	        $bgimage = wp_get_attachment_image_src(get_sub_field('background_image'), 'hero'); ?>

					<div class="carousel-slide">
						<div class="carousel-inner" <?php if($bgimage) : ?> style="background-image: url(<?php echo $bgimage[0]; ?>);" <?php endif; ?>>
							<div class="row">
								<div class="small-12 columns">
									<?php the_sub_field('image_overlay_text'); ?>
								</div>
							</div>
						</div>
					</div>

        <?php elseif( get_row_layout() == 'video_background_layout' ) : ?>

					<div class="carousel-slide">
						<div class="carousel-inner">
							<div class="row">
								<div class="small-12 columns">
									<?php the_sub_field('background_video'); ?>
									<?php the_sub_field('video_overlay_text'); ?>
								</div>
							</div>
						</div>
					</div>

				<?php elseif( get_row_layout() == 'logo_on_colour' ) : 
					
					$bgcol = the_sub_field('background_colour');
					$logo = wp_get_attachment_image_src(get_sub_field('logo'), 'full'); ?>
				
					<div class="carousel-slide">
						<div class="carousel-inner" <?php /* if($bgcol) : */ ?> style="background-color: <?php the_sub_field('background_colour'); ?>" <?php /* endif; */ ?>>
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


