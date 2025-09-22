<?php
add_theme_support('post-thumbnails');

// Вставляет sprite в конец страницы (wp_footer)
function mytheme_print_svg_sprite() {
    $sprite = get_template_directory() . '/src/assets/sprite.svg';
    echo $sprite;
    if ( file_exists( $sprite ) ) {
        // безопасно — читаем файл и выводим (контент должен быть доверенным)
        echo file_get_contents( $sprite );
    }else{
        echo 123;
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
