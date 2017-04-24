<?php

    function wpb_adding_scripts() {

      wp_enqueue_script('dwell_js', get_template_directory_uri() . '/js/dwell-custom.js', array('jquery'),'04212017', true);

    }
    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

    if (function_exists('register_sidebar')) {

    	register_sidebar(array(
    		'name' => 'Widgetized Area',
    		'id'   => 'widgetized-area',
    		'description'   => 'This is a widgetized area.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));

    }

 ?>
