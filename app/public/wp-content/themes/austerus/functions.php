<?php

    require get_theme_file_path('/includes/search-route.php');

    function university_custom_rest () {
        register_rest_field('post', 'authorName', array(
                'get_callback' => function() {return get_the_author();}
        ));
    }

    add_action('rest_api_init', 'university_custom_rest');

    function pageBanner($args = NULL) {
        if (!$args['title']) {
            $args['title'] = get_the_title();
        }

        if (!$args['subtitle']) {
            $args['subtitle'] = get_field('page_banner_subtitle');
        }

        if (!$args['photo']) {
            if (get_field('page_banner_background_image')) {
                $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
            } else {
                $args['photo'] = get_theme_file_uri('images/ocean.jpg');
            }
        }

        ?>
        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
                <div class="page-banner__intro">
                    <p><?php echo $args['subtitle']; ?></p>
                </div>
            </div>
        </div>
    <?php }
    // creates and defines a function to be able to use the custom css, js, fonts
    function austere_files() {
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyBaqvHxJ6rm3vRRT2t11kORjddwE80BF1g', NULL, microtime(), true);

        if (strstr($_SERVER['SERVER_NAME'], 'austerus.local')) {
            wp_enqueue_script('main-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
        } else {
            wp_enqueue_script('vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.9678b4003190d41dd438.js'), NULL, microtime(), true);
            wp_enqueue_script('main-js', get_theme_file_uri('/bundled-assets/scripts.97cb133b909c492f461e.js'), NULL, microtime(), true);
            wp_enqueue_style('main-styles', get_theme_file_uri('/bundled-assets/styles.97cb133b909c492f461e.css'));
        }

        wp_localize_script('main-js', 'universityData', array(
                'root_url' => get_site_url(),
                'nonce' => wp_create_nonce('wp_rest')
        ));

    }

    add_action('wp_enqueue_scripts', 'austere_files');

    function university_features() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('professorLandscape', 400, 260, true);
        add_image_size('professorPortrait', 480, 650, true);
        add_image_size('pageBanner', 1500, 350, true);
        register_nav_menu('header_menu_location', "Header Menu Location");
        register_nav_menu('footer_menu_location1', "Footer Menu Location 1");
        register_nav_menu('footer_menu_location2', "Footer Menu Location 2");
    }

    add_action('after_setup_theme', 'university_features');

    function university_adjust_queries($query) {
        if (!is_admin() AND is_post_type_archive('campus') AND is_main_query()) {
            $query->set('posts_per_page', -1);
        }
        if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
            $query->set('orderby', 'title');
            $query->set('order', 'ASC');
            $query->set('posts_per_page', -1);
        }
        if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
            $today = date('Ymd');
            $query->set('meta_key', 'event_date');
            $query->set('orderby', 'meta_value_num');
            $query->set('order', 'ASC');
            $query->set('meta_query', array(
                array(
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                )
            ));
        }
    }

    add_action('pre_get_posts', 'university_adjust_queries');

    function universityMapKey($api) {
        $api['key'] = 'AIzaSyBaqvHxJ6rm3vRRT2t11kORjddwE80BF1g';
        return $api;
    }

    add_filter('acf/fields/google_map/api', 'universityMapKey');

    // Redirect subscriber accounts out of adming and onto homepage


    add_action('admin_init', 'redirectSubsToFrontend');

    function redirectSubsToFrontend() {
        $ourCUrrentUser = wp_get_current_user();

        if (count($ourCUrrentUser->roles) == 1 AND $ourCUrrentUser->roles[0] == 'subscriber') {
            wp_redirect(site_url('/'));
            exit();
        }
    }

    add_action('wp_loaded', 'noSubsAdminBar');

    function noSubsAdminBar() {
        $ourCUrrentUser = wp_get_current_user();

        if (count($ourCUrrentUser->roles) == 1 AND $ourCUrrentUser->roles[0] == 'subscriber') {
            show_admin_bar(false);
        }
    }

    // Customize Login Screen
    add_filter('login_headerurl', 'ourHeaderUrl');

    function ourHeaderUrl() {
        return esc_url(site_url('/'));
    }

    add_action('login_enqueue_scripts', 'ourLoginCSS');

    function ourLoginCSS() {
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('main-styles', get_theme_file_uri('/bundled-assets/styles.97cb133b909c492f461e.css'));
    }

    add_filter('login_headertitle', 'ourLogInTitle');

    function ourLogInTitle () {
        return get_bloginfo('name');
    }

