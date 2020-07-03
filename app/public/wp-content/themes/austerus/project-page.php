<?php

get_header();
pageBanner(array(
    'title' => 'Projects',
    'subtitle' => 'These are some of my projects'
));
?>

    <div class="gallery">
        <img src="<?php echo get_theme_file_uri('/images/tinyman.jpg'); ?>" alt="tiny man on a white background">
        <img src="<?php echo get_theme_file_uri('/images/birdonwire.jpg'); ?>" alt="three birds on a wire">
        <img src="<?php echo get_theme_file_uri('/images/ferriswheel.jpg'); ?>" alt="side of a ferris wheel">
        <img src="<?php echo get_theme_file_uri('/images/bookandplant.jpg'); ?>" alt="leaves on top of three books">
        <img src="<?php echo get_theme_file_uri('/images/plant.jpg'); ?>" alt="long green leaveas">
        <img src="<?php echo get_theme_file_uri('/images/tree.jpg'); ?>" alt="leafless tree">
    </div>

<?php get_footer(); ?>
