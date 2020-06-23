<?php
/**
 * Khai báo thêm url và core
 */

define ('THEME_URL', get_stylesheet_directory());
define ("CORE", THEME_URL . "/core");

// nhúng file core/init.php
require_once(CORE . "/init.php");
// Thiết lập chiều rộng nội dung
if (!isset($content_width)) {
    $content_width = 620;
}
// Khai bao chu nawng trong theme
if (!function_exists('dangquy_theme_setup')) {
    function dangquy_theme_setup() {
        // Thiet lap text domain
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('dangquy', $language_folder);
        
        // Tu dong them link RSS len <head>
        add_theme_support('automatic-feed-links');
        // them post thumnail
        add_theme_support('post-thumbnails');

        // ad post fotmart
       
        add_theme_support('post-formats', array(
            'video',
            'image',
            'gallery',
            'quote',
            'link'
        ));

        $default_background = array('defaul-color' => '#ccccc');
        add_theme_support('custom-background', $default_background);

        // tao slide bar
        $slidebar = array(
            'name' => __('Main slide bar', 'thachpham'),
            'id' => 'unique-slidebar-id',
            'description' => __('Default slidebar'),
            'class' => 'main-slidebar',
            'before_title' => '<h3 class="widgettitle>',
            'after_title' => '</h3>'
        );

        register_sidebar($slidebar);
    }
    add_action('init', 'dangquy_theme_setup');
}