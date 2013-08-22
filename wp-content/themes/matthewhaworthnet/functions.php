<?php
wp_dequeue_style('wordpress-popular-posts');

function the_paginator() {
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
    ) );
}

function remove_category_rel($output)
{
    $output = str_replace(' rel="category tag"', '', $output);
    return $output;
}
add_filter('the_category', 'remove_category_rel');
