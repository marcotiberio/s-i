<?php

namespace Flynt\Components\GridAllPosts;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

add_filter('Flynt/addComponentData?name=GridAllPosts', function ($data) {

    $data['items'] = Timber::get_posts([
        'post_status' => 'publish',
        'post_type' => array(
            'event',
            'podcast',
            'article',
        ),
        'posts_per_page' => 30,
        'meta_query' => array(
            array(
                'key' => 'datePost'
            ),
        ),
        'order' => 'DESC',
    ]);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'GridAllPosts',
        'label' => 'Grid: All Posts',
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'message',
                'type' => 'message',
                'message' => "This is a default component to show all posts.",
            ]
        ]
    ];
}

Options::addTranslatable('GridAllPosts', [
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('Reading Time', 'flynt'),
                'name' => 'readingTime',
                'type' => 'text',
                'default_value' => 'min',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('All Posts', 'flynt'),
                'name' => 'allPosts',
                'type' => 'text',
                'default_value' => 'See More Posts',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Read More', 'flynt'),
                'name' => 'readMore',
                'type' => 'text',
                'default_value' => 'Read More',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ]
        ],
    ]
]);
