<?php
function apphiver_files()
{    
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array(), '1.0', true);
    //   wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    wp_enqueue_style('main-styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'apphiver_files');

function post_types()
{
  register_post_type('libros', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'libros'),
    'show_in_rest' => true,
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Libros',
      'add_new_item' => 'Añadir libro',
      'edit_item' => 'Editar libro',
      'all_items' => 'Todos los libros',
      'singular_name' => 'libro'
    ),
    'menu_icon' => 'dashicons-book-alt'
  ));

  register_post_type('cursos', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'cursos'),
    'show_in_rest' => true,
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Cursos',
      'add_new_item' => 'Añadir curso',
      'edit_item' => 'Editar curso',
      'all_items' => 'Todos los cursos',
      'singular_name' => 'curso'
    ),
    'menu_icon' => 'dashicons-groups'
  ));
}

add_action('init', 'post_types');



function davel_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // add_image_size('pageBanner', 1500, 350, true);
  }
  
  add_action('after_setup_theme', 'davel_features');

?>