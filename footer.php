   <!-- Footer -->
    <footer class="footer">
        <?php
        $themeOptions = get_field('social_links','options');
        // echo '<pre>';
        // print_r($themeOptions);
        // echo '</pre>'; 
        ?>
        <div class="container">
            <div class="footer__content">
                <div class="footer__logo">
                    <img src="<?= get_template_directory_uri() . '/src/assets/image/logo-big.png' ?>" alt="logo">
                </div>
                <div class="footer__nav">
                    <div class="footer__section">
                        <h3 class="footer__title">Navigation</h3>
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'main_menu', // зарегистрированное меню
                                'container'      => false,       // убираем div-обертку
                                'menu_class'     => 'footer__list', // класс UL
                                'items_wrap'     => '<ul class="%2$s">%3$s</ul>', // кастомная обертка
                                'link_before'    => '', 
                                'link_after'     => '',
                            ]);
                        ?>
                    </div>
                    <div class="footer__section">
                        <h3 class="footer__title">Services</h3>
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'footer_menu', // зарегистрированное меню
                                'container'      => false,       // убираем div-обертку
                                'menu_class'     => 'footer__list', // класс UL
                                'items_wrap'     => '<ul class="%2$s">%3$s</ul>', // кастомная обертка
                                'link_before'    => '', 
                                'link_after'     => '',
                            ]);
                        ?>
                    </div>
                    <div class="footer__section">
                        <h3 class="footer__title">Info</h3>
                        <div class="footer__info">
                            <a href="<?= $themeOptions['address']['link']?>" class="footer__info-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M17.5 8.33333C17.5 14.1667 10 19.1667 10 19.1667C10 19.1667 2.5 14.1667 2.5 8.33333C2.5 6.3442 3.29018 4.43655 4.6967 3.03003C6.10322 1.6235 8.01088 0.833328 10 0.833328C11.9891 0.833328 13.8968 1.6235 15.3033 3.03003C16.7098 4.43655 17.5 6.3442 17.5 8.33333Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10 10.8333C11.3807 10.8333 12.5 9.71405 12.5 8.33333C12.5 6.95262 11.3807 5.83333 10 5.83333C8.61929 5.83333 7.5 6.95262 7.5 8.33333C7.5 9.71405 8.61929 10.8333 10 10.8333Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><?= $themeOptions['address']['text']?></span>
                            </a>
                            <a href="<?= $themeOptions['email']?>" class="footer__info-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M2.5 6.25L10 10.625L17.5 6.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.5 6.25L10 10.625L17.5 6.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><?= $themeOptions['email']?></span>
                            </a>
                            <a href="<?= $themeOptions['phone']?>" class="footer__info-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M2 3C2 2.44772 2.44772 2 3 2H5.15287C5.64171 2 6.0589 2.35341 6.13927 2.8356L6.87868 7.27147C6.95075 7.70451 6.73206 8.13397 6.3394 8.33030L4.79126 9.10437C5.90756 11.8783 8.12168 14.0924 10.8956 15.2087L11.6697 13.6606C11.866 13.2679 12.2955 13.0492 12.7285 13.1213L17.1644 13.8607C17.6466 13.9411 18 14.3583 18 14.8471V17C18 17.5523 17.5523 18 17 18H15C7.8203 18 2 12.1797 2 5V3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><?= $themeOptions['phone']?></span>
                            </a>
                            <div class="footer__info-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M15.8333 3.33333H4.16667C3.24619 3.33333 2.5 4.07952 2.5 5V15C2.5 15.9205 3.24619 16.6667 4.16667 16.6667H15.8333C16.7538 16.6667 17.5 15.9205 17.5 15V5C17.5 4.07952 16.7538 3.33333 15.8333 3.33333Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.3333 1.66667V5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.66667 1.66667V5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.5 8.33333H17.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div>
                                    <span><?= $themeOptions['working_time']['days']?></span>
                                    <span><?= $themeOptions['working_time']['times']?></span>
                                </div>
                            </div>
                            <a href="<?= $themeOptions['instagram_link']?>" class="footer__info-item">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M14.1667 1.66667H5.83333C3.99238 1.66667 2.5 3.15905 2.5 5V15C2.5 16.841 3.99238 18.3333 5.83333 18.3333H14.1667C16.0076 18.3333 17.5 16.841 17.5 15V5C17.5 3.15905 16.0076 1.66667 14.1667 1.66667Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.3333 8.33333C13.3333 9.25381 12.5871 10 11.6667 10C10.7462 10 10 9.25381 10 8.33333C10 7.41286 10.7462 6.66667 11.6667 6.66667C12.5871 6.66667 13.3333 7.41286 13.3333 8.33333Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Instagram</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__copyright">
                    <p>© 2025 Rūtos Klinika.<br>All rights reserved.</p>
                </div>

                <div class="footer__legal">
                    <?php
                    $menu_name = 'footer_second'; // слаг меню
                    $locations = get_nav_menu_locations();

                    if (isset($locations[$menu_name])) {
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        if ($menu_items) {
                            foreach ($menu_items as $item) {
                                echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                            }
                        }
                    }
                    ?>
                </div>
                <div class="footer__created">
                    <span>Created by</span>
                    <div class="footer__logo-small">
                        <img src="http://localhost:3845/assets/334b327f05a28194cafbf596d7d578ba02dc32e3.svg" alt="Sofenty">
                        <div>
                            <div class="footer__logo-text">Sofenty</div>
                            <div class="footer__logo-subtext">Develop & support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Burger Menu Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelector('.header__burger');
            const mobileMenu = document.querySelector('.header__mobile-menu');
            const body = document.body;

            if (burger && mobileMenu) {
                burger.addEventListener('click', function() {
                    // Toggle burger animation
                    burger.classList.toggle('is-active');
                    
                    // Toggle mobile menu
                    mobileMenu.classList.toggle('is-open');
                    
                    // Toggle body scroll
                    body.classList.toggle('menu-open');
                });

                // Close menu when clicking on links
                const mobileLinks = mobileMenu.querySelectorAll('a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        burger.classList.remove('is-active');
                        mobileMenu.classList.remove('is-open');
                        body.classList.remove('menu-open');
                    });
                });

                // Close menu when clicking outside
                mobileMenu.addEventListener('click', function(e) {
                    if (e.target === mobileMenu) {
                        burger.classList.remove('is-active');
                        mobileMenu.classList.remove('is-open');
                        body.classList.remove('menu-open');
                    }
                });

                // Close menu on escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
                        burger.classList.remove('is-active');
                        mobileMenu.classList.remove('is-open');
                        body.classList.remove('menu-open');
                    }
                });
            }
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
