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
        <?php if (!wp_is_mobile()) { ?>
            <div class="footer" style="width: 80%;">
        <?php } else { ?>
            <div class="footer" style="width: 100%;">
        <?php } ?>
                <div class="footer-logo">
                    <a href="/">
                        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo.png" alt="Logo Consultas Terapeuticas">
                    </a>
                </div>
                <a href="/formulario" class="btn-form">Incrições on-line</a>
                <div class="contato">
                    <a href="malito:consultas@consultasterapeuticas.com.br">consultas@consultasterapeuticas.com.br</a>
                    <p>Copyrights <?php echo date("Y"); ?> - Todos os direitos reservados.</p>
                </div>
                <div class="img-topo">
                    <a href="#topo">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-topo.png" alt="Seta Topo">
                    </a>
                </div>
            </div>
        </footer>

        <!-- Footer Wordpress -->
        <?php wp_footer(); ?>
        <!-- Fecha Footer Wordpress -->
        <!-- Bootstrap 5.3.0 -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap/bootstrap.js"></script>
        <!-- Carrossel -->
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <!-- Instafeed -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/instafeed/instafeed.min.js"></script>
        <!-- Scripts -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
    </body>
</html>