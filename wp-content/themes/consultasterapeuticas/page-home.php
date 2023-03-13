<?php
// Template Name: Home 
?>

<?php get_header(); ?>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

<h1>Essa é a Home</h1>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>