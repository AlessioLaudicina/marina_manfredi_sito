<?php get_header(); // insert header.php inclusion  
?>

<div class="spacer"></div>
<main class="main">

  <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); // start of the loop ?>

  <!-- loop content -->

  <article class="article">
    <?php the_post_thumbnail('image-big', array('class' => 'img-res', 'alt' => get_the_title())); // display featured image of the post 
    ?>
    <h1><?php the_title(); ?></h1>

    <?php the_content(esc_html__('Read More...', 'nextframe')); ?>

  </article>


<?php endwhile;
                            else : // if no result dispaly message 
?>

<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); // dispaly no result message 
    ?></p>

<?php endif; ?>

</main>

<?php get_footer(); // insert footer.php inclusion  
?>