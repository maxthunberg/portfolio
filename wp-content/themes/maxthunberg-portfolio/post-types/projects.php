<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('Projects', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Projects'),
            'edit_item' => __('Edit Projects'),
            'name' => __('Projects'),
            'search_items' => __('Search Projects'),
            'singular_name' => __('Projects'),
        ],
        'menu_icon' => 'dashicons-format-aside',
        'menu_position' => 8,
        'public' => true,
    ]);

});
