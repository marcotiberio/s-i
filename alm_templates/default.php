<a href="<?php the_permalink(); ?>"
    class="post grid-item grid-item--<?php echo get_post_type($post) ?><?php get_page_template() ?>"
    title="<?php the_title(); ?>">
    <div class="featuredInfo featuredInfo-top">
        <div class="date"><?php the_field('datePost'); ?></div>
        <div class="post-type"><?php echo get_post_type($post) ?></div>
    </div>
    <div class="featuredImage">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <div class="featuredInfo featuredInfo-bottom">
        <p class="title"><?php the_title(); ?></p>
    </div>
</a>
