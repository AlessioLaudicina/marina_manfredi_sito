<?php /*

Template Name: Services Template

*/ ?>

<?php get_header(); ?>
<div class="spacer" style="background-color: #4C5A89;"></div>



<main class="grid hero">
  
  <div class="col-50">
    <h1 class="text-green">I Miei Servizi di Coaching</h1>
    <h2 class="text-green">Sottotitolo</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elitllam nesciunt soluta ad? Sunt, voluptates ad in explicabo sequi rem?</p>
    <button class="button">CTA</button>
  </div>
  <div class="col-50 relative">
    <svg class="blob" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
      <path fill="#CFB6FA" d="M41.1,-65.7C52.5,-56.7,60.3,-43.9,66.2,-30.4C72.1,-16.9,76.1,-2.7,74.8,11.2C73.5,25.2,67.1,38.8,57.3,49.2C47.6,59.6,34.7,66.8,21.1,69.7C7.6,72.6,-6.5,71.3,-22.7,69.9C-38.9,68.5,-57.2,66.9,-66.3,57.1C-75.4,47.2,-75.4,29,-74.3,12.9C-73.2,-3.3,-71.1,-17.4,-64.8,-28.9C-58.5,-40.4,-48,-49.4,-36.5,-58.3C-25,-67.3,-12.5,-76.2,1.2,-78C14.9,-79.9,29.8,-74.7,41.1,-65.7Z" transform="translate(100 100)" />
    </svg>
    <img class="img-res p-3" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services.svg" alt="">

  </div>
  <div class="col-100">
    <div class="cover text-white overflow">
      <div class="cover__bg" style="background: url(<?php echo $image_attributes[0]; ?>) center center; background-size: cover;"></div>
      <div class="cover__content">

      </div>
    </div>

  </div>
  <div class="col-50 relative">
    <svg class="blob" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
      <path fill="#CFB6FA" d="M41.1,-65.7C52.5,-56.7,60.3,-43.9,66.2,-30.4C72.1,-16.9,76.1,-2.7,74.8,11.2C73.5,25.2,67.1,38.8,57.3,49.2C47.6,59.6,34.7,66.8,21.1,69.7C7.6,72.6,-6.5,71.3,-22.7,69.9C-38.9,68.5,-57.2,66.9,-66.3,57.1C-75.4,47.2,-75.4,29,-74.3,12.9C-73.2,-3.3,-71.1,-17.4,-64.8,-28.9C-58.5,-40.4,-48,-49.4,-36.5,-58.3C-25,-67.3,-12.5,-76.2,1.2,-78C14.9,-79.9,29.8,-74.7,41.1,-65.7Z" transform="translate(100 100)" />
    </svg>
    <img class="img-res p-3" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services.svg" alt="">

  </div>
  <div class="col-50">
    <h1>Titolo</h1>
    <h2>Sottotitolo</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elitllam nesciunt soluta ad? Sunt, voluptates ad in explicabo sequi rem?</p>
  </div>


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