<?php
function nextframe_setup()
{

  // Enable custom header
  add_theme_support("custom-header");

  // Enable title in header
  add_theme_support("title-tag");

  // Enable feed link
  add_theme_support('automatic-feed-links');

  // Enable align wide & full
  add_theme_support('align-wide');

  // Enable featured image
  add_theme_support('post-thumbnails');


  // Custom Image Size
  add_image_size("image-small", 350, 270, true);
  add_image_size("image-big", 1400, 900, true);

  
  // Custom menu areas
  register_nav_menus(array(
    'header' => esc_html__('Header', 'nextframe')
  ));
}

add_action('after_setup_theme', 'nextframe_setup');


/*  Enqueue css
/* ------------------------------------ */

function nextframe_styles()
{

  wp_enqueue_style('nextframe-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'nextframe_styles');
require_once('custom/custom-functions.php');
