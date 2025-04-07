<?php get_header(); ?>

<div class="container wordpress-content-area">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="text-area">
            <h1><?php the_title(); ?></h1>
            <br>

            <div class="text-area">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>

