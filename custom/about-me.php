<?php /*

Template Name: About Template

*/ ?>

<?php get_header(); ?>
<?php
/* Image Url */
$image_attributes =  wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>

<div class="cover text-white overflow">
  <div class="cover__bg" style="background: url(<?php echo $image_attributes[0]; ?>) center center; background-size: cover; opacity: 0.9;"></div>
  <div class="cover__content relative">
    <h1 class="text-reveal text-0 p-1">Marina Manfredi</h1>
    <p class="text-reveal text-white text-2 p-1">"Prima di essere qualcosa, siamo la cosa che vogliamo essere."</p>
  </div>
  <img class="available" style="margin-top: 100px; margin-right: 120px; margin-bottom: 100px; position: absolute; top:0; right:0;" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/LogoMM.png" alt="">

</div>

<main class="grid grid--center">
  <div class="main-about">
    <h1 style="margin: 40px 0;" class="fade-up text-center text-green">CARRIER TIMELINE</h1>
    <div class="horizontal-sliders">
      <div class="slide">
        <i class="fa-solid fa-user-graduate"></i>
        <div class="text-1">2014</div>
        <div class="text-2 text-green pt-1">Laureata in Ingegneria dei Materiali alla Federico II di Napoli</div>
        <p class="text-4 pt-1">25 anni, faccio la valigia e parto alla volta di "Mamma Fiat": Torino, multinazionale del settore automotive, la fusione con Chrysler: FCA era appena nata! Assunta come analista costi, acquisisco in pochi anni capacità di negoziazione e nozioni di processi produttivi direttamente a contatto con i Fornitori.
        </p>
      </div>
      <div class="slide">
        <i class="fa-solid fa-flag-usa"></i>
        <div class="text-1">2018</div>
        <div class="text-2 text-green pt-1">La mia prima sterzata</div>
        <p class="text-4">Lascio Fiat (FCA) per un’altra multinazionale (americana) dalla cultura aziendale ancor più all’avanguardia. E’ in questa realtà aziendale global che consolido le mie conoscenze di “come funziona” un sistema aziendale multinazionale complesso. In parallelo, mi rendo sempre più conto della mia “identità” di persona e professionista - arricchisco ciclicamente il mio bagaglio culturale, la mia carriera è lanciata e le mie responsabilità aumentano anno dopo anno.</p>
      </div>
      <div class="slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/decision.png" style="max-height: 100px; max-width: 100px;" class="img-res" alt="">
        <div class="text-1">2021</div>
        <div class="text-2 text-green pt-1">Un anno controverso</div>
        <p class="text-4">A 30 anni avevo raggiunto già molti obiettivi personali e lavorativi nonostante la mia giovane età.. contestualmente, quell'anno sono stata investita da cambiamenti organizzativi che impatteranno la mia carriera nei successivi 3 anni. Ho potuto però beneficiare di un piacevole periodo di peak state - quello stato in cui tutto sembra andare liscio, come se tu stessi viaggiando su una corsia preferenziale, ad alto scorrimento, mai intasata, con ai lati un paesaggio meraviglioso.
        </p>
      </div>
      <div class="slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/change.png" style="max-height: 100px; max-width: 100px;" class="img-res" alt="">

        <div class="text-1">2024</div>
        <div class="text-2 text-green pt-1">Momento decisivo di transizione</div>
        <p class="text-4 pt-1">delusa e stanca di un sistema svalutante e demotivante, alla soglia dei 35 anni, butto giù il mio action plan lavorando h24 - 7gg su 7 - al mio nuovo progetto. Da ottima pianificatrice quale sono: parto dall’idea! per chi e perché lo sto facendo, definisco i miei obiettivi, torno a studiare per capire come raggiungerli, rischio, investo tempo, energie e risorse economiche…mi rimetto in gioco e mi espongo.
        </p>
      </div>
      <div class="slide">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/roadmap.png" style="max-height: 100px; max-width: 100px;" alt="">

        <div class="text-1">Oggi</div>
        <div class="text-2 text-green pt-1">Io sono il mio business</div>
        <p class="text-4 pt-1"> Sono una Business Coach – costituisco una guida strategica al cambiamento ed alla massimizzazione del potenziale aziendale-imprenditoriale, in grado di dare un supporto mirato, professionale e soprattutto personalizzato, che non si limita a risolvere il problema circostanziale del momento (come la comune accezione di Consulente), ma che fornisce gli strumenti per diventare risolutori indipendenti dei propri problemi di domani. E’ questa la mia forza!</p>

      </div>
    </div>

    <!-- Blocco visibile solo su dispositivi mobili/tablet -->
    <div class="mobile-cards">
      <div class="mobile-card">
        <i class="fa-solid fa-user-graduate"></i>
        <div class="text-1">2014</div>
        <div class="text-2 text-green pt-1">Laureata in Ingegneria dei Materiali alla Federico II di Napoli</div>
        <p class="text-4 pt-1">
          25 anni, faccio la valigia e parto alla volta di "Mamma Fiat": Torino, multinazionale del settore automotive...
        </p>
      </div>
      <div class="mobile-card">
        <i class="fa-solid fa-flag-usa"></i>
        <div class="text-1">2018</div>
        <div class="text-2 text-green pt-1">La mia prima sterzata</div>
        <p class="text-4">
          Lascio Fiat (FCA) per un’altra multinazionale (americana) dalla cultura aziendale ancor più all’avanguardia...
        </p>
      </div>
      <div class="mobile-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/decision.png" class="img-res" alt="">
        <div class="text-1">2021</div>
        <div class="text-2 text-green pt-1">Un anno controverso</div>
        <p class="text-4">
          A 30 anni avevo raggiunto già molti obiettivi personali e lavorativi nonostante la mia giovane età...
        </p>
      </div>
      <div class="mobile-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/change.png" class="img-res" alt="">
        <div class="text-1">2024</div>
        <div class="text-2 text-green pt-1">Momento decisivo di transizione</div>
        <p class="text-4 pt-1">
          Delusa e stanca di un sistema svalutante e demotivante, alla soglia dei 35 anni, butto giù il mio action plan...
        </p>
      </div>
      <div class="mobile-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/roadmap.png" class="img-res" alt="">
        <div class="text-1">Oggi</div>
        <div class="text-2 text-green pt-1">Io sono il mio business</div>
        <p class="text-4 pt-1">
          Sono una Business Coach – costituisco una guida strategica al cambiamento ed alla massimizzazione del potenziale...
        </p>
      </div>
    </div>

    <div class="next-block"></div>
    <div class="grid" style="display: flex; justify-content: center; align-items: center;" id="#">

      <div class="col-50" style="display: flex; justify-content: center; align-items: center; position: relative;">
        <svg class="blob" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
          <path fill="#008D6B" d="M47.2,-65.3C58.4,-56.8,62.8,-39.3,66.9,-22.7C70.9,-6.1,74.6,9.7,72,25.1C69.4,40.6,60.4,55.7,47.4,67.3C34.3,79,17.2,87.1,1.7,84.7C-13.7,82.3,-27.4,69.4,-38.8,57.3C-50.2,45.1,-59.3,33.6,-66.7,19.6C-74.1,5.5,-79.9,-11.1,-75.6,-24.6C-71.3,-38.1,-56.9,-48.4,-42.7,-55.8C-28.4,-63.3,-14.2,-67.9,1.9,-70.5C18,-73.1,36,-73.7,47.2,-65.3Z" transform="translate(100 100)" />
        </svg>
        <img class="img-res img-rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/3.jpg" style="height: 70%; width: 50%;" alt="">
      </div>
      <div class="col-50 mt-4">
        <div class="p-3">
          <h3 class="text-1 text-green">Chi Sono
          </h3>
          <p class="text-green text-3">Non dico mai di essere la migliore, <br> bensì racconto di essere diversa.</p>

          <p class="text-4">
            Ciao, sono Marina e sono dell’89. Mi piace definirmi una combinazione esplosiva tra un'ingegnerA ed un'artista. Rompo tutti gli schemi tradizionali e gli stereotipi: sono una donna indipendente, una lavoratrice e una mamma. Mi considero una persona coraggiosa, con una vasta gamma di interessi e una spiccata propensione alla leadership. Per me, la comunicazione sincera e trasparente è fondamentale per costruire rapporti sani e duraturi, basati sulla fiducia reciproca. Sono una persona generosa per natura e mi piace condividere ciò che ho con gli altri, estendendo la mia generosità alla comunità circostante.
            I miei obiettivi sono chiari: voglio mettere al servizio degli altri le mie competenze, sempre accompagnate da un'intelligenza emotiva, condividere i miei valori e promuovere un networking costruttivo con le persone con cui entro in contatto.

          </p>
        </div>
      </div>
    </div>
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>

    <div class="grid" style="display: flex; justify-content: center; align-items: center;" id="cosa-faccio">
      <div class="col-50 mt-4 fade-up">
        <div class="p-3">
          <h3 class="text-1 text-green">La Mia Vision
          </h3>
          <p class="text-4">
            La mia missione è semplice: aiutarti a trasformare la tua visione in realtà. Con oltre 10 anni di esperienza in aziende multinazionali e una profonda conoscenza delle strategie, tecniche e strumenti più efficaci, sono qui per essere la tua Partner esterna ideale. Il mio Coaching è mirato, professionale e, soprattutto, personalizzato. Le mie competenze ed esperienze sono uniche, esattamente come l’identità autentica ed originale di ogni mio singolo Cliente. Ed è proprio in questa unicità che risiede il valore del mio lavoro.

          </p>
        </div>
      </div>
      <div class="col-50 fade-up" style="display: flex; justify-content: center; align-items: center; position: relative;">
        <svg class="blob" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
          <path fill="#cfb6fa" d="M47.2,-65.3C58.4,-56.8,62.8,-39.3,66.9,-22.7C70.9,-6.1,74.6,9.7,72,25.1C69.4,40.6,60.4,55.7,47.4,67.3C34.3,79,17.2,87.1,1.7,84.7C-13.7,82.3,-27.4,69.4,-38.8,57.3C-50.2,45.1,-59.3,33.6,-66.7,19.6C-74.1,5.5,-79.9,-11.1,-75.6,-24.6C-71.3,-38.1,-56.9,-48.4,-42.7,-55.8C-28.4,-63.3,-14.2,-67.9,1.9,-70.5C18,-73.1,36,-73.7,47.2,-65.3Z" transform="translate(100 100)" />
        </svg>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/1.jpg" style="height: 70%; width: 50%;" class="img-res img-rounded" alt="About_img">
      </div>
    </div>



    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>

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