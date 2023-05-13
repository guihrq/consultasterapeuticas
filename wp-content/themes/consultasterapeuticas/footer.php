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
                    <a href="mailto:atend.consultasterapeuticas@gmail.com">atend.consultasterapeuticas@gmail.com</a>
                    <p>Copyrights <?php echo date("Y"); ?> - Todos os direitos reservados.</p>
                </div>
                <!-- Back to top button -->
                <div class="img-topo">
                    <img id="button" src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-topo.png" alt="Seta Topo">
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
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <!-- Scripts -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
    </body>
</html>