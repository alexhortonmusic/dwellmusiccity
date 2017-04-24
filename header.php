<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <script src="https://use.fontawesome.com/022879ddbb.js"></script>
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
        <a href='/dwell-local' class="nav-link-page">Home</a>
        <a href='/dwell-local/about' class="nav-link-page">About</a>
        <a href='/dwell-local/search-homes' class="nav-link-page">Search Homes</a>
        <a href='/dwell-local/about-nashville' class="nav-link-page">About Nashville</a>
        <a href='/dwell-local/buy-a-home' class="nav-link-page">Buy a Home</a>
        <a href='/dwell-local/sell-your-home' class="nav-link-page">Sell Your Home</a>
        <a href='/dwell-local/blog' class="nav-link-page">Blog</a>
        <a href='/dwell-local/contact' class="nav-link-page">Contact</a>
      </div>
    </div>
  </nav>
