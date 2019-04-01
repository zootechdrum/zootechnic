<?php

    function zootechnic_files() {
        wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Open+Sans:300,400,600');
        wp_enqueue_style('zootechnic_main_styles', get_stylesheet_uri());

    }
add_action("wp_enqueue_scripts", "zootechnic_files");