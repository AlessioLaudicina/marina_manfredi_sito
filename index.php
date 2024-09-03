<?php get_header(); ?>

<div class="spacer" style="background-color: #4C5A89;"></div>
<h2 class="text-green text-center pt-4">Le Tips del Mercoledì</h2>
<p class="text-green" style="font-style: italic; text-align:center;">"Ogni obiettivo straordinario è il risultato di piccole azioni quotidiane."</p>


<main class="grid">

  <div class="col-70 blog-70"> <!-- Modifica la larghezza del contenuto principale -->

    <?php if (is_search()) { ?>
      <h1><?php esc_html_e('Risultati di: ', 'nextframe'); ?><?php echo $s; ?></h1>
    <?php } else if (is_category() || is_tag() || is_tax()) { ?>
      <h1><?php echo single_cat_title(); ?></h1>
    <?php } ?>

    <div class="article-grid"> <!-- Contenitore per le card -->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="article-card">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('image-small', array('class' => 'img-res mb-2', 'alt' => get_the_title())); ?>
              <h3 class="text-green"><?php the_title(); ?></h3>
              <p><?php
                  $excerpt = get_the_excerpt(); // Ottiene l'estratto dell'articolo
                  echo wp_trim_words($excerpt, 15, '...'); // Limita l'estratto a 20 parole e aggiunge "..." alla fine
                  ?></p>
            </a>
            <div class="article-meta">
              <?php the_category(', '); ?>
              <?php the_tags('(', ', ', ')'); ?>
            </div>
          </article>
        <?php endwhile; ?>
    </div>

    <div class="pagination">
      <?php previous_posts_link('Newer posts'); ?>
      <?php next_posts_link('Older posts'); ?>
    </div>
  <?php else : ?>
    <div><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); ?></div>
  <?php endif; ?>
  </div>

  <aside class="col-30 blog-30 sidebar "> <!-- Sidebar Section -->
    <?php if (is_active_sidebar('blog-sidebar')) : ?>
      <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php else : ?>
      <!-- Default Sidebar Content -->
      <div class="widget">
        <h3 class="text-green pt-2"><?php esc_html_e('Cerca Articoli', 'nextframe'); ?></h3>
        <form class="form-search" method="get" action="<?php echo esc_url(home_url()); ?>">
          <input type="text" placeholder="<?php esc_attr_e('Search...', 'nextframe'); ?>" name="s">
          <button type="submit">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/search-outline.svg" alt="Search">
          </button>
        </form>
      </div>
      <div class="widget">
        <h4 class="text-green pt-2"><?php esc_html_e('Posts Recenti', 'nextframe'); ?></h4>
        <ul>
          <?php wp_get_archives(array('type' => 'postbypost', 'limit' => 5)); ?>

        </ul>
      </div>
      <div class="widget">
        <h4 class="text-green pt-2"><?php esc_html_e('Categorie', 'nextframe'); ?></h4>
        <ul>
          <?php wp_list_categories(array('title_li' => '')); ?>
        </ul>
      </div>
    <?php endif; ?>
  </aside>

</main>


<?php get_footer(); ?>