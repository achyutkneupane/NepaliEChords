<?php
function nec_themesupport()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'nec_themesupport');

function nec_bootstrapnav()
{
    require_once get_template_directory() . '/inc/wp-bootstrap-nav.php';
    register_nav_menus(array(
        'primary' => __('Main_Menu'),
    ));
}
add_action('after_setup_theme', 'nec_bootstrapnav');

function nec_stylefetch()
{
    wp_enqueue_style('nepaliechords-theme', get_template_directory_uri() . "/style.css", array('nepaliechords-bootstrap', 'nepaliechords-fontawesome'), '1.0', 'all');
    wp_enqueue_style('nepaliechords-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), '4.3.1', 'all');
    wp_enqueue_style('nepaliechords-fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
}
add_action('wp_enqueue_scripts', 'nec_stylefetch');

function nec_scriptfetch()
{
    wp_enqueue_script('nepaliechords-theme', get_template_directory_uri() . "/assets/js/main.js", array('nepaliechords-jquery', 'nepaliechords-popper', 'nepaliechords-bootstrap'), '1.0', true);
    wp_enqueue_script('nepaliechords-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), '3.3.1', true);
    wp_enqueue_script('nepaliechords-popper', get_template_directory_uri() . "/assets/js/popper.js", array(), '1.16.1', true);
    wp_enqueue_script('nepaliechords-bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.js", array(), '4.3.1', true);
}
add_action('wp_enqueue_scripts', 'nec_scriptfetch');

function get_catg_post($categoryName)
{
    $getCat_query = new WP_Query(array(
        'category_name' => $categoryName,
        'post_status' => 'publish',
        'posts_per_page' => 4,
    ));
    if ($getCat_query->have_posts()) :
        while ($getCat_query->have_posts()) : $getCat_query->the_post();
            echo ("<div class='container my-3 blogFetch box-shadow-full' style='background-color: #f6f6f6;'>
                    <div class='row'>
                        <div class='col-md-3 justify-content-center'>
                        <img src='");
            the_post_thumbnail_url();
            echo ("' style='height: 100%; width: 100%; object-fit: contain;'></div>
            <div class='col-md-9 justify-content-left'>
                <div class='row'>
                    <h3 class='col-md-12 archiveTitle'>");
            the_title();
            echo ("</h3>
                </div>
                <div class='row'>
                    <div class='col-md-12 archiveText'>");
            the_excerpt();
            echo ("</div>
            </div>
            <div class='row'>
                    <div class='col-md-12'>
                    <a href='");
            the_permalink();
            echo ("'>Read Full</a>
            </div>
                    </div>
            </div>
            </div>
            </div>");
        endwhile;
        wp_reset_postdata();
    else :
        __('No News');
    endif;
}
add_theme_support('post-thumbnails');