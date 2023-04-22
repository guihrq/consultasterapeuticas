<!-- TEMPLATE BLOG -->
<?php get_header('blog'); ?>

    <section class="container d-md-flex align-items-stretch lista-posts">
        <div class="content">
            <div class="container">
                <h2>Blog</h2>
                <div class="row pt-5">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php
                            global $post;
                            $post_slug = $post->post_name;
                        ?>
                        <div class="col-sm-6 pb-3 pt-1">
                            <div class="col-sm-10">
                                <img src="<?php the_field('post_thumb'); ?>" alt="">
                            </div>
                            <div class="col-sm-10 px-1 pt-1">
                                <p class="px-1"><?php echo date("d/m/Y"); ?></p>
                                <h3><a href="/blog/<?php echo $post_slug; ?>"><?php the_title(); ?></a></h3>
                                <cite><b>por:</b> <?php the_field('citacao'); ?></cite>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

        <nav class="sidebar">
            <div class="categorias p-4 pt-5">
                <h2>Categorias</h2>
	            <ul class="list-unstyled components mb-5">
                    <?php 
                    $categorias = get_categories();
                    // echo var_dump($categorias);
                    foreach ($categorias as $categoria) { ?>
                        <li><a href="<?php echo $categoria->slug; ?>"><span class="fa fa-chevron-right mr-2"></span><?php echo $categoria->name; ?> (<?php echo $categoria->count; ?>)</a></li> 
                    <?php } ?>
	            </ul>
	        </div>
            <!-- <div class="popular-posts p-4 ot-1">
                <h2>Mais Lidas</h2>
                <ul class="list-unstyled components mb-5">
                    <p>AQUI VÃO OS POSTS MAIS LIDOS</p>
                </ul>
            </div> -->
    	</nav>
    </section>
    
    <section class="container d-md-flex align-items-stretch paginacao">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pt-5 mb-5">
                        <p class="btn-paginacao"><?php next_posts_link( '< Posts Antigos' ); ?></p>
                    </div>
                    <div class="col-sm-6 pt-5 mb-5">
                        <p class="btn-paginacao"><?php previous_posts_link( 'Posts Recentes >' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php else: endif; ?>
    
<?php get_footer(); ?>