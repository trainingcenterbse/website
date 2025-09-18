<?php
/**
 * BSE Theme Customizer
 */

function bse_customize_register($wp_customize) {
    // Theme Colors Section
    $wp_customize->add_section('bse_colors', array(
        'title' => __('Theme Colors', 'bse-theme'),
        'priority' => 30,
    ));

    // Primary Color
    $wp_customize->add_setting('bse_primary_color', array(
        'default' => '#004b87',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bse_primary_color', array(
        'label' => __('Primary Color', 'bse-theme'),
        'section' => 'bse_colors',
    )));

    // Secondary Color
    $wp_customize->add_setting('bse_secondary_color', array(
        'default' => '#28a745',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bse_secondary_color', array(
        'label' => __('Secondary Color', 'bse-theme'),
        'section' => 'bse_colors',
    )));

    // Homepage Settings Section
    $wp_customize->add_section('bse_homepage', array(
        'title' => __('Homepage Settings', 'bse-theme'),
        'priority' => 31,
    ));

    // Hero Section
    $wp_customize->add_setting('bse_hero_title', array(
        'default' => __('Bahrain Society of Engineers', 'bse-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('bse_hero_title', array(
        'label' => __('Hero Title', 'bse-theme'),
        'section' => 'bse_homepage',
        'type' => 'text',
    ));

    $wp_customize->add_setting('bse_hero_description', array(
        'default' => __('The professional organization dedicated to advancing engineering in Bahrain', 'bse-theme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('bse_hero_description', array(
        'label' => __('Hero Description', 'bse-theme'),
        'section' => 'bse_homepage',
        'type' => 'textarea',
    ));

    // About Section
    $wp_customize->add_section('bse_about', array(
        'title' => __('About Settings', 'bse-theme'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('bse_vision_text', array(
        'default' => __('To be the leading engineering society in the region.', 'bse-theme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('bse_vision_text', array(
        'label' => __('Vision Text', 'bse-theme'),
        'section' => 'bse_about',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('bse_mission_text', array(
        'default' => __('To promote excellence in the engineering profession and facilitate the exchange of technical knowledge.', 'bse-theme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('bse_mission_text', array(
        'label' => __('Mission Text', 'bse-theme'),
        'section' => 'bse_about',
        'type' => 'textarea',
    ));

    // Footer Settings
    $wp_customize->add_section('bse_footer', array(
        'title' => __('Footer Settings', 'bse-theme'),
        'priority' => 33,
    ));

    $wp_customize->add_setting('bse_footer_text', array(
        'default' => __('© 2025 Bahrain Society of Engineers. All rights reserved.', 'bse-theme'),
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('bse_footer_text', array(
        'label' => __('Footer Copyright Text', 'bse-theme'),
        'section' => 'bse_footer',
        'type' => 'textarea',
    ));

    // Contact Form Settings
    $wp_customize->add_section('bse_contact', array(
        'title' => __('Contact Form Settings', 'bse-theme'),
        'priority' => 34,
    ));

    $wp_customize->add_setting('bse_contact_form_id', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('bse_contact_form_id', array(
        'label' => __('Contact Form ID', 'bse-theme'),
        'description' => __('Enter the ID of your contact form (requires WPForms plugin)', 'bse-theme'),
        'section' => 'bse_contact',
        'type' => 'number',
    ));
}
add_action('customize_register', 'bse_customize_register');

/**
 * Generate Custom CSS based on Customizer settings
 */
function bse_customizer_css() {
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo get_theme_mod('bse_primary_color', '#004b87'); ?>;
            --secondary-color: <?php echo get_theme_mod('bse_secondary_color', '#28a745'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'bse_customizer_css');