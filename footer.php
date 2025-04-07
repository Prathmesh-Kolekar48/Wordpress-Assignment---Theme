<footer class="footer">
  <div class="footer-container">
    <div class="footer-section brand-section">
      <h2 class="brand">
        <img src="<?php echo header_image(); ?>" alt="whitepace Logo">

      </h2>
      <p class="brand-description">
        <?php echo bloginfo("description"); ?>
      </p>
    </div>
    <div class="footer-section">
      <h3>Product</h3>
      <?php
      wp_nav_menu([
        'theme_location' => 'footer_product',
        'menu_class' => 'footer-menu',
        'container' => false,
      ]);
      ?>
    </div>
    <div class="footer-section">
      <h3>Resources</h3>
      <?php
      wp_nav_menu([
        'theme_location' => 'footer_resources',
        'menu_class' => 'footer-menu',
        'container' => false,
      ]);
      ?>
    </div>
    <div class="footer-section">
      <h3>Company</h3>
      <?php
      wp_nav_menu([
        'theme_location' => 'footer_company',
        'menu_class' => 'footer-menu',
        'container' => false,
      ]);
      ?>
    </div>
    <div class="footer-section">
      <h3 style="font-size: 28px;">Try It Today</h3>
      <p>Get started for free. Add your whole team as your needs grow.</p>
      <a href="#" class="cta-button">Start Today <img src=<?php echo get_stylesheet_directory_uri() . "/assets/svgs/arrow.svg" ?> alt=""></a>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-bottom-left">
      <a href="#"><img src=<?php echo get_stylesheet_directory_uri() . "/assets/svgs/globe.svg" ?> alt=""> English
        <img src=<?php echo get_stylesheet_directory_uri() . "/assets/svgs/down-arrow.svg" ?> alt=""></a>
      <a href="#">Terms & Privacy</a> <a href="#">Security</a> <a href="#">Status</a>

      <span>© <?php echo date("Y"); ?> Whitepace LLC.</span>
    </div>

    <div class="footer-bottom-right social-links">

      <?php if (get_theme_mod('facebook_url')): ?>
        <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank">
          <i class="fa fa-facebook-f"></i>
        </a>
      <?php endif; ?>

      <?php if (get_theme_mod('twitter_url')): ?>
        <a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" target="_blank">
          <i class="fa fa-twitter"></i>
        </a>
      <?php endif; ?>

      <?php if (get_theme_mod('linkedin_url')): ?>
        <a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>" target="_blank">
          <i class="fa fa-linkedin"></i>
        </a>
      <?php endif; ?>
    </div>
  </div>

  <?php wp_footer(); ?>  
</footer>