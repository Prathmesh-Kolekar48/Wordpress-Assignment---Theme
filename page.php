<?php get_header(); ?>

<div class="content-area container">

    <h1> <?php the_title();?></h1>
    
    <div class="text-area">
        <?php
            the_content();
        ?>
    </div>
</div>

<?php get_footer(); ?>