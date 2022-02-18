<?php

namespace Flynt\Components\BlockArtistObject;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'post';

add_filter('Flynt/addComponentData?name=BlockArtistObject', function ($data) {

    $postType = POST_TYPE;

    // $data['item'] = new \Timber\Post($data['item']);
    $data['items'] = Timber::get_posts($data[$postType]);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockArtistObject',
        'label' => 'Block: Related Artist',
        'sub_fields' => [
            [
                'label' => __('Artist', 'flynt'),
                'name' => 'post',
                'type' => 'post_object',
                'post_type' => [
                    'post',
                    'artist',
                ],
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'post_object',
                'ui' => 1,
                'required' => 0,
                'wrapper' => [
                    'width' => '100',
                ],
            ]
        ]
    ];
}
