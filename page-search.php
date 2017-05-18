<?php
/**
 * The template for displaying Search page
 *
 * Template Name: Search
 *
 */

get_header();
?>

<div class="searchpage">
  <div class="pagename">
    <p>Home &nbsp; > &nbsp;  Search</p>
  </div>
  <div class="search-hero">
    <p>Ready to find your dream home?</p>
  </div>
  <div class="featured-listings">
    <p class='heading'>Featured Listings</p>
    <div class="featured-listings-list">

    </div>
  </div>
  <div class="idx-box">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('search_page')) : else : ?>

    <?php endif; ?>
  </div>

  <!-- Map, Email Alerts, Search Form -->
  <!-- Featured Listings (build custom widget) -->

  <div class="detail-btn btn">
    <a href="http://localhost/dwell-local/homes-for-sale-search/">
      <div>
        Try a more detailed search
      </div>
    </a>
  </div>
  <div class="alerts-btn btn">
    <a href="http://localhost/dwell-local/email-alerts/">
      <div>
        Get email alerts based on your search
      </div>
    </a>
  </div>
  <div class="map-btn btn">
    <a href="	http://localhost/dwell-local/homes-for-sale-map-search/">
      <div>
        Maybe a map search?
      </div>
    </a>
  </div>
</div>

<?php get_footer(); ?>
