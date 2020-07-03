<?php

    get_header();

    while(have_posts()) { // have_posts() finds the posts that are created from dashboard, which are saved in the database
        the_post();
        pageBanner();
        ?>

        <div class="container container--narrow page-section">

            <div class="generic-content">
                <?php the_content();?>
            </div>

            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>">Blog Home</a> <span class="metabox__main">Posted by <?php  the_author_posts_link(); ?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', ')?></span></p>
            </div>
        </div>
    <?php }

    get_footer();

?>