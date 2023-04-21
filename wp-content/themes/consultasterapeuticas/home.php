<!-- TEMPLATE PÁGINA BLOG -->
<?php get_header(); ?>

    <section class="container d-md-flex align-items-stretch">
        <div class="content">
            <h2>Blog</h2>
            <div class="container">
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-sm-5 mx-auto text-center">
                            <?php the_title(); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

        <nav class="sidebar">
            <div class="p-4 pt-1">
                <h2>Categorias</h2>
	            <ul class="list-unstyled components mb-5">
                    <?php 
                    $categorias = get_categories();
                    // echo var_dump($categorias);
                    foreach ($categorias as $categoria) { ?>
                        <li><a href="<?php echo $categoria->slug; ?>"><span class="fa fa-chevron-right mr-2"></span><?php echo $categoria->name; ?>(<?php echo $categoria->count; ?>)</a></li> 
                    <?php } ?>
	            </ul>
	        </div>
            <div class="p-4 ot-1">
                <h2>Mais Lidas</h2>
            </div>
            <div class="popular-posts">
                <!-- AQUI VÃO OS POSTS MAIS LIDOS -->
            </div>
    	</nav>
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