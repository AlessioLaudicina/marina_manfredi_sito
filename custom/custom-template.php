<?php /*

Template Name: Block Template

*/ ?>

<?php get_header(); ?>
<div class="spacer" style="background-color: #4C5A89;"></div>

<main class="grid grid--center">

  <div class="col-100">

  <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>


      <?php the_content(); ?>


  <?php endwhile; else : ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); ?></p>

  <?php endif; ?>

  </div>

</main>

<?php get_footer(); ?>