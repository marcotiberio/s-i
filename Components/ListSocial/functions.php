<?php

namespace Flynt\Components\ListSocial;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'listSocial',
        'label' => 'List: Social',
        'sub_fields' => [
            [
                'label' => __('Socials', 'flynt'),
                'name' => 'socialTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Socials', 'flynt'),
                'name' => 'repeaterLinks',
                'type' => 'repeater',
                'layout' => 'table',
                'min' => 1,
                'button_label' => __('Add Social Link', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Panel Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ],
                    [
                        'label' => __('Panel Link', 'flynt'),
                        'name' => 'panelLink',
                        'type' => 'url',
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ],
                ],
            ],
        ]
    ];
}
