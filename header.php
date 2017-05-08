<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <script src="https://use.fontawesome.com/022879ddbb.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Arvo|Open+Sans:300,400" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  <?php wp_head(); ?>

</head>
<body>
  <nav>
    <div class='nav-wrap'>
      <div class='logo-header'>
        <h1>LOGO</h1>
      </div>
      <div class='nav-links'>
        <!-- mega-menu plugin -->
        <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
      </div>
    </div>
  </nav>
