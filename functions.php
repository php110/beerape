<?php
function beerape_scripts() {
    wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/js/jquery-1.12.4.min.js');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/css/bootstrap/js/bootstrap.min.js');

    wp_enqueue_script('html5shivjs', get_template_directory_uri() . '/js/html5shiv.min.js');
    wp_script_add_data('html5shivjs', 'conditional', 'lt IE 9');
    wp_enqueue_script('respondjs', get_template_directory_uri() . '/js/respond.min.js');
    wp_script_add_data('respondjs', 'conditional', 'lt IE 9');
}

add_action('wp_enqueue_scripts', 'beerape_scripts');

register_sidebar( array(
    'name'          => 'beerape sidebar',
    'id'            => 'sidebar-1',
    'before_widget' => '<div class="panel panel-default"><div class="panel-heading"></div><div class="panel-body">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
) );

if(('add_theme_support')) add_theme_support('post-thumbnails');

function header_style() {
}

if(function_exists('add_custom_image_header')) {
    add_custom_image_header('header_style', 'header_style');
}
//缩略图
add_theme_support('post-thumbnails');

add_image_size('index-thumb','260','160',true);

function disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

add_action('init', 'disable_emojis');
/**
 * 不加载 tinymce emoji plugin.(表情包)
 */
function disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}
