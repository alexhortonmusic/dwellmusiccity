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
      <div class="vimeo-cover-wrap">
        <div class="heading">
          <p>Wanna buy a home, and don't know where to start?</p>
          <div class="chevron">
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
          </div>
        </div>
        <!-- <div class="video-box">
          <iframe src="https://player.vimeo.com/video/148142207?autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div> -->
        <div class='vimeo-cover'>
          <img id='homepage-video-cover' src="http://localhost/dwell-local/wp-content/uploads/2017/05/dwellvimeo.playbutton-03.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="map-wrap">
    <p>Learn about Nashville</p>
    <p>Use our interactive map to learn about Nashville's most popular neighborhoods</p>
    <div class="map">
      <?php echo file_get_contents('http://localhost/dwell-local/wp-content/themes/dwell-custom/Dwell_Map.svg'); ?>
    </div>
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
