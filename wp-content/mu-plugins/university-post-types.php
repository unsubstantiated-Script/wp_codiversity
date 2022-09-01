<?php
function university_post_types()
{
    register_post_type('event', array(
        'rewrite' => array('slug'=>'events'),
        'supports' => array('title', 'editor', 'excerpt'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event Item',
            'edit_item' => 'Edit Event Item',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        )
    ));
}


add_action('init', 'university_post_types');