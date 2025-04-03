<nav class="main-nav">
  <?php
  wp_nav_menu(array(
    'theme_location' => 'main-menu',
    'container' => 'div',
    'container_class' => 'menu-container',
    'menu_class' => 'nav-menu'
  ));
  ?>
</nav>