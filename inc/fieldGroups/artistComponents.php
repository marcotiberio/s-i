<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'artistMeta',
        'title' => 'Artist Meta',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Artist Bio', 'flynt'),
                'name' => 'bioTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Bio', 'flynt'),
                'name' => 'bio',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'wrapper' => [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('Socials', 'flynt'),
                'name' => 'socialTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Socials', 'flynt'),
                'name' => 'repeaterPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Social Link', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Panel Link', 'flynt'),
                        'name' => 'panelLink',
                        'type' => 'link',
                        'return_format' => 'array',
                        'wrapper' => [
                            'width' => '100',
                        ],
                    ],
                ],
            ],
            // [
            //     'label' => __('Slider', 'flynt'),
            //     'name' => 'slider',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual',
            //     'wrapper' => [
            //         'width' => '100',
            //     ]
            // ],
            // [
            //     'label' => __('Slider', 'flynt'),
            //     'name' => 'images',
            //     'type' => 'gallery',
            //     'min' => 2,
            //     'preview_size' => 'medium',
            //     'mime_types' => 'jpg,jpeg,png',
            //     'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
            //     'required' => 1
            // ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'artist',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'artistComponents',
        'title' => 'Artist Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'artistComponents',
                'label' => __('Artist Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    // Components\GridImageText\getACFLayout(),
                    Components\BlockArtistInfo\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    // Components\BlockImageText\getACFLayout(),
                    // Components\BlockSpacer\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwygSidebar\getACFLayout(),
                    // Components\GridPodcastsLatest\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'artist',
                ],
            ],
        ],
    ]);
});
