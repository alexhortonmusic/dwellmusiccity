<?php get_header(); ?>

<div id="content">
  <div class="blogpage">
    <!-- IMAGE HEAVY BLOG LOOK -->
    <!-- Use small blurbs for each post on main page -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php
        if (has_post_thumbnail()) {
          $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ));
          $thumbnail_url = $thumbnail_data[0];
        }
        ?>

        <div class="posts">
          <?php if ( is_home() ) { ?>
            <div class="fullpost-multi" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(' <?php echo $thumbnail_url ?> ');">
              <?php } else { ?>
                <div class="fullpost-single">
                  <?php } ?>
                  <div class="postheader">
                    <h2 id="post-<?php the_ID(); ?>" class="title">
                      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                        <?php the_title(); ?></a>
                      </h2>
                      <small><?php the_time('F jS, Y') ?></small>
                    </div>


                    <?php if ( is_home() ) { ?>
                      <div class="entry multi-entry">
                        <?php the_excerpt(); ?>
                      </div>
                      <?php } else { ?>
                        <div class="entry single-entry">
                          <img src="<?php echo $thumbnail_url ?>" />
                          <?php the_content(); ?>
                        </div>
                        <?php } ?>
                      </div>

                    <?php endwhile; ?>

                    <div class="navigation">
                      <div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
                      <div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
                    </div>

                  <?php else : ?>
                    <h2 class="center">Not Found</h2>
                    <p class="center">
                      <?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

                    <?php endif; ?>
                  </div>
        </div>

</div> <!-- #content -->



<?php get_footer(); ?>
