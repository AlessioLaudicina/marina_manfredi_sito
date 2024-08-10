<?php /*

Template Name: Home Template

*/ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<?php
                              /* Image Url */
                              $image_attributes =  wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>



<div class="cover text-white overflow">
  <div class="cover__bg" style="background: url(<?php echo $image_attributes[0]; ?>) center center; background-size: cover; "></div>
  <div class="cover__content" style="padding-left: 410px; padding-top:150px;">
    <h1 class="text-reveal text-1 text-white">Hai almeno una criticità da voler risolvere nel tuo Business?</h1>
    <p class="text-reveal text-white">Sei un imprenditore, un libero professionista o una start up che vuole migliorarsi e massimizzare il potenziale della propria attività? Io sono la guida giusta al cambiamento.</p>
    <a href="#chi-sono" class="button fade-in scroll-trigger"><?php esc_html_e('Scopri i vantaggi', 'nextframe'); ?></a>
  </div>
</div>

<main class="grid grid--center mt-3" id="content">

  <div class="col-100 p-0">
    <div class="" id="chi-sono">
      <div class="grid">
        <div class="col-50 v-center">
          <h3 class="text-1 text-green">Perchè rivolgersi a Marina come Business Coach?</h3>
          <h4 class="text-2 text-green text-right" style="width: 88%;">Benefici & Vantaggi</h4>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/benefits.svg" style="max-height: 500px; max-width: 500px;">
        </div>
        <div class="col-50">
          <div class="grid">
            <div class="col-50 fade-up">
              <div class="p-2">
                <h3 class="text-green">La tua Partner Esterna Ideale</h3>
                <p>Con oltre 10 anni di esperienza in aziende multinazionali e una profonda conoscenza delle strategie e tecniche più efficaci, sono qui per essere la tua partner esterna ideale.</p>
              </div>
            </div>
            <div class="col-50 fade-up">
              <div class="p-2">
                <h3 class="text-green">Strategie efficaci e mirate</h3>
                <p>Utilizzo tecniche comprovate e strumenti all’avanguardia per massimizzare il potenziale della tua attività.</p>
              </div>
            </div>
            <div class="col-50 fade-up">
              <div class="p-2">
                <h3 class="text-green">Consulenza personalizzata</h3>
                <p>Ogni progetto è unico, e così è il mio approccio. La tua identità e le tue esigenze saranno al centro del mio intervento e servizio.</p>
              </div>
            </div>
            <div class="col-50 fade-up">
              <div class="p-2">
                <h3 class="text-green">Esperienza internazionale</h3>
                <p>Con un background in aziende multinazionali, porto una prospettiva globale al tuo business locale.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid pb-4 fade-up" style="display: flex; justify-content: center; align-items: center;">

      <div class="col-50 mt-4">
        <div class="p-3">
          <h3 class="text-1 text-green">Chi sono</h3>
          <p class="text-4">Ciao a tutti, sono Marina e ho 35 anni. Mi piace definirmi una combinazione esplosiva tra un'ingegnera e un'artista. Rompo gli schemi e gli stereotipi, sono una donna indipendente, una lavoratrice e una mamma. Mi considero una persona coraggiosa, con una vasta gamma di interessi e una spiccata propensione alla leadership. Credo fermamente che valori come la collaborazione, il lavoro di squadra, la comunità, l'inclusione e la diversità siano fondamentali nel mondo del lavoro e consentano alle persone e alle aziende di crescere e innovare veramente. Per me, la comunicazione sincera e trasparente è fondamentale per costruire rapporti sani e duraturi, basati sulla fiducia reciproca. Sono una persona generosa per natura e mi piace condividere ciò che ho con gli altri, estendendo la mia generosità alla comunità circostante. I miei obiettivi sono chiari: voglio far conoscere le mie competenze, sempre accompagnate
            da un'intelligenza emotiva, condividere i miei valori e promuovere un networking costruttivo con le persone con cui entro in contatto.</p>
          <a href="" class="button"> Scopri di più su Marina</a>

        </div>
      </div>
      <div class="col-50 ">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/15.jpg" class="img-res img-rounded" alt="About-me">
      </div>

    </div>

    <div class="grid fade-up">
      <h3 class="text-1 text-green mt-2" style="width: 100%; text-align: center;">Il Tuo Successo Con Il Mio Metodo</h3>

      <div class="col-50">
        <div class="relative-container">


          <div class="col-100">
            <div class="background-shape" style="min-height: 500px; min-width: 300px; background-color: #008D6B;"></div>

            <div class="text-content">
              <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services.svg" alt="">

              <h4 class="text-3 text-green mt-3">Step 1: Prima Consulenza</h4>
              <strong class="text-3" style="color: #cfb6fa;">Inizia Il Tuo Viaggio Verso il Successo</strong>
              <p class="text-4">
                La prima fase del mio metodo di coaching è cruciale per comprendere le tue esigenze e obiettivi unici.
                Durante la prima consulenza, mi concentro su osservazione ed ascolto attivo. Dedichiamo insieme del tempo a raccogliere le tue convinzioni e i dati essenziali per iniziare l'analisi di coaching. Il mio approccio empatico e professionale mi permette di comprendere a fondo il contesto del tuo business, identificando punti di forza e aree di miglioramento.
              </p>

            </div>

          </div>

          <!-- SVG -->
          <svg class="shape-blob" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <clipPath id="clip-shape-blob" viewBox="0 0 200 200" clipPathUnits="objectBoundingBox" transform="scale(0.005 0.005)">
                <path>
                  <animate attributeName="d" dur="5000ms" repeatCount="indefinite" values="M141.2 63.9c9.3 14.8 11.9 31.8 7.7 46.2-4.1 14.4-14.9 26.2-29 34-14 7.8-31.3 11.5-48.6 6.6-17.4-4.9-34.9-18.6-38.1-34.8-3.2-16.2 7.9-35.1 21.5-51C68.2 49.1 84.1 36.3 100 36.2c16 0 32 12.8 41.2 27.7z;
                                                                                 M140.2 71.9c12 11.2 22 27.9 19 41.7-3.1 13.8-19.3 24.7-36.6 33-17.4 8.2-35.8 13.7-49.6 7.8-13.7-6-22.7-23.5-27.8-42.8-5.1-19.2-6.2-40.2 3.6-50.8 9.8-10.6 30.5-10.9 47.9-8.2 17.4 2.6 31.4 8.2 43.5 19.3z;
                                                                                 M141.2 63.9c9.3 14.8 11.9 31.8 7.7 46.2-4.1 14.4-14.9 26.2-29 34-14 7.8-31.3 11.5-48.6 6.6-17.4-4.9-34.9-18.6-38.1-34.8-3.2-16.2 7.9-35.1 21.5-51C68.2 49.1 84.1 36.3 100 36.2c16 0 32 12.8 41.2 27.7z" />
                </path>
              </clipPath>
            </defs>
          </svg>
        </div>

      </div>
      <div class="col-50">
        <div class="relative-container">


          <div class="col-100">
            <div class="background-shape" style="min-height: 500px; min-width: 300px;"></div>

            <div class="text-content">
              <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services-7.svg" alt="">

              <h4 class="text-3 text-green mt-3">Step 2: Analisi e Pianificazione del Servizio</h4>
              <strong class="text-3" style="color: #cfb6fa;">Pianifica il Tuo Successo</strong>
              <p class="text-4">
                La seconda fase del mio metodo è l'analisi e la pianificazione dettagliata del tuo percorso di sviluppo.
                In questa fase, costruisco – insieme a te - un Action Plan personalizzato. Smantelliamo le convinzioni limitanti e definiamo chiaramente i tuoi obiettivi attraverso esercizi mirati. Il mio processo assicura che ogni passo sia in linea con le tue aspirazioni e con il mercato di riferimento, creando una solida base per il successo.
              </p>

            </div>

          </div>

          <!-- SVG -->
          <svg class="shape-blob" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <clipPath id="clip-shape-blob" viewBox="0 0 200 200" clipPathUnits="objectBoundingBox" transform="scale(0.005 0.005)">
                <path>
                  <animate attributeName="d" dur="5000ms" repeatCount="indefinite" values="M141.2 63.9c9.3 14.8 11.9 31.8 7.7 46.2-4.1 14.4-14.9 26.2-29 34-14 7.8-31.3 11.5-48.6 6.6-17.4-4.9-34.9-18.6-38.1-34.8-3.2-16.2 7.9-35.1 21.5-51C68.2 49.1 84.1 36.3 100 36.2c16 0 32 12.8 41.2 27.7z;
                                                                                 M140.2 71.9c12 11.2 22 27.9 19 41.7-3.1 13.8-19.3 24.7-36.6 33-17.4 8.2-35.8 13.7-49.6 7.8-13.7-6-22.7-23.5-27.8-42.8-5.1-19.2-6.2-40.2 3.6-50.8 9.8-10.6 30.5-10.9 47.9-8.2 17.4 2.6 31.4 8.2 43.5 19.3z;
                                                                                 M141.2 63.9c9.3 14.8 11.9 31.8 7.7 46.2-4.1 14.4-14.9 26.2-29 34-14 7.8-31.3 11.5-48.6 6.6-17.4-4.9-34.9-18.6-38.1-34.8-3.2-16.2 7.9-35.1 21.5-51C68.2 49.1 84.1 36.3 100 36.2c16 0 32 12.8 41.2 27.7z" />
                </path>
              </clipPath>
            </defs>
          </svg>
        </div>

      </div>


    </div>
    <div class="grid fade-up">
      <div class="col-50">
        <div class="relative-container">


          <div class="col-100">
            <div class="background-shape" style="min-height: 500px; min-width: 300px;"></div>

            <div class="text-content">
              <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services-4.svg" alt="">

              <h4 class="text-3 text-green mt-3">Step 3: Monitoraggio & Revisione</h4>
              <strong class="text-3" style="color: #cfb6fa;">Mantieni Il tuo Successo</strong>
              <p class="text-4">
                Il successo duraturo richiede un monitoraggio costante e la capacità di adattarsi ai cambiamenti.
                Durante questa fase, stabiliamo insieme KPIs chiari e misurabili. Monitoriamo i tuoi progressi e rivediamo le strategie per garantire che tu rimanga sulla strada giusta verso il raggiungimento dei tuoi obiettivi. Il mio supporto continuo ti aiuta a mantenere la rotta e a raggiungere risultati tangibili ed oggettivi.
              </p>

            </div>

          </div>

          <!-- SVG -->
          <svg class="shape-blob" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <clipPath id="clip-shape-blob" viewBox="0 0 200 200" clipPathUnits="objectBoundingBox" transform="scale(0.005 0.005)">
                <path>
                  <animate attributeName="d" dur="5000ms" repeatCount="indefinite" values="M141.2 63.9c9.3 14.8 11.9 31.8 7.7 46.2-4.1 14.4-14.9 26.2-29 34-14 7.8-31.3 11.5-48.6 6.6-17.4-4.9-34.9-18.6-38.1-34.8-3.2-16.2 7.9-35.1 21.5-51C68.2 49.1 84.1 36.3 100 36.2c16 0 32 12.8 41.2 27.7z;
                                                                                 M140.2 71.9c12 11.2 22 27.9 19 41.7-3.1 13.8-19.3 24.7-36.6 33-17.4 8.2-35.8 13.7-49.6 7.8-13.7-6-22.7-23.5-27.8-42.8-5.1-19.2-6.2-40.2 3.6-50.8 9.8-10.6 30.5-10.9 47.9-8.2 17.4 2.6 31.4 8.2 43.5 19.3z;
                                                                                 M141.2 63.9c9.3 14.8 11.9 31.8 7.7 46.2-4.1 14.4-14.9 26.2-29 34-14 7.8-31.3 11.5-48.6 6.6-17.4-4.9-34.9-18.6-38.1-34.8-3.2-16.2 7.9-35.1 21.5-51C68.2 49.1 84.1 36.3 100 36.2c16 0 32 12.8 41.2 27.7z" />
                </path>
              </clipPath>
            </defs>
          </svg>
        </div>

      </div>
      <div class="col-50">
        <div class="relative-container">


          <div class="col-100">
            <div class="background-shape" style="min-height: 500px; min-width: 300px; background-color: #008D6B;"></div>

            <div class="text-content">
              <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services-6.svg" alt="">

              <h4 class="text-3 text-green mt-3">Step 4: Raggiungere l' obiettivo</h4>
              <strong class="text-3" style="color: #cfb6fa;">Pianifica il Tuo Successo</strong>
              <p class="text-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, totam. Se vuoi scoprire clicca qui per vedere il video instagram
              </p>
              <a class="button" href="https://www.instagram.com/reel/C8wZCSuoz2L/?igsh=MW1yd2EzYmMyYnpuZA==" target="_blank">Video Instagram</a>
            </div>

          </div>

          <!-- SVG -->
          <svg class="shape-blob" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <clipPath id="clip-shape-blob" viewBox="0 0 200 200" clipPathUnits="objectBoundingBox" transform="scale(0.005 0.005)">
                <path>
                  <animate attributeName="d" dur="5000ms" repeatCount="indefinite" values="M141.2 63.9c9.3 14.8 11.9 31.8 7.7 46.2-4.1 14.4-14.9 26.2-29 34-14 7.8-31.3 11.5-48.6 6.6-17.4-4.9-34.9-18.6-38.1-34.8-3.2-16.2 7.9-35.1 21.5-51C68.2 49.1 84.1 36.3 100 36.2c16 0 32 12.8 41.2 27.7z;
                                                                                 M140.2 71.9c12 11.2 22 27.9 19 41.7-3.1 13.8-19.3 24.7-36.6 33-17.4 8.2-35.8 13.7-49.6 7.8-13.7-6-22.7-23.5-27.8-42.8-5.1-19.2-6.2-40.2 3.6-50.8 9.8-10.6 30.5-10.9 47.9-8.2 17.4 2.6 31.4 8.2 43.5 19.3z;
                                                                                 M141.2 63.9c9.3 14.8 11.9 31.8 7.7 46.2-4.1 14.4-14.9 26.2-29 34-14 7.8-31.3 11.5-48.6 6.6-17.4-4.9-34.9-18.6-38.1-34.8-3.2-16.2 7.9-35.1 21.5-51C68.2 49.1 84.1 36.3 100 36.2c16 0 32 12.8 41.2 27.7z" />
                </path>
              </clipPath>
            </defs>
          </svg>
        </div>

      </div>


    </div>











    <div class="grid mt-3">
      <div class="col-50">
        <h2 class="text-green text-center text-1">Case Study</h2>
        <article id="slider">
          <div>
            <p>
            <p>Casi Studio</p>
            </p>
          </div>
          <input checked type='radio' name='slider' id='slide1' />
          <input type='radio' name='slider' id='slide2' />
          <input type='radio' name='slider' id='slide3' />
          <input type='radio' name='slider' id='slide4' />
          <input type='radio' name='slider' id='slide5' />
          <div id="slides">
            <div id="container">
              <div class="inner">
                <article>
                  <img src="http://placehold.it/942X400" />
                </article>
                <article>
                  <div class='caption'>
                    <bar>A Bubble on Flower</bar>
                  </div>
                  <img src="https://0.s3.envato.com/files/84450220/img/Dummy1-942X400.jpg" />
                </article>
                <article>
                  <div class='caption'>
                    <bar>A Small Elephant <a href="#">read more</a></bar>
                  </div>
                  <img src="https://0.s3.envato.com/files/84450220/img/Dummy2-942X400.jpg" />
                </article>
                <article>
                  <div class='caption'>
                    <bar>A Yellow Flower <a href="#">read more</a></bar>
                  </div>
                  <img src="https://0.s3.envato.com/files/84450220/img/Dummy3-942X400.jpg" />
                </article>
                <article>
                  <div class='caption'>
                    <bar>A Pink Flower</bar>
                  </div>
                  <img src="https://0.s3.envato.com/files/84450220/img/Dummy4-942X400.jpg" />
                </article>
              </div>
            </div>
          </div>
          <div id="commands">
            <label for='slide1'></label>
            <label for='slide2'></label>
            <label for='slide3'></label>
            <label for='slide4'></label>
            <label for='slide5'></label>
          </div>
          <div id="active">
            <label for='slide1'></label>
            <label for='slide2'></label>
            <label for='slide3'></label>
            <label for='slide4'></label>
            <label for='slide5'></label>
          </div>
        </article>
      </div>
      <div class="col-50">
        <H2 class="text-green text-center text-1">Dicono di me</H2>

      </div>
    </div>

    <?php the_content(); ?>
    <div class="grid text-center pt-4 pb-4" id="contatti">
      <div class="col-100 fade-up">
        <h3 class="text-1 text-green">Pront* a trasformare il tuo Business?</h3>
        <p class="text-3">Non aspettare! Inizia il tuo percorso di business coaching con una consulenza gratuita di 30 minuti e scopri come i tuoi valori possono guidare il tuo successo.</p>
        <a href="" class="button"> Contattami ora</a>
      </div>
    </div>




</main>

<?php endwhile;
                          else : ?>

<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>