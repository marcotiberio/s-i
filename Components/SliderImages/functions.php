<?php

namespace Flynt\Components\SliderImages;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

add_filter('Flynt/addComponentData?name=SliderImages', function ($data) {
    $translatableOptions = Options::getTranslatable('SliderOptions');
    $data['jsonData'] = [
        'options' => array_merge($translatableOptions, $data['options']),
    ];
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'sliderImages',
        'label' => 'Slider: Images',
        'sub_fields' => [
            // [
            //     'label' => __('Title', 'flynt'),
            //     'name' => 'preContentHtml',
            //     'type' => 'wysiwyg',
            //     'instructions' => __('Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
            //     'media_upload' => 0,
            // ],
            [
                'label' => __('Slider', 'flynt'),
                'name' => 'sliderTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Slider', 'flynt'),
                'name' => 'repeaterSlider',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => __('Add Image', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'panelImage',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ],
                ],
            ],
            // [
            //     'label' => __('Images', 'flynt'),
            //     'name' => 'images',
            //     'type' => 'gallery',
            //     'min' => 2,
            //     'preview_size' => 'medium',
            //     'mime_types' => 'jpg,jpeg,png',
            //     'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
            //     'required' => 1
            // ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Enable Autoplay', 'flynt'),
                        'name' => 'autoplay',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                    [
                        'label' => __('Autoplay Speed (in milliseconds)', 'flynt'),
                        'name' => 'autoplaySpeed',
                        'type' => 'number',
                        'min' => 2000,
                        'step' => 1,
                        'default_value' => 4000,
                        'required' => 1,
                        'conditional_logic' => [
                            [
                                [
                                    'fieldPath' => 'autoplay',
                                    'operator' => '==',
                                    'value' => 1
                                ]
                            ]
                        ],
                    ],
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}
