<?php
    /**
     * Enqueue required scripts.
     */
    add_action('wp_enqueue_scripts', function () {
        wp_enqueue_style('parent-style', trailingslashit(get_template_directory_uri()).'style.css');
        wp_enqueue_script('smoothstate-js', trailingslashit(get_stylesheet_directory_uri()).'node_modules/smoothstate/jquery.smoothState.min.js', array('jquery'), null);
        wp_enqueue_script('script-js', trailingslashit(get_stylesheet_directory_uri()).'assets/js/script.js', array('jquery', 'smootstate-js'), '1.0.0', true);
    });
