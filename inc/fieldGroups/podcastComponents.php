<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'podcastMeta',
        'title' => 'Podcast Meta',
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
                    'value' => 'podcast',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'podcastComponents',
        'title' => 'Podcast Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'podcastComponents',
                'label' => __('Podcast Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    // Components\GridImageText\getACFLayout(),
                    Components\BlockPodcastInfo\getACFLayout(),
                    // Components\BlockImage\getACFLayout(),
                    // Components\BlockImageText\getACFLayout(),
                    // Components\BlockSpacer\getACFLayout(),
                    // Components\BlockWysiwyg\getACFLayout(),
                    // Components\BlockWysiwygSidebar\getACFLayout(),
                    // Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'podcast',
                ],
            ],
        ],
    ]);
});
