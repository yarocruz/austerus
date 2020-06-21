<?php

    get_header();

    while(have_posts()) { // have_posts() finds the posts that are created from dashboard, which are saved in the database
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php }

    get_footer();

?>