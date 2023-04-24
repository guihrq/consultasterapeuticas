<?php 

    // Funções para Limpar o Header
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0 );
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Habilitar Menus
    // add_theme_support('menus');

    function create_post_type() {

        register_post_type( 'profissionais',
            array(
            'labels'             => array(
                'name'               => 'Profissionais',
                'singular_name'      => 'Profissional',
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position'      => 16,
            'menu_icon' => 'dashicons-id-alt',
            'supports' => array( 'title', 'editor' ),
            'rewrite' => false,
            'query_var' => false,
            'publicly_queryable' => false,
            )
        );

        register_post_type( 'parceiros',
            array(
            'labels'             => array(
                'name'               => 'Parceiros',
                'singular_name'      => 'Parceiro',
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position'      => 16,
            'menu_icon' => 'dashicons-groups',
            'supports' => array( 'title', 'editor' ),
            'rewrite' => false,
            'query_var' => false,
            'publicly_queryable' => false,
            )
        );
    }
    add_action( 'init', 'create_post_type' );

    /** Pagination */
    function pagination_funtion() {
    // Get total number of pages
    global $wp_query;
    $total = $wp_query->max_num_pages;
    // Only paginate if we have more than one page                   
    if ( $total > 1 )  {
        // Get the current page
        if ( !$current_page = get_query_var('paged') )
            $current_page = 1;
                            
            $big = 999999999;
            // Structure of "format" depends on whether we’re using pretty permalinks
            $permalink_structure = get_option('permalink_structure');
            $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
            echo paginate_links(array(
                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format' => $format,
                'current' => $current_page,
                'total' => $total,
                'mid_size' => 2,
                'type' => 'list'
            ));
        }
    }
    /** END Pagination */

    // CONTADOR DE POSTS MAIS VISITADOS
    
?>