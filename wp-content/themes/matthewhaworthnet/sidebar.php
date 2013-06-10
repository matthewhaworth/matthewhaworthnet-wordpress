<aside>
    <h5>Page</h5>
    <hr />
    <ul>
        <?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
    </ul>
    <h5>Category</h5>
    <hr />
    <ul>
        <?php wp_list_categories('title_li='); ?>
    </ul>
    <h5>Projects</h5>
    <hr />
    <ul>
        <?php $posts = get_posts('post_type=project'); ?>
        <?php foreach ($posts as $_post): ?>
        <li><a href="<?php echo get_permalink($_post->ID); ?>"><?php echo $_post->post_title; ?></a></li>
        <?php endforeach;?>
    </ul>
</aside>