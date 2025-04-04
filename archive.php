<?php get_header(); ?>

<div class="container content-area">
    <div class="posts-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post-card">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="post-content">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p class="post-excerpt"><?php the_excerpt(); ?></p>
                    <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>