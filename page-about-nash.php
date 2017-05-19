<?php
/**
 * The template for displaying About Nashville page
 *
 * Template Name: About Nashville
 *
 */

get_header();
?>
<div class="aboutnashpage">
  <div class="pagename">
    <p>Home &nbsp; > &nbsp;  About Nashville</p>
  </div>

</div>

<div class="map-wrap">
  <?php echo file_get_contents('http://localhost/dwell-local/wp-content/themes/dwell-custom/Dwell_Map.svg'); ?>
</div>

<?php get_footer(); ?>
