<?php
/**
 * AuraCure Medical Theme Functions and Definitions
 *
 * @package AuraCure
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Setup Theme Defaults and Support
 */
function devnahian_auracare_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

    // Register Dynamic Navigation Menus
    register_nav_menus(
        array(
            'primary-menu'   => esc_html__( 'Primary Menu', 'devnahian-auracare' ),
            'mobile-menu'    => esc_html__( 'Mobile Off-Canvas Menu', 'devnahian-auracare' ),
            'footer-menu-1'  => esc_html__( 'Footer Menu - Departments', 'devnahian-auracare' ),
            'footer-menu-2'  => esc_html__( 'Footer Menu - Patient Resources', 'devnahian-auracare' ),
            'footer-menu-3'  => esc_html__( 'Footer Menu - Legal & Compliance', 'devnahian-auracare' ),
        )
    );
}
add_action( 'after_setup_theme', 'devnahian_auracare_setup' );

/**
 * Enqueue Styles and Scripts Dynamically
 */
function devnahian_auracare_scripts() {
    // Enqueue Google Fonts (Plus Jakarta Sans & Inter)
    wp_enqueue_style(
        'devnahian-auracare-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Enqueue Main Stylesheet (style.css)
    wp_enqueue_style(
        'devnahian-auracare-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'devnahian-auracare-main',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0.0'
    );

    // Enqueue Main JavaScript located in /assets/js/main.js
    wp_enqueue_script(
        'devnahian-auracare-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'devnahian_auracare_scripts' );

/**
 * Custom Excerpt Length for Journal/Blog Cards
 */
function devnahian_auracare_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'devnahian_auracare_excerpt_length', 999 );

/**
 * Custom Excerpt Read More Ellipsis
 */
function devnahian_auracare_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'devnahian_auracare_excerpt_more' );

/**
 * Custom Nav Walker for Exact AuraCure Menu Design
 */
class DevNahian_AuraCure_Nav_Walker extends Walker_Nav_Menu {
    
    // Start Level (Dropdown Container)
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"devnahian-auracare-dropdown-menu\">\n";
    }

    // Start Element (List Item & Link)
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        // Check if item has children for dropdown styling
        $has_children = in_array( 'menu-item-has-children', $classes );
        
        if ( $depth === 0 ) {
            $li_class = 'devnahian-auracare-nav-item';
            if ( $has_children ) {
                $li_class .= ' menu-item-has-children';
            }
        } else {
            $li_class = 'devnahian-auracare-dropdown-item';
        }

        if ( in_array( 'current-menu-item', $classes ) || in_array( 'current_page_item', $classes ) ) {
            $li_class .= ' active';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $li_class ? ' class="' . esc_attr( $li_class ) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';

        if ( $depth === 0 ) {
            $atts['class'] = 'devnahian-auracare-nav-link';
            if ( in_array( 'current-menu-item', $classes ) ) {
                $atts['class'] .= ' active';
            }
        } else {
            $atts['class'] = 'devnahian-auracare-dropdown-link';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = isset( $args->before ) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= isset( $args->link_before ) ? $args->link_before : '';
        $item_output .= $title;
        
        // Append dropdown SVG arrow if root item has children
        if ( $depth === 0 && $has_children ) {
            $item_output .= ' <svg class="devnahian-auracare-arrow-icon" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>';
        }

        $item_output .= isset( $args->link_after ) ? $args->link_after : '';
        $item_output .= '</a>';
        $item_output .= isset( $args->after ) ? $args->after : '';

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

/**
 * Include Custom Post Types
 */
require_once get_template_directory() . '/inc/cpt-doctors.php';
require_once get_template_directory() . '/inc/cpt-departments.php';
require_once get_template_directory() . '/inc/theme-settings.php';
require_once get_template_directory() . '/inc/admin-appointments.php';