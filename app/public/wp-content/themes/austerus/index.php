<?php

get_header();
pageBanner(array(
        'title' => 'The Blog',
        'subtitle' => 'This is my blog, there are many like it, but this one is mine.'
));
?>

    <div class="container container--narrow page-section">
        <?php

            while (have_posts()) {
                the_post(); ?>
                <div class="post-item">
                    <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

                    <div class="post-content">
                        <?php the_excerpt(); ?>
                        <p>Posted by <?php  the_author_posts_link(); ?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', ')?></p>
                        <p><a class="btn btn--blue" href="<?php echo the_permalink() ?>">Continue reading &raquo;</a></p>
                    </div>
                </div>


            <?php }
            echo paginate_links();
        ?>
    </div>

<?php get_footer();

?>