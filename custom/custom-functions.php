<?php
/*  Enqueue javascript
/* ------------------------------------ */
function nextframe_scripts()
{

  wp_enqueue_script('nextframe-bundle', get_template_directory_uri() . '/custom/bundle.min.js', '', '', true);
  wp_enqueue_script('nextframe-scripts', get_template_directory_uri() . '/custom/custom-scripts.js', '', '', true);
  
  if (is_singular() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
};
add_action('wp_enqueue_scripts', 'nextframe_scripts');

/*  Enqueue css
/* ------------------------------------ */

function nextframe_custom_styles()
{

  wp_enqueue_style('nextframe-custom-style', get_template_directory_uri() . '/custom/custom-style.css');

  wp_enqueue_style('nextframe-custom-font', 'https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet');
}

add_action('wp_enqueue_scripts', 'nextframe_custom_styles');


/*  Custom Shortcode Slider Post
/* ------------------------------------ */

function custom_shortcode()
{

  $buffer = '<section class="splide"><div class="splide__track"><ul class="splide__list">'; //apertura slider

  /* Custom Loop */

  $custom_loop = new WP_Query(array(
    'post_type'     => 'post',
    'posts_per_page' => 10,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
  ));

  if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post();

      /* apertura loop */
      $image_attributes =  wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

      $buffer .= '<li class="splide__slide">';
      $buffer .= '<a href="' . get_the_permalink() . '" class="tiles" style="background: url(' . $image_attributes[0] . ') no-repeat center center; background-size:cover">';
      $buffer .= '<div class="tiles__content">';
      $buffer .= '<h3 class="mb-0">' . get_the_title() . '</h3>';
      $buffer .= '<p class="text-white"></p>';
      $buffer .= '</div>';
      $buffer .= '</a>';
      $buffer .= '</li>';

      wp_reset_postdata();
    endwhile;
  endif;
  $buffer .= '</ul></div></section>';

  return $buffer;
}
add_shortcode('sliderpost', 'custom_shortcode');

function custom_shortcode_slider()
{

  $buffer = '<section class="splide"><div class="splide__track"><ul class="splide__list">'; //apertura slider

  /* Custom Loop */

  $custom_loop = new WP_Query(array(
    'post_type'     => 'case',
    'posts_per_page' => 6,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
  ));

  if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post();

      /* apertura loop */
      $image_attributes =  wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

      $buffer .= '<li class="splide__slide">';
      $buffer .= '<a href="' . get_the_permalink() . '" class="tiles" style="background: url(' . $image_attributes[0] . ') no-repeat center center; background-size:cover">';
      $buffer .= '<div class="tiles__content">';
      $buffer .= '<h3 class="mb-0">' . get_the_title() . '</h3>';
      $buffer .= '<p class="text-white"></p>';
      $buffer .= '</div>';
      $buffer .= '</a>';
      $buffer .= '</li>';

      wp_reset_postdata();
    endwhile;
  endif;
  $buffer .= '</ul></div></section>';

  return $buffer;
}
add_shortcode('slidercase', 'custom_shortcode_slider');
