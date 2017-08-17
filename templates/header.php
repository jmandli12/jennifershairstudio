<header class="banner">
  <div class="header-container">
    <nav class="nav-primary">
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        $logo_url = $image[0];
      ?>
      <div class="logo">
        <img src="<?= $logo_url ?>" alt="JHS">
      </div>

      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav',
            'container_class' => 'main-nav'

          ]);
        endif;
       ?>
      
    </nav>
  </div>
</header>
