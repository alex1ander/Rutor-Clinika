<?php
add_theme_support('post-thumbnails');

if( function_exists('acf_add_options_page') ) {
    // Главная страница опций
    acf_add_options_page(array(
        'page_title'  => 'Theme Options',
        'menu_title'  => 'Theme Options',
        'menu_slug'   => 'theme-options',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));
}

function register_my_menus() {
    register_nav_menus( array(
        'main_menu'        => __( 'Main Menu', 'your-theme' ),
        'footer_menu'      => __( 'Footer Menu', 'your-theme' ),
        'footer_second'    => __( 'Footer Second Menu', 'your-theme' ),
    ) );
}
add_action( 'init', 'register_my_menus' );

// Вставляет sprite в конец страницы (wp_footer)
function mytheme_print_svg_sprite() {
    $sprite = get_template_directory() . '/src/assets/sprite.svg';
    if ( file_exists( $sprite ) ) {
        // безопасно — читаем файл и выводим (контент должен быть доверенным)
        echo file_get_contents( $sprite );
    }
}
add_action( 'wp_footer', 'mytheme_print_svg_sprite', 1 );


// Подключаем main.css
function mytheme_enqueue_styles() {
    wp_enqueue_style(
        'mytheme-main', // handle (уникальное имя)
        get_template_directory_uri() . '/dist/css/main.css', // путь к файлу
        array(),        // зависимости (например: array('bootstrap'))
        filemtime( get_template_directory() . '/dist/css/main.css' ) // версия = время изменения файла
    );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


add_filter('wpcf7_autop_or_not', '__return_false');
// Регистрация кастомного form-tag [time]
add_action('wpcf7_init', function () {
    wpcf7_add_form_tag('time', 'cf7_time_form_tag_handler', true);
});

// Рендер <input type="time">
function cf7_time_form_tag_handler($tag) {
    $tag = new WPCF7_FormTag($tag);

    $atts = [];
    $atts['size'] = $tag->get_size_option('40');
    $atts['maxlength'] = $tag->get_maxlength_option();
    $atts['minlength'] = $tag->get_minlength_option();
    $atts['class'] = $tag->get_class_option('form-input');
    $atts['id'] = $tag->get_id_option('preferred-time');
    $atts['name'] = $tag->name;
    $atts['type'] = 'time';

    // placeholder (если задан)
    if ($placeholder = $tag->get_option('placeholder', '','true')) {
        $atts['placeholder'] = $placeholder;
    }

    $atts = wpcf7_format_atts($atts);

    return sprintf('<input %s />', $atts);
}