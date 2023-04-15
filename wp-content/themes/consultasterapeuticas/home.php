<?php get_header(); ?>

    <h1>Esse é o Blog</h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_title(); ?>

    <?php endwhile; ?> 

        <?php next_posts_link( '<- Posts Antigos' ); ?>
        <?php previous_posts_link( '<- Posts Recentes' ); ?>

    <?php else: endif; ?>
    
<?php get_footer(); ?>