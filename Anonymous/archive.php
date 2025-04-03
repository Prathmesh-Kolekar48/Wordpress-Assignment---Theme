<?php get_header(); ?>

<div class="container content-area">
    <div class="posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        <?php endwhile; else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>