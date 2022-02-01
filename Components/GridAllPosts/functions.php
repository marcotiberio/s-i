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
            'artist'
        ),
        'posts_per_page' => -1,
        'orderby' => 'date',
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
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'text',
            ],
            [
                'label' => __('Categories', 'flynt'),
                'name' => 'taxonomies',
                'type' => 'taxonomy',
                'instructions' => __('Select 1 or more categories or leave empty to show from all posts.', 'flynt'),
                'taxonomy' => 'category',
                'field_type' => 'multi_select',
                'allow_null' => 1,
                'multiple' => 1,
                'add_term' => 0,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'object'
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
