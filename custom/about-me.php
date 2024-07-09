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


<div class="tl-bg m-auto">
<div>
  <h3 class="text-center mt-3 text-green text-0">La Mia Carriera Professionale</h3>
</div>

  <div class="tl-van-cntr">
    <div class="tl-section" >
      <h3 class="text-green text-2" >2014 - Ingegnere e prima esperienza alla Fiat</h3>
      <p class="text-03" id="tl-section-title">Laureata in Ingegneria dei Materiali alla Federico II di Napoli, a 25 anni faccio la valigia e parto alla volta di "Mamma Fiat": Torino, multinazionale del settore automotive, la fusione con Chrysler: FCA era appena nata!</p>
    </div>
    <div class="tl-section">
      <h3 class="text-green text-2">2018 - la mia prima sterzata</h3>
      <p class="text-03">lascio Fiat per un’altra multinazionale (americana) dalla cultura aziendale ancor più all’avanguardia.</p>
    </div>
    <div class="tl-section">
      <h3 class="text-green text-2">2021 - un anno controverso</h3>
      <p class="text-03">a 30 anni avevo raggiunto già molti obiettivi personali e lavorativi nonostante la mia giovane età.contestualmente, quell'anno sono stata investita da cambiamenti organizzativi che impatteranno la mia carriera nei successivi 3 anni</p>
    </div>
    <div class="tl-section">
      <h3 class="text-green text-2">2024 - momento decisivo di transizione</h3>
      <p class="text-03">delusa e stanca di un sistema svalutante e demotivante, alla soglia dei 35 anni, butto giù il mio action plan lavorando h24 - 7gg su 7 - al mio nuovo progetto</p>
    </div>
    <div class="tl-section">
      <h3 class="text-green text-2">Oggi – io sono il mio business:</h3>
      <p class="text-03">sono una Business Coach – costituisco una guida strategica al cambiamento ed alla massimizzazione del potenziale aziendale-imprenditoriale, in grado di dare un supporto mirato, professionale e soprattutto personalizzato, che non si limita a risolvere il problema circostanziale del momento (come il Consulente), ma che fornisce gli strumenti per diventare risolutori indipendenti dei vostri stessi problemi di domani. E’ questa la mia forza.</p>
    </div>
  </div>
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