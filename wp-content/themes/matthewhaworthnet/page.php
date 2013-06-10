<?php get_header(); ?>
<div class="content">
    <div class="articles">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <hr />
        </article>
        <?php comments_template(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>