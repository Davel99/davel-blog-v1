<?php
function apphiver_files()
{    
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array(), '1.0', true);
    //   wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    wp_enqueue_style('main-styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'apphiver_files');

function tdc_type()
{
  register_post_type('tdc', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'tarjetas-de-credito'),
    'show_in_rest' => true,
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Tarjetas de crédito',
      'add_new_item' => 'Añadir TDC',
      'edit_item' => 'Editar TDC',
      'all_items' => 'Todas las TDC',
      'singular_name' => 'TDC'
    ),
    'menu_icon' => 'dashicons-money'
  ));
}

add_action('init', 'tdc_type');



function apphiver_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // add_image_size('pageBanner', 1500, 350, true);
  }
  
  add_action('after_setup_theme', 'apphiver_features');

?>