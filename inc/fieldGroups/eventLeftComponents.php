<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'eventMeta',
        'title' => 'Event Meta',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Date', 'flynt'),
                'name' => 'datePost',
                'type' => 'date_picker',
                'first_day' => 1,
                'wrapper' => [
                    'width' => '100',
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'eventLeftComponents',
        'title' => 'Event Left Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventLeftComponents',
                'label' => __('Event Left Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockEventSlider\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
});
