<?php

    function wpb_adding_scripts() {

      wp_enqueue_script('dwell_js', get_template_directory_uri() . '/js/dwell-custom.js', array('jquery'),'04212017', true);

    }
    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

 ?>
