<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- Header Wordpress -->
    <?php wp_head(); ?>
    <!-- Fecha Header Wordpress -->
</head>
<body>
    <header>
        <nav>
            <?php 
                $args = array (
                    'menu' => 'principal',
                    'container' => false
                );
                wp_nav_menu($args);
            ?>
        </nav>
    </header>