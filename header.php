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
    $phone = '';
    if (is_array($themeOptions) && !empty($themeOptions['phone'])) {
        $phone = $themeOptions['phone'];
    }
    // WPML languages
    $languages = [];
    if (function_exists('icl_get_languages')) {
        $langs = icl_get_languages('skip_missing=0&orderby=code');
        if (is_array($langs)) { $languages = $langs; }
    } elseif (function_exists('wpml_active_languages')) {
        $langs = apply_filters('wpml_active_languages', null, ['skip_missing' => 0, 'orderby' => 'code']);
        if (is_array($langs)) { $languages = $langs; }
    }
    $currentLangLabel = 'EN';
    if (!empty($languages)) {
        foreach ($languages as $lang) {
            if (!empty($lang['active'])) {
                $currentLangLabel = !empty($lang['code']) ? strtoupper($lang['code']) : (!empty($lang['native_name']) ? $lang['native_name'] : $currentLangLabel);
                break;
            }
        }
    }
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
                    <?php if ($phone): ?>
                    <a href="tel:<?= esc_attr($phone) ?>" class="header__phone"><?= esc_html($phone) ?></a>
                    <?php endif; ?>
                    <div class="header__language" role="navigation" aria-label="Language selector">
                        <span><?= esc_html($currentLangLabel) ?></span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php if (!empty($languages) && is_array($languages)): ?>
                        <ul class="header__language-list">
                            <?php foreach ($languages as $lang): ?>
                            <li class="header__language-item<?= !empty($lang['active']) ? ' is-active' : '' ?>" style="list-style:none;">
                                <a href="<?= esc_url($lang['url']) ?>" lang="<?= esc_attr($lang['code']) ?>" style="display:block; padding:8px 16px; color:#111; text-decoration:none; white-space:nowrap;<?= !empty($lang['active']) ? ' font-weight:600;' : '' ?>">
                                    <?= esc_html(!empty($lang['native_name']) ? $lang['native_name'] : (!empty($lang['translated_name']) ? $lang['translated_name'] : strtoupper($lang['code']))) ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
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
                <?php if ($phone): ?>
                <a href="tel:<?= esc_attr($phone) ?>" class="header__mobile-phone"><?= esc_html($phone) ?></a>
                <?php endif; ?>
                <div class="header__mobile-language" role="navigation" aria-label="Language selector">
                    <span><?= esc_html($currentLangLabel) ?></span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <?php if (!empty($languages) && is_array($languages)): ?>
                    <ul class="header__language-list">
                        <?php foreach ($languages as $lang): ?>
                        <li class="header__language-item<?= !empty($lang['active']) ? ' is-active' : '' ?>" style="list-style:none;">
                            <a href="<?= esc_url($lang['url']) ?>" lang="<?= esc_attr($lang['code']) ?>" style="display:block; padding:8px 16px; color:#111; text-decoration:none; white-space:nowrap;<?= !empty($lang['active']) ? ' font-weight:600;' : '' ?>">
                                <?= esc_html(!empty($lang['native_name']) ? $lang['native_name'] : (!empty($lang['translated_name']) ? $lang['translated_name'] : strtoupper($lang['code']))) ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    