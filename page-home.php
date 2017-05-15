<?php
/**
 * The template for displaying Home page
 *
 * Template Name: Home
 *
 */

get_header();
?>

<div class="homepage">
  <!-- splash-area -->
  <div class="splash">
    <div class="tagline">
      <p>Your Nashville Real Estate Specialists</p>
    </div>
    <div class="cta-home">
      <a href="#">Take the First Step</a>
    </div>
  </div>

  <div class="idx-video-wrap">
    <div class="idx-box">

      <!-- search bar widget -->
    	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('idx_widget_area')) : else : ?>

    	<?php endif; ?>

    </div>
    <div class="video-box-wrap">
      <div class="video-box">
        <iframe src="https://player.vimeo.com/video/148142207" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="map-wrap">
    <?php echo file_get_contents('http://localhost/dwell-local/wp-content/themes/dwell-custom/Dwell_Map.svg'); ?>
  </div>

  <div class="testimonials">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('testimony_slider')) : else : ?>

    <?php endif; ?>
  </div>

  <div class="insta-feed">
    <?php echo do_shortcode('[instagram-feed]') ?>
  </div>


</div>

<?php get_footer(); ?>
