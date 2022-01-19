<?php

use Timber\Timber;
use Timber\Post;
use Timber\PostQuery;
use Flynt\Utils\Options;

use const Flynt\Archives\POST_TYPES;

$context = Timber::get_context();
$context['post'] = new Post();
$context['posts'] = new PostQuery();
$today = date('Ymd');
// $time = date('H:i:s');

// $nextepisode = date('H:i:s', strtotime('+1 hours'));
// $nextepisodez = date('H:i:s', strtotime('+2 hours'));

$context['futureEvents'] = Timber::get_posts([
    'post_type' => 'event',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'dateEvent',
            'value' => $today,
            'compare' => '>=',
            'type' => 'DATE'
        )
    )
]);

$context['pastEvents'] = Timber::get_posts([
    'post_type' => 'event',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'dateEvent',
            'value' => $today,
            'compare' => '<',
            'type' => 'DATE'
        )
    )
]);

Timber::render('templates/page-events.twig', $context);
