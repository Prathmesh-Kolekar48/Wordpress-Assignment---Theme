<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

</head>

<header class="header">
  <div class="logo">
    <img src="<?php echo header_image(); ?>" alt="whitepace Logo">
  </div>
  <?php 
  wp_nav_menu(
    array(
      'theme_location' => 'primary',
      'container' => 'nav',
      'container_class' => 'menu main-menu',
      'menu_class' => 'menu',
      'fallback_cb' => false,
    )
  );
  ?>
    <div class="buttons">
      <button>Login</button>
      <button>Try whitepace free <img src=<?php echo get_stylesheet_directory_uri() . "/assets/svgs/arrow.svg" ?>
          alt=""></button>
    </div>
    <img class="toggle" src=<?php echo get_stylesheet_directory_uri() . "/assets/svgs/menu.svg" ?> alt="menu" >
  </nav>
</header>