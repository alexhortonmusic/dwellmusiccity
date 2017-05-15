<?php
/**
 * The template for displaying About Nashville page
 *
 * Template Name: About Nashville
 *
 */

get_header();
?>

<h1>ABOUT NASHVILLE PAGE</h1>
<p>Blurb about nashville</p>

<div class="map-wrap">
  <?php echo file_get_contents('http://localhost/dwell-local/wp-content/themes/dwell-custom/Dwell_Map.svg'); ?>
</div>

<?php get_footer(); ?>
