<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Fim Fontes -->

    <!-- Estilo CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <!-- Fim Estilo CSS -->

    <title><?php bloginfo('name'); ?></title>

    <!-- Header Wordpress -->
    <?php wp_head(); ?>
    <!-- Fecha Header Wordpress -->
</head>
<body>
    <header class="menu-bg" id="topo">
        <div class="menu">
            <div class="menu-logo">
                <a href="">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo.png" alt="Logo Consultas Terapeuticas">
                </a>
            </div>
            <nav class="menu-nav">
                <ul>
                    <li><a href="#coletivo">O Coletivo</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="#nossa-historia">Nossa História</a></li>
                    <li><a href="#profissionais">Profissionais</a></li>
                </ul>
                <!-- <?php 
                    // $args = array (
                    //     'menu' => 'principal',
                    //     'container' => false
                    // );
                    // wp_nav_menu($args);
                ?> -->
            </nav>
            <a class="btn-form" href="">Inscrições On-Line</a>
        </div>
    </header>