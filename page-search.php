<?php
/**
 * The template for displaying Search page
 *
 * Template Name: Search
 *
 */

get_header();
?>

<h1>SEARCH PAGE</h1>

<div class="searchpage">
  <div class="featured-listings">
    <div class="listing listing-1">
      <p>Price</p>
      <p>Address</p>
    </div>
    <div class="listing listing-2">
      <p>Price</p>
      <p>Address</p>
    </div>
    <div class="listing listing-3">
      <p>Price</p>
      <p>Address</p>
    </div>
  </div>
  <div class="idx-box">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('search_page')) : else : ?>

    <?php endif; ?>
  </div>

  <!-- Map, Email Alerts, Search Form -->
  <!-- Featured Listings (build custom widget) -->

  <div>
    <a href="http://localhost/dwell-local/homes-for-sale-search/">
      <div class="alerts-btn">
        Try a more detailed search
      </div>
    </a>
  </div>
  <div>
    <a href="http://localhost/dwell-local/email-alerts/">
      <div class="alerts-btn">
        Get email alerts based on your search
      </div>
    </a>
  </div>
  <div>
    <a href="	http://localhost/dwell-local/homes-for-sale-map-search/">
      <div class="alerts-btn">
        Maybe a map search?
      </div>
    </a>
  </div>
</div>

<?php get_footer(); ?>
