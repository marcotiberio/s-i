<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'articleMeta',
        'title' => 'Article Meta',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Intro', 'flynt'),
                'name' => 'introArticle',
                'type' => 'textarea',
                'wrapper' => [
                    'width' => '100',
                ]
                ],
            [
                'label' => __('Date', 'flynt'),
                'name' => 'datePost',
                'type' => 'date_picker',
                'first_day' => 1,
                'wrapper' => [
                    'width' => '50',
                ]
                ],
            [
                'label' => __('Author', 'flynt'),
                'name' => 'authorArticle',
                'type' => 'text',
                'wrapper' => [
                    'width' => '50',
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'article',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'articleComponents',
        'title' => 'Article Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'articleComponents',
                'label' => __('Article Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockArtistInfo\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockPostObject\getACFLayout(),
                    Components\BlockSoundcloudOembed\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\BlockCredits\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockQuote\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwygTwoCol\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'article',
                ],
            ],
        ],
    ]);
});
