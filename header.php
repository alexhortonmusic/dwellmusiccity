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
        <img src="http://localhost/dwell-local/wp-content/uploads/2017/05/Dwell-logo.png" alt="Dwell Logo">
      </div>
      <div class='nav-links'>
        <div class="social-links">
          <a href="https://www.facebook.com/dwellmusiccity"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
          <a href="https://twitter.com/dwellmusiccity"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
          <a href="https://www.pinterest.com/dwellmusic/"><i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/company-beta/3884770/"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
        </div>
        <!-- mega-menu plugin -->
        <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
      </div>
    </div>
  </nav>
