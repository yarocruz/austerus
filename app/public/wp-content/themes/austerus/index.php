<?php

    while(have_posts()) { // have_posts() finds the posts that are created from dashboard, which are saved in the database
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
    <?php }

?>