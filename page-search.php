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
      <!-- populated from dwell-featuredprops.js and featuredprops.json -->
    </div>
  </div>

  <div class="ready">
    <p class='heading'>Are you ready?</p>

    <!-- Make bounce animation -->
    <div class="chevron">
      <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
    </div>
    
  </div>

  <div class="idx-box">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('search_page')) : else : ?>

    <?php endif; ?>
  </div>


  <!-- Map, Email Alerts, Search Form -->

  <div class="search-btns">

    <div class="map-btn btn">
      <a href="	http://localhost/dwell-local/homes-for-sale-map-search/">
          Map Search
      </a>
    </div>
    <div class="detail-btn btn">
      <a href="http://localhost/dwell-local/homes-for-sale-search/">
          Detailed Search
      </a>
    </div>
    <div class="alert-btn btn">
      <a href="http://localhost/dwell-local/email-alerts/">
          Email Alerts
      </a>
    </div>


  </div>

</div>

<?php get_footer(); ?>
