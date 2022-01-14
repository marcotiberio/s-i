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
                'name' => 'dateEvent',
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
        'name' => 'eventComponents',
        'title' => 'Event Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventComponents',
                'label' => __('Event Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    // Components\GridImageText\getACFLayout(),
                    Components\BlockEventInfo\getACFLayout(),
                    Components\BlockSoundcloudOembed\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    // Components\BlockImage\getACFLayout(),
                    // Components\BlockImageText\getACFLayout(),
                    // Components\BlockSpacer\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    // Components\BlockWysiwygSidebar\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
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
