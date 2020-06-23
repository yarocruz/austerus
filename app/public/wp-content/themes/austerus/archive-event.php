<?php

get_header();
pageBanner(array(
    'title' => 'All Events',
    'subtitle' => 'See whats going on in our world.'
));
?>

    <div class="container container--narrow page-section">
        <?php

        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content-event');

        }
        echo paginate_links();
        ?>

        <hr class="section-break">
        <p>Check out our past  <a href="<?php echo site_url('/past-events');?>">events</a></p>
    </div>

<?php get_footer();

?>