<?php

/**
 * This is an example file showcasing how you can add custom taxonomies to your Flynt theme.
 *
 * For a full list of parameters see https://developer.wordpress.org/reference/functions/register_taxonomy/ or use https://generatewp.com/taxonomy/ to generate the code for you.
 */

namespace Flynt\CustomTaxonomies;

function registerOriginTaxonomy()
{
    $labels = [
        'name'                       => _x('Origin', 'Taxonomy General Name', 'flynt'),
        'singular_name'              => _x('Origin', 'Taxonomy Singular Name', 'flynt'),
        'menu_name'                  => __('Origin', 'flynt'),
        'all_items'                  => __('All Items', 'flynt'),
        'add_new_item'               => __('Add New Item', 'flynt'),
    ];
    $args = [
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'has_archive'                => true,
    ];

    register_taxonomy('origin', ['artist'], $args);
}

add_action('init', 'Flynt\\CustomTaxonomies\\registerOriginTaxonomy');
