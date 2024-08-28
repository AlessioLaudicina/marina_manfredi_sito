<?php get_header(); ?>

<div class="spacer" style="background-color: #4C5A89;"></div>
<main class="main" style="margin: 0 auto; max-width: 800px; padding: 20px; background-color: #ffffff; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 8px;">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article class="article">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="text-align: center; margin-bottom: 20px;">
                        <?php the_post_thumbnail('image-big', array('class' => 'img-res', 'alt' => get_the_title(), 'style' => 'border-radius: 8px; max-width: 100%; height: auto;')); ?>
                    </div>
                <?php endif; ?>

                <h1 class="text-green" style="font-size: 2.5em; text-align: center; margin-bottom: 10px;"><?php the_title(); ?></h1>

                <div class="post-meta" style="text-align: center; font-size: 0.9em; color: #777; margin-bottom: 20px;">
                    <span><?php the_time('F j, Y'); ?></span> | <span><?php the_author(); ?></span> | <span><?php the_category(', '); ?></span>
                </div>

                <div class="post-content" style="font-size: 1.1em; line-height: 1.8; color: #555;">
                    <?php the_content(esc_html__('Read More...', 'nextframe')); ?>
                </div>

                <div class="post-tags" style="margin-top: 30px; text-align: center;">
                    <?php the_tags('<span style="font-weight: bold;">Tags:</span> ', ', ', ''); ?>
                </div>

                <div class="post-navigation" style="margin-top: 40px; display: flex; justify-content: space-between;">
                    <div class="prev-post" style="font-size: 0.9em;">
                        <?php previous_post_link('%link', '← %title'); ?>
                    </div>
                    <div class="next-post" style="font-size: 0.9em; text-align: right;">
                        <?php next_post_link('%link', '%title →'); ?>
                    </div>
                </div>

                <div class="author-bio" style="margin-top: 50px; padding: 20px; background-color: #f9f9f9; border-radius: 8px; display: flex; align-items: center;">
                    <div class="author-avatar" style="margin-right: 20px;">
                        <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                    </div>
                    <div class="author-info">
                        <h4 style="margin: 0;"><?php the_author(); ?></h4>
                        <p style="margin: 5px 0;"><?php the_author_meta('description'); ?></p>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="color: #4C5A89; text-decoration: underline;">View all posts by <?php the_author(); ?></a>
                    </div>
                </div>
            </article>

        <?php endwhile; ?>
    <?php else : ?>

        <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); ?></p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>