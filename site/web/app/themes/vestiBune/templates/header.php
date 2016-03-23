<?php
use Roots\Sage\Assets;
?>
<header class="banner">
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <a href="<?= esc_url(home_url('/')); ?>">
                <img src="<?= Assets\asset_path('images/logo.png') ?>" alt="Logo VestiBune.net"  />
              </a>
              </div>
          </div>

    <nav class="nav-primary">
      <?php
          wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
          );
      ?>
    </nav>
  </div>
</header>
