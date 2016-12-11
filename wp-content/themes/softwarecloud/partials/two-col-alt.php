<?php 
	$counter = 0;
	if( have_rows('two_column_layout') ): ?>

	<div class="two-col-alt">

	<?php while( have_rows('two_column_layout') ): the_row(); 

		$lcol = get_sub_field('left_column');
		$rcol = get_sub_field('right_column'); ?>

		<?php if ($counter % 2 === 0) :?>
			<div class="two-col">
				<div class="lcol os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
	
					<div class="text-wrap">
						<?php echo $rcol; ?>
					</div>
	
				</div>
				<div class="rcol os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
	
					<div class="text-wrap">
						<?php echo $lcol; ?>
					</div>
	
				</div>
			</div>
		<?php else : ?>
			<div class="two-col flipped">
				<div class="lcol os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">

					<div class="text-wrap">
						<?php echo $lcol; ?>
					</div>
					
				</div>
				<div class="rcol os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
					
					<div class="text-wrap">
						<?php echo $rcol; ?>
					</div>
				
				</div>
			</div>
			<?php endif; ?>
		

	<?php $counter++;
		endwhile; ?>

	</div>

<?php endif; ?>