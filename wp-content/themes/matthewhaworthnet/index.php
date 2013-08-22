<?php
global $post;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts = get_posts('paged='. $paged);
?>
<?php get_header(); ?>
<div class="content">
    <div class="articles">
<?php foreach( $posts as $post ): setup_postdata($post); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="article-info"><?php echo get_the_date('F jS Y'); ?> in <?php the_category(', '); ?></p>
            <?php the_content(); ?>
            <hr />
        </article>	
<?php endforeach; ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>