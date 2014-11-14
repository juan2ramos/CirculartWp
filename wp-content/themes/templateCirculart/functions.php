<?php
/**
 * Register latest jQuery, load on footer
 */
function minimal_jquery_script()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1.11.0', true);
    }
}

add_action('wp_enqueue_scripts', 'minimal_jquery_script');

/**
 * Theme setup
 */
function minimal_theme_setup()
{
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support('automatic-feed-links');

    // Custom menu support.
    register_nav_menu('primary', 'Primary Menu');

    // Most themes need featured images.
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'minimal_theme_setup');

/**
 * Remove code from the <head>
 */
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // http://www.tech-evangelist.com/2011/09/05/disable-remove-wordpress-shortlink/
//remove_action('wp_head', 'rsd_link'); // Might be necessary if you or other people on this site use remote editors.
//remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
//remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
//remove_action('wp_head', 'index_rel_link'); // Displays relations link for site index
remove_action('wp_head', 'wlwmanifest_link'); // Might be necessary if you or other people on this site use Windows Live Writer.
//remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
//remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Display relational links for the posts adjacent to the current post.

// http://justintadlock.com/archives/2010/07/08/lowercase-p-dangit
remove_filter('the_title', 'capital_P_dangit', 11);
remove_filter('the_content', 'capital_P_dangit', 11);
remove_filter('comment_text', 'capital_P_dangit', 31);

// Hide the version of WordPress you're running from source and RSS feed // Want to JUST remove it from the source? Try: remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_false');
//Paginación de entradas
function wp_corenavi()
{
    global $wp_query, $wp_rewrite;
    $pages = "";
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1; //1 – muestra el texto “Página N de N”, 0 – para no mostrar nada
    $a['mid_size'] = 5; //cuantos enlaces a mostrar a izquierda y derecha del actual
    $a['end_size'] = 1; //cuantos enlaces mostrar al comienzo y al fin
    $a['prev_text'] = '&laquo; Anterior'; //texto para el enlace “Página siguiente”
    $a['next_text'] = 'Siguiente &raquo;'; //texto para el enlace “Página anterior”
    if ($max > 1) echo '<div class="navigation">';
    //if ($total == 1 && $max > 1) $pages = '<span class="pages">Página ' . $current . 'de ' . $max . '</span>' . "\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}