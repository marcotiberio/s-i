<?php

use Timber\Timber;
use Timber\Post;
use Timber\PostQuery;
use Flynt\Utils\Options;

use const Flynt\Archives\POST_TYPES;

$context = Timber::get_context();
$context['post'] = new Post();
$context['posts'] = new PostQuery();

$context['latestEvents'] = Timber::get_posts([
    'post_type' => 'event',
    'order' => 'DESC',
    'posts_per_page' => 10,
    'meta_query' => array(
        array(
            'key' => 'dateEvent'
        ),
    )
]);

$context['latestPodcasts'] = Timber::get_posts([
    'post_type' => 'podcast',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'meta_query' => array(
        array(
            'key' => 'dateEpisode'
        ),
    )
]);

$context['latestArticles'] = Timber::get_posts([
    'post_type' => 'article',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'meta_query' => array(
        array(
            'key' => 'dateArticle'
        ),
    )
]);

$context['latestArtists'] = Timber::get_posts([
    'post_type' => 'artist',
    'order' => 'DESC',
    'posts_per_page' => 6,
]);

Timber::render('templates/page-home.twig', $context);
