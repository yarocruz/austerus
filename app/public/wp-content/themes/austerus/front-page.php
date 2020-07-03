<?php get_header(); ?>

    <div class="intro">
        <h1>hello</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem,
            esse eum incidunt inventore maiores nobis officia perferendis qui, quibusdam
            repudiandae tempora totam vitae? Fugit inventore maxime nemo similique tempore.
        </p>
    </div>

    <div class="gallery">
        <img src="<?php echo get_theme_file_uri('/images/tinyman.jpg'); ?>" alt="tiny man on a white background">
        <img src="<?php echo get_theme_file_uri('/images/birdonwire.jpg'); ?>" alt="three birds on a wire">
        <img src="<?php echo get_theme_file_uri('/images/ferriswheel.jpg'); ?>" alt="side of a ferris wheel">
        <img src="<?php echo get_theme_file_uri('/images/bookandplant.jpg'); ?>" alt="leaves on top of three books">
        <img src="<?php echo get_theme_file_uri('/images/plant.jpg'); ?>" alt="long green leaveas">
        <img src="<?php echo get_theme_file_uri('/images/tree.jpg'); ?>" alt="leafless tree">
    </div>

    <footer>
        <div class="contact-info">
            <p>Email: <strong>jondoe@gmail.com</strong></p>
            <p>Phone: +012 345 6789</p>
            <p>&copy; 2020 Jay Cruz Design. All rights reserved</p>
        </div>
        <div class="icons">
            <a href="#"><img src="<?php echo get_theme_file_uri('/images/icon-github.jpg'); ?>" alt="github icon"></a>
            <a href="#"><img src="<?php echo get_theme_file_uri('/images/icon-linkedin.jpg'); ?>" alt="linkedin icon"></a>
            <a href="#"><img src="<?php echo get_theme_file_uri('/images/icon-twitter.jpg'); ?>" alt="twitter icon"></a>
        </div>
    </footer>
</div>

<?php get_footer(); ?>
