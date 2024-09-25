<?php
/**
 * My Custom Theme functions and definitions
 *
 * @link       https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @copyright  Copyright (c) 2019, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Register one navigation menu.
 */
 register_nav_menus(
	array(
		'menu-1' => esc_html__( 'Primary Menu', 'my-custom-theme' ),
	)
);

/**
 * Register one sidebar.
 */
function my_custom_theme_sidebar() {
    register_sidebar( array(
        'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
        'id'   => 'sidebar-1',
    ) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );

// Add featured image functionality.
add_theme_support( 'post-thumbnails' );

add_image_size( 'my-custom-image-size', 640, 999 );

// Add title tag functionality.
add_theme_support( 'title-tag' );

/**
 * Enqueue a stylesheet.
 */
function my_custom_theme_enqueue() {
    wp_enqueue_style( 'my-custom-theme', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );

function custom_scripts() {
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );
function custom_theme_styles() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );
function start_session() {
    if( !session_id() ) {
        session_start();
    }
}
add_action('init', 'start_session');

// Track the search queries
function track_search_queries() {
    if ( is_search() && !empty( get_search_query() ) ) {
        $search_query = sanitize_text_field( get_search_query() );
        
        // Initialize session if not set
        if( !isset($_SESSION['recent_searches']) ) {
            $_SESSION['recent_searches'] = array();
        }
        
        // Store the search query and ensure uniqueness
        if( !in_array( $search_query, $_SESSION['recent_searches'] ) ) {
            array_unshift( $_SESSION['recent_searches'], $search_query ); // Add to the beginning of the array
        }
        
        // Limit the number of stored search queries (e.g., 10)
        if ( count( $_SESSION['recent_searches'] ) > 10 ) {
            array_pop( $_SESSION['recent_searches'] ); // Remove the last item if more than 10
        }
    }
}
add_action( 'template_redirect', 'track_search_queries' );
function mytheme_register_menus() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'mytheme' ),
    ) );
}
add_action( 'init', 'mytheme_register_menus' );
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Start Level
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $classes = array('sub-menu');
        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= "\n$indent<ul$class_names>\n";
    }

    // Start Element
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= $indent . '<li' . $class_names . '>';
        $attributes = array();
        $attributes['title']  = !empty($item->attr_title) ? esc_attr($item->attr_title) : '';
        $attributes['target'] = !empty($item->target) ? esc_attr($item->target) : '';
        $attributes['rel']    = !empty($item->xfn) ? esc_attr($item->xfn) : '';
        $attributes['href']   = !empty($item->url) ? esc_url($item->url) : '';

        $attributes = apply_filters('nav_menu_link_attributes', $attributes, $item, $args, $depth);
        $attributes = join(' ', apply_filters('nav_menu_attributes', $attributes, $item, $args, $depth));
        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
