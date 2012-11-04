<?php
require_once('wpalchemy/MetaBox.php');
require_once('acpt/acpt.php');

// Require Plugin
require_once('tgm-plugin-activation/class-tgm-plugin-activation.php');
require_once('tgm-plugin-activation/config.php');

 
// Meta Styles
add_action( 'init', 'metabox_style' );
if (is_admin()) add_action('admin_enqueue_scripts', 'metabox_style');
function metabox_style() {
    wp_enqueue_style(
        'wpalchemy-metabox', 
        get_stylesheet_directory_uri() . '/custom/meta/meta.css'
    );
}

// Metabox
$custom_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_custom_meta',
    'title' => 'My Custom Meta',
    'template' => get_stylesheet_directory() . '/custom/meta/custom_meta.php',
    'types' => array('mattress')
));

$custom_metabox2 = $simple_mb2 = new WPAlchemy_MetaBox(array
(
    'id' => '_custom_meta_2',
    'title' => 'My Custom Meta 2',
    'template' => get_stylesheet_directory() . '/custom/meta/custom_meta_2.php',
    'types' => array('mattress')
));

// ACPT
add_action('init', 'makethem');
function makethem() {
    // TAX
    $tx = new tax();
    $tx->make('custom category', 'custom categories', true);
    $tx->make('custom tag', 'custom tags', false);

    // CPT
    $pt = new post_type();
    $args = array(
        'taxonomies' => array('custom category', 'custom tag', 'category', 'post_tag'),
        'supports' => array( 'title', 'editor', 'page-attributes', '_custom_meta'),
        'hierarchical' => true,
    );
    $pt->make('mattress','mattresses', false,  $args );
}

// Theme Options
if ( !function_exists( 'of_get_option' ) ) {
    function of_get_option($name, $default = false) {
        $optionsframework_settings = get_option('optionsframework');
        // Gets the unique option id
        $option_name = $optionsframework_settings['id'];
        if ( get_option($option_name) ) {
            $options = get_option($option_name);
        }
        if ( isset($options[$name]) ) {
            return $options[$name];
        } else {
            return $default;
        }
    }
}