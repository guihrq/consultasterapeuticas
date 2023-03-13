        <footer>
            <nav>
                <?php 
                    $args = array (
                        'menu' => 'principal',
                        'container' => false
                    );
                    wp_nav_menu($args);
                ?>
            </nav>

            <p><?php echo date("Y"); ?></p>
        </footer>

        <!-- Footer Wordpress -->
        <?php wp_footer(); ?>
        <!-- Fecha Footer Wordpress -->
    </body>
</html>