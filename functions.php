<?php
function venturtam_files()
{
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array(), '1.0', true);
    //   wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    wp_enqueue_style('main-styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'venturtam_files');

function venturtam_init()
{
    register_post_type('Destinos', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'destinos'),
        'show_in_rest' => true,
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Destinos',
            'add_new_item' => 'Crear Destino',
            'edit_item' => 'Editar Destino',
            'all_items' => 'Todos los Destinos',
            'singular_name' => 'Destino'
        ),
        'menu_icon' => 'dashicons-airplane'
    ));

    register_post_type('Viajes', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'viajes'),
        'show_in_rest' => true,
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Viajes',
            'add_new_item' => 'Crear Viaje',
            'edit_item' => 'Editar Viaje',
            'all_items' => 'Todos los Viajes',
            'singular_name' => 'Viaje'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));
}

add_action('init', 'venturtam_init');



function venturtam_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('Destino-img', 1200, 600, true);
}

add_action('after_setup_theme', 'venturtam_features');
