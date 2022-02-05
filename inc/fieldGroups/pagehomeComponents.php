<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pagehomeComponents',
        'title' => 'Homepage Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pagehomeComponents',
                'label' => __('Homepage Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\GridAllPosts\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '16'
                ]
            ]
        ]
    ]);
});
