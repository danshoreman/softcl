<?php 
	$counter = 0;
	if( have_rows('two_col_img_text') ): ?>

	<div class="two-col-img-txt">

	<?php while( have_rows('two_col_img_text') ): the_row(); 

		$imgcol = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail');
		$txtcol = get_sub_field('text'); ?>

		<div class="row">
			<?php if ($counter % 2 === 0) :?>
				<div class="small-12 large-6 columns otherlcol">
	
					<img src="<?php echo $imgcol[0]; ?>" alt="">
	
				</div>
				<div class="small-12 large-6 columns otherrcol">
	
					<?php echo $txtcol; ?>
	
				</div>
			<?php else : ?>
				<div class="small-12 large-6 large-push-6 columns lcol">

					<?php echo $txtcol; ?>

				</div>
				<div class="small-12 large-6 large-pull-6 columns rcol">
	
					<img src="<?php echo $imgcol[0]; ?>" alt="">
	
				</div>
			<?php endif; ?>
		</div>

	<?php $counter++;
		endwhile; ?>

	</div>

<?php endif; ?>