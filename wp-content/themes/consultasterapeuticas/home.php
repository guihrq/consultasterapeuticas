<!-- TEMPLATE PÁGINA BLOG -->
<?php get_header(); ?>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto pt-5 mb-4 text-center">
                    <h2>Esse é o Blog</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="posts">
        <div class="container">
            <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
                <div class="col-sm-6 mx-auto text-center">
                    <?php the_title(); ?>
                </div>

    <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="paginacao">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto pt-5 mb-4 text-center">
                    <?php next_posts_link( '<- Posts Antigos' ); ?>
                    <?php previous_posts_link( '<- Posts Recentes' ); ?>
                </div>
            </div>
        </div>
    </section>

    <?php else: endif; ?>
    
<?php get_footer(); ?>