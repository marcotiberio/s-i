<?php

use Timber\Timber;
use Timber\Post;
use Timber\PostQuery;
use Flynt\Utils\Options;

use const Flynt\Archives\POST_TYPES;

$context = Timber::get_context();
$context['post'] = new Post();
$context['posts'] = new PostQuery();

$context['latestArticles'] = Timber::get_posts([
    'post_type' => 'article',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'meta_query' => array(
        array(
            'key' => 'datePost'
        ),
    )
]);

Timber::render('templates/page-articles.twig', $context);
