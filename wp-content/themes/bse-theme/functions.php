<?php
function bse_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bse-theme'),
        'footer' => __('Footer Menu', 'bse-theme'),
    ));
}
add_action('after_setup_theme', 'bse_theme_setup');

function bse_enqueue_scripts() {
    // Enqueue Bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);

    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    // Enqueue custom styles
    wp_enqueue_style('bse-custom-styles', get_template_directory_uri() . '/assets/css/custom-styles.css');

    // Enqueue custom scripts
    wp_enqueue_script('bse-custom-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'bse_enqueue_scripts');

// Custom function to display navigation menu with Bootstrap classes
function bse_bootstrap_nav_menu() {
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'primaryNavigation',
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ));
}

// Bootstrap 5 nav walker class
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= "<ul class='dropdown-menu'>";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $item_output = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        
        if(in_array('menu-item-has-children', $classes)) {
            $classes[] = 'dropdown';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="nav-item ' . esc_attr($class_names) . '"';
        
        $output .= "<li" . $class_names . ">";
        
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $attributes .= ($args->walker->has_children) ? ' class="nav-link dropdown-toggle" data-bs-toggle="dropdown"' : ' class="nav-link"';
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}