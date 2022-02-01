<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pagehomeComponents',
        'title' => 'Page Home Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pagehomeComponents',
                'label' => __('Page Home Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\GridAllPosts\getACFLayout(),
                    Components\FormContactForm7\getACFLayout(),
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
