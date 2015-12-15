<header class="banner">
  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <a class="brand animated slideInLeft" href="<?= esc_url(home_url('/')); ?>"><img src="<?php $img = get_field('logo', 'option'); echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" /></a>
    </div>
    <div class="col-md-4">
    <div class="cta pull-right">
    <p class="top">Looking for a custom shelving solution?</p>
    <p class="call">Call us on <span class="phone-span"><?php the_field('telephone', 'options'); ?></span></p>
    </div>
    </div>
    <div class="col-md-4">
    <p><a href="#" class="btn cta-btn hvr-sweep-to-right pull-right">Send us your specification <i class="fa fa-angle-right"></i></a></p>
    </div>
  </div>
  </div>
</header>
<div class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</div>
