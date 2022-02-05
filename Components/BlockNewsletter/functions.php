<?php

namespace Flynt\Components\BlockNewsletter;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

function getACFLayout()
{
    return [
        'name' => 'BlockNewsletter',
        'label' => 'Block: Newsletter',
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'message',
                'type' => 'message',
                'message' => "Add this component at the end of the page to expand footer.<br>Create columns from <a href=\"/wp/wp-admin/nav-menus.php\" target='_blank'>Menus</a> section and assign menu to \"Navigation Footer Columns\" location. Social settings are found in <a href=\"/wp/wp-admin/admin.php?page=TranslatableOptions-Default\" target='_blank'>Translatable Options</a>.<br> Alternatively, render the component in <b>document.twig</b> to have it always in fixed position throughout the website.",
                'new_lines' => 'wpautop',
            ]
        ]
    ];
}

Options::addTranslatable('BlockNewsletter', [
    [
        'label' => __('Content', 'flynt'),
        'name' => 'contentHtml',
        'type' => 'wysiwyg',
    ],
]);
