<?php /*

Template Name: Home Template

*/ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<?php
                              /* Image Url */
                              $image_attributes =  wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>




<section class="p-fv">
  <div class="p-fv__back p-fv__back-left"></div>
  <div class="p-fv__back p-fv__back-right"></div>
  <div class="p-fv__mainContens">
    <img class="p-fv__img desktop-img" src="<?php echo $image_attributes[0]; ?>" alt="Desktop Image">
    <img class="p-fv__img mobile-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/1.jpg" alt="Mobile Image">
    <div class="p-fv__text-box">
      <h1 class="text-reveal text-1 text-white mt-1">Scopri il Potenziale del Tuo Business: La Tua Guida al Cambiamento</h1>
      <h3 class="text-reveal text-2 text-white mt-1">Hai almeno una criticità da voler risolvere nel tuo Business?</h3>
      <p class="text-reveal text-white">Sei un imprenditore, un libero professionista o una start up che vuole migliorarsi e massimizzare il potenziale della propria attività?</p>
      <a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="button fade-in">Scopri i Servizi</a>
    </div>
  </div>
</section>
<div class="spacer"></div>

<!-- <div class="cover text-white">
  <div class="cover__bg" style="background: url() right center; background-size: cover; "></div>
  <div class="cover__content" style="padding-left: 410px; padding-top:150px;">
    <h1 class="text-reveal text-1 text-white">Hai almeno una criticità da voler risolvere nel tuo Business?</h1>
    <p class="text-reveal text-white">Sei un imprenditore, un libero professionista o una start up che vuole migliorarsi e massimizzare il potenziale della propria attività? Io sono la guida giusta al cambiamento.</p>
    <a href="#chi-sono" class="button fade-in scroll-trigger"></a>
  </div>
</div> -->

<main class="grid grid--center mt-3" id="content">

  <div class="col-100 p-0">
    <div class="">
      <div class="grid">
        <div class="col-50 v-center">
          <h3 class="text-2 text-green">Perchè rivolgersi a Marina come Business Coach?</h3>
          <h4 class="text-3 text-green text-right" style="width: 88%;">Benefici & Vantaggi</h4>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/benefits.svg" style="max-height: 300px; width: 100%;">
          <div style="width:100%; display: flex; justify-content: center; align-items: center;"><a class="button--round-outline" href="https://www.instagram.com/p/C-kGaPvBZp0/?igsh=azQzdGo4a3c2MHY3" target="_blank">Perchè investire in un Business Coach?</a></div>
        </div>
        <div class="col-50">
          <div class="grid">
            <div class="col-50 fade-up">
              <div class="p-2">
                <h3 class="text-green">La tua Partner Esterna Ideale</h3>
                <p class="text-4">Con una profonda conoscenza delle strategie, tecniche e strumenti più efficaci, sono qui per essere la Coach adeguata per te.
                </p>
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
                <h3 class="text-green">Strategie efficaci e mirate</h3>
                <p>Utilizzo tecniche comprovate e strumenti all'avanguardia per massimizzare il potenziale della tua attività. </p>
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

    <div class="grid column-reverse pb-4 fade-up" style="display: flex; justify-content: center; align-items: center;">

      <div class="col-50 mt-4">
        <div class="p-3">
          <h3 class="text-2 text-green">La Mia Esperienza</h3>
          <p class="text-4">La società ed il mercato di oggi corrono veloci ed è davvero sfidante per qualsiasi Imprenditore «essere sul pezzo» – al passo con i tempi. Per essere «qui ed ora» sarebbe opportuno massimizzare il proprio potenziale aziendale-imprenditoriale. Non è banale. È necessario mettere in atto un processo: fare una ciclica ed attenta autovalutazione al fine di individuare i propri ostacoli allo sviluppo e le proprie aree di miglioramento. Io potrei essere il Partner Esterno giusto – che fa al caso tuo: tenutaria di questi strumenti e consapevole di come utilizzarli, posso fare la differenza. In ogni progetto, io costituisco una guida strategica al cambiamento - Business Coach & Partner, in grado di dare una consulenza mirata, professionale e soprattutto personalizzata. È questa la mia forza.
          </p>
          <a href="<?php echo get_permalink(get_page_by_path('chi-sono')); ?>" class="button"> Scopri di più su Marina</a>

        </div>
      </div>
      <div class="col-50 relative">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/15.jpg" class="img-res img-rounded" style=" border: 10px solid #cfb6fa;" alt="About-me">
      </div>

    </div>
    <div class="grid mt-3" style="display: flex; justify-content: center;" id="cosa-faccio">
      <div class="col-50 mt-2 fade-up" style="display: flex; justify-content: center; position: relative; flex-wrap: wrap;">
        <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; text-align: center; max-width: 400px; min-width: 400px; max-height: 250px; min-height: 250px; display: flex; flex-direction: column; justify-content: center;">
          <h3 class="text-2 text-green" style="margin-bottom: 15px;">Technical Skills</h3>
          <blockquote style="font-style: italic; color: #333;">
            <p id="technical-skill" style="margin: 0; font-size: 18px; text-transform:uppercase;">10 anni negli Acquisti</p>
          </blockquote>
        </div>
      </div>
      <div class="col-50 mt-2 fade-up" style="display: flex; justify-content: center; position: relative; flex-wrap: wrap;">
        <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; text-align: center; max-width: 400px; min-width: 400px; min-height: 250px; max-height: 250px; display: flex; flex-direction: column; justify-content: center;">
          <h3 class="text-2 text-green" style="margin-bottom: 15px;">Soft Skills</h3>
          <blockquote style="font-style: italic; color: #333;">
            <p id="skill" style="margin: 0; font-size: 20px; text-transform:uppercase;">Open to challenges</p>
          </blockquote>
        </div>
      </div>

    </div>

    <div class="spacer"></div>


    <div class="grid fade-up mt-3">
      <h3 class="text-2 text-green mt-2" style="width: 100%; text-align: center;">Il Tuo Successo con il Mio Metodo</h3>

      <div class="col-50">
        <div class="relative-container">
          <div class="col-100">
            <div class="background-shape" style=" background-color: #008D6B;"></div>

            <div class="text-content">
              <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services.svg" alt="">

              <h4 class="text-3 mt-3 font-bold" style="color: #cfb6fa;">Step 1: Prima Call Conoscitiva</h4>
              <strong class="text-3 text-green mt-1" style="color: #cfb6fa;">Inizia Il Tuo Viaggio Verso il Successo</strong>
              <p class="text-4 mt-1">
                La prima fase del mio metodo di coaching è cruciale per comprendere le tue esigenze e obiettivi unici - osservazione ed ascolto attivo. Il mio approccio empatico e professionale mi permette di comprendere a fondo il contesto del tuo business, identificando punti di forza e aree di miglioramento.
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


          <div style="max-width: 650px;">
            <div class="background-shape"></div>

            <div class="text-content">
              <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services-7.svg" alt="">

              <h4 class="text-3 text-green mt-3 font-bold">Step 2: Analisi e Pianificazione del Servizio</h4>
              <strong class="text-3 text-green mt-1">Pianifica il Tuo Successo</strong>
              <p class="text-4 mt-1">
                In questa fase, costruisco – insieme a te - un Action Plan personalizzato. Smantelliamo le convinzioni limitanti e definiamo chiaramente i tuoi obiettivi attraverso esercizi mirati. Il mio processo assicura che ogni passo del cambiamento sia in linea con le tue aspirazioni e con il mercato di riferimento, creando una solida base per il successo.
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
            <div class="background-shape"></div>

            <div class="text-content">
              <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services-4.svg" alt="">

              <h4 class="text-3 text-green mt-3 font-bold">Step 3: Monitoraggio & Revisione</h4>
              <strong class="text-3 text-green mt-1">Mantieni la rotta verso il Tuo Successo</strong>
              <p class="text-4 mt-1">
                Durante questa fase, stabiliamo insieme KPIs chiari e misurabili. Monitoriamo i tuoi progressi e rivediamo le strategie per garantire che tu rimanga sulla strada giusta verso il raggiungimento dei tuoi obiettivi. Il mio supporto continuo ti aiuta a mantenere la rotta e a raggiungere risultati tangibili ed oggettivi. </p>

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


          <div style="max-width: 650px;">
            <div class="background-shape" style=" background-color: #008D6B;"></div>

            <div class="text-content">
              <img class="img-res" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/services-6.svg" alt="">

              <h4 class="text-3 mt-3 font-bold" style="color: #cfb6fa;">Raggiungere l' obiettivo</h4>
              <p class="text-4 mt-1">
                Sei pronto a portare la tua attività al livello successivo? Non lasciare che le sfide ti blocchino: con il giusto supporto, il successo è a portata di mano!
              </p>
              <a class="button--round-outline" href="https://www.instagram.com/reel/C8wZCSuoz2L/?igsh=MW1yd2EzYmMyYnpuZA==" target="_blank">Come ti vedi tra 10 anni?</a>
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
        <h2 class="text-green text-center text-2">Case Study</h2>
        <article id="slider">
          <input type="radio" name="slider" id="slide1" checked />
          <input type="radio" name="slider" id="slide2" />
          <input type="radio" name="slider" id="slide3" />
          <input type="radio" name="slider" id="slide4" />
          <input type="radio" name="slider" id="slide5" />

          <div id="slides">
            <div class="inner">
              <!-- Slide 1 -->
              <div class="slide-container">
                <div class="caption">Responsabile nel settore ristorazione</div>
                <div class="content">
                  <div class="section">
                    <div class="case-title">Chi/Cosa</div>
                    <div class="section-content">
                      Alla guida di un ristorante a conduzione familiare, si è trovata di fronte a sfide significative nella gestione delle comunicazioni interne e delle relazioni con i fornitori. La mancanza di un sistema organizzato stava compromettendo l'efficienza operativa e causando stress nella gestione quotidiana.
                    </div>
                    <div class="case-title">Criticità</div>
                    <div class="section-content">
                      La mancanza di un sistema organizzato delle informazioni relative ai fornitori e al personale stava creando disorganizzazione, tempi di ricerca lunghi ed inefficienze operative compromettendo l'efficienza operativa e causando stress nella gestione quotidiana.
                    </div>
                    <div class="case-title">Proposta Risolutiva</div>
                    <div class="section-content">
                      Ho collaborato per sviluppare e implementare un database fornitori personalizzato, migliorando così la comunicazione interna e la coordinazione del personale. Questo sistema ha reso la gestione delle relazioni con i fornitori e la supervisione del personale molto più fluida, riducendo drasticamente i tempi di ricerca e aumentando l'efficienza operativa del ristorante.
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="slide-container">
                <div class="caption">Dipendente d’ufficio in area Finance</div>
                <div class="content">
                  <div class="section">
                    <div class="case-title">Chi/Cosa</div>
                    <div class="section-content">
                      Dipendente d'ufficio in gamba e con una carriera ben avviata, si è rivolta a me dopo aver notato alcune difficoltà organizzative nel suo lavoro quotidiano, ispirata da un mio post sui social media.
                    </div>
                    <div class="case-title">Criticità</div>
                    <div class="section-content">
                      Nonostante lei avesse già implementato alcune buone pratiche, continuava a riscontrare problemi nel rispettare le scadenze e a gestire efficacemente le sue attività quotidiane – si sentiva “stressata” dalle scadenze in arrivo ogni mese.
                    </div>
                    <div class="case-title">Proposta Risolutiva</div>
                    <div class="section-content">
                      Durante la consulenza, ho analizzato le sue sfide specifiche e le ho fornito strategie personalizzate per migliorare la sua organizzazione. Attraverso consigli pratici e dettagliati, è riuscita a gestire meglio il suo tempo, a rispettare le scadenze senza ansia e a sentirsi più sicura e soddisfatta del proprio lavoro.
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="slide-container">
                <div class="caption">Artigiana nel settore sartoria</div>
                <div class="content">
                  <div class="section">
                    <div class="case-title">Chi/Cosa</div>
                    <div class="section-content">
                      Talentuosa artigiana sartoriale, si trovava in un momento di stallo professionale, con difficoltà nel definire obiettivi chiari e nel far crescere il suo business.
                    </div>
                    <div class="case-title">Criticità</div>
                    <div class="section-content">
                      Lei sentiva la pressione di competere in un mercato altamente competitivo (quello del lusso), senza però riuscire a identificare una direzione strategica che le permettesse di distinguersi e valorizzare le sue competenze uniche.
                    </div>
                    <div class="case-title">Proposta Risolutiva</div>
                    <div class="section-content">
                      Dopo un incontro approfondito, abbiamo lavorato insieme per ridefinire la sua visione professionale, identificando obiettivi realistici e sviluppando un piano d'azione su misura. Con un approccio empatico e pratico, l'ho aiutata a superare le sue incertezze, potenziando la sua capacità di prendere decisioni strategiche e migliorando la sua autostima nel percorso di crescita.
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 4 - Studio Dentistico -->
              <div class="slide-container">
                <div class="caption">Studio Dentistico</div>
                <div class="content">
                  <div class="section">
                    <div class="case-title">Chi/Cosa</div>
                    <div class="section-content">
                      Studio Dentistico a conduzione familiare (due sedi al Sud Italia), gestito da una coppia di dentisti (marito e moglie).
                    </div>
                    <div class="case-title">Criticità</div>
                    <div class="section-content">
                      I titolari desideravano migliorare le proprie competenze di leadership per gestire al meglio il team e affrontare le sfide della crescita. Inoltre, avevano necessità di assumere una nuova risorsa di segreteria, ma non avevano esperienza nella gestione del processo di selezione.
                    </div>
                    <div class="case-title">Proposta Risolutiva</div>
                    <div class="section-content">
                      Ho proposto un workshop online di 2h, fornendo nozioni fondamentali di leadership ed ho preparato un vademecum ad hoc per l’applicazione pratica delle competenze acquisite. Inoltre, ho supportato i titolari nella ricerca e selezione del personale, al fine di garantire un’assunzione strategica allineata alla visione aziendale.
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 5 - Food Events Planner -->
              <div class="slide-container">
                <div class="caption">Food Events Planner</div>
                <div class="content">
                  <div class="section">
                    <div class="case-title">Chi/Cosa</div>
                    <div class="section-content">
                      Azienda di organizzazione eventi enogastronomici, nata dalla fusione di due società del settore, mi ha contattata per risolvere conflitti interni tra dipendenti.
                    </div>
                    <div class="case-title">Criticità</div>
                    <div class="section-content">
                      A seguito della nuova struttura organizzativa, erano emersi attriti tra alcuni dipendenti che, svolgendo la stessa mansione, si trovavano a dover collaborare per la prima volta. La problematica principale derivava dalla differente esperienza pregressa e dall'anzianità di ruolo tra i membri del team.
                    </div>
                    <div class="case-title">Proposta Risolutiva</div>
                    <div class="section-content">
                      Ho proposto un percorso di team building mirato a migliorare la comunicazione e la collaborazione tra i dipendenti, valorizzando le diverse competenze e promuovendo un ambiente di lavoro inclusivo. Grazie a questi interventi, l'azienda è riuscita a creare un team coeso e collaborativo, migliorando significativamente la produttività e il clima aziendale.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Comandi per navigare tra le slide -->
            <div id="commands">
              <label for="slide1"></label>
              <label for="slide2"></label>
              <label for="slide3"></label>
              <label for="slide4"></label>
              <label for="slide5"></label>
            </div>
          </div>
        </article>
      </div>

      <div class="col-50">
        <h2 class="text-green text-center text-2">Dicono di me</h2>
        <!-- Qui puoi aggiungere il contenuto per le recensioni di Google -->
        <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
      </div>

    </div>


    <?php the_content(); ?>
    <div class="grid text-center pt-4 pb-4" id="contatti">
      <div class="col-100 fade-up">
        <h3 class="text-2 text-green">Pront* a trasformare il tuo Business?</h3>
        <p class="text-3">Inizia il tuo percorso di business coaching con una consulenza gratuita di 30 minuti <br> e scopri come i tuoi valori possono guidare il tuo successo.</p>
        <a href="<?php echo get_permalink(get_page_by_path('contatti')); ?>" class="button"> Contattami ora</a>
      </div>
    </div>




</main>


<?php endwhile;
                          else : ?>

<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>