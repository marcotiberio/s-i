<?php

add_filter('acf/load_value/name=artistComponents', 'artist_default_components', 10, 3);

function artist_default_components($value, $post_id, $field)
{
    if ($value !== null) {
        // $value will only be NULL on a new post
        return $value;
    }
    // add default layouts
    $value = array(
        array(
            'acf_fc_layout' => 'BlockArtistInfo',
        ),
    );
    return $value;
}

add_filter('acf/load_value/name=podcastComponents', 'podcast_default_components', 10, 3);

function podcast_default_components($value, $post_id, $field)
{
    if ($value !== null) {
        // $value will only be NULL on a new post
        return $value;
    }
    // add default layouts
    $value = array(
        array(
            'acf_fc_layout' => 'BlockPodcastInfo',
        ),
    );
    return $value;
}

add_filter('acf/load_value/name=eventLeftComponents', 'eventLeft_default_components', 10, 3);

function eventLeft_default_components($value, $post_id, $field)
{
    if ($value !== null) {
        // $value will only be NULL on a new post
        return $value;
    }
    // add default layouts
    $value = array(
        array(
            'acf_fc_layout' => 'BlockEventSlider',
        ),
    );
    return $value;
}
