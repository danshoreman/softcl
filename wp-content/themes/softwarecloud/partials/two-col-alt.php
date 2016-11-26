<?php 
	$counter = 0;
	if( have_rows('two_column_layout') ): ?>

	<div class="two-col-alt">

	<?php while( have_rows('two_column_layout') ): the_row(); 

		$lcol = get_sub_field('left_column');
		$rcol = get_sub_field('right_column'); ?>

		<div class="row">
			<?php if ($counter % 2 === 0) :?>
				<div class="small-12 large-6 large-push-6 columns otherlcol">
	
					<?php echo $rcol; ?>
	
				</div>
				<div class="small-12 large-6 large-pull-6 columns otherrcol">
	
					<?php echo $lcol; ?>
	
				</div>
			<?php else : ?>
				<div class="small-12 large-6 columns lcol">

				<?php echo $lcol; ?>

				</div>
				<div class="small-12 large-6 columns rcol">
	
					<?php echo $rcol; ?>
	
				</div>
			<?php endif; ?>
		</div>

	<?php $counter++;
		endwhile; ?>

	</div>

<?php endif; ?>