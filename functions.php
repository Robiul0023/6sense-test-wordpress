<?php 

 function  theme_sixSense_support_setup(){
        add_theme_support('title-tags');
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('link', 'video', 'audio', 'gallery'));
        add_theme_support('html5', array('comment-form', 'comment-list', 'search-fomr', 'gallery'));

       register_nav_menus(array(
        
         'header menu' => '6sense Header Menu',

       )
      );

 }

    add_action('after_setup_theme', 'theme_sixSense_support_setup');


    function theme_sixSense_link_files(){
        //Bootstrap-jsdelivr
        wp_register_style('bootstrap-jsdelivr',   'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap-jsdelivr');

        //Bootstrap-cloudflare
        wp_register_style('twitter-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css');
        wp_enqueue_style( 'twitter-bootstrap');

        //Hamburger Menu For Mobile
        wp_register_style('font-awesome',      'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('font-awesome');

        // Main-stylesheet
        wp_register_style('main', get_stylesheet_uri());
        wp_enqueue_style('main');

        //Responsive-stylesheet
        wp_register_style('responsive', get_template_directory_uri(). '/css/responsive.css', true, '1.9', 'all');
        wp_enqueue_style('responsive');

       //=======sixSense Theme Scripts File=====/


        // Fontawesome 
        wp_register_script('font-awesome', 'https://kit.fontawesome.com/4d2891330b.js', true, '1.9', 'all');
        wp_enqueue_script('font-awesome');

        //Bootstrap-jsdelivr
        wp_register_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_script('bootstrap-bundle');

        // Jquery
         wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
         wp_enqueue_script('jquery');
        

         // Bootstrap-popper
         wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
         wp_enqueue_script('popper');

        //  Twitter-bootstrap
         wp_register_script('twitter-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js');
         wp_enqueue_script('twitter-bootstrap');

       //   Mobile-responsive
         wp_register_script('mobile-responsive', get_template_directory_uri(). '/js/mobile-responsive.js', true, '1.9', 'all');
         wp_enqueue_script('mobile-responsive');
        

}

         add_action('wp_enqueue_scripts', 'theme_sixSense_link_files');



function custom_social_share() {
    // Get current page URL
    $url = urlencode(get_permalink());
    // Get current page title
    $title = str_replace(' ', '%20', get_the_title());
    // Get post thumbnail
    $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
    // Get social media sharing links
    $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
    $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . $title;
    $twitter_url  = 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title;

    // Output social media share links
    echo '<div class="social-share">';
    echo '<a href="' . $facebook_url . '" target="_blank"><i class="fa-brands fa-facebook"></i></a>';
    echo '<a href="' . $linkedin_url . '" target="_blank"><i class="fa-brands fa-linkedin"></i></a>';
    echo '<a href="' . $twitter_url . '" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>';
    echo '</div>';
}

?>