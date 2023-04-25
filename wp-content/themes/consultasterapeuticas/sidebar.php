<nav class="sidebar">
            <div class="categorias p-4 pt-5">
                <h2>Categorias</h2>
	            <ul class="list-unstyled components mb-5">
                    <?php 
                    $categorias = get_categories();
                    foreach ($categorias as $categoria) { ?>
                        <li><a href="<?php echo get_term_link($categoria); ?>"><span class="fa fa-chevron-right mr-2"></span><?php echo $categoria->name; ?> (<?php echo $categoria->count; ?>)</a></li> 
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