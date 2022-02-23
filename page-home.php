<?php

use Timber\Timber;
use Timber\Post;
use Timber\PostQuery;
use Flynt\Utils\Options;

use const Flynt\Archives\POST_TYPES;

$context = Timber::get_context();
$context['post'] = new Post();
$context['posts'] = new PostQuery();

$context['latestPosts'] = Timber::get_posts([
    'post_type' => array('event', 'podcast', 'article', 'artist'),
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 5,
    // 'meta_query' => array(
    //     array(
    //         'key' => 'dateEvent'
    //     ),
    // )
]);

Timber::render('templates/page-home.twig', $context);
