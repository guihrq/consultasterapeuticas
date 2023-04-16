        <footer>
            <!-- <nav>
                <?php 
                    // $args = array (
                    //     'menu' => 'principal',
                    //     'container' => false
                    // );
                    // wp_nav_menu($args);
                ?>
            </nav> -->

            <a href="">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo.png" alt="Logo Consultas Terapeuticas">
            </a>
            <a href="">Incrições on-line</a>
            <a href="malito:consultas@consultasterapeuticas.com.br">consultas@consultasterapeuticas.com.br</a>
            <p>Copyrights <?php echo date("Y"); ?> - Todos os direitos reservados.</p>
            <a href="#topo">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-topo.png" alt="Seta Topo">
            </a>
        </footer>

        <!-- Footer Wordpress -->
        <?php wp_footer(); ?>
        <!-- Fecha Footer Wordpress -->
    </body>
</html>