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
  <div class="cover__content relative">
    <h1 class="text-reveal text-0 p-1">Marina Manfredi</h1>
  </div>
  <img class="available" style="margin-top: 100px; margin-right: 100px; position: absolute; top:0; right:0;" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/LogoMM.png" alt="">

</div>

<main class="grid grid--center">
  <div class="main-about">
    <h1 style="margin: 40px 0;" class="fade-up text-center text-green">CARRIER TIMELINE</h1>
    <div class="horizontal-sliders">
      <div class="slide">
        <i class="fa-solid fa-user-graduate"></i>
        <div class="text-1">2014</div>
        <div class="text-2 text-green pt-1">Laureata in Ingegneria dei Materiali alla Federico II di Napoli</div>
        <p class="text-3 pt-1">25 anni, faccio la valigia e parto alla volta di "Mamma Fiat": Torino, multinazionale del settore automotive, la fusione con Chrysler: FCA era appena nata! Assunta come analista costi, acquisisco in pochi anni capacità di negoziazione e nozioni di processi produttivi direttamente a contatto con i Fornitori.
        </p>
      </div>
      <div class="slide">
        <i class="fa-solid fa-flag-usa"></i>
        <div class="text-1">2018</div>
        <div class="text-2 text-green pt-1">La mia prima sterzata</div>
        <p class="text-3">Lascio Fiat (FCA) per un’altra multinazionale (americana) dalla cultura aziendale ancor più all’avanguardia. E’ in questa realtà aziendale global che consolido le mie conoscenze di “come funziona” un sistema aziendale multinazionale complesso. In parallelo, mi rendo sempre più conto della mia “identità” di persona e professionista - arricchisco ciclicamente il mio bagaglio culturale, la mia carriera è lanciata e le mie responsabilità aumentano anno dopo anno.</p>
      </div>
      <div class="slide">
        <i class="fa-solid fa-road"></i>
        <div class="text-1">2021</div>
        <div class="text-2 text-green pt-1">Un anno controverso</div>
        <p class="text-3">A 30 anni avevo raggiunto già molti obiettivi personali e lavorativi nonostante la mia giovane età.. contestualmente, quell'anno sono stata investita da cambiamenti organizzativi che impatteranno la mia carriera nei successivi 3 anni. Ho potuto però beneficiare di un piacevole periodo di peak state - quello stato in cui tutto sembra andare liscio, come se tu stessi viaggiando su una corsia preferenziale, ad alto scorrimento, mai intasata, con ai lati un paesaggio meraviglioso.
        </p>
      </div>
      <div class="slide">
        <i class="fa-regular fa-pen-to-square"></i>
        <div class="text-1">2024</div>
        <div class="text-2 text-green pt-1">Momento decisivo di transizione</div>
        <p class="text-3 pt-1">delusa e stanca di un sistema svalutante e demotivante, alla soglia dei 35 anni, butto giù il mio action plan lavorando h24 - 7gg su 7 - al mio nuovo progetto. Da ottima pianificatrice quale sono: parto dall’idea! per chi e perché lo sto facendo, definisco i miei obiettivi, torno a studiare per capire come raggiungerli, rischio, investo tempo, energie e risorse economiche…mi rimetto in gioco e mi espongo.
        </p>
      </div>
      <div class="slide">
        <i class="fa-solid fa-hand-holding-dollar"></i>
        <div class="text-1">Oggi</div>
        <div class="text-2 text-green pt-1">Io sono il mio business</div>
        <p class="text-3 pt-1"> Sono una Business Coach – costituisco una guida strategica al cambiamento ed alla massimizzazione del potenziale aziendale-imprenditoriale, in grado di dare un supporto mirato, professionale e soprattutto personalizzato, che non si limita a risolvere il problema circostanziale del momento (come la comune accezione di Consulente), ma che fornisce gli strumenti per diventare risolutori indipendenti dei propri problemi di domani. E’ questa la mia forza!</p>

      </div>
    </div>

    <div class="next-block"></div>

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