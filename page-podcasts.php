<?php

use Timber\Timber;
use Timber\Post;
use Timber\PostQuery;
use Flynt\Utils\Options;

use const Flynt\Archives\POST_TYPES;

$context = Timber::get_context();
$context['post'] = new Post();
$context['posts'] = new PostQuery();

$context['podcastlist'] = Timber::get_posts([
    'post_type' => 'podcast',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'post_status' => array( 'publish', 'public'),
    'meta_query' => array(
        array(
            'key' => 'datePost'
        ),
    )
]);

Timber::render('templates/page-podcasts.twig', $context);
