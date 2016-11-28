<div class="two-col-main">
	
	<?php $counter = 0;
	if( have_rows('columns') ): 
	
	while( have_rows('columns') ): the_row(); 
	
		$colone = get_sub_field('column_one');
		$coltwo = get_sub_field('column_two');
		
	?>
	
		<?php if ($counter % 2 === 0) :?>
			
			<div class="two-col-inner">
				<div class="colone">
					<div class="single-col-inner">
						<?php echo $colone; ?>
					</div>
				</div>
				<div class="coltwo">
					<div class="single-col-inner">
						<?php echo $coltwo; ?>
					</div>
				</div>
			</div>
		
		<?php else : ?>
		
			<div class="two-col-inner reversed">
				<div class="colone">
					<div class="single-col-inner">
						<?php echo $colone; ?>
					</div>
				</div>
				<div class="coltwo">
					<div class="single-col-inner">
						<?php echo $coltwo; ?>
					</div>
				</div>
			</div>
		
		<?php endif; ?>
	
	<?php $counter++;
		endwhile; ?>

	<?php endif; ?>
</div>