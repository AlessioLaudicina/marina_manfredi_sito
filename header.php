<!DOCTYPE html>
<html <?php language_attributes(); // display the html language tag 
      ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">


  <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Link a Splide CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.4/splide.min.css">


  <?php wp_head(); // insert all the script and styles of WordPress 
  ?>

</head>

<body <?php body_class(); // add automic css classes based on the page 
      ?>>

  <?php wp_body_open(); // insert script right after the body if needed 
  ?>

  <header class="header-container">
    <div class="header">
      <a href="<?php echo esc_url(home_url()); // insert home url 
                ?>" class="header__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/LogoMM.png" alt="<?php bloginfo('title'); // insert title of the site 
                                                                                            ?>">

      </a>
      
      <nav class="menu">
        <?php // insert custom menu header
        wp_nav_menu(array(
          'theme_location' => 'header',
          'container' => false,
          'items_wrap' => '<ul class="header__menu">%3$s</ul>'
        ));
        ?>
<input type="checkbox" id="checkbox2" class="checkbox2 visuallyHidden">
      <label for="checkbox2">
        <div class="hamburger hamburger2">
          <span class="bar bar1"></span>
          <span class="bar bar2"></span>
          <span class="bar bar3"></span>
          <span class="bar bar4"></span>
        </div>
      </label>
      </nav>
      
      

    </div>


  </header>

  <div class="overflow">