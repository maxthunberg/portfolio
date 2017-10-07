<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('Contact', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Contact'),
            'edit_item' => __('Edit Contact'),
            'name' => __('Contact'),
            'search_items' => __('Search Contact'),
            'singular_name' => __('Contact'),
        ],
        'menu_icon' => 'dashicons-email-alt',
        'menu_position' => 8,
        'public' => true,
    ]);
});
