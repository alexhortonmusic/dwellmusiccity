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
<p>Advanced search, automatic updates on new listings</p>

<div class="searchpage">
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('search_page')) : else : ?>

  <?php endif; ?>

  <div class="email-alerts">
    <a href="http://localhost/dwell-local/email-alerts/">
      <div class="alerts-btn" style="border: 1px solid red; background-color: red; color: white; height: 30px; width: 150px; margin: 0 auto;">
        Get email alerts based on your search
      </div>
    </a>
  </div>
</div>

<?php get_footer(); ?>
