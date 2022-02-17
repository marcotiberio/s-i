<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
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
