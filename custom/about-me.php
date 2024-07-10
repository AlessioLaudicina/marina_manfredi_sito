<?php /*

Template Name: About Template

*/ ?>

<?php get_header(); ?>
<?php
  /* Image Url */
  $image_attributes =  wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<div class="cover text-white overflow">
  <div class="cover__bg" style="background: url(<?php echo $image_attributes[0]; ?>) center center; background-size: cover;"></div>
  <div class="cover__content">
    <h1 class="text-reveal text-0">Marina Manfredi</h1>
    <p class="text-reveal text-white">una combinazione esplosiva tecnico-creativa di ingegneria e arte, rompo gli schemi tradizionali di donna lavoratrice e madre.</p>
  </div>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/available.svg" class="available rotate" alt="">

</div>

<main class="grid grid--center">

  <div class="col-100">
  

    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>


    <?php the_content(); ?>


  <?php endwhile;
                              else : ?>

  <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); ?></p>

<?php endif; ?>

  </div>

</main>

<?php get_footer(); ?>