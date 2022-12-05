<?php
    //add dynamic title
    function followNabil_theme_support(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'followNabil_theme_support');


    function followAndrew_menus(){
        $locations = array(
            'primary' => "Desktop Primary Left Sidebar",
            'footer' => "Footer Menu Items"
        );
        register_nav_menus($locations);
    }
    function follownabil_register_styles(){

        $version = wp_get_theme()->get('version');
        wp_enqueue_style('follownabil-style', get_template_directory_uri() . "/style.css", array('follownabil-bootstrap'), $version, 'all');
        wp_enqueue_style('follownabil-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
        wp_enqueue_style('follownabil-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    }
add_action('wp_enqueue_scripts', 'follownabil_register_styles');


        function follownabil_register_scripts(){
        wp_enqueue_script('follownabil-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
        wp_enqueue_script('follownabil-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
        wp_enqueue_script('follownabil-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
        wp_enqueue_script('follownabil-js', get_template_directory_uri() . "/asset/js/main.js", array(), '3.4.1', true);
        }
add_action('wp_enqueue_scripts', 'follownabil_register_scripts');
?>