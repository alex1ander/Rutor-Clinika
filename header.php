<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutos Clinic - Dental Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>


    <?php
    $themeOptions = get_field('social_links','options');
    // echo '<pre>';
    // print_r($themeOptions);
    // echo '</pre>'; 
    ?>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header__content">
                <a href="/" class="header__logo">
                    <img src="<?= get_template_directory_uri() . '/src/assets/image/logo-small.png' ?>" alt="logo">
                </a>
                <nav class="header__nav">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'main_menu', // зарегистрированное меню
                        'container'      => false,       // убираем div-обертку
                        'menu_class'     => 'header__nav-list', // класс UL
                        'items_wrap'     => '<ul class="%2$s">%3$s</ul>', // кастомная обертка
                        'link_before'    => '', 
                        'link_after'     => '',
                    ]);
                    ?>
                </nav>

                <div class="header__contact">
                    <a href="telto:<?= $themeOptions['phone']?>" class="header__phone"><?= $themeOptions['phone']?></a>
                    <div class="header__language">
                        <span>EN</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Burger Menu Toggle -->
                <button class="header__burger" aria-label="Toggle mobile menu">
                    <span class="header__burger-line"></span>
                    <span class="header__burger-line"></span>
                    <span class="header__burger-line"></span>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="header__mobile-menu">
            <nav class="header__mobile-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu', // зарегистрированное меню
                    'container'      => false,       // убираем div-обертку
                    'menu_class'     => 'header__mobile-nav-list', // класс UL
                    'items_wrap'     => '<ul class="%2$s">%3$s</ul>', // кастомная обертка
                    'link_before'    => '', 
                    'link_after'     => '',
                ]);
                ?>
            </nav>
            <div class="header__mobile-contact">
                <a href="tel:<?= $themeOptions['phone']?>" class="header__mobile-phone"><?= $themeOptions['phone']?></a>
                <div class="header__mobile-language">
                    <span>EN</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </header>