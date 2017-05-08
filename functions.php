<?php

    function wpb_adding_scripts() {

      wp_enqueue_script('dwell_js', get_template_directory_uri() . '/js/dwell-custom.js', array('jquery'),'04212017', true);

    }
    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

    if (function_exists('register_sidebar')) {

    	register_sidebar(array(
    		'name' => 'IDX widget area',
    		'id'   => 'idx_widget_area',
    		'description'   => 'This area is for the IDX Quick search',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));

      register_sidebar(array(
        'name' => 'Testimony Slider',
        'id'   => 'testimony_slider',
        'description'   => 'This area is for the Testimony Slider',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
      ));

      register_sidebar(array(
        'name' => 'Search Page',
        'id'   => 'search_page',
        'description'   => 'This area is for the Search Page widgets',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
      ));

      // register_sidebar(array(
      //   'name' => 'Navbar',
      //   'id'   => 'navbar',
      //   'description'   => 'This area is for the Nav Bar widget',
      //   'before_widget' => '<div id="nav_bar" class="widget %2$s">',
      //   'after_widget'  => '</div>',
      //   'before_title'  => '<h4>',
      //   'after_title'   => '</h4>'
      // ));

    }

    // add_theme_support( 'post-thumbnails' );

 ?>
