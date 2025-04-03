<?php get_header(); ?>

<div class="content-area container">

    <h1>
    <?php
    the_title();
    ?>
    </h1>;
    <?php
    
    the_content();
    ?>
</div>

<?php get_footer(); ?>