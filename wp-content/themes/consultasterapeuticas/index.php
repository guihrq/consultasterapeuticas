<!-- TEMPLATE POSTS BLOG -->
<?php get_header(); ?>

<section class="container d-md-flex align-items-stretch">
        <div class="content">
            <div class="container">
                <p><?php echo date("d/m/Y"); ?></p>
                <h1><?php the_title(); ?></h1>
                <div class="row">
                    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="<?php the_field('banner_post'); ?>" alt="">
                                    <cite><?php the_field('citacao'); ?></cite>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php the_field('conteudo'); ?>
                                </div>
                            </div>
                    <?php endwhile; else: ?>
                        <p><?php echo ('Desculpe, não exitem posts'); ?></p>
                    <?php endif; ?>
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
    
<?php get_footer(); ?>