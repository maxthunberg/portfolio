<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('Team', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Team'),
            'edit_item' => __('Edit Team'),
            'name' => __('Team'),
            'search_items' => __('Search Team'),
            'singular_name' => __('Team'),
        ],
        'menu_icon' => 'dashicons-welcome-learn-more',
        'menu_position' => 8,
        'public' => true,
    ]);
});
