<!-- TEMPLATE POSTS BLOG -->
<?php get_header('blog'); ?>

<section class="container d-md-flex align-items-stretch interna-post">
        <div class="content">
            <div class="container">
                <h2>Blog</h2>
                <div class="row pt-5">
                    <p><?php echo date("d/m/Y"); ?></p>
                    <div class="col-sm-12 pt-2">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="row">
                                <div class="col-sm-12 pb-2 pt-2">
                                    <cite><b>por:</b> <?php the_field('citacao'); ?></cite>
                                </div>
                                <div class="col-sm-12 pb-5 pt-3">
                                    <img src="<?php the_field('banner_post'); ?>" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 conteudo pb-5">
                                    <?php echo apply_filters('the_content', get_field('conteudo')); ?>
                                </div>
                            </div>
                    <?php endwhile; else: ?>
                        <p><?php echo ('Desculpe, não exitem posts'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php get_sidebar(); ?>
    </section>
    
<?php get_footer(); ?>