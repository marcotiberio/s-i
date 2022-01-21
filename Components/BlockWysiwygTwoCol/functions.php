<?php

namespace Flynt\Components\BlockWysiwygTwoCol;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockWysiwygTwoCol',
        'label' => 'Block: Wysiwyg Two Columns',
        'sub_fields' => [
            [
                'label' => __('Content Left', 'flynt'),
                'name' => 'contentLeftTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content Left', 'flynt'),
                'name' => 'contentHtmlLeft',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Content Right', 'flynt'),
                'name' => 'contentRightTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content Right', 'flynt'),
                'name' => 'contentHtmlRight',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
