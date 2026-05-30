<?php
/**
 * Robles Carports Elementor Theme
 */

function rc_elementor_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption'));
    add_theme_support('elementor');
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'rc-elementor'),
        'footer'  => esc_html__('Footer Menu', 'rc-elementor'),
    ));
}
add_action('after_setup_theme', 'rc_elementor_setup');

function rc_elementor_assets() {
    wp_enqueue_style('rc-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_script('gsap-core', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
    wp_enqueue_script('gsap-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap-core'), '3.12.5', true);
    wp_enqueue_script('gsap-scrollto', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js', array('gsap-core'), '3.12.5', true);
    wp_enqueue_style('rc-style', get_stylesheet_uri(), array('rc-inter'), '2.0.0');
    wp_enqueue_script('rc-main', get_template_directory_uri() . '/assets/js/main.js', array('gsap-core','gsap-scroll','gsap-scrollto'), '2.0.0', true);
    wp_localize_script('rc-main', 'rcAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'rc_elementor_assets');

function rc_elementor_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'rc-elementor'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'rc_elementor_widgets_init');

function rc_elementor_fallback_menu() {
    echo '<ul class="rc-nav-links">';
    echo '<li><a href="#beneficios">Beneficios</a></li>';
    echo '<li><a href="#galeria">Galería</a></li>';
    echo '<li><a href="#proceso">Proceso</a></li>';
    echo '<li><a href="#testimonios">Testimonios</a></li>';
    echo '</ul>';
}

// Remove emojis and cleanup
function rc_elementor_cleanup() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
}
add_action('after_setup_theme', 'rc_elementor_cleanup');

// Dequeue block editor styles
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}, 100);
