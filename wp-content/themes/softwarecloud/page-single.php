<?php get_header(); 
	
	/*
	Template Name: Single Column
	*/
	
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include 'partials/carousel.php'; ?>

<div class="row">
	<div class="small-12 large-8 large-offset-2 columns single-column">
		<?php the_content(); ?>
	</div>
</div>

<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
