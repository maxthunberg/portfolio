<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('News', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New News'),
            'edit_item' => __('Edit News'),
            'name' => __('News'),
            'search_items' => __('Search News'),
            'singular_name' => __('News'),
        ],
        'menu_icon' => 'dashicons-lightbulb',
        'menu_position' => 8,
        'public' => true,
    ]);
});
