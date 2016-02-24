<!DOCTYPE html>
<html>
<meta <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo( 'name' ) ?></title>
  <?php wp_head() ; ?>
</head>

<body <?php body_class(); ?>>
<header>
<!-- Menu para navegação principal -->

<nav <?php post_class( $class = 'navbar navbar-default navbar-fixed-top' );  ?> 
style="<?php if (is_admin_bar_showing()){echo 'margin-top:27px';} ?>"><!-- Se mostrar o admin bar acrescenta 27px de margen-top -->

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo( $show = 'url' ) ?>">Brand</a>
    </div>
 <?php
            wp_nav_menu( array(
                'menu'              => 'menu-principal',
                'theme_location'    => 'menu-principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
  
  </div><!-- /.container-fluid -->
</nav>
</header>