<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include 'partials/carousel.php'; ?>

<?php include 'partials/page-intro.php'; ?>

<?php include 'partials/two-col-main.php' ?>

<?php include 'partials/contact-form.php'; ?>

<?php endwhile;  ?>
<?php endif; ?>


<?php get_footer(); ?>
