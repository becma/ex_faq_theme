<?php

function create_posttype() {

    register_post_type( 'faq',
        array(
            'labels' => array(
                'name' => __( 'FAQ' ),
                'singular_name' => __( 'FAQ' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-info',
            'rewrite' => array('slug' => 'faq'),
            'show_in_rest' => true,
            'supports' => array('title', 'id'),   
        )
    );
}

add_action('init', 'create_posttype');

?>